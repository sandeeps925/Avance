<?php
/**
 * Plugin Name: search Panel
 * Description: Load scripts and styles on specific admin menu pages
 * Version: 1.0
 * Author: Sandeep Singh
 */


add_action( 'admin_menu', array ( 'search_panel', 'admin_menu' ) );


class search_panel
{
	
	public static function admin_menu()
	{
	
		$main = add_menu_page(
			'Search Panel',                         // page title
			'Search Panel',                         // menu title
			'manage_options',                  // capability
			'postSearch',                         // menu slug
			array ( __CLASS__, 'render_text_included' ) // callback function
		);
		foreach ( array ( $main, $sub ) as $slug )
		{
			
			add_action(
				"admin_print_styles-$slug",
				array ( __CLASS__, 'enqueue_style' )
			);
			
			add_action(
				"admin_print_scripts-$slug",
				array ( __CLASS__, 'enqueue_script' )
			);
			
		}

	}




	/**
	 * Print included HTML file.
	 *
	 * @return  void
	 */
	public static function render_text_included()
	{
		global $title;

		print '<div class="wrap">';
		print "<h1>$title</h1>";

		$file = plugin_dir_path( __FILE__ ) . "included.php";

		if ( file_exists( $file ) )
			require $file;
		print '</div>';


	}

	/**
	 * Load stylesheet on our admin page only.
	 *
	 * @return void
	 */
	public static function enqueue_style()
	{
		wp_register_style(
			'search_panel_css',
			plugins_url( 'search_panel.css', __FILE__ )
		);
		wp_enqueue_style( 'search_panel_css' );
	}
	public static function enqueue_script()
	{
		wp_register_script(
			'index_js',
			plugins_url( 'index.js', __FILE__ ),
			array(),
			FALSE,
			TRUE
		);
		wp_enqueue_script( 'index_js' );
		wp_localize_script('index_js','my_ajax_url', array(
			'ajax_url'=>admin_url('admin-ajax.php')
		));
	}
}
	
		function affiliate_name(){
			   $selected= $_POST['selected'];
			   $entered=$_POST['value'];

			   foreach($selected as $key => $value){
			$args = array(
			   'post_type'=> $value,
			   'post_status' => 'any',
			   'orderby'    => 'ID',
			   'order'    => 'DESC',
			   'posts_per_page' => -1 
			   );
		// 	   echo"<pre>";
		// print_r ($selected);
		// echo"</pre>";
		
			   $result = new WP_Query( $args );
			   $post=$result->posts;
			   $posts[$value]=wp_list_pluck( $post, 'post_title', 'ID' );
			
			}
			// echo"<pre>";
			// print_r ($posts);
			// echo"</pre>";
			// die;
		   if (!empty($posts)) {
			
			
			foreach($posts as $key => $value){
				foreach($value as $k=> $v){
			$matched =	substr_count( strtoupper($v),strtoupper($entered));
			if($matched>=1){
			echo '<div class="result">';
			 echo  '<a href="'.get_permalink( $k ).'">'.$v.'<span class="ptype">('.$key.')</span></a>';
			 echo '<br></div>';
		}
	}
			}
// 			if($matched==0 && !empty($entered)){
// echo"<p class='sug'>no data found</p>";
// 			}
			if(empty($entered)){
				echo "<p class='sug'>search for results</p>";
			}
		   }
			 
			 wp_die();
		   }
		   add_action('wp_ajax_affiliate_name', 'affiliate_name');
		   add_action('wp_ajax_nopriv_affiliate_name', 'affiliate_name');