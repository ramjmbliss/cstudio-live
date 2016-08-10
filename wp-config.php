<?php
# Database Configuration
define( 'DB_NAME', 'wp_cstudio' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'zs=h}a!-c}:D<d]6{pke_=:v~_:Mj@;(ViP*6q9v:H&- RZPDg)^PKf61hL$W`Tw');
define('SECURE_AUTH_KEY',  '/r!uG8I+% Db+&F>dY45>&aO[p^?pjlatt=qN[+Ed.bt1.asMAl0/;D|3d1`,yJ|');
define('LOGGED_IN_KEY',    'VLF_+_<h}1rxL#)(15-I)w|GI5jo?ZfH<_XKLo.c[f+,d1C*TQ39fMR-{W9&g*k(');
define('NONCE_KEY',        '-,r{HvbUc]a):8i[8T:<E.C:jy1SWASE&Oa:YQxSl-c9nUl=NT-`9(@4F},UR(_x');
define('AUTH_SALT',        'LT Gd*A5~9~ghPPT{IMXfT+Ajx@e?s|)+R:Jk3Ka{qv5[/S=r0nOCSS?:]QTXi%1');
define('SECURE_AUTH_SALT', 'L*vh]wqWzwFm[+yfYF-Tfdz3$_fFnA,d9$/XPqP:nbBdG6_<DUAm$%/=,q%?`]3:');
define('LOGGED_IN_SALT',   'v<E| Q2[FHg4;%+lJnX:eZ/Zj",})C)+;T,cuSJ|$BLaGZ6Jr4):D[uhM}LgYoVT');
define('NONCE_SALT',       '4vl"JYoa*=Xdq W8drq~U<WN_t-s1HzaF,L}BuH!yhBl2AkbL|u8)TKs,mQ7;7b^');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define('WP_DEBUG', true);

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'cstudio' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c737af944e4a1d5b8e0558714b57af70adce7179' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '43627' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '45.33.10.158' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'cstudio.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-43627', );

$wpe_special_ips=array ( 0 => '45.33.10.158', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG', '');

# WP Engine ID


# WP Engine Settings








# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
