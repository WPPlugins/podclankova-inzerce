<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<div class="pdckl_admin_css_leftbox">
  <h3><?php echo $pdckl_lang['css_title']; ?></h3>
  <p><?php echo $pdckl_lang['css_desc']; ?></p>
  <form name="pdckl_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
      <textarea name="pdckl_css" class="pdckl_admin_css_textarea"><?php echo file_get_contents(plugins_url('../styles/podclankova-inzerce.css', __FILE__)); ?></textarea>
      <input type="hidden" name="pdckl_hidden" value="css_save"> <br />
      <?php echo wp_nonce_field( 'save-css' ); ?>
      <input type="submit" class="button-primary" style="float:left;" value="<?php echo $pdckl_lang['btn_save']; ?>">
  </form>
  <form name="pdckl_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
      <input type="hidden" name="pdckl_hidden" value="css_reset">
      <?php echo wp_nonce_field( 'reset-css' ); ?>
      <input type="submit" class="button action" style="float:right;" value="<?php echo $pdckl_lang['btn_original']; ?>">
  </form>
</div>

<div class="pdckl_admin_css_rightbox">
  <h3><?php echo $pdckl_lang['css_preview']; ?></h3>
  <?php
    _e ('<hr />
    <div class="pdckl_box">
      <div class="pdckl_links">
        <ul>
        ');
            global $wpdb;
            $limit = get_option('pdckl_links');
            $links = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "pdckl_links WHERE id_post = " . get_the_ID() . " AND active = 1 ORDER BY id ASC LIMIT " . $limit, ARRAY_A);
            foreach($links as $link):

            _e('<li>'. $link["link"] . '</li>');

            endforeach;
    _e('</ul>
      </div>');

        if(get_option("pdckl_purchase") == 1)
        {
          $links = $wpdb->get_var("SELECT COUNT(*) FROM " . $wpdb->prefix . "pdckl_links WHERE id_post = " . get_the_ID() . " AND active = 1");
          if($links < $limit) {
            $post_link = base64_encode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

            if(get_option('pdckl_api_username') != '' && get_option('pdckl_api_password') != '' && get_option('pdckl_api_signature') != ''){$ppbutton = '<input type="image" name="paypal_submit" id="paypal_submit" style="padding: 9px 0 0 5px;" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-medium.png" border="0" align="top" alt="Pay with PayPal" />';}
            if(get_option('pdckl_wd_token') != ''){$wdbutton = '<input type="submit" name="wd_submit" id="wd_submit" class="copywriting_checkout_button" value="Zaplatit z Copywriting.cz">';}
            if(get_option('pdckl_showform')) {$showform = '';} else {$showform = '<a class="pdckl_showform_link" onclick="sh(\'#pdckl_gateway_form\').toggle(\'normal\')">Zobrazit formulář pro nákup</a>';}
            if(get_option('pdckl_jquery')) {$howitlooks = '<div id="pdckl_howitlooks"><div class="pdckl_howitworks">Jak bude reklama vypadat?</div><a href="#" id="pdckl_display_link" target="_blank"><span id="pdckl_display_title"></span></a> - <span id="pdckl_display_desc"></span></div>';} else {$howitlooks = '';}
            _e('
            <div class="pdckl_purchase">
              <div class="pdckl_form_li">
                ' . $howitlooks . '
                <span id="pdckl_headline">
                  <div class="pdckl_title">' . str_replace('$price', get_option('pdckl_price'), get_option('pdckl_title')) . '</div>
                  ' . $showform . '
                </span>
                <form id="pdckl_gateway_form" action="' . PDCKL_GATEWAY_LINK . '?a=checkout" METHOD="POST">
                 <label for="pdckl_gateway_link">Odkaz:</label> <input type="text" name="pdckl_gateway_link" value="http://" id="pdckl_gateway_link" class="pdckl_input" title="Nezapomeňte zadat odkaz včetně http://" required><br />
                 <label for="pdckl_gateway_link_name">Název: </label> <input type="text" name="pdckl_gateway_link_name" id="pdckl_gateway_title" class="pdckl_input" maxlength="96"><br />
                 <label for="pdckl_gateway_desc">Popisek:</label> <input type="text" name="pdckl_gateway_desc" id="pdckl_gateway_desc" class="pdckl_input pdckl_input_large" maxlength="128"><br />
                 <input type="hidden" name="id_post" id="id_post" value="' . get_the_ID() . '">
                 <input type="hidden" name="url_post" value="' . $post_link . '">
                 ' . $wdbutton . $ppbutton . '
                </form>
              </div>
            </div>');
          }
        }
    _e('
    </div>');
  ?>
</div>