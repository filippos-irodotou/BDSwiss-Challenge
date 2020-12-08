<?php
/**
 * Plugin Name: Handle News Feeds
 * Description: Handle rss news feeds in admin panel
 * Text Domain: bdswiss-wordpress-plugin
 * Author: Filippos Irodotou
 */
 ?>

	<link rel="stylesheet" href="/BDSwiss-Challenge/wp-content/themes/oceanwp/customtemplate/customcss.css">

	
 <?php
 
 function create_rss_feeds() {
	global $wp_meta_boxes;
	
	wp_add_dashboard_widget('widget_rss_feed', __('News Rss Feeds', 'rc_mdm'), 'create_rss_box');
}

function create_rss_box() {?>
	
	<div id="handle-news-feeds">
		<form action="" method="post">

		  <label for="title">Title:</label>
		  <input type="text" id="title" name="title" value="" required><br><br>

		  <label for="description">Description:</label>
		  <input type="text" id="description" name="description" value="" required><br><br>
		  
		  <label for="url">RSS url:</label>
		  <input type="text" id="url" name="url" value="" required><br><br>
		  
		  <label for="logo">Blog Logo:</label>
		  <input type="text" id="logo" name="logo" value="" required><br><br>
		  
		  <label for="posts_limit">Post Limits:</label>
		  <input type="number" id="posts_limit" name="posts_limit" value="" required><br><br>
		  
		  <label for="keywords">Keywords:</label>
		  <input type="text" id="keywords" name="keywords" value="" placeholder="seperated by comma"><br><br>
		  
		  <input type="submit" name="handlePost" value="Submit">
		</form>
	</div>
	
	<?php 

	if (isset($_POST['handlePost'])){
		
		$data =array(
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'url' => $_POST['url'],
			'logo' => $_POST['logo'],
			'posts_limit' => $_POST['posts_limit'],
			'keywords' => $_POST['keywords'],
			'recordId' => $_POST['title'],
		);
		
		$data_post = json_encode($data);
		
		add_comment_meta('1', 'handle_rss', $data_post);
		
		echo '<span class="success-note">Success !!</span>';
		//print_r($data);
		
	}
}

add_action('wp_dashboard_setup', 'create_rss_feeds');