<?php get_template_part("theme/layouts/pages/header"); ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="header_title" style="margin-top: 120px"><h1 itemprop="name" style="color: #2163D3; font-size: 32px"><?php the_title() ?></h1></div>
    </div></div></div>

<div class="content" style="/* margin: 45px 0; */max-width: 1440px;margin: 0 auto;">
    <?php the_content() ?>

    <?php endwhile; ?>
</div>

<?php get_template_part('theme/layouts/pages/footer'); ?>
