<?php  define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']); define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
/**
* Основные параметры WordPress.
*
* Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
* секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
* на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
*
* Этот файл используется сценарием создания wp-config.php в процессе установки.
* Необязательно использовать веб-интерфейс, можно скопировать этот файл
* с именем "wp-config.php" и заполнить значения.
*
* @package WordPress
*/

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'andzsb9994_72221');

/** Имя пользователя MySQL */
define('DB_USER', 'dtnhffs994_72221');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'EDS89994nGADi');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
* Уникальные ключи и соли для аутентификации.
*
* Смените значение каждой константы на уникальную фразу.
* Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
* Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
*
* @since 2.6.0
*/
define('AUTH_KEY',         '.:..ULHBB//M4K65R1R9@Z6S2O<NWL:VXPSO9T2%I9Q_%V2NX1:?ZY8Q:27GUSH1H');
define('SECURE_AUTH_KEY',  '/I,&7DG?I?_&1PZA6479@NMH6>>DBV//.Z./:_/.?@72R.69U&%Q?1Z:G:_3.@CC,');
define('LOGGED_IN_KEY',    'S8FX&G!KNBZHT@ZLTP3%@NC@4GAJ_Y>*K.K//%,AE5WXG//SL0WP@B%01I@P,JX7?');
define('NONCE_KEY',        'HB.ED30DT:C71O1XLC80Z2J!_8G*//MT@?@NK9.2!O1XA!84//HV8..<E*VAIVA&/');
define('AUTH_SALT',        'TCJ.1Q..1OYTY0/6SY:EW2NXVGKNHSW!FSUXY._97/%.%5X:T!,L..8@X<_.2WR<:');
define('SECURE_AUTH_SALT', 'LITPR@C73:AW////S!W_L9S8F?M*&@QBSC0&CUOLFVIXCZF?%0INM_Q*!O..LD6:/');
define('LOGGED_IN_SALT',   '.,!Z:FSS<Q.Y<CXM6A*5HZNL9>*V..MBF?E81@8/FFES@A//RUA2LY%3,!%L3*58T');
define('NONCE_SALT',       'LOQ3ZBSSK2?Z9YW9LX%X,QQ2TBQ!N2H4KE!4!N3R..//ND,D2W>I>_B..GET,?6U6');

/**#@-*/

/**
* Префикс таблиц в базе данных WordPress.
*
* Можно установить несколько блогов в одну базу данных, если вы будете использовать
* разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
*/
$table_prefix  = 'wp_';

/**
* Язык локализации WordPress, по умолчанию английский.
*
* Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
* для выбранного языка должен быть установлен в wp-content/languages. Например,
* чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
* и присвойте WPLANG значение 'ru_RU'.
*/
define('WPLANG', 'ru_RU');

/**
* Для разработчиков: Режим отладки WordPress.
*
* Измените это значение на true, чтобы включить отображение уведомлений при разработке.
* Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
* в своём рабочем окружении.
*/
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
