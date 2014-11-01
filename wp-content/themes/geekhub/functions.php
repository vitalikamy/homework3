<?php
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
        if (function_exists('add_theme_support')) {
        add_theme_support('menus');
        }

add_action( 'wp_footer', 'on_load_script' );

function on_load_script()
{
    // Not our page, do nothing
    if( !is_page( '157' ) )
        return;
?>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gmap.js"></script>
<?php
};

add_action( 'wp_footer', 'side_bar_menu' );
function side_bar_menu()
{
// Not our page, do nothing
if( !is_page( '163' ) )
return;
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
<?php
};
?>
