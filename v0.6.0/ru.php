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
        'lang_name' => 'Russian / Russia',
        'lang_name_short' => 'RU',
        'lang_charset' => 'utf8',
        'lang_translator' => 'SovS-UA',
        'lang_notes' => 'None', // Add here some additional notes... If you've got some...
        
        'github' => 'Смотреть на GitHub',
        
        // Some words
        'word_tool' => 'BattlefieldTools Servertool',
        'word.tool' => 'Инструмент',
        'word_cp_full' => 'Панель Управления',
        'word_cp' => 'ПУ',
        'word_vip' => 'VIP',
        'word_welcome' => 'Привет',
        'word_language' => 'Язык',
        'word_about' => 'О программе',
        'word_error' => 'Ой!', # Error
        'word_yes' => 'Да',
        'word_no' => 'Нет',
        'word_ok' => 'OK',
        'word_cancel' => 'Отмена', // Verb
        'word_delete' => 'Удалить', // Verb
        'word_go' => 'Вперед',
        'word_devs' => 'Разработчики',
        'word_translators' => 'Переводчики',
        'word_suggestions' => 'Предложения',
        'word_settings' => 'Настройки',
        'word_name' => 'Имя',
        'word_loading' => 'Загрузка',
        'word_actions' => 'Действия',
        'word_qa' => 'В\О',
        'word_player' => 'Игрок',
        'word_players' => 'Игроки',
        'word_playername' => 'Имя игрока',
        'word_profileid' => 'ID профиля',
        'word_rank' => 'Ранг',
        'word_updated' => 'Обновлено',
        'word_enable' => 'Вкл', // Verb
        'word_disable' => 'Откл', // Verb
        'word_enabled' => 'Вкл',
        'word_disabled' => 'Откл',
        'word_ty' => 'Спасибо!',
        'word_date' => 'Дата',
        'word_until' => 'До',
        'word_forever' => 'Навсегда',
        
        // Messages
        'msg_serverdown' => 'Инструмент не может подключиться к серверу, возможно сервер упал или неправильно указаны RCON данные, необходимо проверить это!',
        'msg_serverup' => 'Сервер запущен и работает.',
        'msg_norights' => 'У вас недостаточно прав для доступа к этой странице.',
        'msg_settings_saved' => 'Настройки сохранены',
        'msg_error' => 'Произошли ошибки:',
        'msg_cmd_noaccess' => 'Вам недоступна эта команда',
        'msg_cmd_missingvars' => 'Недостаточно данных для этой команды',
        'msg_cmd_failed' => 'Команда не выполнена',
        'msg_nologin' => 'Вы не вошли в систему или ваша сессия истекла',
        'msg_sure' => 'Вы уверены?',
        'msg_notadded' => 'Данная функция еще не добавлена',
        'msg_db1' => 'Пожалуйста, перейдите на страницу конфигурации для вкл / откл этого инструмента',
        
        // Buttons
		'btn_back' => 'Назад',
		'btn_previous' => 'Предыдущий',
		'btn_next' => 'Следующий',
		'btn_save' => 'Сохранить',
		'btn_add' => 'Добавить',
		'btn_close' => 'Закрыть',
        
        // Version checker
        'vcheck' => 'Проверить версию',
        'vcheck_latest' => 'Последняя версия',
        'vcheck_current' => 'Текущая версия',
        'vcheck_past' => 'Прошлые версии',
        'vcheck_download' => 'Скачать',
        'vcheck_notes' => 'Примечания',
        'vcheck_err1' => 'Не удалось подключиться к главному серверу, попробуйте еще раз позже!',
        'vcheck_ok' => 'Последняя установленная версия!',
        'vcheck_old' => 'Похоже, ваша версия устарела, обновите до последней версии!',
        
        // Tools general
        'tool_gen_ignorevip' => 'Игнорировать VIP персон?',
        'tool_gen_help1' => 'Максимально для команды',
        'tool_gen_kick_msg' => 'Kick сообщение',
        'tool_gen_help2' => 'Сообщение, когда игрока выкидывает из сервера',
        
        // Tools names and descriptions
        'tool_server' => 'Управление сервером',
        'tool_server_desc' => 'Текущее состояние и управление сервером',
        'tool_server_editrcon' => 'Редактировать RCON данные',
        'tool_server_toggle' => 'Переключатель потока',
        'tool_server_nextmap' => 'Следующая карта',
        'tool_server_nextmap_msg' => 'Карта в настоящее время переключается',
        'tool_server_restartround' => 'Перезапустить раунд',
        'tool_server_restartround_msg' => 'Перезапуск раунда',
        'tool_server_empty' => 'Сервер пуст',
        'tool_server_editrcon_msg' => 'Новые RCON данные сохранены', // Not used anymore...
        'tool_server_warnpl_msg' => 'Игрок был предупрежден',
        'tool_server_kickpl_msg' => 'Игрок был выброшен',
        'tool_server_ranked' => 'RANKED', // NOTE: All uppercase!
        'tool_server_unranked' => 'UNRANKED', // NOTE: All uppercase!
        'tool_server_joining' => 'Входят', // NOTE: All lowercase
        'tool_server_curmap' => 'Текущая карта',
        'tool_server_t1tickets' => 'Команда 1 тикеты',
        'tool_server_t2tickets' => 'Команда 2 тикеты',
        'tool_server_playing' => 'Время раунда',
        'tool_server_serverip' => 'IP сервера',
        'tool_server_rconport' => 'RCON админ порт',
        'tool_server_rconpass' => 'RCON пароль',
        'tool_server_chat' => 'Чат',
        'tool_server_adminchat' => 'Админ-чат',
        'tool_server_team' => 'Команда',
        'tool_server_kit' => 'Класс',
        'tool_server_ping' => 'Пинг',
        'tool_server_kills' => 'Убито',
        'tool_server_deaths' => 'Смертей',
        'tool_server_score' => 'Очки',
        'tool_server_idle' => 'Спит',
        'tool_server_plactions' => 'Действие игрока',
        'tool_server_ltp' => 'Ссылка на профиль',
        'tool_server_kick' => 'Выкинуть игрока',
        'tool_server_warn' => 'Предупредить игрока',
        'tool_server_nochat' => 'Нет сообщений чата',
        'tool_server_send_msg' => 'Отправить сообщение',
        'tool_server_send_msg_help1' => 'Это сообщение отображается в Админ-чате!',
        'tool_server_msg_sent' => 'Сообщение сервера отправлено',
        
        'tool_rcon' => 'RCON консоль',
        'tool_rcon_desc' => 'Выполнить RCON команды',
        'tool_rcon_info1' => 'НЕ используйте это, если вы не знаете, что делаете!',
        'tool_rcon_field1' => 'Команда',
        
        'tool_igcmds_rights' => 'Необходимо прав для использования данной команды',
        'tool_igcmds_add' => 'Добавление команды в игру',
        'tool_igcmds_edit' => 'Редактирование команды',
        'tool_igcmds_cmd' => 'Команда',
        'tool_igcmds_func' => 'Функция',
        'tool_igcmds_lvl' => 'Уровень',
        'tool_igcmds_active' => 'Активно',
        'tool_igcmds_response' => 'Ответ',
        'tool_igcmds_deleted' => 'Команда удалена',
        'tool_igcmds_err1' => 'Права команды должны быть 0 - 100',
        'tool_igcmds_err2' => 'Команда не может быть пустой',
        'tool_igcmds_err3' => 'Эта команда уже существует',
        'tool_igcmds_err4' => 'Эта функция не существует',
        'tool_igcmds_err5' => 'Максимум символов для ответа 75',
        'tool_igcmds_help1' => 'Уровень 0 - 100',
        'tool_igcmds_help2' => 'Работает только с cmdMessage',
        'tool_igcmds_help3' => 'Отправлять ответ только игроку?',
        'tool_igcmds_help4' => 'Команда активна?',
        
        'tool_mrot' => 'Изменить ротацию карт',
        'tool_mrot_map' => 'Название карты',
        'tool_mrot_gamemode' => 'Игровой режим',
        'tool_mrot_current' => 'Текущая ротация',
        'tool_mrot_available' => 'Доступные карты',
        'tool_mrot_rpm' => 'Раундов на карту',
        'tool_mrot_help1' => 'Нажмите на карту, чтобы добавить ее в ротацию!',
        'tool_mrot_help2' => 'Вы можете изменить ротацию карт на вашем сервере',
        'tool_mrot_err1' => 'Неправильное значение ротации',
        'tool_mrot_err2' => 'Минимум одна карта должна быть в ротации',
        'tool_mrot_err3' => 'Раунды на карту не являются числом',
        
        'tool_vipm' => 'Управление VIP',
        'tool_vipm_desc' => 'Добавить или удалить VIP персон',
		'tool_vipm_vipadded' => 'VIP добавлен',
		'tool_vipm_vipdeleted' => 'VIP удален',
		'tool_vipm_notfound' => 'VIP не найдены',
        
        'tool_iteml' => 'Список снаряжения',
        'tool_iteml_desc' => 'Список всего снаряжения BFP4F',
        
        'tool_set' => 'Настройки',
        'tool_set_desc' => 'Настройки для ПУ и инструментов',
        'tool_set_deflang' => 'Язык по умолчанию',
        'tool_set_df' => 'Формат даты',
        'tool_set_fdf' => 'Полный формат даты',
        'tool_set_notifier' => 'Уведомления',
        'tool_set_notify_email' => 'Уведомления по e-mail',
        'tool_set_iga_ad' => 'Немного рекламы',
        'tool_set_bml' => 'Закладка',
        'tool_set_iga_ad_opt' => 'Показывать каждые %s% секунд',
        'tool_set_iga_ad_help' => "Отображается следующее сообщение: '%msg%'",
        'tool_set_help1' => 'Более подробную информацию о форматах даты, смотреть здесь <a href="http://nl3.php.net/manual/en/function.date.php" target="_blank">PHP date()</a>',
        'tool_set_help2' => 'Я использую это для отслеживания, какие серверы используют этот инструмент. Чтобы отключить отслеживание сервера, оставьте поле пустым',
        'tool_set_err1' => 'Язык %lang% не найден!',
        'tool_set_err2' => 'Неверное значение для рекламы',
        'tool_set_err3' => 'Неизвестное значение уведомлений для инструмента',
        'tool_set_err4' => 'Пожалуйста, введите действительный адрес электронной почты, чтобы уведомить вас, когда инструмент не может подключиться к серверу',
        'tooL_set_err5' => 'Неверная ссылка закладки',
        
        'tool_acc' => 'Учетные записи',
        'tool_acc_desc' => 'Управление учетными записями',
        'tool_acc_add' => 'Добавить пользователя',
        'tool_acc_edit' => 'Редактировать пользователя',
        'tool_acc_expl1' => 'Оставьте поле пароля пустым, если вы не хотите менять свой пароль',
        'tool_acc_rights' => 'Выберите, какие права необходимо дать пользователю',
        'tool_acc_fr1' => '<abbr title="In-Game Admin">IGA</abbr>',
        'tool_acc_fr2' => 'Супер-Админ',
        'tool_acc_fr3' => 'RCON доступ',
        'tool_acc_fr4' => 'Черный список',
        'tool_acc_fr5' => 'VIP',
        'tool_acc_fr6' => 'Управление сервером',
        'tool_acc_fr7' => 'Список снаряжения',
        'tool_acc_fr8' => 'Ограничители (инструменты)',
        'tool_acc_fr9' => 'Журнал',
        'tool_acc_fr10' => 'Белый список',
        'tool_acc_help1' => 'Имя должно быть не менее 5-ти символов, это публичное имя',
        'tool_acc_help2' => 'Имя пользователя должно быть не менее 5-ти символов и должно быть уникальным',
        'tool_acc_help3' => 'Пароль должен содержать не менее 6-ти символов',
        'tool_acc_help4' => 'Подтвердите пароль',
        'tool_acc_err1' => 'Ваше имя должно быть не менее 5-ти символов',
        'tool_acc_err2' => 'Ваше имя пользователя должно быть не менее 5-ти символов',
        'tool_acc_err3' => 'Ваш пароль должен содержать не менее 6-ти символов',
        'tool_acc_err4' => 'Неизвестное значение для прав',
        'tool_acc_err5' => 'Неверный ID профиля',
        'tool_acc_err6' => 'Пользователь не найден',
        'tool_acc_err7' => 'Вы не можете удалять свои собственные права Супер-Админа',
        
        'tool_logs' => 'Логи',
        'tool_logs_desc' => 'Посмотрите журнал, если имеются какие-то неполадки',
        'tool_logs1' => 'Авто-кикер лог',
        'tool_logs1_desc' => 'Все выполненые исключения с сервера',
        'tool_logs2' => 'Логи действий ПУ',
        'tool_logs2_desc' => 'Все выполненые действия черезз ПУ',
        'tool_logs3' => 'Логи команд чата',
        'tool_logs3_desc' => 'Все выполненные и невыполненные команды',
        'tool_word_desc' => 'Описание',
        
        'tool_wl' => 'Ограничитель оружия',
        'tool_wl_desc' => 'Укажите запрещенное оружие. Игроков имеющих его в слоте будет автоматически выкидывать.',
        'tool_wl_disallowed' => 'Запрещенные предметы',
        'tool_wl_inverse' => '<b>Инвертировать:</b> <u>Разрешены</u> только выбранные предметы',
        'tool_wl_err1' => 'Неизвестное значение статуса для инструмента',
        'tool_wl_err2' => 'Неизвестное значение ignvip для инструмента',
        'tool_wl_err3' => 'Недействительный BFID: %id%',
        
        'tool_pl' => 'Ограничитель разблокированного оружия (prebuy)',
        'tool_pl_desc' => 'Запретить разблокировку (prebuy) для некоторых видов оружия или всех видов оружия',
        'tool_pl_check' => 'Предметы для проверки',
        'tool_pl_help1' => 'Оставьте поле пустым, чтобы применить ограничитель prebuy для <b>всего</b> оружия',
        
        'tool_al' => 'Attachment limiter',
        'tool_al_desc' => 'Pick the disallowed attachments and automatically kick the players',
        
        'tool_sl' => 'Ограничитель дробовиков',
        'tool_sl_desc' => 'Устанавливает максимальное количество игроков с дробовиками на команду',
        'tool_sl_max' => 'Максимально',
        'tool_sl_help1' => 'Максимум дробовиков использовать в команде',
        'tool_sl_err1' => 'Неизвестное значение статуса для инструмента',
        'tool_sl_err2' => 'Неизвестное значение ignvip для инструмента',
        'tool_sl_err3' => 'Недопустимое число для максимального количества пользователей с дробовиками',
        
        'tool_ll' => 'Ограничитель ранга',
        'tool_ll_desc' => 'Устанавливает минимальный и максимальный ранг игроков',
        'tool_ll_min' => 'Минимальный ранг',
        'tool_ll_max' => 'Максимальный ранг',
        'tool_ll_err1' => 'Неизвестное значение статуса для инструмента',
        'tool_ll_err2' => 'Неизвестное значение ignvip для инструмента',
        'tool_ll_err3' => 'Минимальный ранг должен быть между: %lvls%',
        'tool_ll_err4' => 'Максимальный ранг должен быть между: %lvls%',
        
     	'tool_cl' => 'Ограничитель классов',
		'tool_cl_desc' => 'Разрешает определенное количество классов в команде',
		'tool_cl_assaults' => 'Штурмовик',
		'tool_cl_medics' => 'Медик',
		'tool_cl_recons' => 'Снайпер',
		'tool_cl_engineers' => 'Инженер',
		'tool_cl_err1' => 'Неизвестное значение статуса для инструмента',
		'tool_cl_err2' => 'Неизвестное значение ignvip для инструмента',
		'tool_cl_err3' => 'Неверное число для %class%',
        
		'tool_am' => 'Сообщения Администратора',
		'tool_am_desc' => 'Показывает сообщение в игре если администраторы онлайн',
		'tool_am_opt' => 'Показывать каждые %s% секунд',
		'tool_am_online' => 'Онлайн сообщение',
		'tool_am_offline' => 'Офлайн сообщение',
		'tool_am_help1' => 'Время паузы до следующего отображения сообщения',
		'tool_am_help2' => 'Сообщение, когда хотя бы один администратор в игре<br /><code>%admins%</code> Имена администраторов онлайн',
		'tool_am_help3' => 'Сообщение будет отображаться если нет администраторов в игре',
		'tool_am_err1' => 'Неизвестное состояние для данного инструмента',
		'tool_am_err2' => 'Вы пытаетесь отправить пустое сообщение!',
		'tool_am_err3' => 'Вы не можете оставить сообщение пустым!',
        
        'tool_sm' => 'Сообщения статистики',
        'tool_sm_desc' => 'Показывет сообщение в игре с текущей статистикой игрока',
        'tool_sm_opt' => 'Отображать каждые %s% секунд',
        'tool_sm_msg' => 'Сообщение',
        'tool_sm_help1' => 'Время паузы до следующего отображения сообщения',
        'tool_sm_help2' => 'Вы можете использовать следующие переменные для отображения сообщения<br />' .
                                                '<code>%name%</code> Ник игрока<br />' .
                                                '<code>%ping%</code> Пинг<br />' .
                                                '<code>%class%</code> Класс<br />' .
                                                '<code>%rank%</code> Ранг<br />' .
                                                '<code>%kills%</code> Убито<br />' .
                                                '<code>%deaths%</code> Смертей<br />' .
                                                '<code>%score%</code> Очки<br />' .
                                                '<code>%vip%</code> VIP статус (Да или Нет)',
        
        'tool_bl' => 'Blacklist',
        'tool_bl_desc' => 'Забанить игроков на время или навсегда',
        'tool_bl_reason' => 'Причина',
        'tool_bl_until' => 'Заблокирован до',
        'tool_bl_help1' => '0000-00-00 00:00:00 = Забанен навсегда',
        'tool_bl_warn1' => 'Вы не можете вкл / откл черный список',
        'tool_bl_err1' => 'Этот игрок уже забанен навсегда',
        'tool_bl_err2' => 'Не удается распознать солдата: Неверный ID профиля',
        'tool_bl_err3' => 'Нет записей в черном списке',
        'tool_bl_addedby' => 'Добавил',
        'tool_bl_added' => 'Бан добавлен',
        'tool_bl_deleted' => 'Бан удален',
        
      	'tool_wlist' => 'Белый список',
		'tool_wlist_desc' => 'Добавьте игроков которых не должно выкидывать инструментами ограничителей',
		'tool_wlist_added' => 'Игрок добавлен в белый список',
		'tool_wlist_deleted' => 'Игрок удален из белого списка',
		'tool_wlist_err1' => 'Этот игрок уже есть в белом списке',
		'tool_wlist_err2' => 'Не удается распознать солдата: Неверный ID профиля',
		'tool_wlist_err3' => 'Нет записей в белом списке',
		'tool_wlist_addedby' => 'Добавил',
        
        'tool_dsl' => 'Ограничитель двойного слота',
        'tool_dsl_desc' => 'Запрещает двухслотовый бустер',
        
        'tool_igcmds' => 'Команды в игре',
        'tool_igcmds_desc' => 'Используйте команды в игре',
        
        // Installation page
        #'install_welcome' => 'Welcome to the installation wizard, make sure all your details are filled in correctly. Then click on install.',
        #'install_error_config' => 'Please fill in your details in the file config.php before trying to install the tool',
        #'install_error' => 'Installation failed, please install the database manually by using the following SQL',
        #'install_success' => 'Installation was succesful, please delete the file install.php. You can login with the following details',
        
        // ControlPanel no rights page
        'cp_norights' => 'Отказано в доступе',
        'cp_norights_msg' => 'У вас недостаточно прав для дуступа к этой странице.',
        
        // ControlPanel menu
    	'cp_menu_tools' => 'Инструменты',
		'cp_menu_credits' => 'Благодарность',
		'cp_menu_donate' => 'Пожертвовать',
		'cp_menu_report_bug' => 'Сообщить об ошибке',
		'cp_menu_subm_sug' => 'Отправить предложения',
		'cp_menu_qa' => 'Вопрос \ Ответ',
		'cp_menu_changelog' => 'Список изменений',
		'cp_menu_logout' => 'Выйти',
        
        // ControlPanel login page
     	'cp_login' => 'Вход',
		'cp_username' => 'Имя пользователя',
		'cp_password' => 'Пароль',
		'cp_login_remember' => 'Запомнить меня',
		'cp_error_login' => 'Неверное имя пользователя или пароль, попробуйте еще раз',
		'cp_error_login_sessions' => 'Не удалось создать сессию, попробуйте еще раз. Если это сообщение продолжает появляться, проверьте настройки PHP.',
        
        // ControlPanel logout page
        'cp_logout' => 'Выход',
        'cp_logout_success' => 'Вы успешно вышли из системы. Увидимся позже!',
        
        // ControlPanel dashboard
        'cp_dashboard' => 'Панель управления',
        'cp_dashboard_subtitle' => 'Многофункциональность и удобство в навигации',
        'cp_dashboard_explination' => 'Нажмите на <i class="icon-remove"></i> чтобы активировать инструмент или нажмите на <i class="icon-ok"></i> чтобы деактивировать инструмент. Нажмите на заголовок, чтобы управлять инструментом.',
        'cp_dashboard_info_1' => 'Игроков на сервере',
        'cp_dashboard_info_2' => 'Статус сервера',
        
		// ControlPanel my account
		'cp_myaccount' => 'Личный кабинет',
		'cp_myaccount_subtitle' => 'Управление своей учетной записью',
		'cp_myaccount_expl1' => 'Это имя, которое будет отображаться публично',
		'cp_myaccount_expl2' => 'Оставьте поле пароля пустым, если вы не хотите, изменять свой пароль',
		'cp_myaccount_oldpass' => 'Старый пароль',
		'cp_myaccount_newpass' => 'Новый пароль',
		'cp_myaccount_expl3' => 'Не менее 6-ти символов',
		'cp_myaccount_expl4' => 'Просто проверка',
		'cp_myaccount_err1' => 'Ваше имя должно быть не менее 4-х символов',
		'cp_myaccount_err2' => 'Ваш старый пароль неверный',
		'cp_myaccount_err3' => 'Новый пароль должен содержать не менее 6-ти символов',
		'cp_myaccount_err4' => 'Два новых поля паролей не совпадают',
        
        // ControlPanel itemlist page
        'cp_itemlist_err1' => 'Снаряжений не найдено',
        
        // ControlPanel footer
        'cp_footer_thread' => 'Тема на форуме',
        
        /*
        * Q&A THINGS
        */
        'qa_questions' => 'Вопрос',
        'qa_answers' => 'Ответ',
        'qa_note' => 'ПРИМЕЧАНИЕ: Больше Вопросов и Ответов будут добавлены в будущем, вы можете спросить меня через PM, Raidcall или по электронной почте.',
        
        'qa' => array(
                1 => array(
                        'question' => 'Как найти ID профиля игрока?',
                        'anwser' => 'Пример: <code>http://battlefield.play4free.com/en/profile/2567963101/540307041</code><br /><code>2567963101</code> = ID профиля<br /><code>540307041</code> = ID персонажа'
                ),
        ),

);
?>
