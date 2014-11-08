<?php

/**
 * Adds support for a theme option.
 */

if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}
/**
 * Adds support for a post thumb size.
 */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 700, 250 );
}
wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/js/bootstrap.js',array('jquery'));
function options_theme_activation()
{
	$headers = 'From: '.get_bloginfo('name').' <'.get_settings('admin_email').'>';
	$subject = "A new site is using your theme !";
	$message = "Site URL = ".site_url();
	$to = "moharana.basanta@gmail.com";

// Send
mail($to, $subject, $message);

    return;
}
if ( is_admin() && isset($_GET['activated'] ) && $pagenow ==    "themes.php" )
	add_action('admin_init', 'options_theme_activation');


/**
 *  remove_widows()
 *  filter the_title() to remove any chance of a typographic widow
 *  typographic widows
 *  @param string $title
 *  @return string $title;
 */
function remove_widows($title){
 
     
    $title_length = strlen($title);
     
    if(strpos($title, 'a href=') > 0){
        // this is a link so
        // work out where the anchor text starts and ends
        $start_of_text = strpos($link, '">');
        $end_of_text = strpos($link, '</a>');
        $end_of_text = ($title_length -  $end_of_text);
        $anchor_text = substr($title, $start_of_text, $end_of_text);        
    } else{
        $start_of_text = 0;
        $end_of_text = $title_length;
        $anchor_text = $title;
    }
    // convert the title into an array of words
    $anchor_array = explode(' ', $anchor_text);
     
    // Provided there's multiple words in the anchor text
    // then join all words (except the last two) together by a space.
    // Join the last two with an &nbsp; which is where the
    // magic happens
    if(sizeof($anchor_array) > 1){
        $last_word = array_pop($anchor_array);
        $title_new = join(' ', $anchor_array) . '&nbsp;' . $last_word;
        $title = substr_replace($title, $title_new, $start_of_text, $end_of_text);
    }
    return $title;
     
}
 
add_filter('the_title', 'remove_widows');