<?php

/**
 * The theme header.
 *
 * This is the template that displays all of the <head> section and everything up until <div class="corp-container">.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siteorigin-corp
 * @license GPL 2.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	do_action('siteorigin_corp_body_top');
	?>

	<div id="page" class="site">

		<?php do_action('siteorigin_corp_content_before'); ?>

		<div id="content" class="site-content">

			<div class="corp-container">

				<?php do_action('siteorigin_corp_content_top'); ?>