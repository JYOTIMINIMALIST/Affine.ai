<?php /*Template Name: Getcategorypost*/ ?>
<?php
// echo 'wel';
// exit;    
$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endforeach; 
    wp_reset_postdata();?>