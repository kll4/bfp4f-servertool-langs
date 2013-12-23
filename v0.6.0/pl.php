<?php
/**
 * BattlefieldTools.com BFP4F ServerTool
 * Version 0.6.0
 *
 * Copyright (C) 2013 <Danny Li> a.k.a. SharpBunny
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */
 
$lang = array(
	
	// Language information
	'lang_name' => 'Polish / Polski',
	'lang_name_short' => 'PL',
	'lang_charset' => 'utf8',
	'lang_translator' => 'Nommo from Partisans Clan',
	'lang_notes' => 'None', // Add here some additional notes... If you've got some...
	
	'github' => 'View on GitHub',
	
	// Some words
	'word_tool' => 'BattlefieldTools Servertool',
	'word.tool' => 'Narzedzie',
	'word_cp_full' => 'Panel Kontrolny',
	'word_cp' => 'PK',
	'word_vip' => 'VIP',
	'word_welcome' => 'Witaj',
	'word_language' => 'Jezyk',
	'word_about' => 'Informacje',
	'word_error' => 'O NIE!', # Error
	'word_yes' => 'Tak',
	'word_no' => 'Nie',
	'word_ok' => 'OK',
	'word_cancel' => 'Anuluj', // Verb
	'word_delete' => 'Usun', // Verb
	'word_go' => 'Idz',
	'word_devs' => 'Developerzy',
	'word_translators' => 'Tlumacze',
	'word_suggestions' => 'Propozycje',
	'word_settings' => 'Ustawienia',
	'word_name' => 'Nazwa',
	'word_loading' => 'Wczytuje',
	'word_actions' => 'Akcje',
	'word_qa' => 'Q&A',
	'word_player' => 'Gracz',
	'word_players' => 'Gracze',
	'word_playername' => 'Nick',
	'word_profileid' => 'ProfileID',
	'word_rank' => 'Poziom',
	'word_updated' => 'Wczytano',
	'word_enable' => 'Wlacz', // Verb
	'word_disable' => 'Wylacz', // Verb
	'word_enabled' => 'Wlaczone',
	'word_disabled' => 'Wylaczone',
	'word_ty' => 'Dziekuje!',
	'word_date' => 'Data',
	'word_until' => 'Do',
	'word_forever' => 'Zawsze',
	
	// Messages
	'msg_serverdown' => 'Narzednie nie moze polaczyc sie z serwerem, moze byc wylaczony, lub zostaly podane zle dane RCON. SPRAWDZ TO!',
	'msg_serverup' => 'Serwer dziala poprawnie.',
	'msg_norights' => 'Nie wolno Ci tu zagladac.',
	'msg_settings_saved' => 'Ustawienia zostaly zapisane',
	'msg_error' => 'Wystapily nastepujace bledy:',
	'msg_cmd_noaccess' => 'Nie mozesz uzywac tej komendy',
	'msg_cmd_missingvars' => 'Zle wpisana komenda',
	'msg_cmd_failed' => 'Blad podczas wykonywania komendy',
	'msg_nologin' => 'Nie jestes zalogowany',
	'msg_sure' => 'Jestes pewnien, definitywnie, na 100%?',
	'msg_notadded' => 'Ta funkcja jeszce nie jest dostepna',
	'msg_db1' => 'Przejdz do strony konfiguracji, aby wlaczyc/wylaczyc to narzedzie',
	
	// Buttons
	'btn_back' => 'Wróc',
	'btn_previous' => 'Poprzedni',
	'btn_next' => 'Nastepny',
	'btn_save' => 'Zapisz',
	'btn_add' => 'Dodaj',
	'btn_close' => 'Zamknij',
	
	// Version checker
	'vcheck' => 'Sprawdz wersje',
	'vcheck_latest' => 'Ostatnia wersja',
	'vcheck_current' => 'Obecna wersja',
	'vcheck_past' => 'Wczesniejsze wersje',
	'vcheck_download' => 'Pobierz',
	'vcheck_notes' => 'Notatki',
	'vcheck_err1' => 'Nie mozna polaczyc sie z glównym serwerem, spróbuj pózniej!',
	'vcheck_ok' => 'Ostatnia wersja zainstalowana!',
	'vcheck_old' => 'Twój tool jest nieaktualny, sciagnij najnowsza wersje!',
	
	// Tools general
	'tool_gen_ignorevip' => 'Ignorowanie VIPów',
	'tool_gen_help1' => 'Maximum na team',
	'tool_gen_kick_msg' => 'Powód kicka',
	'tool_gen_help2' => 'Powód kicka, który gracz bedzie widziec',
	
	// Tools names and descriptions
	'tool_server' => 'Zarzadzanie serwerem',
	'tool_server_desc' => 'Aktualny status i zarzadzanie serwerem',
	'tool_server_editrcon' => 'Zmien dane RCON',
	'tool_server_toggle' => 'Przelacz odswiezanie',
	'tool_server_nextmap' => 'Nastepna mapa',
	'tool_server_nextmap_msg' => 'Mapa jest zmieniana',
	'tool_server_restartround' => 'Restart rundy',
	'tool_server_restartround_msg' => 'Runda jest restartowana',
	'tool_server_empty' => 'Serwer jest pusty',
	'tool_server_editrcon_msg' => 'Nowe dane RCON zapisane', // Not used anymore...
	'tool_server_warnpl_msg' => 'Gracz dostal ostrzezenie',
	'tool_server_kickpl_msg' => 'Wykickowano gracza',
	'tool_server_ranked' => 'RANKINGOWY', // NOTE: All uppercase!
	'tool_server_unranked' => 'NIE RANKINGOWY', // NOTE: All uppercase!
	'tool_server_joining' => 'wczystuje sie', // NOTE: All lowercase
	'tool_server_curmap' => 'Obecna mapa',
	'tool_server_t1tickets' => 'Tickety Teamu 1',
	'tool_server_t2tickets' => 'Tickety Teamu 2',
	'tool_server_playing' => 'Runda trwa',
	'tool_server_serverip' => 'IP Serwera',
	'tool_server_rconport' => 'Port RCON',
	'tool_server_rconpass' => 'Haslo RCON',
	'tool_server_chat' => 'Chat',
	'tool_server_adminchat' => 'Adminchat',
	'tool_server_team' => 'Druzyna',
	'tool_server_kit' => 'Klasa',
	'tool_server_ping' => 'Ping',
	'tool_server_kills' => 'Zabici',
	'tool_server_deaths' => 'Zgony',
	'tool_server_score' => 'Wynik',
	'tool_server_idle' => 'Spi',
	'tool_server_plactions' => 'O graczu',
	'tool_server_ltp' => 'Link do profilu',
	'tool_server_kick' => 'Wykickuj',
	'tool_server_warn' => 'Ostrzez',
	'tool_server_nochat' => 'Brak wiadomosci na czacie',
	'tool_server_send_msg' => 'Wyslij wiadomosc',
	'tool_server_send_msg_help1' => 'Wiadomosc pokaze sie na adminchatcie!',
	'tool_server_msg_sent' => 'Wiadomosc zostala wyslana',
	
	'tool_rcon' => 'Konsola RCON',
	'tool_rcon_desc' => 'Wykonuje komendy RCON',
	'tool_rcon_info1' => 'UWAGA: Nie dla n00bów - mozesz zepsuc server',
	'tool_rcon_field1' => 'Komenda',
	
	'tool_igcmds_rights' => 'Prawa IGA',
	'tool_igcmds_add' => 'Dodaj komende',
	'tool_igcmds_edit' => 'Edytuj komende',
	'tool_igcmds_cmd' => 'Komenda',
	'tool_igcmds_func' => 'Funkcja',
	'tool_igcmds_lvl' => 'Poziom praw',
	'tool_igcmds_active' => 'Aktywna',
	'tool_igcmds_response' => 'Odpowiedz',
	'tool_igcmds_deleted' => 'Komenda usunieta',
	'tool_igcmds_err1' => 'Poziom praw musi wynosic miedzy 0 - 100',
	'tool_igcmds_err2' => 'Komenda nie moze byc pusta',
	'tool_igcmds_err3' => 'Ta komenda juz istnieje',
	'tool_igcmds_err4' => 'Ta funkcja nie istnieje',
	'tool_igcmds_err5' => 'Maxymalna ilosc znaków odpowiedzi to 75.',
	'tool_igcmds_help1' => 'Poziom praw miedzy 0 - 100',
	'tool_igcmds_help2' => 'Dziala tylko przy funkcji cmdMessage',
	'tool_igcmds_help3' => 'Odpowiedz wysylana tylko do gracza?',
	'tool_igcmds_help4' => 'Komenda aktywna?',
	
	'tool_mrot' => 'Zmien rotacje map',
	'tool_mrot_map' => 'Nazwa map',
	'tool_mrot_gamemode' => 'Tryb Gry',
	'tool_mrot_current' => 'Obecna rotacja',
	'tool_mrot_available' => 'Dostepne mapy',
	'tool_mrot_rpm' => 'Rundy / mapa',
	'tool_mrot_help1' => 'Kliknij na mape, aby dodac ja!',
	'tool_mrot_help2' => 'Zlap i upusc, aby zmienic kolejnosc map!',
	'tool_mrot_err1' => 'Niepoprawna wartosc rotacji',
	'tool_mrot_err2' => 'Musisz dodac przynajmniej jedna mape',
	'tool_mrot_err3' => 'Cos ty wpisal w ilosc rund? Wpisz numer!',
	
	'tool_vipm' => 'Zarzadzanie VIPami',
	'tool_vipm_desc' => 'Dodaj / Usun VIPa',
	'tool_vipm_vipadded' => 'VIP dodany',
	'tool_vipm_vipdeleted' => 'VIP usuniety',
	'tool_vipm_notfound' => 'Nie znaleziono VIPów',
	
	'tool_iteml' => 'Lista przedmiotów',
	'tool_iteml_desc' => 'Wszystkie przedmioty w BFP4F',
	
	'tool_set' => 'Ustawienia',
	'tool_set_desc' => 'Ustawienia panelu kontrolnego',
	'tool_set_deflang' => 'Domyslny jezyk',
	'tool_set_df' => 'Format daty',
	'tool_set_fdf' => 'Pelny format daty',
	'tool_set_notifier' => 'Powiadamiacz',
	'tool_set_notify_email' => 'Wysylaj powiadomienia na e-mail',
	'tool_set_iga_ad' => 'Mala reklama',
	'tool_set_bml' => 'Bookmarklink',
	'tool_set_iga_ad_opt' => 'Pokazuj co %s% sekund',
	'tool_set_iga_ad_help' => "Pokazuje wiadomosc: '%msg%'",
	'tool_set_help1' => 'Wiecej informacji o formatach daty znajdziej tutaj <a href="http://nl3.php.net/manual/en/function.date.php" target="_blank">PHP date()</a>',
	'tool_set_help2' => 'Uzywane do sprawdzenia, które serwery uzywaja BattlefieldTools. Zostaw puste, jezeli nie chcesz byc namierzany',
	'tool_set_err1' => 'Jezyk %lang% nie istnieje!',
	'tool_set_err2' => 'Niepoprawna wartosc dla reklamy',
	'tool_set_err3' => 'Niepoprawna wartosc dla powiadamiacza',
	'tool_set_err4' => 'Podaj poprawny email',
	'tooL_set_err5' => 'Zly bookmark',
	
	'tool_acc' => 'Konta',
	'tool_acc_desc' => 'Zarzadzaj kontami',
	'tool_acc_add' => 'Dodaj konto',
	'tool_acc_edit' => 'Edytuj konto',
	'tool_acc_expl1' => 'Zostaw puste pole na haslo, gdy nie chcesz go zmieniac',
	'tool_acc_rights' => 'Wybierz, jakie prawa ma miec uzytkownik',
	'tool_acc_fr1' => '<abbr title="In-Game Admin">IGA</abbr>',
	'tool_acc_fr2' => 'Super-admin',
	'tool_acc_fr3' => 'Dostep RCON',
	'tool_acc_fr4' => 'Czarna lista',
	'tool_acc_fr5' => 'VIP',
	'tool_acc_fr6' => 'Zarzadzanie serwerem',
	'tool_acc_fr7' => 'Lista przedmiotów',
	'tool_acc_fr8' => 'Auto-kicker',
	'tool_acc_fr9' => 'Logi',
	'tool_acc_fr10' => 'Biala Lista',
	'tool_acc_help1' => 'Nick musi miec conajmniej 5 znaków, jest to nazwa publiczna',
	'tool_acc_help2' => 'Login musi miec minimum 5 znaków i byc unikalny',
	'tool_acc_help3' => 'Haslo musi miec minimum 6 znaków',
	'tool_acc_help4' => 'Potwierdz haslo',
	'tool_acc_err1' => 'Twój nick musi miec minimum 5 znaków',
	'tool_acc_err2' => 'Twój login musi miec minimum 5 znaków',
	'tool_acc_err3' => 'Haslo musi miec minimum 6 znaków',
	'tool_acc_err4' => 'Nieznane wartosc praw uzytkownika',
	'tool_acc_err5' => 'Niepoprawny ProfileID',
	'tool_acc_err6' => 'Nie znaleziono kont',
	'tool_acc_err7' => 'Nie mozesz sam sobie zabrac praw super-admina',
	
	'tool_logs' => 'Logi',
	'tool_logs_desc' => 'Zobacz logi, moze sa tam dziwne wpisy?',
	'tool_logs1' => 'Autokicker log',
	'tool_logs1_desc' => 'Wszystkie wykonane kicki',
	'tool_logs2' => 'Log panelu kontrolnego',
	'tool_logs2_desc' => 'Wszystkie wykonane akcje z panelu',
	'tool_logs3' => 'Log IGA',
	'tool_logs3_desc' => 'Wszystkie wykonane komendy',
	'tool_word_desc' => 'Opis',
	
	'tool_wl' => 'Weapon limiter',
	'tool_wl_desc' => 'Wybierz zabronione bronie i kickuj ich posiadaczy',
	'tool_wl_disallowed' => 'Niedozwolone przedmioty',
	'tool_wl_inverse' => '<b>Inwersja:</b> <u>Pozwól</u> uzywac tylko wyzej wymienionych broni',
	'tool_wl_err1' => 'Nieznany status auto-kicka',
	'tool_wl_err2' => 'Nieznana wartosc ignorowania VIPów',
	'tool_wl_err3' => 'Zly BFID: %id%',
	
	'tool_pl' => 'Prebuy limiter',
	'tool_pl_desc' => 'Zabron prebuy\'a dla wybranych broni',
	'tool_pl_check' => 'Przedmioty do sprawdzenia',
	'tool_pl_help1' => 'Zostaw puste dla kickowania za prebuy <b>WSZYSTKICH</b> broni',
	
	'tool_al' => 'Limiter dodatków',
	'tool_al_desc' => 'Wybierz zabronione dodatki',
	
	'tool_sl' => 'Shotgun limiter',
	'tool_sl_desc' => 'Ustal maxymalna ilosc graczy z shotgunami na druzyne',
	'tool_sl_max' => 'Ilosc graczy',
	'tool_sl_help1' => 'Maxiumum graczy z shotgunami na druzyne',
	'tool_sl_err1' => 'Nieznany status auto-kicka',
	'tool_sl_err2' => 'Nieznana wartosc ignorowania VIPów',
	'tool_sl_err3' => 'Zla wartosc maxymalnej ilosci graczy z shotgunami na druzyne',
	
	'tool_ll' => 'Level limiter',
	'tool_ll_desc' => 'Ustal minimalny i maxymalny level',
	'tool_ll_min' => 'Minimalny level',
	'tool_ll_max' => 'Maxymalny level',
	'tool_ll_err1' => 'Nieznany status auto-kicka',
	'tool_ll_err2' => 'Nieznana wartosc ignorowania VIPów',
	'tool_ll_err3' => 'Minimalny level musi byc miedzy: %lvls%',
	'tool_ll_err4' => 'Maxymalny level musi byc miedzy: %lvls%',
	
	'tool_cl' => 'Class limiter',
	'tool_cl_desc' => 'Ustal maxymalna ilosc graczy z dana klasa na druzyne',
	'tool_cl_assaults' => 'Szturmowcy',
	'tool_cl_medics' => 'Medycy',
	'tool_cl_recons' => 'Snajperzy',
	'tool_cl_engineers' => 'Inzynierowie',
	'tool_cl_err1' => 'Nieznany status auto-kicka',
	'tool_cl_err2' => 'Nieznana wartosc ignorowania VIPów',
	'tool_cl_err3' => 'Zla wartosc dla klasy: %class%',
	
	'tool_am' => 'Wiadomosci ADMINów',
	'tool_am_desc' => 'Wysylaj wiadomosc o stanie administratorów online',
	'tool_am_opt' => 'Wysylaj co %s% sekund',
	'tool_am_online' => 'Wiadomosc, gdy na serwerze jest administrator',
	'tool_am_offline' => 'Wiadomosc, gdy na serwerze nie ma administratora',
	'tool_am_help1' => 'Czas do pokazania wiadomosci',
	'tool_am_help2' => 'Tresc wiadomosci, gdy conajmniej jeden z administratorów jest online <br /><code>%admins%</code> - nicki administratorów',
	'tool_am_help3' => 'Tresc wiadomosci, gdy na serwerze nie ma administratorów',
	'tool_am_err1' => 'Nieznany status wiadomosci',
	'tool_am_err2' => 'Nie mozesz zostawic tej wiadomosci pustej!',
	'tool_am_err3' => 'Nie mozesz zostawic tej wiadomosci pustej!',
	
	'tool_sm' => 'Wiadomosci statystyk',
	'tool_sm_desc' => 'Pokazuje wiadomosc w grze o aktualnych statystykach wybrane gracza',
	'tool_sm_opt' => 'Wysylaj co %s% sekund',
	'tool_sm_msg' => 'Wiadomosc',
	'tool_sm_help1' => 'Czas do wyslania wiadomosci',
	'tool_sm_help2' =>	'Wiadomosc do wyslania, mozesz uzyc nastepujacych zmiennych:<br />' .
						'<code>%name%</code> - Nick<br />' .
						'<code>%ping%</code> - Ping<br />' .
						'<code>%class%</code> - Klasa<br />' .
						'<code>%rank%</code> - Poziom<br />' .
						'<code>%kills%</code> - Kille<br />' .
						'<code>%deaths%</code> - Zgony<br />' .
						'<code>%score%</code> - Punkty<br />' .
						'<code>%vip%</code> - Status VIP (Yes/No)',
	
	'tool_bl' => 'Czarna lista',
	'tool_bl_desc' => 'Zbanuj gracza, na okreslony czas badz permanentnie',
	'tool_bl_reason' => 'Powód',
	'tool_bl_until' => 'Zbanowany do',
	'tool_bl_help1' => '0000-00-00 00:00:00 = Ban permanentny',
	'tool_bl_warn1' => 'Nie mozna wlaczyc/wylaczyc czarnej listy',
	'tool_bl_err1' => 'Ten gracz ma juz bana permanentnego',
	'tool_bl_err2' => 'Zly ProfileID',
	'tool_bl_err3' => 'Nikt nie zostal jeszcze zbanowany!',
	'tool_bl_addedby' => 'Zbanowany przez',
	'tool_bl_added' => 'Ban zostal dodany',
	'tool_bl_deleted' => 'Ban zostal usuniety',
	
	'tool_wlist' => 'Biala lista',
	'tool_wlist_desc' => 'Dodaj graczy, którzy beda bezpieczni',
	'tool_wlist_added' => 'Gracz zostal dodany do Bialej Listy',
	'tool_wlist_deleted' => 'Gracz zostal usuniety z Bialej Listy',
	'tool_wlist_err1' => 'Ten graczy juz zostal dodany do bialej listy',
	'tool_wlist_err2' => 'Zly ProfileID',
	'tool_wlist_err3' => 'Nikogo jeszcze nie dodano do Bialej Listy',
	'tool_wlist_addedby' => 'Dodany przez',
	
	'tool_dsl' => 'Double-slot limiter',
	'tool_dsl_desc' => 'Zabrania korzystania z double-slota',
	
	'tool_igcmds' => 'Komendy w grze',
	'tool_igcmds_desc' => 'Uzywaj komend w grze',
	
	// Installation page
	#'install_welcome' => 'Welcome to the installation wizard, make sure all your details are filled in correctly. Then click on install.',
	#'install_error_config' => 'Please fill in your details in the file config.php before trying to install the tool',
	#'install_error' => 'Installation failed, please install the database manually by using the following SQL',
	#'install_success' => 'Installation was succesful, please delete the file install.php. You can login with the following details',
	
	// ControlPanel no rights page
	'cp_norights' => 'Dostep zabroniony',
	'cp_norights_msg' => 'Nie masz praw, aby wejsc na ta strone.',
	
	// ControlPanel menu
	'cp_menu_tools' => 'Opcje',
	'cp_menu_credits' => 'Podzekowania',
	'cp_menu_donate' => 'Dotacje',
	'cp_menu_report_bug' => 'Zglos blad',
	'cp_menu_subm_sug' => 'Wyslij sugestie',
	'cp_menu_qa' => 'Q&A',
	'cp_menu_changelog' => 'Changelog',
	'cp_menu_logout' => 'Wyloguj',
	
	// ControlPanel login page
	'cp_login' => 'Login',
	'cp_username' => 'Nick',
	'cp_password' => 'Haslo',
	'cp_login_remember' => 'Zapamietaj mnie',
	'cp_error_login' => 'Zly nick i/lub haslo. Spróbuj ponownie',
	'cp_error_login_sessions' => 'Blad podczas logowania. Jesli ta wiadomosc bedzie wystepowala dalej sprawdz swoje ustawienia PHP.',
	
	// ControlPanel logout page
	'cp_logout' => 'Wyloguj',
	'cp_logout_success' => 'Zostales pomyslnie wylogowany. See ya later, bro!',
	
	// ControlPanel dashboard
	'cp_dashboard' => 'Panel zarzadania',
	'cp_dashboard_subtitle' => 'Wszystkie opcje w jednym miejscu',
	'cp_dashboard_explination' => 'Kliknij na <i class="icon-remove"></i> aby aktywowac auto-kicka, badz na <i class="icon-ok"></i> aby go deaktywowac. Kliknij na nazwe w celu zarzadzania.',
	'cp_dashboard_info_1' => 'Gracze',
	'cp_dashboard_info_2' => 'Status serwera',
	
	// ControlPanel my account
	'cp_myaccount' => 'Moje konto',
	'cp_myaccount_subtitle' => 'Zarzadzaj swoim wlasnym kontem',
	'cp_myaccount_expl1' => 'Nick musi miec conajmniej 5 znaków, jest to nazwa publiczna',
	'cp_myaccount_expl2' => 'Zostaw puste pole na haslo, gdy nie chcesz go zmieniac',
	'cp_myaccount_oldpass' => 'Stare haslo',
	'cp_myaccount_newpass' => 'Nowe haslo',
	'cp_myaccount_expl3' => 'Minimum 6 znaków',
	'cp_myaccount_expl4' => 'Hasla musza sie zgadzac!',
	'cp_myaccount_err1' => 'Twój nick musi miec minimum 4 znaki',
	'cp_myaccount_err2' => 'Podales zle stare haslo',
	'cp_myaccount_err3' => 'Nowe haslo musi miec minimum 6 znaków',
	'cp_myaccount_err4' => 'Nowe hasla nie zgadzaja ze soba',
	
	// ControlPanel itemlist page
	'cp_itemlist_err1' => 'Nie znaleziono zadnych przedmiotów',
	
	// ControlPanel footer
	'cp_footer_thread' => 'Temat o narzedziu',
	
	/*
	* Q&A THINGS
	*/
	'qa_questions' => 'Pytania',
	'qa_answers' => 'Odpowiedzi',
	'qa_note' => 'NOTE: Wiecej Q&A zostanie dodanych w przyszlosci, w tym czasie mozesz zadawac pytania za pomoca PM, RaidCall lub e-mail.',
	
	
	'qa' => array(
		1 => array(
			'question' => 'Jak znalezc ProfileID gracza?',
			'anwser' => 'Przyklad: <code>http://battlefield.play4free.com/en/profile/2567963101/540307041</code><br /><code>2567963101</code> = ProfileID<br /><code>540307041</code> = SoldierID'
		 ),
	),

);
?>