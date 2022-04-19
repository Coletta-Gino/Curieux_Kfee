<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
  <?php endwhile; endif; ?>
  
  <?php get_template_part('template-parts/contact/opening-hours'); ?>
  <?php get_template_part('template-parts/contact/map'); ?>
  <?php get_template_part('template-parts/contact/contact-us'); ?>
<?php get_footer(); ?>