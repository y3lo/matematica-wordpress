<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matematica
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo("name"); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.6, user-scalable=no">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/TimeCircles.css" />

	<script>
		var datesInMonth = <?=Date('t')?>;
	</script>
	<!--    <script type='text/javascript' src='/js/jquery-1.8.3.min.js'></script>-->
	<script src="<?php bloginfo('template_directory')?>/js/jquery-1.11.0.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/flipclock.js"></script>
	<script src="http://webext.ru/wp-content/uploads/2012/03/jquery.mousewheel.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/jquery.touchwipe.1.1.1.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/jquery.isotope.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/waypoints.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/jquery.hoverdir.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/main.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/TimeCircles.js"></script>
	<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATnghvpYkTXWlUeboCbuxx7jkvfCi-jMw&sensor=false">
	</script>
	<script type="text/javascript">
		function initialize() {
			var mapOptions = {
				center: new google.maps.LatLng(47.820794,35.168494),
				zoom: <?php echo get_field("zoom")?get_field("zoom"):15;?>
			};
			var map = new google.maps.Map(document.getElementById("map"),
				mapOptions);


			var myLatlng = new google.maps.LatLng(47.820794,35.178494);

			var marker = new google.maps.Marker({
				position: myLatlng,
				title:"Hello World!"
			});
			marker.setMap(map);

			// To add the marker to the map, call setMap();

		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<!--fullPageScroll START-->
	<script src="<?php bloginfo('template_directory')?>/js/fullPageScroll/vendors/jquery.easings.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/fullPageScroll/vendors/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/fullPageScroll/jquery.fullPage.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/imagesloaded.pkgd.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#fullpage').fullpage({
				menu: '.navigation',
				anchors: ['home', 'ideas', 'experience', 'projects',<?php /*'team',*/?> 'contacts'],
				scrollOverflow: true,
				touchSensitivity: 20,
				afterLoad: function(anchorLink){

					if(anchorLink == 'contacts'){
						if($('.overflow').hasClass('hidden')){
							$.fn.fullpage.setAllowScrolling(false);
						}
					}
				}
			});
		});

	</script>

	<!--    <script src="/js/fotorama/fotorama.js"></script>-->
	<!--    <link rel="stylesheet" href="/js/fotorama/fotorama.css" />-->

	<!--fullPageScroll END-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>