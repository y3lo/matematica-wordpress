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
define('DB_NAME', 'matematica');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':0D`=|6J.o!(-Xc>{]$y14[!l&zejYma+bc9l+H2QXC$PpW@M-c7er6c1DF>LJ*.');
define('SECURE_AUTH_KEY',  '|Xus;_u/6yPaI>wP ryf?]:_]U,>8a*_FH>@/>L%J|;lj #=.`$H(!Y3lS(VAk~A');
define('LOGGED_IN_KEY',    '~`~G40VyfCz14{J(A0{tNq*j?!bs]Q|jYzV!GxFitn+G.|Y!mih#P4fbLt#Z7|?z');
define('NONCE_KEY',        'qG,<zU_x9.ts)_NbRT++:8CfI$iETAe.T$Y,,m-<>C`)gq]0DVI|M|ERC2Zl{Fo ');
define('AUTH_SALT',        'G4@$YBr8LMOb|~!QLsUxJ4#7*K0(`bt,+~:f1.I>%+c@5 SyN@T4De|=M}nfOut=');
define('SECURE_AUTH_SALT', '.S<x2|[=jy ?uV7+DQH33aKz5 )w,hr:m;pN[HMZ$uZYsxpZnZNH-F$o^Vt&Y6[F');
define('LOGGED_IN_SALT',   'FWxm#Bih&lz`NiLU+FN[g2`3SW08 IHlJnz+Pmu,<-<6NELbb#7c%Ju{>qPJc-DE');
define('NONCE_SALT',       '**q+2_iGjvg@a*-+_(vCkZn9G?#U2-we}/HGv92IEwG$,5<&|u*yDH:RNC 0nAk}');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
