<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $pdckl_plugin_version;

$active = get_option('pdckl_active');
$purchase = get_option('pdckl_purchase');
$jquery = get_option('pdckl_jquery');
$links = get_option('pdckl_links');
$price = get_option('pdckl_price');
$price_extra = explode(" ", get_option('pdckl_price_extra'));
$showform = get_option('pdckl_showform');
$api_username = get_option('pdckl_api_username');
$api_password = get_option('pdckl_api_password');
$api_signature = get_option('pdckl_api_signature');
$wd_token = get_option('pdckl_wd_token');

$table_check = $wpdb->get_var("SHOW TABLES LIKE '" . $wpdb->prefix . "pdckl_links'");

$requirements = pdckl_curl_check() && $table_check == $wpdb->prefix . "pdckl_links" && $active ? true : false;

if($requirements) {
  $requirements_notice = '<span style="color: green; font-weight: bold;">SPLNĚNO</span>';
} else {
  if(!pdckl_curl_check()) {
    $requirements_item = '<abbr title="Napište na podporu hostingu a nechce si povolit funkci cURL">Váš server nepodporuje cURL</abbr>';
  } elseif(!$active) {
    $requirements_item = 'Aktivujte plugin';
  } else {
    $requirements_item = 'Nenainstalovala se tabulka pluginu';
  }
  $requirements_notice = '<span style="color: #ff0000; font-weight: bold;">'.$requirements_item.'</span>';
}

if(1 == 1) {
  _e($pdckl_lang['start_list']);
} else {
?>

<div class="welcome-panel padding-top-0">
  <table class="table" width="100%">
    <tr>
      <td>
        <h3>Prvotní nastavení v krocích</h3>
        <ol>
          <li>Kontrola požadavků: <?php _e($requirements_notice); ?></li>
          <?php
            if($requirements) {
          ?>
          <li>
              Cena odkazu: <input type="text" name="price" value="50" style="width: 50px;"> Kč
          </li>
          <li>
              Zadejte klíč z Copywriting.cz:<br />
              <input type="text" name="wd_token" value="" class="regular-text"> <a href="http://www.copywriting.cz/" class="button button-secondary">Získat klíč</a>
          </li>
          <li><input type="submit" name="turnon" value="Zapnout plugin" class="button button-primary"></li>
          <?php
            } else {
          ?>
          <li>Nelze nainstalovat plugin dokud nejsou všechny požadavky splněny.</li>
          <?php
            }
          ?>
        </ol>
      </td>
    </tr>
  </table>
</div>
<?php
}
?>