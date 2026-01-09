<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'Cube-search' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-8.4' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G7z?oz627sOBXVN*cR@<WyBAx0Q,QvYg*{EyR9Qr#Z6UH(]lI6.w5E,,E.NuSf{e' );
define( 'SECURE_AUTH_KEY',  '|I`CXJDxMQd:8&q.G@1jPLh6Uf->k;0?{wv>7/nRldly{o:0cA|[#Q:~g({%C`9&' );
define( 'LOGGED_IN_KEY',    'vRT^M1DnpLX2#3fJSto*UJ|yp6TSiQE)v RK$1dsXYh-)v|D;^iI!# ++O(0s,Nu' );
define( 'NONCE_KEY',        '.XPhM,w]t+9CM:9JyDuNDl= 10*K<mkasY (CSp-KBRZ|=?ZMWG=*r}iz u[?SJ!' );
define( 'AUTH_SALT',        'L$^<q`Y1[0Uum^jfia@+Vmo&8C3Y9RFhQP^I8/140CVu_ 6]]vo78WBxj[k$Xo.U' );
define( 'SECURE_AUTH_SALT', 'v8;F1iXV9KKZQTh?^zk@.kffA:<Vm3M,`_/JRyTX,BD,CBF@&2R|7(sa^ Ynr=~Y' );
define( 'LOGGED_IN_SALT',   '2dp^D;a]FxV Y2muxJCfJHOKPiXI)F]JI;ZqHM#PPBY`M:7QpD$6-~M;|%sK>S~2' );
define( 'NONCE_SALT',       'lxtNh8KPN^WdYvcg.8k1X6:<4ZcF+{Y!Zes2n/bXSU*u1`$p-F(&zLk_ANS%b{[8' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
