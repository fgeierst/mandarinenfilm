<?php get_header(); ?>
<main id="content">
  <?php if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
          <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {  ?>
            <h1 class="entry-title">
              <img class="entry-title__img" src="<?php echo get_template_directory_uri(); ?>/images/mandarinenfilm_logo_text.svg" width="704" height="38" alt="<?php the_title(); ?>">
            </h1>
          <?php  } else {  ?>
            <h1 class="entry-title">
              <?php the_title(); ?>
            </h1>
          <?php  }  ?>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
  <?php if (comments_open() && !post_password_required()) {
        comments_template('', true);
      }
    }
  } ?>
</main>
<?php get_footer();
