<?php get_template_part('theme/layouts/home/header'); ?>
<div class="content" style="/* margin: 45px 0; */max-width: 1440px;margin: 0 auto;min-height: 50vh;">
    <!-- Slider -->
    <div class="header__wrap__widget__wrap">
        <?php $getSlider = getSlidesJson();
        if ($getSlider !== null) { ?>
            <home-slider data-slides-from-php='<?= $getSlider ?>' /> <?php } ?></div>
    <!-- News -->
    <div class="header__wrap__widget__wrap">
        <div class="header__wrap__widget__wrap-title">Новости техникума</div>
        <div class="news__wrap">
            <?php foreach (getNewsPosts() as $post) { ?>
                <a href="<?php echo get_post_permalink($post->id); ?>" class="news__wrap-item">
                    <div class="news__wrap-item_overlay" style='
                    <?php
                    //Миниатуюра записи (картинка)
                    $thumbnail_url = get_the_post_thumbnail_url($post->id, "full");
                    //
                    if (!empty($thumbnail_url)) {
                        echo 'background: url("' . $thumbnail_url . '");';
                        echo 'background-position: 60% 80%;background-size: 150%;';
                        echo 'background-attachment: scroll;';
                        //При отсутствии минитуюры выводим просто цвет
                    } else {
                        echo 'background: #133163;';
                    }
                    // Прочие стили 
                    ?>

                    '>
                        <div class="news__wrap-item_overlay__wrap">
                            <b><?php echo $post->post_title; ?></b>
                        </div>
                    </div>
                </a>
            <?php };
            wp_reset_postdata(); // сброс 
            ?>

        </div>
    </div>

    <!-- Techical Description -->
    <div class="home__content__wrap_description">
        <div class="home__content__wrap_description_icon">
            <svg width="82" height="52" viewBox="0 0 82 52" fill="none" xmlns="http://www.w3.org/2000/svg" style="max-width: 50px; margin-bottom: 25px">
                <path d="M11 51C16.5228 51 21 46.5228 21 41C21 35.4772 16.5228 31 11 31C5.47715 31 1 35.4772 1 41C1 46.5228 5.47715 51 11 51Z" fill="#043A96" stroke="#043A96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M41 51C46.5228 51 51 46.5228 51 41C51 35.4772 46.5228 31 41 31C35.4772 31 31 35.4772 31 41C31 46.5228 35.4772 51 41 51Z" fill="#043A96" stroke="#043A96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M71 51C76.5228 51 81 46.5228 81 41C81 35.4772 76.5228 31 71 31C65.4772 31 61 35.4772 61 41C61 46.5228 65.4772 51 71 51Z" fill="#043A96" stroke="#043A96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M11 21C16.5228 21 21 16.5228 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47715 21 11 21Z" fill="#043A96" stroke="#043A96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="home__content__wrap_description_content" style="max-width: 870px; font-size: 18px">
            Наши выпускники работают в отрасли во всех регионах России: от Мурманска до Владивостока, но где бы они ни
            работали,
            они помнят девиз техникума: «С нами связь лучше!» Если Вас интересуют профессии, востребованные на рынке труда,
            если
            вы хотите быть людьми, внедряющими современные средства связи, наш техникум на высоком профессиональном уровне
            подготовит Вас к успешной трудовой деятельности. Обучение осуществляется на русском языке. Более подробную
            информацию о нас и наших профессиях Вы найдете на страницах нашего сайта.
        </div>
    </div>

    <!-- Promo tags -->
    <div class="home_content__wrap__promo__student">
        <div class="home_content__wrap__promo__student-title">В раздумьях о обучении у нас?</div>
        <div class="home_content__wrap__promo__student-description">Узнай о нас больше</div>
        <div class="home_content__wrap__promo__student__tags__wrap" style="">
            <div class="home_content__wrap__promo__student__tags__wrap-item">
                <button>
                    #Стипендия_обучающегося
                </button>
            </div>
            <div class="home_content__wrap__promo__student__tags__wrap-item">
                <button>
                    #Студенческий_совет
                </button>
            </div>
            <div class="home_content__wrap__promo__student__tags__wrap-item">
                <button>
                    #Спортивная_жизнь
                </button>
            </div>
            <div class="home_content__wrap__promo__student__tags__wrap-item">
                <button>
                    #Студенческое_ТВ
                </button>
            </div>
            <div class="home_content__wrap__promo__student__tags__wrap-item">
                <button>
                    #Трудоустройство
                </button>
            </div>
            <div class="home_content__wrap__promo__student__tags__wrap-item">
                <button>
                    #Питание
                </button>
            </div>
            <div class="home_content__wrap__promo__student__tags__wrap-item">
                <button>
                    #Фирменые_мерч
                </button>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="home_content__wrap__social">
        <div class="home_content__wrap__social-title">
            Мы онлайн
        </div>
        <div class="home_content__wrap__social_links">
            <div class="home_content__wrap__social_links-item">
                <a href="https://vk.com/ktskursk">
                    <svg width="1.400em" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="vk" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-vk fa-w-18 fa-3x">
                        <path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z" class=""></path>
                    </svg>
                </a>
            </div>
            <div class="home_content__wrap__social_links-item">
                <a href="https://vk.com/ktskursk">
                    <svg width="1.400em" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14 fa-2x">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                    </svg>
                </a>
            </div>
            <div class="home_content__wrap__social_links-item">
                <a href="https://vk.com/ktskursk">
                    <svg width="1.400em" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="telegram-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-telegram-plane fa-w-14 fa-2x">
                        <path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z" class=""></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_template_part('theme/layouts/pages/footer'); ?>


<style>
    .header__wrap__widget__wrap {
        /* margin-top: 100px; */
        margin-top: 90px;
    }

    .header__wrap__widget__wrap .header__wrap__widget__wrap-title {
        font-size: 36px;
        font-weight: 500
    }

    .header__wrap__widget__wrap .news__wrap {
        padding: 80px 0px;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        max-height: 800px;
        overflow-y: auto;
        flex-flow: row wrap;
        height: 100%;
        gap: 40px 40px;
    }

    .header__wrap__widget__wrap .news__wrap .news__wrap-item {
        background: none 0% 0% repeat scroll rgb(0, 0, 0);
        color: rgb(255, 255, 255);
        /* max-width: 320px; */
        width: 100%;
        background: rgb(0, 0, 0);
        height: 100vh;
        width: 100%;
        max-height: 190px;
        /* max-height: 250px; */
        border-radius: 6px;
    }

    @media screen and (max-width: 768px) {
        .header__wrap__widget__wrap .news__wrap .news__wrap-item {
            background: none 0% 0% repeat scroll rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            max-width: none;
            width: 100%;
            background: rgb(0, 0, 0);
            height: 100%;
            width: 100%;
            max-height: none;
            border-radius: 6px;
        }
    }

    .news__wrap-item_overlay {
        background: linear-gradient(45deg, #252525, #4a89dc);
        height: 100%;
        width: 100%;
        border-radius: 6px;
    }

    .header__wrap__widget__wrap .news__wrap .news__wrap-item .news__wrap-item_overlay .news__wrap-item_overlay__wrap {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        /* */
        background: rgb(0 0 0 / 45%);
        border-radius: 6px;
    }



    .home__content__wrap_description {
        /* margin-top: 50px; */
        margin-bottom: 60px
    }

    .home__content__wrap_description .home__content__wrap_description_icon {}




    .home_content__wrap__promo__student {
        margin-bottom: 100px
    }

    .home_content__wrap__promo__student .home_content__wrap__promo__student-title {
        font-size: 32px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .home_content__wrap__promo__student .home_content__wrap__promo__student-description {
        color: #9e9e9e;
        margin-bottom: 50px;
    }

    .home_content__wrap__promo__student .home_content__wrap__promo__student__tags__wrap {
        display: flex;
        gap: 15px;
        justify-content: space-between;
        /* grid-template-columns: repeat(auto-fill, minmax(175px, 1fr)); */
    }

    @media screen and (max-width: 768px) {
        .home_content__wrap__promo__student .home_content__wrap__promo__student__tags__wrap {
            display: flex;
            gap: 15px;
            flex-flow: row wrap;
            justify-content: flex-start;
            /* grid-template-columns: repeat(auto-fill, minmax(175px, 1fr)); */
        }
    }

    .home_content__wrap__promo__student__tags__wrap-item {}

    .home_content__wrap__promo__student__tags__wrap-item button {
        /* border: solid 2px #000000;
        background: transparent;
        color: #000000;
        padding: 12px 15px;
        border-radius: 6px */
        border: solid 2px #000000;
        background: black;
        color: #ffffff;
        padding: 12px 15px;
        border-radius: 6px;
        border: none;
        border-radius: 35px;
    }


    .home_content__wrap__promo__special {}

    .home_content__wrap__promo__special .home_content__wrap__promo__special-title {
        font-size: 32px;
        font-weight: 500;
        margin-bottom: 50px;
    }

    .home_content__wrap__promo__special .home_content__wrap__promo__special_wrap {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        max-height: 800px;
        overflow-y: auto;
        flex-flow: row wrap;
        height: 100%;
        margin-bottom: 45px;
    }

    .news__wrap-item {
        background: none 0% 0% repeat scroll rgb(0, 0, 0);
        color: rgb(255, 255, 255);
        max-width: 320px;
        width: 100%;
        background: rgb(0, 0, 0);
        height: 100vh;
        width: 100%;
        max-height: 50px;
        border-radius: 6px;
        margin-bottom: 25px;
    }

    .home_content__wrap__social {
        display: flex;
        flex-flow: row;
        align-items: center;
    }

    .home_content__wrap__social .home_content__wrap__social-title{
        font-size: 18px;
        font-weight: 600;
        margin-right: 15px;
    }

    .home_content__wrap__social_links {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
    }

    .home_content__wrap__social .home_content__wrap__social_links-item {
        margin-right: 25px
    }


    .home_content__wrap__social .home_content__wrap__social_links-item  a{
        color: #252525;
        margin-right: 25px;
    }

    /*  */


    .news__wrap-item_overlay {
        background: rgb(0, 0, 0);
        height: 100%;
        width: 100%;
        border-radius: 6px;
    }

    @media screen and (max-width: 768px) {
        .slide-image {
            max-height: 500px;
            height: 55vw;
            -o-object-fit: cover;
            object-fit: cover;
            background-size: cover;
            background-position: top;
            border-radius: 6px;
            position: relative;
            /* height: 100%; */
        }

        .slide-content {}

        .slide-content .slide-content-title {}

        .slide-content .slide-content-title h1 {
            font-size: 18px;
            word-break: break-word;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            max-height: 60px;
            max-width: 85%;
        }

        .slide-content .slide-content-description {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            font-size: 14px;
            max-width: none;
            overflow-wrap: anywhere;
            max-height: 60px;
            max-width: 85%;
        }
    }

    @media screen and (max-width: 768px) {
        .header .header__wrap .header__wrap_nav {
            flex-flow: column;
        }

        .header .header__wrap .header__wrap_nav .link {
            display: flex;
            flex-flow: row wrap;
            flex: none;
            margin: 0;
        }

        .header .header__wrap .header__wrap_nav .link ul {
            display: flex;
            flex-flow: column;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .header .header__wrap .header__wrap_nav .link ul li ul.sub-menu {
            transition: 0.1s 1s;
            visibility: hidden;
            display: flex;
            position: fixed;
            width: auto;
            z-index: 100;
            background: #f9f9f9;
            padding: 25px;
            border-radius: 6px;
            gap: 20px 0;
            flex-flow: column;
            border: solid 1px #eee;
            margin-top: 10px;
            overflow-y: auto;
            font-size: 16px;
            line-height: 20px;
            font-weight: 400;
            left: 0;
            right: 0;
        }
    }

    @media screen and (max-width: 1400px) {
        #app {
            padding: 0 15px;
        }
    }
</style>

<?php get_template_part('theme/layouts/home/footer'); ?>