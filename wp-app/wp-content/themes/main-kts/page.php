<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package siteorigin-corp
 * @license GPL 2.0 
 */

get_header(); ?>


<?php //echo wp_kses_post($instance['text']) 
?>

<?php if (is_front_page()) { ?>
<?php } else {
?>

	<header id="SITE_HEADER" class="site_header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
		<div class="header_hero" style="min-height: auto; padding-bottom: 15px">
			<div class="header_hero__bg" style="background: url('<?php echo get_template_directory_uri() . '/widgets/hr-templates/images/backgroundnoise.png'; ?>');">
			</div>
			<div class="header_hero__navbar">
				<div class="header_hero__navbar_l">
					<div class="header_hero__navbar_logo">
						<a href="/" title="Курский техникум связи">
							<img src="<?php echo get_template_directory_uri() . '/widgets/hr-templates/images/logo.png' ?>" alt="Курский техникум связи" title="LogoKTS" class="header_hero__navbar_logo__image">
						</a>
					</div>
					<nav class="header_hero__navbar_nav" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
						<?php
						$args = array(
							'menu'              => '', // ID, имя или ярлык меню
							'menu_class'        => false, // класс элемента <ul>
							'menu_id'           => '', // id элемента <ul>
							'container'         => false, // тег контейнера или false, если контейнер не нужен
							'container_class'   => '', // класс контейнера
							'container_id'      => '', // id контейнера
							'fallback_cb'       => 'wp_page_menu', // колбэк функция, если меню не существует
							'before'            => '', // текст (или HTML) перед <a
							'after'             => '', // текст после </a>
							'link_before'       => '', // текст перед текстом ссылки
							'link_after'        => '', // текст после текста ссылки
							'echo'              => true, // вывести или вернуть
							'depth'             => 1, // количество уровней вложенности
							'walker'            => new Header_Walker_Nav_Menu(), // объект Walker
							'theme_location'    => 'menu-header', // область меню
							'items_wrap'        => '%3$s',
							'item_spacing'      => 'preserve',
						);

						wp_nav_menu($args);
						?>
					</nav>
				</div>

				<div class="header_hero__navbar_r">
					<div class="header_hero_navbar_eye" style="margin-right: 15px;">
						<div class="header_hero_navbar_eye__btn">
							<a href="#">
								<div class="icon" style="margin-right: 10px;padding: 0;display: flex;">
									<svg data-src="<?php echo get_template_directory_uri() . '/widgets/hr-templates/images/icons/u_eye.svg' ?>">
								</div>
							</a>
						</div>
					</div>
					<?php if (!is_user_logged_in()) { ?>
						<div class="header_hero_navbar_user">
							<div class="header_hero_navbar_user__login">
								<a href="<?php echo wp_login_url(); ?>">
									<div class="icon" style="margin-right: 10px;padding: 0;display: flex;">
										<svg data-src="<?php echo get_template_directory_uri() . '/widgets/hr-templates/images/icons/profile.svg' ?>">
									</div>
									<span>Авторизация</span>
								</a>
							</div>
						</div>
					<?php } else {
					?>
						<!-- <div class="header_hero_navbar_user">
                        <div class="header_hero_navbar_user__login">
                            <a href="#">
                                <div class="icon" style="margin-right: 10px;padding: 0;display: flex;">
                                    <svg data-src="<?php echo get_template_directory_uri() . '/widgets/hr-templates/images/icons/profile.svg' ?>">
                                </div>
                                <span>Личный кабинет</span>
                            </a>
                        </div>
                    </div> -->
					<?php
					} ?>
					<div class="header_hero_navbar_group-btn">
						<div class="header_hero_navbar_group-btn__how_address">
							<a href="<?php echo home_url(); ?>/#contact">
								<span>
									Как добраться?
								</span>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>


<?php
} ?>

<div id="primary" class="content-area">
	<!-- <main id="main" class="site-main" role="main"> -->
	<main id="SITE_MAIN" class="site_main">

		<?php
		while (have_posts()) : the_post();

			get_template_part('template-parts/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
