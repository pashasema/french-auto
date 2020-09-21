<?php
/**
 * french-avto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package french-avto
 */

if ( ! function_exists( 'french_avto_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function french_avto_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on french-avto, use a find and replace
		 * to change 'french-avto' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'french-avto', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'french-avto' ),
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
		add_theme_support( 'custom-background', apply_filters( 'french_avto_custom_background_args', array(
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
add_action( 'after_setup_theme', 'french_avto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function french_avto_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'french_avto_content_width', 640 );
}
add_action( 'after_setup_theme', 'french_avto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function french_avto_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'french-avto' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'french-avto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'french_avto_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function french_avto_scripts() {

  //css
	wp_enqueue_style('fontsCss', get_template_directory_uri() . '/css/fonts.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('headerCss', get_template_directory_uri() . '/header.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('mainCss', get_template_directory_uri() . '/css/main.min.css', array(), '1.0.0', 'all');
	//js
	wp_enqueue_script('libsJs', get_template_directory_uri() . '/js/libs.min.js', array(), '1.0.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true);
	
	wp_enqueue_style( 'french-avto-style', get_stylesheet_uri() );

	wp_enqueue_script( 'french-avto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'french-avto-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'french_avto_scripts' );



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


//изменить длину обрезанного текста поста
add_filter( 'excerpt_length', function(){
	return 20;
} );
//изменить символ на конце обрезанного текста поста
add_filter('excerpt_more', function($more) {
	return '...';
});

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'  => 'Основная информация',
		'menu_title'  => 'Основная информация',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Контактная информация',
		'menu_title'  => 'Контактная информация',
		'parent_slug' => 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Блок "Почему стоит обратиться к нам?"',
		'menu_title'  => 'Блок "Почему стоит обратиться к нам?"',
		'parent_slug' => 'theme-general-settings',
	));
		acf_add_options_sub_page(array(
		'page_title'  => 'Блок "Не трать время и деньги на поиск автосервиса"',
		'menu_title'  => 'Блок "Не трать время и деньги на поиск автосервиса"',
		'parent_slug' => 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Спецпредложение',
		'menu_title'  => 'Спецпредложение',
		'parent_slug' => 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title'  => 'Подвал сайта',
		'menu_title'  => 'Подвал сайта',
		'parent_slug' => 'theme-general-settings',
	));

}

	//adding custom post-type and taxonomy
function template_custom_post_type (){

	$labels = array(
		'name' => 'Услуги и цены',
		'singular_name' => 'Услуга',
		'add_new' => 'Добавить услугу',
		'all_items' => 'Все услуги',
		'add_new_item' => 'Добавить новую услугу',
		'edit_item' => 'Редактировать услугу',
		'new_item' => 'Новая услуга',
		'view_item' => 'Показать услугу',
		'search_item' => 'Поиск услуги',
		'not_found' => 'Услуга не найдена',
		'not_found_in_trash' => 'В корзине услуга не найдена',
		'parent_item_colon' => 'Родительская услуга'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array('with_front' => false),
		'capability_type' => 'post',
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('uslugi',$args);
}
add_action('init','template_custom_post_type');
function template_custom_taxonomies() {

	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Категории',
		'singular_name' => 'Категории',
		'search_items' => 'Поиск Категории',
		'all_items' => 'Все категории',
		'parent_item' => 'Родительская категория',
		'parent_item_colon' => 'Родительская категория:',
		'edit_item' => 'Редактировать категорию',
		'update_item' => 'Обновить категорию',
		'add_new_item' => 'Добавить новую категорию',
		'new_item_name' => 'Новая категория',
		'menu_name' => 'Категории'
	);

	$args = array(
		'public' => false, 
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categoria', 'with_front' => false),
	);

	register_taxonomy('categoria', array('uslugi'), $args);
}
add_action( 'init' , 'template_custom_taxonomies' );


  //АКЦИИ POST-TYPE
	//adding custom post-type and taxonomy
function template_custom_post_type_akcii (){

	$labels = array(
		'name' => 'Акции',
		'singular_name' => 'Акция',
		'add_new' => 'Добавить акцию',
		'all_items' => 'Все акции',
		'add_new_item' => 'Добавить новую акцию',
		'edit_item' => 'Редактировать акцию',
		'new_item' => 'Новая акция',
		'view_item' => 'Показать акцию',
		'search_item' => 'Поиск акции',
		'not_found' => 'Акция не найдена',
		'not_found_in_trash' => 'В корзине акция не найдена',
		'parent_item_colon' => 'Родительская акция'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array('with_front' => true),
		'capability_type' => 'post',
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 6,
		'exclude_from_search' => false
	);
	register_post_type('akcii',$args);
}
add_action('init','template_custom_post_type_akcii');


	//adding custom post-type and taxonomy
function template_custom_post_type_useful_mater (){

	$labels = array(
		'name' => 'Полезные материалы',
		'singular_name' => 'Материал',
		'add_new' => 'Добавить материал',
		'all_items' => 'Все материалы',
		'add_new_item' => 'Добавить новый материал',
		'edit_item' => 'Редактировать материал',
		'new_item' => 'Новый материал',
		'view_item' => 'Показать материал',
		'search_item' => 'Поиск материалов',
		'not_found' => 'Материал не найдена',
		'not_found_in_trash' => 'В корзине материал не найден',
		'parent_item_colon' => 'Родительский материал'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array('with_front' => true),
		'capability_type' => 'post',
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'menu_position' => 7,
		'exclude_from_search' => false
	);
	register_post_type('poleznye-materialy',$args);
}
add_action('init','template_custom_post_type_useful_mater');

add_image_size( 'mytheme-mini', 1, 1, true );

