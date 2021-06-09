<?php get_template_part("theme/layouts/pages/header"); ?>

<div class="header_title" style="margin-top: 120px">
    <h1 itemprop="name" style="color: #2163D3; font-size: 32px"><?php single_cat_title(); ?></h1>
</div>
</div>
</div>
</div>

<div class="content">
    <h3>Список новостей:</h3>
    <div class="category_list">
    <?php while (have_posts()) : the_post(); ?>
        <a class="category_title_link" href="<?php echo the_permalink() ?>">
            <h2>
                <? the_title() ?>
            </h2>
        </a>
    <?php endwhile; ?>
    </div>
</div>

<style>
    .content {
        /* margin: 45px 0; */
        max-width: 1440px;
        margin: 0 auto;
        min-height: 50vh;
    }

    .category_list{
        display: flex;
        flex-flow: column;
    }

    .category_title_link {
        color: #13408c;
        margin-bottom: 15px;
    }
</style>
<?php get_template_part('theme/layouts/pages/footer'); ?>