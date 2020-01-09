<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php if(is_front_page() || is_home()) { echo get_bloginfo('name').' | '.get_bloginfo('description');} else{echo wp_title('').' | '.get_bloginfo('name');} ?></title>
	<?php wp_head(); ?>
</head>
<?php 
//You're Going to Need This
global $wp_query;
$rfd_current_page_id = $wp_query->post->ID; ?>
<body <?php body_class($rfd_current_page_id); ?>>
<div class="rfd-head-container">
	<h1><a href="<?php bloginfo('url'); ?>""><?php bloginfo('name'); ?></h1>
</div>
<!-- TIME TO START THE JOURNEY -->
<div class="rfd-page-container">
<div class="rfd-page-container-inside">