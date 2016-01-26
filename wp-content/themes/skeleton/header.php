<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skeleton
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/lightbox.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/jquery.fullpage.min.css">

	<!-- Javascript
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script src="<?php bloginfo('template_directory')?>/js/icheck.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

