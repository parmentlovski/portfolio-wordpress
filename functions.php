<?php

##################################### LOAD SCRIPT ##################################
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts()
{
	wp_register_style('main-style', get_template_directory_uri() . '/style.css', array(), true);
	// wp_enqueue_style('bulma-style', 'https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css', array(), true);

	wp_enqueue_style('font_styles_merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap');

	wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/js/all.js');
	wp_enqueue_script('script-scroll', '/wp-content/themes/fromscratch/assets/js/scroll.js');
	wp_enqueue_script('script-form', '/wp-content/themes/fromscratch/assets/js/form.js');
	
	// wp_enqueue_script('librairie-scrollreveal', 'https://unpkg.com/scrollreveal@4');

	wp_enqueue_script('script-jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), 1.0, true);
	wp_enqueue_script('script_navbar', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), 1.0, true);
	wp_localize_script('script', 'ajaxurl', admin_url('admin-ajax.php'));
}

######## WOO COMMERCE #######

function customtheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');


######## HEADER #######

function fromscratch_header()
{
	if ( is_front_page()) :
		get_header('frontpage');
	else :
		get_header();
	endif;
}
add_action('display_header', 'fromscratch_header');


##################################### MAIL #################################

function fromscratch_contact_form()
{
global $wp;

if (isset($_POST['message-submit']) && $_POST['hidden'] === "1") {


$name = sanitize_text_field($_POST['name']);

$email = sanitize_email($_POST['email']);

$sujet = sanitize_text_field($_POST['object']);

$message = sanitize_text_field($_POST['message']);

$admin_email = get_option('admin_email');

$headers = "From: \"" . $name . "\" <" . $email . ">\r\n";

$envoie = mail ($admin_email, $sujet, $message, $headers);

$textSend = ($envoie === true) ? 'sent' : 'notSent';


$wp->add_query_var('send');
$url = get_page_by_title('accueil');
wp_redirect(get_permalink($url) . '?send=' . $textSend);

exit();
}
}

add_action('init', 'fromscratch_contact_form'); 


##################################### SECURITÉ #################################

// add_filter('login_errors', create_function('$a', "return null;"));

remove_action('wp_head', 'wp_generator'); // supprime le numéro de la la version de Wordpress

