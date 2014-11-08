<?php get_header(); ?>
<div id="content">
    <div class="home">
        <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>
        <ul class="types">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <li>
                <?php the_post_thumbnail(); ?>
                    <a class="title" href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
            <?php the_content(); ?>
            </li>
        <?php endwhile; endif; ?>
        </ul>
        <ul class="social_share">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) ?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>