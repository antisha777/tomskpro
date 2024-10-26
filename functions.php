<?php
/**
 * tomskpro functions and definitions
 *
 * @link 
 *
 * @package tomskpro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tomskpro_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tomskpro, use a find and replace
		* to change 'tomskpro' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tomskpro', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tomskpro' ),
			'menu-2' => esc_html__( 'Price', 'tomskpro' ),
			'menu-3' => esc_html__( 'Faq', 'tomskpro' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tomskpro_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 50,
			'width'       => 192,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);
}

add_action( 'after_setup_theme', 'tomskpro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tomskpro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tomskpro_content_width', 640 );
}
add_action( 'after_setup_theme', 'tomskpro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tomskpro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Right Sidebar', 'tomskpro' ),
			'id'            => 'sidebar-right',
			'description'   => esc_html__( 'Add widgets here.', 'tomskpro' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}


// Функция регистрации правого сайдбара
// Right sidebar registration function
function reg_sidebar_form() {
    register_sidebar(
      array(
      		'id' 			=> 'sidebar-form',
        	'name' 			=> __( 'Sidebar2' ),
        	'description'	=> __( 'Moy Sidebar.' ),
        	'before_widget' => '<div id="%1$s" class="my_widget %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<h3 class="my_widget-title">',
        	'after_title'   => '</h3>'
        )
       );
}

function reg_sidebar_mobile() {
    register_sidebar(
      array(
      		'id' 			=> 'sidebar-mobile',
        	'name' 			=> __( 'Sidebar3' ),
        	'description'	=> __( 'Moy Sidebar.' ),
        	'before_widget' => '<div id="%1$s" class="my_widget %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<h3 class="my_widget-title">',
        	'after_title'   => '</h3>'
        )
       );
}

function reg_sidebar_footer() {
    register_sidebar(
      array(
      		'id' 			=> 'sidebar-footer',
        	'name' 			=> __( 'footer' ),
        	'description'	=> __( 'footer form.' ),
        	'before_widget' => '<div id="%1$s" class="my_widget %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<h3 class="my_widget-title">',
        	'after_title'   => '</h3>'
        )
       );
}

function reg_sidebar_telephone() {
    register_sidebar(
      array(
      		'id' 			=> 'sidebar-telephone',
        	'name' 			=> __( 'Телефон' ),
        	'description'	=> __( 'telephone form.' ),
        	'before_widget' => '<div id="%1$s" class="header__navmenu-buttom %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<a class="header__navmenu-namber">',
        	'after_title'   => '</a>'
        )
       );
}

function reg_sidebar_about() {
    register_sidebar(
      array(
      		'id' 			=> 'about-text',
        	'name' 			=> __( 'Текст на главной' ),
        	'description'	=> __( 'text header.' ),
        	'before_widget' => '<div id="%1$s" class="about__inner %2$s">',
        	'after_widget'  => '</div>',
        	'before_title'  => '<p class="about__lode">',
        	'after_title'   => '</p>'
        )
       );
}

add_action( 'widgets_init', 'tomskpro_widgets_init' );

add_action( 'widgets_init', 'reg_sidebar_form' );

add_action( 'widgets_init', 'reg_sidebar_footer' );

add_action( 'widgets_init', 'reg_sidebar_mobile' );

add_action( 'widgets_init', 'reg_sidebar_about' );

add_action( 'widgets_init', 'reg_sidebar_telephone' );


/**
 * Enqueue scripts and styles.
 */
function tomskpro_scripts() {
	wp_enqueue_style( 'tomskpro-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tomskpro-style', 'rtl', 'replace' );

	wp_enqueue_script( 'tomskpro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tomskpro_scripts' );


add_action( 'wp_enqueue_scripts', 'jquery_lib' );

// Подключаем джейквери

function jquery_lib(){
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	// wp_enqueue_script( 'cube', get_template_directory_uri() . '/assests/js/cube.js', array('jquery'), null, true);
	// wp_enqueue_script( 'main', get_template_directory_uri() . '/assests/js/main.js', array('jquery'), null, true);

} 

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

/**
* Добавляет блок для ввода контактных данных
*/
function mytheme_customize_register( $wp_customize ) {
	/*
	Добавляем секцию в настройки темы
	*/
	$wp_customize->add_section(
	// ID
	'data_site_section',
	// Массив аргументов
	array(
	'title' => 'Контактные данные',
	'capability' => 'edit_theme_options',
	'description' => "Тут можно указать контактные данные"    )
	);
	/*
	Добавляем поле контактных данных
	*/
	$wp_customize->add_setting(
	// ID
	'theme_contacttext',
	// Массив аргументов
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	// ID
	'theme_contacttext_control',
	// Массив аргументов
	array(
	'type' => 'text',
	'label' => "Телефон",
	'section' => 'data_site_section',
	'settings' => 'theme_contacttext'
	)
	);
	/*
	Добавляем поле телефона site_telephone
	*/
	$wp_customize->add_setting(
	// ID
	'site_telephone',
	// Массив аргументов
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	// ID
	'site_telephone_control',
	// Массив аргументов
	array(
	'type' => 'text',
	'label' => "WhatsApp(телефон)",
	'section' => 'data_site_section',
	'settings' => 'site_telephone'
	)
	);
	}
	add_action( 'customize_register', 'mytheme_customize_register' );

add_filter( 'wp_sitemaps_enabled', '__return_false' );

add_filter( 'excerpt_length', function(){
	return 7;
} );