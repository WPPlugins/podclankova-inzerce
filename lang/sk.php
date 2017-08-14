<?php
$pdckl_lang = array(
   'main_title'  =>  'Pod�l�nkov� inzercia',
    'start_list'  =>  '<h3>Prvotn� nastavenie pluginu</h3>
    <ol>
      <li>Kliknite na Roz��ren� nastavenie</li>
      <li>Nastavte plugin pod�a svojej potreby (cenu, rubriky, �t�l zobrazenia)</li>
      <li>Vyberte mo�nos� platby:
        <ul>
          <li>Copywriting.cz - vyrie�i za v�s byrokratick� z�le�itosti, nepotrebujete �ivnos�</li>
          <li>PayPal.com - ku ka�d�mu predaju mus�te vystavova� fakt�ru, pozor na platby z cudz�ch kraj�n a legislat�vu MOSS</li>
        </ul>
      </li>
      <li>
        Ak nem�te ��et na Copywriting.cz, zalo�te si ho a potom v <b>Reklamn� priestor (hore v menu) -> Pon�kam reklamu -> Moje weby -> Prida� web</b>
      </li>
      <li>
        Po schv�len� webu (v��inou do 24 h) v <b>Reklamn� priestor (hore v menu) -> Pon�kam reklamu -> Moje weby -> <em>tento web</em> -> Nastavi� pod�l�nkov� inzerciu</b>
      </li>
    </ol>',

    'main_description'          => 'Pod�l�nkov� inzercia je plugin, ktor� umo��uje na web vlo�i� r�chlu inzerciu. Pod ka�d�m �l�nkom je zobrazen� box, kde pou��vate� m��e pomocou 1 kliknutia zak�pi� reklamn� poz�ciu a okam�ite ju zaplati� pomocou. Ihne� po zaplaten� sa reklama za�ne zobrazova�. Reklama je na webe umiestnen� natrvalo.',
    'main_menu_settings'        => 'Roz��ren� nastavenie',
    'main_menu_start'           => 'Prvotn� nastavenie',
    'main_menu_orders'          => 'Preh�ad objedn�vok',
    'main_menu_css'             => 'Vlastn� �t�l',

    /* BUTTONS */
    'btn_save'                  => 'Ulo�i� nastavenie',
    'btn_original'              => 'P�vodn�',
    'btn_add_link'              => 'Prida� odkaz',
    'btn_close'                 => 'Zavrie�',
    'btn_create_backup'         => 'Vytvori� z�lohu',
    'btn_restore_backup'        => 'Nahra� z�lohu',

    /* PAGES */
    'settings_overview'         => 'Preh�ad',
    'settings_active'           => 'Plugin je akt�vny:',
    'settings_active_on'        => 'Akt�vny, v poriadku',
    'settings_active_off'       => 'Plugin je vypnut�!',
    'settings_version'          => 'Verzia pluginu:',
    'settings_version_actual'   => 'Aktu�lny, v poriadku',
    'settings_version_old'      => array('Pou��vate zastaran� verziu pluginu!',
                                         'Aktu�lna verzia:',
                                         'Stiahnu�',
                                         'Pravdepodobne pou��vate testovaciu verziu pluginu!'),
    'settings_curl'             => 'Funkcia cURL():',
    'settings_curl_on'          => 'Zapnut�, v poriadku',
    'settings_curl_off'         => 'Funkcia je vypnut�! Plugin nemo�no aktivova�!',
    'settings_tables'           => 'Datab�zov� tabu�ka:',
    'settings_tables_found'     => 'N�jden�, v poriadku',
    'settings_tables_error'     => array('Nen�jden�! Plugin nemo�no aktivova�!',
                                        'Sk�ste plugin deaktivova� a op�tovne aktivova�',
                                        'Ak nepom��e krok 1 pridajte tabu�ky ru�ne',
                                        'Popr�pade m��ete kontaktova� autora pluginu',
                                        'tu'),
    'settings_plugin_global_title'     => 'Nastavenie - plugin',
    'settings_plugin_desc'      => 'Box sa zobraz� automaticky pod pr�spevkom, nemus�te tak prid�va� do �abl�ny �iadny k�d',
    'settings_plugin_enable'    => array('Povoli� plugin:',
                                        '�no',
                                        'Nie'),
    'settings_plugin_purchase'  => array('Povoli� n�kup reklamy:',
                                         '�no',
                                         'Nie'),
    'settings_plugin_jquery'    => array('Na��ta� jQuery kni�nice:',
                                         '�no',
                                         'Nie'),
    'settings_plugin_title'     =>  'Titulok boxu',
    'settings_plugin_auto'    => array('Automaticky vlo�i� box do �abl�ny:',
                                         '�no',
                                         'Nie'),
    'settings_plugin_auto_function' =>  'Do �abl�ny vlo�te t�to funkciu:',
    'settings_plugin_showform'    => array('Formul�r pre n�kup reklamy',
                                         '<abbr title="Pod �l�nkem se zobraz� p��mo formul�� s mo�nost� n�kupu">Zobrazova� priamo</abbr>',
                                         '<abbr title="Je nutn� kliknout na �Zobrazit formul�� pro n�kup reklamy�, aby se zobrazil formul��">Zobrazi� a� po kliknut�</abbr>'),
    'settings_plugin_banned_cats' =>  'Nezobrazova� v t�chto rubrik�ch:',
    'settings_plugin_links'     => 'Po�et odkazov pod �l�nkom:',
    'settings_plugin_price'     => 'Cena odkazu:',
    'settings_plugin_price_ext' => array('Cena odkazu EXTRA:',
                                         'ak je �l�nok star�� ne�',
                                         'dn�'),
    'settings_currency'         => 'K�',
    'settings_paypal_title'     => 'Platieb cez PayPal.com',
    'settings_paypal_desc' => 'N�vod na nastavenie PayPalu krok po kroku si <a href="http://www.copywriting.cz/napoveda/7" target="_blank">stiahnete zadarmo tu</a>.',
    'settings_paypal_api_user'  => 'API username:',
    'settings_paypal_api_pwd'   => 'API password:',
    'settings_paypal_api_sign'  => 'API signature:',
    'settings_paypal_mode'      => 'PayPal prostredie:',
    'settings_wd_api_token'     => 'API token:',
    'settings_copywriting_title'=> 'Platby cez Copywriting.cz',
    'settings_copywriting_desc' => 'Tu m��ete prepoji� plugin s Va��m <a href="http://www.copywriting.cz" target="_blank">Copywriting ��tom</a>',
    'settings_donate_title'     => 'Podporte v�voj pluginu!',
    'settings_donate_desc'      => 'Tento plugin je pon�kan� �plne zadarmo a bez ak�chko�vek obmedzen�. V�voju pluginu som venoval svoj vo�n� �as a pracoval som bez n�roku na ak�ko�vek odmenu. Ak by ste chceli podpori� v�voj pluginu, m��ete tak urobi� zaslan�m nejakej sumy na PayPal pomocou tla�idla ni��ie.',

    'orders_table_ido'          => 'ID objedn�vky',
    'orders_table_idp'          => 'N�zov �l�nku',
    'orders_table_date'         => 'D�tum objednania',
    'orders_table_link'         => 'Odkaz',
    'orders_table_tools'        => 'N�stroje',
    'orders_empty'              => 'Zatia� nebola vykonan� �iadna objedn�vka',
    'orders_tools_hide'         => 'Skry�',
    'orders_tools_show'         => 'Zobrazi�',
    'orders_tools_edit'         => 'Upravi�',
    'orders_tools_delete'       => 'Odstr�ni�',
    'orders_add_title'          => 'Prida� nov� odkaz',
    'orders_add_idp'            => 'ID �l�nku',
    'orders_add_link'           => 'Odkaz',
    'orders_add_name'           => 'N�zov',
    'orders_add_desc'           => 'Popisok',
    'orders_edit_title'         => 'Upravi� objedn�vku',
    'orders_edit_ido'           => 'ID objedn�vky:',
    'orders_edit_idp'           => 'ID �l�nku:',
    'orders_edit_purchased'     => 'Zak�pen�:',
    'orders_edit_link'          => 'Odkaz:',
    'orders_backup_tip'         => 'TIP: Ka�d� de� prebieha z�loha na servery Copywriting.cz, k obnoveniu z�lohy m��ete teda pou�i� na�u z�lohu. T� na rozdiel od va�ej ru�nej z�lohy neprema�e existuj�ce odkazy, iba dopln� ch�baj�ce.',

    'css_title'                 => 'Upravi� CSS',
    'css_desc'                  => 'Tu m��ete zmeni� vzh�ad boxu (CSS), ktor� sa zobrazuje pod jednotliv�mi �l�nkami',
    'css_preview'               => 'N�h�ad',

    /* NOTICES */
    'n_plugin_disabled'         => 'Plugin je aktu�lne vypnut�',
    'n_settings_updated'        => 'Nastavenie bolo �spe�ne aktualizovan�',
    'n_settings_update_error'   => array('Cena za �l�nok mus� by� v��ia ne� 0',
                                         'Mus�te vyplni� PayPal �daje alebo pripoji� Copywriting ��et',
                                         'Nem�te vyplnen� v�etky potrebn� PayPal �daje'),
    'n_settings_wd_disconnected'=> '��et Copywriting bol �spe�ne odpojen�',
    'n_orders_hiden'            => 'Objedn�vka #%d bola skryt� a odkaz sa teraz na webe nezobrazuje',
    'n_orders_shown'            => 'Objedn�vka #%d sa teraz na webe zobrazuje',
    'n_orders_added'            => 'Odkaz bol �spe�ne pridan� do datab�zy (ID objedn�vky: %d)',
    'n_orders_edited'           => 'Objedn�vka #%d bola �spe�ne upraven�',
    'n_orders_delete'           => 'Naozaj odstr�ni� objedn�vku #%d? Ak tak urob�te, odkaz sa na webe prestane zobrazova�. <strong>TENTO KROK JE NEVRATN�!</strong>',
    'n_orders_delete_link'      => 'Rozumiem, odstr�ni�',
    'n_orders_deleted'          => 'Objedn�vka #%d bola �spe�ne odstr�nen�, odkaz se u� na webe nezobrazuje',
    'n_orders_backup_created'   => array('S�bor so z�lohou bol �spe�ne vytvoren�',
                                         'Stiahnu� s�bor'),
    'n_orders_backup_error'     => 'S�bor so z�lohou sa nepodarilo vytvori�',
    'n_orders_backup_restore'   => 'Pri nahran� z�lohy sa odstr�nia v�etky aktu�lne objedn�vky',
    'n_orders_backup_up_error'  => array('Nebol vybran� �iadny s�bor na nahratie',
                                         'S�bor so z�lohou mus� ma� koncovku .xml',
                                         'S�bor so z�lohou sa nepodarilo nahra�',
                                         'S�bor so z�lohou je pr�zdny, alebo s� d�ta v nespr�vnom form�te'),
    'n_orders_backup_loaded'    => 'Z�loha bola �spe�ne importovan� do syst�mu',
    'n_css_update_done'         => 'Nastavenie CSS bolo �spe�ne zmenen�',
    'n_css_update_error'        => 'Nastavenie CSS sa nepodarilo ulo�i�',
    'n_css_reset_done'          => 'Nastavenie CSS bolo vr�ten� do p�vodn�ho stavu',
    'n_css_reset_error'         => 'Nastavenie CSS sa nepodarilo vr�ti� do p�vodn�ho stavu',

    /* HELP */
    'h_settings_status_on'      => 'Plugin je aktu�lne zapnut� a pod �l�nkami sa zobrazuje reklama a mo�no ju zak�pi�',
    'h_settings_status_off'     => 'Plugin je aktu�lne vypnut� a pod �l�nkami sa nezobrazuje �iadna reklama a nemo�no ju zak�pi�',
    'h_settings_curl_on'        => 'Na va�om hostingu je cURL povolen� a plugin pracuje spr�vne',
    'h_settings_curl_off'       => 'Na va�om hostingu nie je povolen� funkcia cURL, alebo je vypnut�. Plugin nem��e pracova� spr�vne',
    'h_settings_version_act'    => 'Pou��vate najnov�iu a najaktu�lnej�iu verziu pluginu',
    'h_settings_version_old'    => 'Pou��vate zastaran� a neaktu�lnu verziu pluginu, odpor��ame vykona� aktualiz�ciu',
    'h_settings_version_err'    => 'Verziu pluginu sa nepodarilo overi�, preto�e na va�om hostingu je zak�zan� alebo vypnut� funkcia "file_get_contents"',
    'h_settings_tables_ok'      => 'Datab�zov� tabu�ky nutn� pre spr�vne fungovanie pluginu boli n�jden�',
    'h_settings_tables_err'     => 'Datab�zov� tabu�ky nutn� pre spr�vne fungovanie pluginu NEBOLI n�jden� a preto plugin nem��e fungova� spr�vne',
    'h_settings_status'         => 'Ur�uje, �i je plugin vypnut� alebo zapnut�. V pr�pade, �e je plugin vypnut�, reklama sa nezobrazuje a nemo�no ju ani zak�pi�',
    'h_settings_purchase'       => 'Ur�uje, �i je mo�n� na webe zak�pi� reklamu. <br>
                                    V pr�pade, �e n�kup zak�ete, nebude mo�n� zak�pi� pod �l�nkom reklamu, ale dosia� zak�pen� odkazy sa bud� na webe zobrazova�',
    'h_settings_jquery'         => 'Povol�/Zak�e na��tanie jQuery kni�nice z http://ajax.googleapis.com/ajax/libs/jquery/ <br>
                                    Zak�te v pr�pade, �e po nain�talovan� pluginu d�jde na webe k chyb�m v in�ch pluginoch (nie v�dy zak�zanie pom��e)',
    'h_settings_auto'       => 'Automaticky vlo�� box do �abl�ny pod pr�spevky. Ak za�krtnete Nie, do �abl�ny budete musie� vlo�i� funkciu ru�ne.',
    'h_settings_showform'       => 'Nastavenie zobrazovania formul�ra pre n�kup reklamy v boxu pri �l�nku',
    'h_settings_title'       => 'Titulok, ktor� sa bude zobrazova� pred boxom.<br /><b>Premenn� $price dosad� do nadpisu hodnotu.</b><br />Je odpor��an� ju uvies� v nadpise, preto�e vo formul�ri sa inde tento �daj neobjevuje.',
    'h_settings_banned_cats'       => 'Zadajte ID rubr�k, tie odde�ujte �iarkou bez medzier. Pr�klad: <b>1,3,15,16</b> alebo v pr�pade jednej rubriky <b>2</b>',
    'h_settings_max_links'      => 'Ur�uje, ko�ko mo�no pod ka�d�m �l�nkom k�pi� maxim�lne odkazov. <br>
                                    V pr�pade, �e je dosiahnut� nastaven� po�et, pod dan�m �l�nkom u� nemo�no zak�pi� �al�iu reklamu',
    'h_settings_link_price'     => '- suma mus� by� vy��ia ako 0 <br>
                                    - uveden� suma <u>zah��a 10 K� poplatok</u> za transakciu <br>',
    'h_settings_link_price_ext' => 'Ak je �l�nok star�� ne� zadan� po�et dn�, zmen� sa jeho cena na tu zadan�. <br>
                                    Pokia� chcete cenu �l�nku v�dy rovnak�, zadajte do po�a pre extra cenu 0',
    'h_settings_copywriting'    => 'Token na prepojenie pluginu s Va��m Copywriting ��tom si m�ete vygenerova� tu:<br><b>Copywriting.cz -> Reklamn� priestor -> Pon�kam reklamu -> Moje weby -> <i>v� web</i> -> Nastavenie pod�l�nkovej inzercie</b>',
    'h_add_link_clid'           => 'Zadajte ID �l�nku, pod ktor� chcete reklamu prida�',
    'h_add_link_link'           => 'Zadajte URL odkazu - V�ETNE http://',
    'h_add_link_name'           => 'Zadajte n�zov odkazu - tento n�zov bude klikate�n�',
    'h_add_link_desc'           => 'Zadajte popisok odkazu - objav� sa za odkazom a bude neklikate�n�'
);
?>