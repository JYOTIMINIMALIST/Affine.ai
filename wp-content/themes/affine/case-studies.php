<?php get_header(); /*Template Name: Case Studies */ ?>

<section class="partnershipBanner">
    <div class="caseStudiesSlider">
        <?php if( have_rows('banner_section') ): ?>
            <?php while( have_rows('banner_section') ): the_row(); ?>
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
                                <p class="font24 colorG"><?php echo get_sub_field('banner_description'); ?></p>
                                <a href="<?php echo get_sub_field('cta_link'); ?>" target="_blank" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
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

<section class="recommendedSection" id="recommendedSection">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_field('recommended_heading'); ?></h2>
        <div class="thoughtBoxWrapper">
            <div class="thoughtBoxSlider">
                <?php
                    $args = array('post_type' => 'casestudies-post','posts_per_page' => -1,'order' => 'DESC', 'meta_key'  => 'recommended_casestudy', 'meta_value'  => 'yes');
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                    <div class="thoughtBoxInnerSlider">
						<a href="<?php the_permalink();?>">
							<div class="thoughtBoxContent">
								<div class="thoughtImg">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
								</div>
								<h3 class="font24 commonsSemiBold colorG"><?php the_title(); ?></h3>
								<div class="thoughtOverlay">
									<h4 class="font24 commonsSemiBold colorG"><?php the_title(); ?></h4>
									<p class="font16"><?php $content = wp_strip_all_tags(get_the_content()); echo substr($content, 0, 100). '...'; ?></p>
								</div>
							</div>
						</a>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="sliderArrow">
                <button class="back thoughtSliderBack">
                    <img src="<?php bloginfo('template_directory');?>/images/life-left-slider.svg" alt="">
                </button>
                <button class="forward thoughtSliderForward">
                    <img src="<?php bloginfo('template_directory');?>/images/life-right-slider.svg" alt="">
                </button>
            </div>
        </div>
    </div>
</section>

<section class="newsletterSection">
    <?php if( have_rows('subscribe_newsletter') ): ?>
        <?php while( have_rows('subscribe_newsletter') ): the_row(); ?>
            <div class="wrapper">
                <div class="newsletterHolder">
                    <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                    <p class="font24 colorG"><?php echo get_sub_field('section_sub_heading'); ?></p>
                    <div class="newsletterForm">
                        <?php echo do_shortcode('[email-subscribers-form id="2"]') ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="chooseTopicSection">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG">Choose your topic</h2>
        <div class="mobilechooseTopicFilter">
            <div class="showFilterMob">
                <img src="<?php bloginfo('template_directory');?>/images/all-topic.png" alt="">ALL
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="" class="downArrow">
        </div>
        <ul id="filterOptions">
            <li class="active"><a class="all"><img src="<?php bloginfo('template_directory');?>/images/all-topic.png" alt=""> All</a></li>
            <?php
                $terms = get_terms("casestudies_categories");
                $count = count($terms);
                echo '';
                if ( $count > 0 ){
                    foreach ( $terms as $term ) {
                        
                        $termname = $term->name;
                        $termslug = strtolower($term->slug);
                        $icon = get_field('category_image', $term->taxonomy . '_' . $term->term_id);
                        echo '<li><a class="'.$termslug.'"><img src="'.$icon.'" alt="">'.$termname.'</a></li>';
                    }
                }
                
            ?>
        </ul>

        <div class="choseTopicHolder" id="ourHolder">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('post_type' => 'casestudies-post','posts_per_page' => 6, 'paged' => $paged,'order' => 'DESC');
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) : $the_query->the_post();

                $terms = get_the_terms( $post->ID, 'casestudies_categories' );
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
                <div class="choseTopicContent item <?php echo $tax ?>">
                    <a href="<?php the_permalink();?>">
                        <div class="choseTopicImg">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                        </div>
                        <?php $most_viewed = get_field('most_viewed');
                            if( !empty( $most_viewed ) ): ?>
                            <span class="mostViewedTag font16"><img src="<?php bloginfo('template_directory');?>/images/most-viewed.svg" alt=""> <?php echo $most_viewed ?></span>
                        <?php endif; ?>
                        <?php $trending_today = get_field('trending_today');
                            if( !empty( $trending_today ) ): ?>
                            <span class="trendingTag font16"><?php echo $trending_today ?></span>
                        <?php endif; ?>
                        <h3 class="font24 commonsSemiBold colorG"><?php the_title(); ?></h3>
                        <div class="choseTopicOverlay">
                            <h4 class="font24 commonsSemiBold colorG"><?php the_title(); ?></h4>
                            <p class="font16"><?php $content = wp_strip_all_tags(get_the_content()); echo substr($content, 0, 150). '...'; ?></p>
                        </div>
                        <img src="<?php bloginfo('template_directory');?>/images/news-arrow.png" alt="" class="choseTopicArrow">
                    </a>
                </div>
                <?php endwhile; ?>
            <div class='page-nav-container'>
                <?php wp_pagenavi(array('query' => $the_query)); ?>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="deliverSection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <?php if( have_rows('deliver_section') ): ?>
        <?php while( have_rows('deliver_section') ): the_row(); ?>
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
        scrollTop: $("#recommendedSection").offset().top - 120}
    );
});
</script>