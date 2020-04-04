<?php

// Load themes CSS
	function theme_styles() {
		/*wp_enqueue_style( 'text', get_template_directory_uri() . '/css/text.css' );*/
		wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );

    /* Compiled CSS */
    wp_enqueue_style( 'base', get_template_directory_uri() . '/css/index.css' );

    /* Compiled CSS */
    /*wp_enqueue_style( 'grid', get_template_directory_uri() . '/wwc/build/static/css/main.2651c35c.css' );*/
	}

  function theme_js() {
    // Register first then enqueue on certain pages with a conditional
    wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme' );

    wp_register_script( 'sponsors', get_template_directory_uri() . '/js/sponsors.js', '', '', true );
    wp_enqueue_script( 'sponsors' );

    /* Main Bundle */
    /*React code disabled temporarily*/
    /*wp_enqueue_script( 'grid', get_template_directory_uri() . '/wwc/build/static/js/main.1e753e42.js', '', '', true );*/

    // or just enque it for all pages
   // wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
   }

add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );


//enable custom menues
add_theme_support( 'menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'nav-left' => __( 'Main Left Menu' ),
      'nav-right' => __( 'Main Right Menu' ),
      'mobile' => __( 'Mobile Menu' ),
      'footer' => __( 'Footer Menu' ),
      'footer-navigation' => __( 'Footer Navigation' ),
      'footer-distilleries' => __( 'Footer Distilleries' ),
      'bottom-footer-navigation' => __( 'Bottom Footer Navigation' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Enable Featured image
add_theme_support( 'post-thumbnails' );



/**
 * Disable admin bar on the frontend of your website
 * for subscribers.
 */
function themeblvd_disable_admin_bar() {
    if ( ! current_user_can('edit_posts') ) {
        add_filter('show_admin_bar', '__return_false');
        //show_admin_bar(false);
    }
}
//add_action( 'after_setup_theme', 'themeblvd_disable_admin_bar' );
add_action( 'init', 'themeblvd_disable_admin_bar' );
 
/**
 * Redirect back to homepage and not allow access to
 * WP admin for Subscribers.
 */
function themeblvd_redirect_admin(){
    if ( ! defined('DOING_AJAX') && ! current_user_can('edit_posts') ) {
        wp_redirect( site_url() );
        show_admin_bar(false); //remove???
        exit;      
    }
}
add_action( 'admin_init', 'themeblvd_redirect_admin' );

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
   <!--  <h3 class="admin_author_title"><?php //_e("Author Info", "blank"); ?></h3> -->
    
      <table class="form-table admin_author_fields">
      <tr>
          <th><label for="col-name"><?php _e("About Author"); ?></label></th>
          <td>
              <textarea rows="5" cols="30" name="author-bio" id="author-bio" value="<?php echo esc_attr( get_the_author_meta( 'author-bio', $user->ID ) ); ?>" class="regular-text" />
              </textarea><br />
              <span class="description"><?php _e("Please enter a wee bit about the author."); ?></span>
              
          </td>
      </tr>
      <tr>
          <th><label for="author-img"><?php _e("Author Image"); ?></label></th>
          <td>
              <input type="text" name="author-img" id="author-img" value="<?php echo esc_attr( get_the_author_meta( 'author-img', $user->ID ) ); ?>" class="regular-text" /><br />
              <!-- <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image"><br /> -->
              <span class="description"><?php _e("Please enter your author image url."); ?></span><br />
              <img width="150" src="<?php echo esc_attr( get_the_author_meta( 'author-img', $user->ID ) ); ?>" />
          </td>
      </tr>
      
      </table>
   
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'author-bio', $_POST['author-bio'] );
    update_user_meta( $user_id, 'author-img', $_POST['author-img'] );
}

/*end add new profile fields*/

/*Media Uploader*/
/*function enqueue_media_uploader()
{
    wp_enqueue_media();
}

add_action("admin_enqueue_scripts", "enqueue_media_uploader");*/



/*Hide admin bar from subscribers*/
/*add_action('set_current_user', 'cc_hide_admin_bar');
function cc_hide_admin_bar() {
  if (!current_user_can('edit_posts')) {
    show_admin_bar(false);
  }
}*/



add_action('admin_head', 'subscriber_styles');

function subscriber_styles() {
  if (!current_user_can('edit_posts')) {
    echo '<style>
      #wp-admin-bar-wp-logo, #footer-thankyou, #footer-upgrade, .menu-icon-dashboard, .user-admin-color-wrap, .show-admin-bar, #contextual-help-link, #adminmenuback, #adminmenuwrap, #wp-admin-bar-edit-profile, .wp-admin #wpadminbar #wp-admin-bar-site-name>.ab-item:before, .admin_author_title, .admin_author_fields {
        display: none;
      } 
      #wpcontent, #wpfooter {
        margin-left: 15px;
      }
      .button-primary {
        background: orange;
      }
      #wpadminbar {
        display: none !important;
      }
    </style>';
  }
}


function set_default_admin_color($user_id) {
    $args = array(
        'ID' => $user_id,
        'admin_color' => 'coffee'
    );
    wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color');


//add_action( 'login_init', 'wpse149411_login_redirect' );

/*function wpse149411_login_redirect() {
    wp_redirect( site_url( 'http://localhost:8888/wp-sites/weewhiskyconnection/' ) );
    exit;
}*/

function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/left-arrow.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
 
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');


/*function remove_page_from_query_string($query_string)
{ 
    if(isset($query_string['page'])){
      if ($query_string['name'] == 'page') {
          unset($query_string['name']);
          $query_string['paged'] = $query_string['page'];
      } 
    }     
    return $query_string;
}*/
//add_filter('request', 'remove_page_from_query_string');







/* Taxonomies */
add_action( 'init', 'create_brand_tax' );

function create_brand_tax() {
  register_taxonomy(
    'brand',
    'products',
    array(
      'label' => __( 'Brands' ),
      'rewrite' => array( 'slug' => 'brand' ),
      'hierarchical' => false,
    )
  );
}

add_action( 'init', 'create_cat_tax' );

function create_cat_tax() {
  register_taxonomy(
    'type',
    'products',
    array(
      'label' => __( 'Type' ),
      'rewrite' => array( 'slug' => 'type' ),
      'hierarchical' => false,
    )
  );
}

add_action( 'init', 'create_region_tax' );

function create_region_tax() {
  register_taxonomy(
    'region',
    'products',
    array(
      'label' => __( 'Regions' ),
      'rewrite' => array( 'slug' => 'region' ),
      'hierarchical' => false,
    )
  );
}

add_action( 'init', 'create_price_tax' );

function create_price_tax() {
  register_taxonomy(
    'price',
    'products',
    array(
      'label' => __( 'Prices' ),
      'rewrite' => array( 'slug' => 'price' ),
      'hierarchical' => false,
    )
  );
}

add_action( 'init', 'create_attribute_tax' );

function create_attribute_tax() {
  register_taxonomy(
    'attribute',
    'products',
    array(
      'label' => __( 'Attributes' ),
      'rewrite' => array( 'slug' => 'attribute' ),
      'hierarchical' => false,
    )
  );
}

//Register widgetized areas and sidebars
if (function_exists('register_sidebar')) {  
  register_sidebar(array(  
    'name' => 'Sidebar Widgets',  
    'id'   => 'sidebar-widgets',  
    'description'   => 'Widget Area',  
    'before_widget' => '<div class="sidebar-widget">',  
    'after_widget'  => '</div>',  
    'before_title'  => '<div class="widget-title">',  
    'after_title'   => '</div>'  
  ));  
}

if (function_exists('register_sidebar')) {  
  register_sidebar(array(  
    'name' => 'Search Page',  
    'id'   => 'search-page-widgets',  
    'description'   => 'Search Widget',  
    'before_widget' => '<div class="search-page-widget">',  
    'after_widget'  => '</div>',  
    'before_title'  => '<div class="search-page-title">',  
    'after_title'   => '</div>'  
  ));  
}

//Remove Private and Protected
/*function the_title_trim($title) {

	$title = esc_attr($title);

	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);

	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);

	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');*/




function custom_short_excerpt($excerpt){
  $limit = 100;

  if (strlen($excerpt) > $limit) {
    return substr($excerpt, 0, strpos($excerpt, ' ', $limit));
  }

  return $excerpt;
}

add_filter('the_excerpt', 'custom_short_excerpt');



// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
  global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '">Read Full Article</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



/* Allows authors to only see their own posts */
function posts_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'edit_others_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');


// Remove author publishing access
function return_publish_permissions() {
$user = new WP_User(11);
//$user = get_role( 'author' );
$user->add_cap( 'publish_posts' );
}
register_deactivation_hook( __FILE__, 'return_publish_permissions' );

function take_away_publish_permissions() {
$user = new WP_User(11);
//$user = get_role( 'author' );
$user->add_cap('publish_posts',false);
}
register_activation_hook( __FILE__, 'take_away_publish_permissions' );


/*Change Howdy*/
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );
 
function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
  $user_id = get_current_user_id();
  $current_user = wp_get_current_user();
  $profile_url = get_edit_profile_url( $user_id );
   
  if ( 0 != $user_id ) {
    /* Add the "My Account" menu */
    $avatar = get_avatar( $user_id, 28 );
    $howdy = sprintf( __('Welcome, %1$s'), $current_user->display_name );
    $class = empty( $avatar ) ? '' : 'with-avatar';
     
    $wp_admin_bar->add_menu( array(
    'id' => 'my-account',
    'parent' => 'top-secondary',
    'title' => $howdy . $avatar,
    'href' => $profile_url,
    'meta' => array(
    'class' => $class,
    ),
    ) );
   
  }
}

add_filter( 'the_content', 'prefix_insert_post_ads' );
function prefix_insert_post_ads( $content ) {
 $ad_code = '<div id="ga_os_17756291" style="text-align: center; overflow: visible; visibility: visible;"> </div><br>';
 if ( is_single() && ! is_admin() ) {
 return prefix_insert_after_paragraph( $ad_code, 2, $content );
 }
return $content;
}
 
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
 $closing_p = '</p>';
 $paragraphs = explode( $closing_p, $content );
 foreach ($paragraphs as $index => $paragraph) {
 if ( trim( $paragraph ) ) {
 $paragraphs[$index] .= $closing_p;
 }
 if ( $paragraph_id == $index + 1 ) {
 $paragraphs[$index] .= $insertion;
 }
 }
 
 return implode( '', $paragraphs );
}

?>