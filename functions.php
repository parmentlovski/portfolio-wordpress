<?php

##################################### LOAD SCRIPT ##################################
function theme_enqueue_scripts()
{
	wp_register_style('main-style', get_template_directory_uri() . '/style.css', array(), true);
	// wp_enqueue_style('bulma-style', 'https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css', array(), true);

	wp_enqueue_style('font_styles_merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap');
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css');
	wp_enqueue_style('leaflet_styles', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css');
	// wp_enqueue_style('leaflet_styles', 'https://unpkg.com/leaflet@1.3.1/dist/leaflet.css');

	wp_enqueue_script('librairie-scrollreveal', 'https://unpkg.com/scrollreveal');
	wp_enqueue_script('librairie-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js');
	wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/js/all.js');
	wp_enqueue_script('script-scroll', '/wp-content/themes/from_scratch/assets/js/scroll.js');
	wp_enqueue_script('script-js', '/wp-content/themes/from_scratch/assets/js/script.js');
	wp_enqueue_script('script-form', '/wp-content/themes/from_scratch/assets/js/form.js');
	wp_enqueue_script('script-map', '/wp-content/themes/from_scratch/assets/js/map.js');
	wp_enqueue_script('script-projet', '/wp-content/themes/from_scratch/assets/js/projet.js');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), 1.0, true);

	wp_enqueue_script('script-scrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js');


	wp_enqueue_script('script-debug-scrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js');
	wp_enqueue_script('script-plugin-scrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js');
    // wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.3.1/dist/leaflet.js');
	wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js');
	
	// wp_enqueue_script('script-jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), 1.0, true);
	// wp_enqueue_script('script_navbar', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), 1.0, true);

	wp_localize_script('script', 'ajaxurl', admin_url('admin-ajax.php'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');



######## WOO COMMERCE #######

function customtheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');


######## HEADER #######

function fromscratch_header()
{
	if (is_front_page()) :
		get_header('frontpage');
	else :
		get_header();
	endif;
}
add_action('display_header', 'fromscratch_header');

######## FOOTER #######

function fromscratch_footer()
{
	if (is_front_page()) :
		get_footer('frontpage');
	else :
		get_footer();
	endif;
}
add_action('display_footer', 'fromscratch_footer');

######## CUSTOM ADMIN #######

//Ajout des images a la une pour les articles de base de wordpress
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150, 150, true); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	// delete the next line if you do not need additional image sizes
	add_image_size('category-thumb', 300, 9999); //300 pixels wide (and unlimited height)
};
		

	##################################### METABOX ##########################################

	//Add Custom Metabox

  add_action('add_meta_boxes', 'initialisation_metaboxes');
  function initialisation_metaboxes()
  {
	  //on utilise la fonction add_metabox() pour initialiser une metabox
	//   add_meta_box('id_ma_meta', 'Compétences', 'ma_meta_function', 'competences', 'normal', 'high');

	  add_meta_box( 
		'lbdwwp-metabox',
		'Compétences',
		'ma_meta_function',
		'post'
	  );
  }


  function ma_meta_function($post)
  {
	  // on récupère la valeur actuelle pour la mettre dans le champ
	  $competencesUne = get_post_meta($post->ID, '_competencesUne', true);
	  $competencesDeux = get_post_meta($post->ID, '_competencesDeux', true);
	  $competencesTrois = get_post_meta($post->ID, '_competencesTrois', true);
	  $competencesQuatres = get_post_meta($post->ID, '_competencesQuatres', true);
	  $competencesCinq = get_post_meta($post->ID, '_competencesCinq', true);

	  echo '<label for="competencesUne">Compétences 1: </label>';
	  echo '<input id="competencesUne" type="text" name="competencesUne" value="' . $competencesUne . '"/>';
	  echo '<label for="competencesDeux">Compétences 2: </label>';
	  echo '<input id="competencesDeux" type="text" name="competencesDeux" value="' . $competencesDeux . '"/>';
	  echo '<label for="competencesTrois">Compétences 3: </label>';
	  echo '<input id="competencesTrois" type="text" name="competencesTrois" value="' . $competencesTrois . '"/>';
	  echo '<label for="competencesQuatres">Compétences 4: </label>';
	  echo '<input id="competencesQuatres" type="text" name="competencesQuatres" value="' . $competencesQuatres . '"/>';
	  echo '<label for="competencesCinq">Compétences 5: </label>';
	  echo '<input id="competencesCinq" type="text" name="competencesCinq" value="' . $competencesCinq . '"/>';
  }

  add_action('save_post', 'save_metaboxes');
  function save_metaboxes($post_ID)
  {
	  if (isset($_POST['competencesUne'])) {
		  update_post_meta(
			  $post_ID,
			  '_competencesUne',
			  sanitize_text_field($_POST['competencesUne'])
		  );
	  }
	  if (isset($_POST['competencesDeux'])) {
		update_post_meta(
			$post_ID,
			'_competencesDeux',
			sanitize_text_field($_POST['competencesDeux'])
		);
	}
	if (isset($_POST['competencesTrois'])) {
		update_post_meta(
			$post_ID,
			'_competencesTrois',
			sanitize_text_field($_POST['competencesTrois'])
		);
	}
	if (isset($_POST['competencesQuatres'])) {
		update_post_meta(
			$post_ID,
			'_competencesQuatres',
			sanitize_text_field($_POST['competencesQuatres'])
		);
	}
	if (isset($_POST['competencesCinqè!è'])) {
		update_post_meta(
			$post_ID,
			'_competencesCinqè!è',
			sanitize_text_field($_POST['competencesCinqè!è'])
		);
	}
  }


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

		$envoie = mail($admin_email, $sujet, $message, $headers);

		$textSend = ($envoie === true) ? 'sent' : 'notSent';


		$wp->add_query_var('send');
		$url = get_page_by_title('accueil');
		wp_redirect(get_permalink($url) . '?send=' . $textSend);

		exit();
	}
}
add_action('init', 'fromscratch_contact_form');

##################################### MAP #################################

function adress_setup_menu()
{
    add_menu_page('Adresse Page', 'Adresse', 'manage_options', 'adress_option', 'adress_init');
}
function adress_init()
{
    echo '<h1>Salut tous le monde!</h1> <form id="form_reply" method="post">

<input type="text" id="new-value" name="new-value">
<button type="submit" id="submit-position">envoyer</button>
<span id="resultat"></span>
</form>';

    if (!$_POST['new-value'] == '') {
        global $wpdb;
        $wpdb->update(
            $wpdb->prefix . 'options',
            array('option_value' => $_POST['new-value']),
            array('option_name' => 'adress_client')
        );
	}
	
}
add_action('admin_menu', 'adress_setup_menu');



##################################### SECURITÉ #################################

// add_filter('login_errors', create_function('$a', "return null;"));

remove_action('wp_head', 'wp_generator'); // supprime le numéro de la la version de Wordpress

