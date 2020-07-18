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
define( 'DB_NAME', 'privet' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~1hzjc`?]V |Z .1`JF6a.kMXCHzT=,%@3&.s0[!MTHstC|-bzg$vG|i8]9deqXf' );
define( 'SECURE_AUTH_KEY',  'akfmcpWF<Lk=M}.sc-#sU|i%(t8B%#w:?,)^2k0_N<g]o: [_kG Q!6_cR|C6?!f' );
define( 'LOGGED_IN_KEY',    'k(]Wy49NNDdilH[hcT+(PR?)_u_S2Tha2$b98DN:>L}{&Z^@cTDHpFy}_B4ybi48' );
define( 'NONCE_KEY',        ',j]0_g/v!wj7gU mbL3w-%BP4p>w6HdIV;n~9aKwUh,dzX%bj2||9!:+LBX0C@5Z' );
define( 'AUTH_SALT',        'e)EAmNx]=rZ9zB2LAQMRni]D@1F0~LY3?Kt<KR}{]W,Wi4a-(vX*gt)kJUIqoa9<' );
define( 'SECURE_AUTH_SALT', 'KH2kz$(}m.jCl^SjA@v=4@m[n (Vv]E:*CT3lR5Y_zwlesQ41.aq7`l!S#LuCq,V' );
define( 'LOGGED_IN_SALT',   'V$FxXq_!02$BxOw7{3dHC3ihxpe1ao!ecequMhcfS>>t4Z&[ZtuA||<>H+<U$Y#Q' );
define( 'NONCE_SALT',       'y~K,tHV-H4@UUrq4L_jHwa!2d-&ew`&JJ,eEFbt%9q yFdS,(7V?nL.qK>{di<L7' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'mst_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
