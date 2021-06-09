<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="Основные сведения" property="og:title">
    <meta content="Основные сведения" name="mrc__share_title">
    <meta content="Основные сведения" itemprop="name">
    <meta content="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" itemprop="image">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- App -->
    <div id="app">
        <div class="header">
            <div class="header__wrap">
                <nav class="header__wrap_nav">
                    <div class="logo">
                        <a href="<?php echo get_home_url() ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Логотип техникума">
                        </a>
                    </div>
                    <div class="link">
                        <?php $menu = new CustomMainMenu();
                        $menu->main_nav_menu(); ?>
                    </div>
                    <div class="profile">
                        <button alt="Версия для слабовидящих" itemprop="copy" id="specialButton" style="background: transparent;border: none;">
                            <svg width="21" height="12" viewBox="0 0 21 12" xmlns="http://www.w3.org/2000/svg">
                                <path class="control__path" d="M10.5 0c3.438 0 6.937 2.016 10.5 6.047-.844.844-1.383 1.375-1.617 1.594-.234.219-.805.703-1.711 1.453-.906.75-1.641 1.266-2.203 1.547-.563.281-1.305.578-2.227.891-.922.313-1.836.469-2.742.469-1.125 0-2.156-.141-3.094-.422-.938-.281-1.875-.766-2.813-1.453-.938-.688-1.672-1.273-2.203-1.758-.531-.484-1.328-1.273-2.391-2.367 2.031-2.031 3.836-3.539 5.414-4.523 1.578-.984 3.273-1.477 5.086-1.477zm0 10.266c1.156 0 2.148-.422 2.977-1.266.828-.844 1.242-1.844 1.242-3s-.414-2.156-1.242-3c-.828-.844-1.82-1.266-2.977-1.266-1.156 0-2.148.422-2.977 1.266-.828.844-1.242 1.844-1.242 3s.414 2.156 1.242 3c.828.844 1.82 1.266 2.977 1.266zm0-5.766c0 .438.141.797.422 1.078s.641.422 1.078.422c.313 0 .625-.109.938-.328v.328c0 .688-.234 1.273-.703 1.758-.469.484-1.047.727-1.734.727-.688 0-1.266-.242-1.734-.727-.469-.484-.703-1.07-.703-1.758s.234-1.273.703-1.758c.469-.484 1.047-.727 1.734-.727h.375c-.25.313-.375.641-.375.984z" fill="#000"></path>
                            </svg>
                        </button>
                        <a style="background: transparent;border: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg>
                        </a>
                        <a href="">Личный кабинет</a>
                    </div>
                </nav>
            </div>
        </div>