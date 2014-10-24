<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
			$page_object = get_queried_object();
			$page_id     = get_queried_object_id();
        ?>
        <title><?php if(is_home() || $page_id == 9) {echo bloginfo("name");} else {wp_title(" | ", true, right);echo bloginfo("name");} ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
        <!-- <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less"> -->
        <?php wp_head(); ?>
    </head>
    <body>