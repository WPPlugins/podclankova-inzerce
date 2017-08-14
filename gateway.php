<?php
  $pdckl_action = htmlspecialchars($_GET['a']);

  global $wpdb, $post, $box_lang;
  if(get_option('WPLANG') ==  'sk_SK') {
    require_once(dirname(__FILE__) . '/lang/sk_box.php');
  } else {
    require_once(dirname(__FILE__) . '/lang/cz_box.php');
  }

  $pdckl_auto = get_option('pdckl_auto');
  $pdckl_categories = get_the_category($post->ID);
  $post_categories = array();
  foreach($pdckl_categories as $category => $item) {
    $post_categories[] = $item->term_id;
  }
  $pdckl_banned_cats = get_option('pdckl_banned_cats');
  $pdckl_banned_cats_array = strpos($pdckl_banned_cats, ',') ? explode(',', $pdckl_banned_cats) : array(0 => $pdckl_banned_cats);
  $pdckl_show = array_intersect($post_categories, $pdckl_banned_cats_array);
  if(empty($pdckl_show)) {
    $pdckl_show = true;
  } else {
    $pdckl_show = false;
  }

  $pdckl_id_post = (int) htmlspecialchars($_POST['id_post']);
  $pdckl_gateway_link = htmlspecialchars($_POST['pdckl_gateway_link']);
  $pdckl_gateway_link_name = htmlspecialchars($_POST['pdckl_gateway_link_name']);
  $pdckl_gateway_desc = htmlspecialchars($_POST['pdckl_gateway_desc']);
  $pdckl_gateway_flink = '<a href="' . $pdckl_gateway_link . '">' . $pdckl_gateway_link_name . '</a> - ' . $pdckl_gateway_desc;
  $pdckl_gateway_flink = base64_encode($pdckl_gateway_flink);
  $pdckl_title = get_option('pdckl_title');

  $price_extra = explode(" ", get_option('pdckl_price_extra'));

  $origpostdate = get_post($pdckl_id_post);
  $post_title = $origpostdate->post_title;
  $origpostdate = $origpostdate->post_date;

  $parts = preg_split("(-| |:)", $origpostdate);

  $published_extra = @date('d.m.Y G:i', mktime($parts[3], $parts[4], 0, $parts[1], $parts[2] + $price_extra[1], $parts[0]));

  if($price_extra[0] == 0) {
    $price = get_option('pdckl_price');
  } else {
    if(strtotime("now") > strtotime($published_extra)) {
      $price = $price_extra[0];
    } else {
      $price = get_option('pdckl_price');
    }
  }

  $gateway = '';
  if(get_option("pdckl_active") == 1 && $pdckl_show)
  {
      if($pdckl_auto) {
        $gateway .= '<hr />';
      }
      $gateway .= '
      <div class="pdckl_box">
        <div class="pdckl_links">
          <ul>';
              global $wpdb;
              $limit = get_option('pdckl_links');
              $total_links = 0;
              $links = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "pdckl_links WHERE id_post = " . (int) get_the_ID() . " AND active = 1 ORDER BY id ASC LIMIT " . $limit, ARRAY_A);

              foreach($links as $link):
                $gateway .= '<li>'. $link["link"] . '</li>';
                $total_links++;
              endforeach;
      $gateway .= '
          </ul>
        </div>';

          if(get_option("pdckl_purchase") == 1)
          {
            if($total_links < $limit) {
              $ppbutton = $wdbutton = '';
              $post_link = base64_encode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

              if(get_option('pdckl_api_username') != '' && get_option('pdckl_api_password') != '' && get_option('pdckl_api_signature') != ''){$ppbutton = '<input type="submit" name="paypal_submit" id="paypal_submit" value="PayPal" />';}
              if(get_option('pdckl_wd_token') != '') {
                $wdbutton = '<input type="submit" name="wd_submit" id="wd_submit" class="copywriting_checkout_button" value="'.$box_lang['copywriting_pay'].'">';
                //$wdbutton.= '<input type="submit" name="cd_submit" id="cd_submit" class="card_checkout_button tooltips" value="Zaplatit bez registrace">';
              }
              if(get_option('pdckl_showform')) {$showform = '';} else {$showform = '<a class="pdckl_showform_link" onclick="sh(\'#pdckl_gateway_form\').toggle(\'normal\')">'.$box_lang['showform'].'</a>';}
              if(get_option('pdckl_jquery')) {$howitlooks = '<div id="pdckl_howitlooks"><div class="pdckl_howitworks">'.$box_lang['howitlooks'].'</div><a href="#" id="pdckl_display_link" target="_blank"><span id="pdckl_display_title"></span></a> - <span id="pdckl_display_desc"></span></div>';} else {$howitlooks = '';}
              $gateway .= '
              <div class="pdckl_purchase">
                <div class="pdckl_form_li">
                  '.$howitlooks.'
                  <span id="pdckl_headline">
                    <div class="pdckl_title">' . str_replace('$price', $price, get_option('pdckl_title')) . '</div>
                    ' . $showform . '
                  </span>
                  <form id="pdckl_gateway_form" action="?pdckl=checkout" METHOD="POST" style="display: ' . ($showform ? 'none' : 'block') . ';">
                    <div>
                      <label for="pdckl_gateway_link">'.$box_lang['link'].'</label> <input type="text" name="pdckl_gateway_link" value="http://" id="pdckl_gateway_link" class="pdckl_input" title="'.$box_lang['link_title'].'" required>
                    </div>
                    <div>
                      <label for="pdckl_gateway_link_name">'.$box_lang['name'].'</label> <input type="text" name="pdckl_gateway_link_name" id="pdckl_gateway_title" class="pdckl_input" maxlength="96">
                    </div>
                    <div>
                      <label for="pdckl_gateway_desc">'.$box_lang['desc'].'</label> <input type="text" name="pdckl_gateway_desc" id="pdckl_gateway_desc" class="pdckl_input pdckl_input_large" maxlength="128">
                    </div>
                    <div style="margin-top: 10px;">
                      <input type="hidden" name="id_post" id="id_post" value="' . get_the_ID() . '">
                      <input type="hidden" name="url_post" value="'.$post_link.'">
                      ' . $wdbutton . ' ' . $ppbutton . '
                    </div>
                  </form>
                </div>
              </div>';
            }
          }
        pdckl_gethash($wdbutton, $ppbutton);
    $gateway .= '
    </div>';
  }
  return $gateway;
?>