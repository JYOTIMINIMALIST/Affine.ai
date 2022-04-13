<?php get_header(); /*Template Name: Video*/ ?>

<section class="partnershipBanner">
    <div class="caseStudiesSlider">
        <?php if (have_rows('banner_section')) : ?>
            <?php while (have_rows('banner_section')) : the_row(); ?>
                <div class="caseStudiesInnerSlider">
                    <div class="partnershipBgImg">
                        <?php $bannerimage = get_sub_field('banner_image');
                            if( !empty( $bannerimage ) ): ?>
                            <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" class="desktopBanner" />
                        <?php endif; ?>
                        <?php $mobile_banner_image = get_sub_field('mobile_banner_image');
                            if( !empty( $mobile_banner_image ) ): ?>
                            <img src="<?php echo esc_url($mobile_banner_image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($mobile_banner_image['alt']); ?>" class="mobileBanner" />
                        <?php endif; ?>
                        <div class="contactBannerOverlayTwo"></div>
                        <div class="contactBannerOverlayThree"></div>
                        <div class="contactBannerOverlayFour"></div>
                        <div class="contactBannerOverlayFive"></div>
                        <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText">
                            <div class="wrapper">
                                <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                                <p></p>
                                <a data-fancybox href="<?php echo get_sub_field('video_link'); ?>" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <a href="#recommendedSection" class="scrollDown noScrollMobile">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
</section>

<section class="chooseTopicSection worldVideoSection" id="recommendedSection">
    <?php if (have_rows('affines_world_videos')) : ?>
        <?php while (have_rows('affines_world_videos')) : the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <div class="mobilechooseTopicFilter">
                    <div class="showFilterMob">
                        <img src="<?php bloginfo('template_directory'); ?>/images/all-topic.png" alt="">ALL
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="" class="downArrow">
                </div>
                <ul id="filterOptions">
                    <li class="active"><a class="all"><img src="<?php bloginfo('template_directory'); ?>/images/all-topic.png" alt=""> All</a></li>
                    <?php
                        $terms = get_terms("video_categories");
                        $count = count($terms);
                        echo '';
                        if ( $count > 0 ){
                            foreach ( $terms as $term ) {
                                
                                $termname = $term->name;
                                $termslug = strtolower($term->slug);
                                // $icon = get_field('category_image', $term->taxonomy . '_' . $term->term_id);
                                echo '<li><a class="'.$termslug.'">'.$termname.'</a></li>';
                            }
                        }
                        
                    ?>
                </ul>

                <div class="choseTopicHolder" id="ourHolder">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array('post_type' => 'video-post', 'posts_per_page' => 6, 'paged' => $paged, 'order' => 'DESC');
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) : $the_query->the_post();
					
					$terms = get_the_terms( $post->ID, 'video_categories' );
                    if ( $terms && ! is_wp_error( $terms ) ) : 

                    $links = array();

                    foreach ( $terms as $term ) {
                    $links[] = $term->slug;
                    }
                    $tax_links = join( " ", str_replace(' ', '-', $links));          
                    $tax = strtolower($tax_links);
                    else :    
                    $tax = '';                    
                    endif; 
                    ?>
					<div class="choseTopicContent item  <?php echo $tax ?>">
						<div class="thumbnailDiv">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
							<a data-fancybox class="videoPlayBtn" href="<?php echo get_field('video_link'); ?>">
								<img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" alt="">
							</a>
						</div>
						<h3 class="font24 commonsSemiBold colorG"><?php the_title(); ?></h3>
					</div>
                    <?php endwhile; ?>
            <div class='page-nav-container'>
                <?php wp_pagenavi(array('query' => $the_query)); ?>
            </div>
            <?php wp_reset_postdata(); ?>

                    
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="deliverSection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <?php if (have_rows('discover_hidden')) : ?>
        <?php while (have_rows('discover_hidden')) : the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta1 sparkleBtn"><?php echo get_sub_field('cta_text'); ?></a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
<script>
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#recommendedSection").offset().top - 50}
    );
});
</script>