<?php
/**
 * apleitao. functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package apleitao.
 */

if ( ! function_exists( 'apleitao_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function apleitao_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on apleitao., use a find and replace
		 * to change 'apleitao' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'apleitao', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'apleitao' ),
			'menu-pages' => esc_html__( 'Menu Others Pages', 'apleitao' ),
			'menu-pedrasnaturais' => esc_html__( 'Pedras Naturais', 'apleitao' ),
			'menu-silestone' => esc_html__( 'Silestone', 'apleitao' ),
			'menu-dekton' => esc_html__( 'Dekton', 'apleitao' ),
			'menu-avonite' => esc_html__( 'Avonite', 'apleitao' ),
			'menu-projetovirtual' => esc_html__( 'Projeto Virtual', 'apleitao' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'apleitao_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'apleitao_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function apleitao_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'apleitao_content_width', 640 );
}
add_action( 'after_setup_theme', 'apleitao_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function apleitao_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'apleitao' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'apleitao' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'apleitao_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function apleitao_scripts() {

	wp_enqueue_style( 'apleitao-sidr-style', get_template_directory_uri() . '/assets/css/jquery.sidr.light.css' );

	wp_enqueue_style( 'apleitao-sidr-nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );



	wp_enqueue_style( 'apleitao-style', get_stylesheet_uri() );

	wp_enqueue_script( 'apleitao-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'apleitao-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//wp_deregister_script('jquery');

	//wp_enqueue_script( 'apleitao-plugins', get_template_directory_uri() . '/js/plugins.min.js', array(), false, true );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'apleitao-nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), false, true );

	wp_enqueue_script( 'apleitao-slick', get_template_directory_uri() . '/js/slick.min.js', array(), false, true );

	wp_enqueue_script( 'apleitao-sidr-js', get_template_directory_uri() . '/js/jquery.sidr.min.js', array(), false, true );

	wp_enqueue_script( 'apleitao-lightcase', get_template_directory_uri() . '/js/lightcase.js', array(), false, true );

	// wp_enqueue_script( 'apleitao-main', get_template_directory_uri() . '/js/main.js', array('apleitao-plugins'), false, true );
	wp_enqueue_script( 'apleitao-main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true );

	wp_enqueue_script( 'apleitao-map', get_template_directory_uri() . '/js/map.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'apleitao_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function languages_list_header(){
    $languages = icl_get_languages('skip_missing=1&orderby=KEY');
    if(!empty($languages)){
        echo '<div id="header_language_list"><ul>';
        foreach($languages as $l){
            echo '<li>';

            if(!$l['active']) {
                if (icl_disp_language($l['language_code']) == 'pt-pt'){
                    echo '<a href="'.$l['url'].'">';
                    echo 'PT';
                }else{
                    echo '<a href="'.$l['url'].'">';
                    echo icl_disp_language($l['language_code']);
                }
            }else{
                if (icl_disp_language($l['language_code']) == 'pt-pt'){
                    echo '<span>pt</span>';
                }else{
                	echo '<span>';
                    echo icl_disp_language($l['language_code']);
                    echo '</span>';
                }

            }
            if(!$l['active']){
                echo '</a>';
            }
            echo '</li>';
        }
        echo '</ul></div>';
    }
}
