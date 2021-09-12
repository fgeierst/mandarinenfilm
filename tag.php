<?php get_header(); ?>
<main id="content">
    <header class="header">
        <h1 class="entry-title">
            <?php single_term_title(); ?>
        </h1>
        <div class="archive-meta">
            <?php if ('' != the_archive_description()) {
                echo esc_html(the_archive_description());
            } ?>
        </div>
    </header>
    <ul class="tag-archive__list">
            <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <!-- get_template_part('entry'); -->
            <li class="tag-archive__entry">
                <a class="tag-archive__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
    <?php }
    } ?>
    </ul>
    <?php  get_template_part('nav', 'below'); ?>
</main>
<?php // get_sidebar();
get_footer();
