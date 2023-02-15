<?php
define( 'WP_CACHE', false );
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', "adminweb4" );


/** Username của database */
define( 'DB_USER', "adminweb4" );


/** Mật khẩu của database */
define( 'DB_PASSWORD', "123123" );


/** Hostname của database */
define( 'DB_HOST', "localhost" );


/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y`6gR>qD3:`y{<$aV3_334O/#S|9 F(|nnWy> G{sml]+T&MUhQX&1=]7E=B6>Fg' );

define( 'SECURE_AUTH_KEY',  '6EAX%Chpn<&+JK*-cXy 3m6?[_V8}b4qw#$SII/8b-zOFJh@)?,E?=xmY4GGhC:P' );

define( 'LOGGED_IN_KEY',    'h1SHB@L.|cy_4Tp5`Q;U-T2YH1n:b4n-j@o%1><~g7qG9aasYo= vOLjy}I4~KHB' );

define( 'NONCE_KEY',        '/bTN6;@hJ 13ltp-4v+-kgo DP3%#6sI2 J%Y9P#^A`O4Jk453}^*>brTO(f[Ex~' );

define( 'AUTH_SALT',        '$WcoZ#k%bj90JJ>`D<%_)O%CYc.|`@VE/SoKj?wZaCJ?O]]$NO1N[EF!h_;lZ?`e' );

define( 'SECURE_AUTH_SALT', 'Jkv!UoVaq.;:FL<a[&>&FdAO5HE>>6Me`tDeltm~vP;?DtB/^ OX_P+~ X&O6qSt' );

define( 'LOGGED_IN_SALT',   'tE]bN<R%p;k>P8WXR1`[@V}%,tyC)X0fC#;`=rSD3hMB`|a7^rtb#T>i(`9qL>GM' );

define( 'NONCE_SALT',       'OG]au&rCU4=;qs}o7qyyQ1+CvsV],{16k~`P1n.3el/~Y.~qc>y;Gs=fSO`>zw}P' );


/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
define( 'WP_AUTO_UPDATE_CORE', '' );
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
