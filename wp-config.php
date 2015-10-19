<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'bestday');

/** Имя пользователя MySQL */
define('DB_USER', 'bestday');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123456');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>||ly[v*>|zIQ S71%#UfA-B@}C1jJd9Fo,*T^k#<T;um+zG;PcP[U{zFPxFWF){');
define('SECURE_AUTH_KEY',  '|]N>Sr .8]?e@WQ{)&ww/^`A5#`nGs$8|Q)2vR+d+R$g[-ih|1]Cj?c`HWp+[Ta+');
define('LOGGED_IN_KEY',    'i*O;<n(-(3Bq|y:Mt9/0[7#F{~l5Xc-45:^-iQ-sKT}WV|#t+YnuR;m ^#:>-$Ga');
define('NONCE_KEY',        '+4$ +r4xoB;4-PnxmI/FE0v+uCA=K.96Mc3gR=^d5da+eGGpD8a)r~^N1+F!@@h2');
define('AUTH_SALT',        'h;(Fq^}O3jT,i.#R3/x,20z_K-};Lh@++.N(`FkY3+q`N>~Eeahe*o5!1*{7=r#Q');
define('SECURE_AUTH_SALT', 'T/Eh+gl~>[!8{Q4R,||5f7,<#*5:eNgbZU6i!=|%-a}r$#4`54R|+lX6w:n}_pK.');
define('LOGGED_IN_SALT',   'Acd*fRZsMNA6]sDFDpwyF$mbU|x+UX0;lc!hsG|O$C++A~KrUYB|-OG)h/9zR1X*');
define('NONCE_SALT',       'Kekd-nx-NfN`x8ez-;N={!paw*[C`^?;RpSljYFh0On5A+3h0T@|h&%VWK$fUqb^');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'bd_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
