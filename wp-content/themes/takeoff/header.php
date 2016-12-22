<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package takeoff
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/slick/slick-theme.css"/>
	<?php wp_head(); ?>
	<!--[if lte IE 8]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="logo col-sm-4">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png">
					</a>
				</div>
				<div class="main-menu col-sm-8">
					<ul class="nav">
						<li><a href="#about">About</a></li>
						<li><a href="#projects">Projects</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="headline">
					<h2>Pharetra Amet Sit</h2>
					<h3>Porta Nullam Fusce Inceptos</h3>
					<a class="btn btn-default" href="#about">Learn More</a>
				</div>
			</div>
		</div><!--/.container-fluid -->
	</header>


	<div id="content">
