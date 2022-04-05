<?php
register_nav_menus(array(
	"primary_menu"=>"Main Header"
));





function my_posts() {
	$labels = array(
	  'name'               => _x( 'My posts', 'post type general name' ),
	  'singular_name'      => _x( 'My post', 'post type singular name' ),
	  'add_new'            => _x( 'Add New', 'book' ),
	  'add_new_item'       => __( 'Add New My posts' ),
	  'edit_item'          => __( 'Edit My post' ),
	  'new_item'           => __( 'New My post' ),
	  'all_items'          => __( 'All My posts' ),
	  'view_item'          => __( 'View My post' ),
	  'search_items'       => __( 'Search My posts' ),
	  'not_found'          => __( 'No My posts found' ),
	  'not_found_in_trash' => __( 'No My posts found in the Trash' ), 
	  'parent_item_colon'  =>'' ,
	  'menu_name'          => 'My posts'
	);
	$args = array(
	  'labels'        => $labels,
	  'description'   => 'My special post type ',
	  'public'        => true,
	  'menu_position' => 5,
	  'supports'      => array( 'title', 'editor', 'thumbnail','excerpt', 'comments' ),
	  'has_archive'   => true,
	);
	register_post_type( 'My posts', $args ); 
  }
  add_action( 'init', 'my_posts' );


// common class create custom route 

	class Latest_route_Controller extends WP_REST_Controller {
		protected $namespace;
		protected $path;
		protected $getItem;

		public function __construct( $namespace, $path,$getItem)
    {
        $this->namespace   = $namespace;
        $this->path = $path;
		$this->getItem = $getItem;
    }
		public function register_routes() {
	  
		  register_rest_route( $this->namespace,'/'.$this->path, [
			array(
			  'methods'             => 'GET',
			  'callback'            => $this->getItem
				  ),
	  
			  ]);     
		  }
	  }
	 
// ---------------get header--------------------------
add_action('rest_api_init', function () {   
	$latest_route_controller = new Latest_route_Controller('custom/v1','header',"custom_api_callback_function");         
   $latest_route_controller->register_routes();
});


function custom_api_callback_function(){

    
	$menuLocations = get_nav_menu_locations();
	$menuID = $menuLocations['primary_menu']; 
	
	$primaryNav = wp_get_nav_menu_items($menuID);

    foreach( $primaryNav as $k => $v) {
        $nav_data[$v->ID]['ID'] = $v->ID;
        $nav_data[ $v->ID ][ 'title' ] = $v->title;
        $nav_data[ $v->ID ][ 'url' ] = $v->url;
    }

    wp_reset_postdata();

    return rest_ensure_response( $nav_data );
}


//------------------------get post by ID----------------------
add_action('rest_api_init', function () {           
	$latest_route_controller = new Latest_route_Controller('custom/v1','posts/(?P<category_id>\d+)',"post_api_callback_function");
   $latest_route_controller->register_routes();
});


function post_api_callback_function(){

    $args = array(
		'category' => $request['category_id']
     );

   $posts = get_posts($args);


    if (empty($posts)) {

		return new WP_Error( 'empty_category', 'there is no post in this category', array( 'status' => 404 ) );
        }
return new WP_REST_Response($posts, 200);
}
?>