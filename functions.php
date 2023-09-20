<?php

//load stylesheets
function load_stylesheets()
{	
	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.1.1/css/all.css');
	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap');

	wp_register_style('animatecss', get_template_directory_uri() .'/css/animate.min.css', array(), false, 'all');
	wp_enqueue_style('animatecss');

	wp_register_style('pagescss', get_template_directory_uri() .'/css/pages.css', array(), false, 'all');
	wp_enqueue_style('pagescss');

	wp_register_style('bootstrapcss', get_template_directory_uri() .'/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrapcss');

	wp_register_style('datepickercss', get_template_directory_uri() .'/css/date-picker.min.css', array(), false, 'all');
	wp_enqueue_style('datepickercss');

	wp_register_style('flaticoncss', get_template_directory_uri() .'/css/flaticon.css', array(), false, 'all');
	wp_enqueue_style('flaticoncss');

	wp_register_style('meanmenucss', get_template_directory_uri() .'/css/meanmenu.min.css', array(), false, 'all');
	wp_enqueue_style('meanmenucss');

	wp_register_style('odometercss', get_template_directory_uri() .'/css/odometer.min.css', array(), false, 'all');
	wp_enqueue_style('odometercss');

	wp_register_style('owlcarouselcss', get_template_directory_uri() .'/css/owl.carousel.min.css', array(), false, 'all');
	wp_enqueue_style('owlcarouselcss');

	wp_register_style('owlthemecss', get_template_directory_uri() .'/css/owl.theme.default.min.css', array(), false, 'all');
	wp_enqueue_style('owlthemecss');

	wp_register_style('remixiconcss', get_template_directory_uri() .'/css/remixicon.css', array(), false, 'all');
	wp_enqueue_style('remixiconcss');

	wp_register_style('responsivecss', get_template_directory_uri() .'/css/responsive.css', array(), false, 'all');
	wp_enqueue_style('responsivecss');

	wp_register_style('stylecss', get_template_directory_uri() .'/css/style.css', array(), false, 'all');
	wp_enqueue_style('stylecss');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


//load JS scripts
function addjs()
{
	wp_deregister_script('jquery');

	wp_register_script('jquery', get_template_directory_uri() .'/js/jquery.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery');

	wp_register_script('ajaxchimpjs', get_template_directory_uri() .'/js/ajaxchimp.min.js', array(), 1, 1, 1);
	wp_enqueue_script('ajaxchimpjs');

	wp_register_script('appearjs', get_template_directory_uri() .'/js/appear.min.js', array(), 1, 1, 1);
	wp_enqueue_script('appearjs');

	wp_register_script('bootstrapbundlejs', get_template_directory_uri() .'/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrapbundlejs');
	
	wp_register_script('bootstrapdatepickerjs', get_template_directory_uri() .'/js/bootstrap-datepicker.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrapdatepickerjs');

	wp_register_script('contactformjs', get_template_directory_uri() .'/js/contact-form-script.js', array(), 1, 1, 1);
	wp_enqueue_script('contactformjs');

	wp_register_script('customjs', get_template_directory_uri() .'/js/custom.js', array(), 1, 1, 1);
	wp_enqueue_script('customjs');

	wp_register_script('formvalidatorjs', get_template_directory_uri() .'/js/form-validator.min.js', array(), 1, 1, 1);
	wp_enqueue_script('formvalidatorjs');

	wp_register_script('jarallaxjs', get_template_directory_uri() .'/js/jarallax.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jarallaxjs');

	wp_register_script('magnificpopupjs', get_template_directory_uri() .'/js/magnific-popup.min.js', array(), 1, 1, 1);
	wp_enqueue_script('magnificpopupjs');

	wp_register_script('meanmenujs', get_template_directory_uri() .'/js/meanmenu.min.js', array(), 1, 1, 1);
	wp_enqueue_script('meanmenujs');

	wp_register_script('odometerjs', get_template_directory_uri() .'/js/odometer.min.js', array(), 1, 1, 1);
	wp_enqueue_script('odometerjs');

	wp_register_script('owlcarouseljs', get_template_directory_uri() .'/js/owl.carousel.min.js', array(), 1, 1, 1);
	wp_enqueue_script('owlcarouseljs');

	wp_register_script('wowjs', get_template_directory_uri() .'/js/wow.min.js', array(), 1, 1, 1);
	wp_enqueue_script('wowjs');
}
add_action('wp_enqueue_scripts', 'addjs');



/*Custom Post type start*/
function cw_post_type_events() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Events', 'plural'),
'singular_name' => _x('event', 'singular'),
'menu_name' => _x('Events', 'admin menu'),
'name_admin_bar' => _x('Events', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Event'),
'new_item' => __('New Event'),
'edit_item' => __('Edit Event'),
'view_item' => __('View Events'),
'all_items' => __('All Events'),
'search_items' => __('Search events'),
'not_found' => __('No events notices found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'events-calendar'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-calendar-alt',
);
register_post_type('events', $args);
}
add_action('init', 'cw_post_type_events');


/*Custom Post type start*/
function cw_post_type_careers() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Careers', 'plural'),
'singular_name' => _x('Career', 'singular'),
'menu_name' => _x('Careers', 'admin menu'),
'name_admin_bar' => _x('Careers', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Career notice'),
'new_item' => __('New Career notice'),
'edit_item' => __('Edit Career notice'),
'view_item' => __('View Career notices'),
'all_items' => __('All Careers'),
'search_items' => __('Search career notices'),
'not_found' => __('No career notices found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'careers'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-buddicons-buddypress-logo',
);
register_post_type('Careers', $args);
}
add_action('init', 'cw_post_type_careers');


/*Custom Post type start*/
function cw_post_type_rfqs() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('rfqs', 'plural'),
'singular_name' => _x('RFQ', 'singular'),
'menu_name' => _x('RFQs', 'admin menu'),
'name_admin_bar' => _x('RFQs', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New RFQ'),
'new_item' => __('New RFQ'),
'edit_item' => __('Edit RFQ'),
'view_item' => __('View RFQ'),
'all_items' => __('All RFQs'),
'search_items' => __('Search RFQs'),
'not_found' => __('No RFQs found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'rfqs'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-buddicons-buddypress-logo',
);
register_post_type('rfqs', $args);
}
add_action('init', 'cw_post_type_rfqs');



/*Custom Post type start*/
function cw_post_type_tenders() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Tenders', 'plural'),
'singular_name' => _x('Tender', 'singular'),
'menu_name' => _x('Tenders', 'admin menu'),
'name_admin_bar' => _x('tenders', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Tender'),
'new_item' => __('New Tender notice'),
'edit_item' => __('Edit Tender notice'),
'view_item' => __('View Tender notices'),
'all_items' => __('All Tenders'),
'search_items' => __('Search Tenders'),
'not_found' => __('No tenders found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'tenders'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-buddicons-buddypress-logo',
);
register_post_type('tenders', $args);
}
add_action('init', 'cw_post_type_tenders');


/*Custom Post type start*/
function cw_post_type_councillors() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Councillors', 'plural'),
'singular_name' => _x('Councillor', 'singular'),
'menu_name' => _x('Councillors', 'admin menu'),
'name_admin_bar' => _x('Councillors', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Councillor'),
'new_item' => __('New Councillor'),
'edit_item' => __('Edit Councillor'),
'view_item' => __('View Councillors'),
'all_items' => __('All Councillors'),
'search_items' => __('Search Councillors'),
'not_found' => __('No Councillor found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'councillors'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-buddicons-buddypress-logo',
);
register_post_type('councillors', $args);
}
add_action('init', 'cw_post_type_councillors');


//Widget area support
function widget_arreas_support(){
	register_sidebar(
		array(
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '<div class="col-sm-12 col-md-4 col-lg-4">
            <div class="post-item">',
			'after_widget' => '</div>
          </div>',
			'name' => 'Latest News',
			'id' => 'latest-news',
			'description' => 'Latest News Widget',
		)
	);
}
add_action('widgets_init', 'widget_arreas_support');

//Menu support
add_theme_support('menus');

//Title Tag Support
add_theme_support('title-tag');

//Favicon / Thumbnail Support
add_theme_support('post-thumbnails');

//Favicon / Thumbnail Support
add_theme_support('custom-logo');

add_image_size( 'small-featured', 80 );

add_image_size( 'councillors-cropped', 555, 600, true ); // Creates a cropped new image 200px by 200px high


//Register menus
register_nav_menus(
	array(
			'top-menu' => __('Main Menu', 'theme'),

	)
);

function mytheme_custom_excerpt_length($length){
	return 15;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);


// Budget
/*Custom Post type start*/
function council_budget() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Council Budget', 'plural'),
'singular_name' => _x('budget', 'singular'),
'menu_name' => _x('Budgets', 'admin menu'),
'name_admin_bar' => _x('Budget', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Event'),
'new_item' => __('New Budget'),
'edit_item' => __('Edit Budget'),
'view_item' => __('View Budgets'),
'all_items' => __('All Budgets'),
'search_items' => __('Search budgets'),
'not_found' => __('No budgets found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'council-budget'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-money-alt',
);
register_post_type('council_budget', $args);
}
add_action('init', 'council_budget');


// Council by Laws
/*Custom Post type start*/
function council_by_law() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('Council By Laws', 'plural'),
'singular_name' => _x('Council By Law', 'singular'),
'menu_name' => _x('Council By Laws', 'admin menu'),
'name_admin_bar' => _x('Council By Law', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New By Law'),
'new_item' => __('New Council By Law'),
'edit_item' => __('Edit Council By Law'),
'view_item' => __('View Council By Laws'),
'all_items' => __('All Council By Laws'),
'search_items' => __('Search Council By Laws'),
'not_found' => __('No Council By Laws found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'council-by-law'),
'has_archive' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-welcome-learn-more',
);
register_post_type('council_by_law', $args);
}
add_action('init', 'council_by_law');

// Council Minutes
/*Custom Post type start*/
function council_minutes() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Council Minutes', 'plural'),
    'singular_name' => _x('Council Minutes', 'singular'),
    'menu_name' => _x('Council Minutes', 'admin menu'),
    'name_admin_bar' => _x('Council Minutes', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Council Minutes'),
    'new_item' => __('New Council Minutes'),
    'edit_item' => __('Edit Council Minutes'),
    'view_item' => __('View Council Minutes'),
    'all_items' => __('All Council Minutes'),
    'search_items' => __('Search Council Minutes'),
    'not_found' => __('No Council Minutes found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'council-minutes'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-archive',
    );
    register_post_type('council_minutes', $args);
    }
    add_action('init', 'council_minutes');


// Strategic Plans
/*Custom Post type start*/
function strategic_plans() {
    $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'comments', // post comments
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Strategic Plan', 'plural'),
    'singular_name' => _x('Strategic Plan', 'singular'),
    'menu_name' => _x('Strategic Plan', 'admin menu'),
    'name_admin_bar' => _x('Strategic Plan', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Strategic Plan'),
    'new_item' => __('New Strategic Plan'),
    'edit_item' => __('Edit Strategic Plan'),
    'view_item' => __('View Strategic Plan'),
    'all_items' => __('All Strategic Plans'),
    'search_items' => __('Search Strategic Plan'),
    'not_found' => __('No Strategic Plans found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'strategic-plans'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-book-alt',
    );
    register_post_type('strategic_plans', $args);
    }
    add_action('init', 'strategic_plans');

/*
*===========================================
*Custom Sessions
*===========================================
*/
 
function register_my_session(){
    if( ! session_id() ) {
        session_start();
    }
}

add_action('init', 'register_my_session');
    
    
    

