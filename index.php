<?php get_header(); ?>
<!-- index.php -->
<main id="content">
  <header class="header">
    <h1 class="entry-title">
      <?php single_post_title(); ?>
    </h1>
  </header>
  <?php if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('entry');
      comments_template();
    }
  }
  get_template_part('nav', 'below'); ?>
</main>
<?php // get_sidebar();
get_footer();
