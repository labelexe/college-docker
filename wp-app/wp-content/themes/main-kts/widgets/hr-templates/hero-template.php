<?php //echo wp_kses_post($instance['text']) 
?>

<header id="SITE_HEADER" class="site_header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <div class="header_hero">
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
                        <a href="#contact">
                            <span>
                                Как добраться?
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="header_hero__content_wrap" style="display: flex;justify-content: space-between;align-items: center;padding: 0 90px;">
            <div class="header_hero__content" style="display: block;">
                <div class="header_hero__content_title" style="max-width: 800px; margin-bottom: 80px; line-height: 57px; margin-top: 140px;">
                    <span class="defaut" style="font-size: 48px;letter-spacing: 0.16em;text-transform: uppercase;font-family: 'Rubik',sans-serif;font-weight: bold;color: #000;">Областное</span>
                    <span class="stroke" style="letter-spacing: 0.16em;text-transform: uppercase;font-family: 'Rubik',sans-serif;font-weight: bold;text-shadow: 0px 1px 0 rgb(102 34 224), 0px -1px 0 rgb(102 34 224), 1px 0px 0 rgb(102 34 224), -1px 0px 0 rgb(102 34 224);-webkit-text-shadow:0px 1px 0 rgb(102,34,224),0px -1px 0 rgb(102,34,224),1px 0px 0 rgb(102,34,224),-1px 0px 0 rgb(102,34,224),1px 1px 0 rgb(102,34,224),1px -1px 0 rgb(102,34,224),-1px 1px 0 rgb(102,34,224),-1px -1px 0 rgb(102,34,224);-moz-text-shadow:0px 1px 0 rgb(102,34,224),0px -1px 0 rgb(102,34,224),1px 0px 0 rgb(102,34,224),-1px 0px 0 rgb(102,34,224),1px 1px 0 rgb(102,34,224),1px -1px 0 rgb(102,34,224),-1px 1px 0 rgb(102,34,224),-1px -1px 0 rgb(102,34,224);font-size:48px;color:rgb(255, 255, 255);">
                        Бюджетное профессиональное образовательное
                    </span>
                    <span class="defaut" style="font-size: 48px;letter-spacing: 0.16em;text-transform: uppercase;font-family: 'Rubik',sans-serif; font-weight: bold;color: #000;">учреждение</span>
                </div>
                <div class="header_hero__content_more">
                    <a href="/abitur/">
                        <span>Об
                            учебных программах</span>
                        <i class="icon">

                            <!-- <img src="icons/arrow-long-right-c.svg" onload="SVGInject(this)"> -->
                            <svg data-src="<?php echo get_template_directory_uri() . '/widgets/hr-templates/images/icons/arrow-long-right-c.svg' ?>"></svg>
                        </i>
                    </a>
                </div>
            </div>
            <div class="header_hero__vector" style="position: absolute;top: 80px;right: 150px;">
                <svg data-src="<?php echo get_template_directory_uri() . '/widgets/hr-templates/images/homeIlustrattion.svg'; ?>">
            </div>
        </div>

    </div>
</header>