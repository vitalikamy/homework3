<?php
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
        if (function_exists('add_theme_support')) {
        add_theme_support('menus');
        }

add_action( 'wp_footer', 'side_bar_menu' );
function side_bar_menu()
{
// Not our page, do nothing
if( !is_single() )
return;
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/single-slide.js"></script>
<?php
};

if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Left coll',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
}
function home_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Докладніше + реєстрація</a>';
}
add_theme_support('post-thumbnails'); // поддержка миниатюр
set_post_thumbnail_size(100, 100, false);
?>