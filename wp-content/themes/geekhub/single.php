<?php get_header(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/single-slide.js"></script>
    <section>
        <?php single_post_title( $prefix, $display ); ?>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <div id="content">
                <?php get_sidebar(); ?>
                <div class="details">
                    <ul>
                        <li>
                            <h2><?php single_post_title(); ?></h2>
                            <?php the_content(); ?>
                            <a class="register" href="/?p=174">Зареєструватися</a>
                        </li>
                    </ul>
                </div>
			</div>
        <?php endwhile; endif; ?>
	</section>
<?php get_footer(); ?>