<?php

function mandarinenfilm_setup()
{
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    register_nav_menus(
        array(
            'main-menu' => esc_html__('Main Menu', 'mandarinenfilm')
        )
    );
}
add_action('after_setup_theme', 'mandarinenfilm_setup');

function mandarinenfilm_load_scripts()
{
    wp_enqueue_style('mandarinenfilm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mandarinenfilm_load_scripts');

function mandarinenfilm_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">...</a>';
    }
}
add_filter('the_content_more_link', 'mandarinenfilm_read_more_link');

function mandarinenfilm_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">...</a>';
    }
}
add_filter('excerpt_more', 'mandarinenfilm_excerpt_read_more_link');

function mandarinenfilm_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar Widget Area', 'mandarinenfilm'),
        'id'            => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mandarinenfilm_widgets_init');

function mandarinenfilm_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('comment_form_before', 'mandarinenfilm_enqueue_comment_reply_script');

function mandarinenfilm_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments       = get_comments('status=approve&post_id=' . $id);
        $comments_by_type   = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}
add_filter('get_comments_number', 'mandarinenfilm_comment_count', 0);
