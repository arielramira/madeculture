<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */
defined( 'ABSPATH' ) or die();
?><!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

		<?php if ( version_compare( get_bloginfo( 'version' ), '4.1', '<' ) ): ?>
			<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php endif ?>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700' rel='stylesheet' type='text/css'>

		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
		<div class="document">
			<div class="document-header">
				<div class="wrapper">
					<?php get_template_part( 'templates/header-branding' ) ?>
					<?php get_template_part( 'templates/header-navigator' ) ?>
					<?php get_template_part( 'templates/header-navigator-mobile' ) ?>
				</div>

				<?php get_template_part( 'templates/header-navigator-sticky' ) ?>
			</div>
			<!-- /.document-header -->

			<?php do_action( 'theme/below-document-header' ) ?>