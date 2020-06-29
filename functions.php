<?php


function frugix_setup() {
	load_theme_textdomain( 'frugix', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800, 800 );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'style-editor.css' );

	register_nav_menus( array(
		'main-menu' => __( 'Main Menu', 'frugix' ),
	) );
	// function register_my_menu() {
	// 	register_nav_menu('header-menu',__( 'Header Menu' ));
	//   }
	//   add_action( 'init', 'register_my_menu' );
	
	//   add_filter( 'wp_nav_menu_items', 'ma_fonction', 10, 2 );

	//   function ma_fonction( $items, $args ) {
	// 	  // Avec $args, tu peux vérifier quel menu tu affiches
	// 	  // $items contient le code HTML généré ( une suite de '<li></li>'...)
	  
	// 	  return $items;
	//   }
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-background', array(
		'default-repeat'     => 'no-repeat',
		'default-position-x' => 'center',
		'default-position-y' => 'center',
		'default-attachment' => 'fixed',
		'default-size'       => 'cover',
		'default-color'      => '#fff',
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 300,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Custom Editor Colors
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Grey', 'frugix' ),
			'slug'  => 'grey',
			'color' => '#bbb',
		),
		array(
			'name'  => __( 'Light Grey', 'frugix' ),
			'slug'  => 'light-grey',
			'color' => '#e4e4e4',
		),
		array(
			'name'  => __( 'Blueberry', 'frugix' ),
			'slug'  => 'blueberry',
			'color' => '#59e',
		),
		array(
			'name'  => __( 'Light Blueberry', 'frugix' ),
			'slug'  => 'light-blueberry',
			'color' => '#bbd6f8',
		),
		array(
			'name'  => __( 'Lime', 'frugix' ),
			'slug'  => 'lime',
			'color' => '#ad5',
		),
		array(
			'name'  => __( 'Light Lime', 'frugix' ),
			'slug'  => 'light-lime',
			'color' => '#ddf1bb',
		),
		array(
			'name'  => __( 'Mango', 'frugix' ),
			'slug'  => 'mango',
			'color' => '#ea4',
		),
		array(
			'name'  => __( 'Light Mango', 'frugix' ),
			'slug'  => 'light-mango',
			'color' => '#f8ddb4',
		),
		array(
			'name'  => __( 'Strawberry', 'frugix' ),
			'slug'  => 'strawberry',
			'color' => '#e46',
		),
		array(
			'name'  => __( 'Light Strawberry', 'frugix' ),
			'slug'  => 'light-strawberry',
			'color' => '#f8b4c2',
		),
	) );

	// Custom Font Sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small', 'frugix' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Big', 'frugix' ),
			'size' => 20,
			'slug' => 'big',
		),
		array(
			'name' => __( 'Huge', 'frugix' ),
			'size' => 28,
			'slug' => 'huge',
		),
	) );
}
add_action( 'after_setup_theme', 'frugix_setup' );



function frugix_scripts() {
	// Main Stylesheet
	wp_enqueue_style( 'frugix-main', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Google Font
	wp_enqueue_style( 'frugix-font', '//fonts.googleapis.com/css?family=Raleway:400,600&display=swap' );

	// Comments Scripts and Styles
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Frugix Scripts
	wp_enqueue_script( 'frugix-js', get_template_directory_uri() . '/js/scripts.js', '', wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'frugix_scripts' );



// Set Content Width
function frugix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'frugix_content_width', 1200 );
}
add_action( 'after_setup_theme', 'frugix_content_width', 0 );



// Enable Widget Areas
function frugix_widgets() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets 1', 'frugix' ),
		'id'            => 'footer-widgets-1',
		'description'   => __( 'Add widgets to the colored footer block.', 'frugix' ),
		'before_widget' => '<section id="%1$s" class="widget col-lg %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets 2', 'frugix' ),
		'id'            => 'footer-widgets-2',
		'description'   => __( 'Add widgets to your footer.', 'frugix' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'frugix_widgets' );

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));


// Enable Frugix Color Theme Options
function frugix_customizer( $wp_customize ) {
	$wp_customize->add_setting( 'frugix_color_theme', array(
		'default'           => 'blueberry',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );
	$wp_customize->add_control( 'frugix_color_theme', array(
		'label'    => __( 'Frugix Color Theme', 'frugix' ),
		'section'  => 'colors',
		'settings' => 'frugix_color_theme',
		'type'     => 'radio',
		'choices'  => array(
			'blueberry'  => __( 'Blueberry', 'frugix' ),
			'lime'       => __( 'Lime', 'frugix' ),
			'mango'      => __( 'Mango', 'frugix' ),
			'strawberry' => __( 'Strawberry', 'frugix' ),
		),
	) );
}
add_action( 'customize_register', 'frugix_customizer' );

// Add Frugix Color Theme to Body Class
function frugix_body_class( $classes ) {
	$frugix_color_theme = get_theme_mod( 'frugix_color_theme' );
	$classes[]          = esc_attr( $frugix_color_theme );
	return $classes;
}
add_filter( 'body_class', 'frugix_body_class' );
