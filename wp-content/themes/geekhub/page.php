<?php get_header(); ?>
  <section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
	<div id=content>   
		  <?php the_content(); ?>
	</div>
        <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>