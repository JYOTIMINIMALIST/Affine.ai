<?php

add_action( 'rest_api_init', 'custom_api_get_all_posts' );   

function custom_api_get_all_posts() {
    register_rest_route( 'custom/v2', '/all-posts', array(
        'methods' => 'GET',
        'callback' => 'custom_api_get_all_posts_callback'
    ));
}

function custom_api_get_all_posts_callback( $request ) {
    // Initialize the array that will receive the posts' data. 
    $posts_data = array();
    // Receive and set the page parameter from the $request for pagination purposes
    $paged = $request->get_param( 'page' );
	$category = $request->get_param( 'category' );
	$only_video = $request->get_param( 'only_video' );
    $paged = ( isset( $paged ) || ! ( empty( $paged ) ) ) ? $paged : 1; 
    // Get the posts using the 'post' and 'news' post types

    // $category_img_field_name= 'homepage_category_image';
    //                                 // For fetching image path from custom field of custom category
    // ob_start();
    // the_field($category_img_field_name, 'newsroom_categories'."_"."37"  ); 
    // $homepage_category_image = ob_get_clean();

    // print_r(explode(',',$homepage_category_image));

    // ob_start();
    // the_field($category_img_field_name, 'whitepaper_categories'."_"."3"  ); 
    // $homepage_category_image = ob_get_clean();
    // print_r(explode(',',$homepage_category_image));

    $max_record_limit = 21;
    $args =  array(
            'paged' => $paged,
            'post__not_in' => get_option( 'sticky_posts','posts' ),
            'posts_per_page' => 100,     
            'post_status' => 'publish',       
            'post_type' => array( 'video-post','casestudies-post','whitepaper-post','newsroom-post','post' ), // This is the line that allows to fetch multiple post types. 
            "orderby" => "post_date_gmt",
            "order" => 'DESC'
    ); 
    // $posts = get_posts($args);
    $posts = new WP_Query($args);

// ob_start();
// the_field('homepage_category_image', "casestudies_categories_"."15" ) ;
// $output = ob_get_clean();

	$post_and_category_assoc = ['video-post'=>'video_categories','casestudies-post'=>'casestudies_categories','whitepaper-post'=>'whitepaper_categories','newsroom-post'=>'newsroom_categories','post'=>'category'];
    // Loop through the posts and push the desired data to the array we've initialized earlier in the form of an object
    if(!empty($posts->posts)){
        foreach( $posts->posts as $post ) {
            if(count($posts_data) == $max_record_limit){
                break;
            }
            $id = $post->ID; 
            $post_type = $post->post_type; 
            $post_thumbnail = ( has_post_thumbnail( $id ) ) ? get_the_post_thumbnail_url( $id ) : null;

            $category_name ='';
            $category_slug ='';
            $category_name_arr = [];
            $category_slug_arr = [];
            $slug_name_arr = [];
            $cat_arr = get_the_terms($id,$post_and_category_assoc[$post_type]);

            $show_on_homepage = get_field('show_on_home_page', $id);
            $video_link = get_field('video_link', $id);

            if(!empty($cat_arr)){
                foreach($cat_arr as $cv){
                    $category_name = $cv->name;
                    $category_slug = $cv->slug;
                    $category_name_arr[] = $cv->name;
                    $category_slug_arr[] = strtolower($cv->slug);
                    $slug_name_arr[strtolower($cv->slug)] = $cv->name;
                }
            }

            // Check if only selected category gets filtered
            if($category){
                
                if(!in_array(strtolower($category),$category_slug_arr)){
                    continue;
                }
            }
            
            // If video filter selected then check if url is there
            if($only_video=='true' && !$video_link){
                continue;
            }

            // check if its allowed to show in homepage
            if($show_on_homepage != 'Yes'){
                continue;
            }

            $add_truncated_dots = strlen(strip_tags($post->post_content)) > 100 ? ' ...':'';
            $posts_data[] = (object) array( 
                'id' => $id, 
                'slug' => $post->post_name, 
                'post_date' => $post->post_date_gmt, 
                'link' => get_permalink($id),
                'category_name' => ($category)?$slug_name_arr[strtolower($category)]:$category_name,
                'category_slug' => $category_slug,
                'video_link' => $video_link,
                'show_on_home_page' => $show_on_homepage,
                'type' => $post->post_type,
                'title' => $post->post_title,
                'content' => mb_strimwidth(strip_tags($post->post_content),0,100).$add_truncated_dots, 
                'featured_img_src' => $post_thumbnail
            );
        }   
    }               
    return $posts_data;                   
} 

function post_thumbnail() {
    register_rest_field( 'post', 'test_data', array(
        'get_callback' => function(){ return 'welcome';} 
    ));

	register_rest_field( 'post', 'post_media', array(
        'get_callback' => 'ws_get_images_urls',
		'update_callback' => null,
        'schema'          => null, 
    ));
}

function ws_get_images_urls( $object, $field_name, $request ) {
    $medium = wp_get_attachment_image_src( get_post_thumbnail_id( $object->id ), 'medium' );
    $medium_url = $medium['0'];

    $large = wp_get_attachment_image_src( get_post_thumbnail_id( $object->id ), 'large' );
    $large_url = $large['0'];

    return array(
        'medium' => $medium_url,
        'large'  => $large_url,
    );
}

add_action( 'rest_api_init', 'post_thumbnail' );  