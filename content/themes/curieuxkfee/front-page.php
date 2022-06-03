<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
  <?php endwhile; endif; ?>
  
  <?php get_template_part('template-parts/home/intro'); ?>
  <?php get_template_part('template-parts/home/concepts'); ?>
  <?php get_template_part('template-parts/home/wrapper'); ?>
  <?php get_template_part('template-parts/home/artists'); ?>
<?php get_footer(); ?>