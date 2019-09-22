<?php
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
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'q~6n(ald=.7iwU0-lK90$Z6%~#qWtg+sqe|h0h{-Paw>Y2h`eN|x8}e)MJ-b<M 2' );
define( 'SECURE_AUTH_KEY',  'BrOGeTR7n%J&^_Z-9?tKqFV7{&S9zqo96s 3#wPjrPf(LEN(ti~_N2c@f@>Jm}pX' );
define( 'LOGGED_IN_KEY',    'd0;NZu]/NX5JX7Y+[I[ayj&V`CrDTuw+1N_&Rq;7%-6Ced`L.3Fa;x9&pNE@r]hB' );
define( 'NONCE_KEY',        'r~0kwCE>K^<H[>_,pfny[@^d5|vdCT#)($Kr|hb>cu0<+D-1Epb-EY+E7oe[Cr@!' );
define( 'AUTH_SALT',        '<rPg2(VEo]/=ksn[wM~O?[AXqpCK{.2Vio,tm#^f?JvN5Yg#7_Y;@p6YUZ424EdY' );
define( 'SECURE_AUTH_SALT', 'od%j.a~Lnqr%(YRjRsae=<F(V4!x5lY7k~a!y<E;>g^]aIsb7 4CPmw(pA;l0dNU' );
define( 'LOGGED_IN_SALT',   '~T[nk-+@S-S/cCjE^u.&cr2t5/5mZ^7L!0zPrR~^<)+&McQbIvybKw1|z={HU%nu' );
define( 'NONCE_SALT',       'h#7m1!Sh#7Con!pjj=K,+fhs|ps|l> MA&^:?r`5V%R?7Upk:_)dV>Sg{_Uk(S6_' );

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
