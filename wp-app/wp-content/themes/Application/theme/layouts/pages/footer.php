</div>
<section class="footer">
    <div class="footer__wrap">
        <div class="footer__wrap-links-menu">
            <a href="http://collage.asdev.site/sveden/">Сведения</a>
            <a href="http://collage.asdev.site/abitur/">Абитуриенту</a>
        </div>

    </div>
</section>
<style>
    html {
        margin-top: 0 !important;
    }

    #wpadminbar {
        position: fixed;
        bottom: 0;
        top: auto;
    }

    #wpadminbar .menupop .ab-sub-wrapper,
    #wpadminbar .shortlink-input {
        bottom: 30px;
    }

    .VueCarousel-inner {
        transform: none !important;
        transition: transform 137.333ms ease 0ms !important;
    }

    section.footer {
        color: #fff;
        background: #E5EBF5;
        margin-top: 50px;
    }

    section.footer .footer__wrap {
        max-width: 1400px;
        margin: 0 auto;
        padding: 35px 60px;
    }

    section.footer .footer__wrap .footer__wrap-links-menu {
        display: flex;
        flex-flow: column;
    }

    section.footer .footer__wrap .footer__wrap-links-menu a {
        margin-bottom: 25px;
    }

    section.footer .footer__wrap .footer__wrap-links-menu a:hover,
    section.footer .footer__wrap .footer__wrap-links-menu a:focus {
        color: #333;
    }


    /* @media screen and (max-width: 1400px) {
        #app {
            padding: inherit !important;
        }
    } */

    @media screen and (max-width: 767px) {
        #app {
            padding: 25px !important;
        }
    }

    table th,
    table td {
        border-left: solid #dddddd 2px;
    }
</style>
<?php //get_template_part('theme/layouts/tags'); 
?>
</body>

</html>