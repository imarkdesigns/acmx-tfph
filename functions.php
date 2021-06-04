<?php
// ===
// Do not edit anything in this file unless you know what you're doing.
// ===

// Load all functions
$fn_config = [
    'config/actions.php',
    'config/assets.php',
    'config/acf.php',
    'config/theme.php',
    'config/yoast.php',
    // 'config/controller.php',
    // 'config/editor.php',
];

foreach ( $fn_config as $config ) {
    if ( ! $files = locate_template( $config ) ) {
        trigger_error( sprintf( _( 'Error location %s for inclusion', 'acmx' ), $config ), E_USER_ERROR );
    }
    require_once $files;
}
unset($config, $files);

// ===
// Custom definitions
// ===

define ( '_uri', get_template_directory_uri() );
define ( '_site', site_url() );

define ( '_styles', _uri.'/resources/styles/' );
define ( '_scripts', _uri.'/resources/scripts/' );

define ( '_page', 'views/pages/' );
define ( '_single', 'views/singles/' );
define ( '_terms', 'views/taxonomies/' );

define ( '_nav', 'views/fragments/menu' );
define ( '_hdr', 'views/fragments/header' );
define ( '_ftr', 'views/fragments/footer' );
define ( '_rtr', 'views/fragments/router' );
define ( '_mob', 'views/fragments/mobile' );

define ( '_noie', 'views/attributes/edge' );
define ( '_nojs', 'views/attributes/noscript' );
define ( '_kuki', 'views/attributes/cookie' );
define ( '_alrt', 'views/attributes/notifs' );

define ( '_widgets', 'views/widgets/' );