<?php
/*
 * custom after setup theme
 */

if ( ! function_exists( 'kr_theme_setup' ) ) {
	function kr_theme_setup() {

		load_theme_textdomain( 'tech', KR_THEME_DIR . '/languages/' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'title-tag' );

		add_image_size( 'kr-img-1446x633', 1446, 633, true );  // services
		add_image_size( 'kr-img-525x427', 525, 427, true );  // about in
		add_image_size( 'kr-img-140x137', 140, 137, true );  // sttaf
		add_image_size( 'kr-img-230x430', 230, 430, true );  // slider
		add_image_size( 'kr-img-350x302', 350, 302, true );  // projects

		register_nav_menus( array(
			'primary_menu' => esc_html__( 'Primary Menu', 'kr' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'kr' ),
		) );

		if ( file_exists( KR_THEME_INC_DIR . 'wp_bootstrap_navwalker.php' ) ) {
			require_once KR_THEME_INC_DIR . 'wp_bootstrap_navwalker.php';
		}

		if ( file_exists( KR_THEME_INC_DIR . 'post-types.php' ) ) {
			require_once KR_THEME_INC_DIR . 'post-types.php';
		}

	}

	add_action( 'after_setup_theme', 'kr_theme_setup' );
}
/**
 * load theme scripts
 */
if ( ! function_exists( 'kr_enqueue_scripts' ) ) {
	function kr_enqueue_scripts() {

		// Css files
		$styles = array(
			'fonts-awesome' => 'lib/all.min.css',
			// 'fonts'         => 'font-kr.css',
			'bootstrap'     => 'lib/bootstrap.min.css',
			'style'       => 'style.css',
			// 'ar-style'       => get_locale() == 'ar' ? 'style-ar.css' : '',

		);
		foreach ( $styles as $key => $sc ) {
			wp_register_style( $key, KR_THEME_CSS_URI . $sc, array(), '1.0.0' );
			wp_enqueue_style( $key );
		}
		wp_enqueue_style( 'style', get_stylesheet_uri() );

		//Javascript files
		$scripts = array(
			'jquery' 				=> 'lib/jquery-3.7.1.min.js',
			'jquery.easing' 		=> 'lib/jquery.easing.min.js',
			'bootstrap-min' 		=> 'lib/bootstrap.bundle.min.js',
			'custom'        		=> 'script.js'
		);

		foreach ( $scripts as $alias => $src ) {

			wp_enqueue_script( $alias, KR_THEME_JS_URI . $src, array( 'jquery' ), '3.7.1', true );

		}

		/*kr_open_graph();*/
	}

	add_action( 'wp_enqueue_scripts', 'kr_enqueue_scripts' );
}

	function extend_excerpt_length ($length) {
		
		if(is_author()) {
			
			return 25;
		}
		
		else if(is_category()) {
			return 35;
		}
		else{
			return 20;
		}
	}

	add_filter('excerpt_length', 'extend_excerpt_length');

	function change_excerpt_dots ($more) {
		
		return ' ...';
		
	}

	add_filter('excerpt_more', 'change_excerpt_dots');

/*
 * Set open graph meta data
 */
if ( ! function_exists( 'kr_open_graph' ) ) {
	function kr_open_graph() {
		global $post;
		$post_thumb = '';
		if ( function_exists( "has_post_thumbnail" ) && has_post_thumbnail() ) {
			$post_thumb = get_the_post_thumbnail_url( $post->ID );
		}
		$description = get_bloginfo( 'description' );
		$type        = 'website';
		if ( is_singular() ) {
			$description = strip_tags( $post->post_content );
			$type        = 'article';
			?>
            <meta property="og:url" content="<?php the_permalink(); ?>"/>
			<?php
		}
		?>
        <title><?php wp_title( '| ', true, 'right' ); ?></title>
		<?php
		$description = get_kr_options( 'author-website' );
		$keywords    = get_kr_options( 'keywords-website' );
		$author      = get_kr_options( 'description-website' );
		?>
        <meta name="description" content="<?php echo $description; ?>"/>
        <meta name="keywords" content="<?php echo $keywords; ?>"/>
        <meta name="author" content="<?php echo $author; ?>"/>

        <link rel="shortcut icon" href='<?php the_kr_options( 'favicon', 'url' ); ?>' type="image/x-icon"/>

		<?php
		if ( ! empty( $post_thumb ) && is_singular() ) {
			echo '<meta property="og:image" content="' . $post_thumb . '" />' . "\n";
		}
	}
}

/*
 * Set kr_wp_title
 */
if ( ! function_exists( 'kr_wp_title' ) ) {
	function kr_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() ) {
			return $title;
		}

		$title .= get_bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}

		if ( $paged >= 2 || $page >= 2 ) {
			$title = "$title $sep " . sprintf( __( 'Page %s', 'orangeidea' ), max( $paged, $page ) );
		}

		return $title;
	}

	add_filter( 'wp_title', 'kr_wp_title', 10, 2 );
}


/*
 * Set favicon to admin panel
 */
if ( ! function_exists( 'kr_admin_panel' ) ) {
	function kr_admin_panel() {
		?>
        <link rel="shortcut icon" href="<?php the_kr_options( 'favicon', 'url' ); ?>"/>
		<?php
	}

	add_action( 'wp_head', 'kr_admin_panel' );
	add_action( 'admin_head', 'kr_admin_panel' );
}

if ( ! function_exists( 'kr_admin_scripts' ) ) {
	function kr_admin_scripts() {
		wp_enqueue_style( 'kr-custom-css', KR_THEME_INC_CSS . 'kr-custom.css' );
		wp_enqueue_script( 'kr-custom-js', KR_THEME_INC_JS . 'kr-custom.js' );
		wp_enqueue_script(
			'google-maps',
			'https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyDjNNH8UqB1PkU3XVrkkzwOuFA0t2owkpM'
		);
	}

	add_action( 'admin_enqueue_scripts', 'kr_admin_scripts' );
}

function _custom_packs_list( $current_packs ) {
	/**
	 * $current_packs is an array of pack names.
	 * You should return which one you would like to show in the picker.
	 */
	return array( 'font-awesome' );
}

add_filter( 'fw:option_type:icon-v2:filter_packs', '_custom_packs_list' );


function remove_menus() {

	//remove_menu_page( 'index.php' );                  //Dashboard
	//remove_menu_page( 'jetpack' );                    //Jetpack*
	//remove_menu_page( 'edit.php' );                   //Posts
	//remove_menu_page( 'upload.php' );                 //Media
	//remove_menu_page( 'edit.php?post_type=page' );    //Pages
	//remove_menu_page( 'edit-comments.php' );          //Comments
	//remove_menu_page( 'themes.php' );                 //Appearance
	//remove_menu_page( 'plugins.php' );                //Plugins
	//remove_menu_page( 'users.php' );                  //Users
	//remove_menu_page( 'tools.php' );                  //Tools
	//remove_menu_page( 'options-general.php' );        //Settings

}

add_action( 'admin_menu', 'remove_menus' );


/*function _fw_page_builder_wrapper_class($class)
{
	return  'my-custom-wrapper-class';
}
add_filter( 'fw_ext_page_builder_content_wrapper_class', '_fw_page_builder_wrapper_class' );*/


/**
 * Allow to remove method for an hook when, it's a class method used and class don't have variable, but you know the class name :)
 */
function remove_filters_for_anonymous_class( $hook_name = '', $class_name = '', $method_name = '', $priority = 0 ) {
	global $wp_filter;
	// Take only filters on right hook name and priority
	if ( ! isset( $wp_filter[ $hook_name ][ $priority ] ) || ! is_array( $wp_filter[ $hook_name ][ $priority ] ) ) {
		return false;
	}
	// Loop on filters registered
	foreach ( (array) $wp_filter[ $hook_name ][ $priority ] as $unique_id => $filter_array ) {
		// Test if filter is an array ! (always for class/method)
		if ( isset( $filter_array['function'] ) && is_array( $filter_array['function'] ) ) {
			// Test if object is a class, class and method is equal to param !
			if ( is_object( $filter_array['function'][0] ) && get_class( $filter_array['function'][0] ) && get_class( $filter_array['function'][0] ) == $class_name && $filter_array['function'][1] == $method_name ) {
				// Test for WordPress >= 4.7 WP_Hook class (https://make.wordpress.org/core/2016/09/08/wp_hook-next-generation-actions-and-filters/)
				if ( is_a( $wp_filter[ $hook_name ], 'WP_Hook' ) ) {
					unset( $wp_filter[ $hook_name ]->callbacks[ $priority ][ $unique_id ] );
				} else {
					unset( $wp_filter[ $hook_name ][ $priority ][ $unique_id ] );
				}
			}
		}
	}

	return false;
}

add_action( 'wp_head', function () {
	remove_filters_for_anonymous_class( 'the_content', 'FW_Extension_Page_Builder', '_theme_filter_prevent_autop', 1 );
} );


function my_nav_custom() {
	$wrap = '<ul id="%1$s" class="%2$s">';
	$wrap .= '%3$s';
	// $wrap .= '
    //         <li>
    //             <a href="javascript:void(0)" class="btn-search">
    //                 <i class="kr-search"></i>
    //             </a>
    //         </li>   
    // ';
	$wrap .= '</ul>';

	return $wrap;
}

if (!function_exists('law_firm_prepare_pagination')) {

	function law_firm_prepare_pagination($pages = '' , $range = 4) {
		global $paged;
		$showitems = ( $range * 2 ) + 1;
		if (empty($paged)) {
			$current_page = 1;
		}
		$current_page = $paged;
		if ($pages == '') {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if (!$pages) {
				$pages = 1;
			}
		} else {
			$pages = ceil($pages / $range);
		}

		if (1 != $pages) {
			echo "<nav class=\"post-pagination\"><ul class=\"list-inline\">";
			if ($current_page > 2 && $current_page > $range + 1 && $showitems < $pages) {
				//echo "<a href='" . get_pagenum_link(1) . "'>&laquo; First</a>";
			}
			if ($current_page > 1) {
				echo "<li class='prev'><a href='" . get_pagenum_link($current_page - 1) . "'><span class=\"txt\">السابق</span><span class=\"btn-prev\"><i class=\"fa fa-angle-left\"></i></span></a></li>";
			}
			for ($i = 1; $i <= $pages; $i++) {
				if (1 != $pages && (!( $i >= $current_page + $range + 1 || $i <= $current_page - $range - 1 ) || $pages <= $showitems )) {
					echo ( $paged == $i ) ? "<li class=\"active\"><a href='javascript:;'>" . $i . "</a></li>" : "<li><a href='" . get_pagenum_link($i) . "' class=\"inactive\">" . $i . "</a></li>";
				}
			}
			if ($current_page < $pages) {
				echo "<li class='next'><a href=\"" . get_pagenum_link($current_page + 1) . "\"><span class=\"btn-next\"><i class=\"fa fa-angle-right\"></i></span><span class=\"txt\">التالى</span></a></li>";
			}
			if ($current_page < $pages - 1 && $current_page + $range - 1 < $pages && $showitems < $pages) {
				//echo "<a href='" . get_pagenum_link($pages) . "'>Last &raquo;</a>";
			}
			echo "</ul></nav>";
		}
	}

}


