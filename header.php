<!DOCTYPE html>
<html <?php language_attributes() . schema(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
    get_template_part( _nav );
    get_template_part( _hdr );