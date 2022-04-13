<?php get_header(); /*Template Name: Newsroom */ ?>

<section class="partnershipBanner blogsArticleBanner">
    <div class="caseStudiesSlider">
        <?php
            $args = array('post_type' => 'newsroom-post','posts_per_page' => 3,'order' => 'DESC', 'meta_key'  => 'banner_newsroom', 'meta_value'  => 'yes');
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <div class="caseStudiesInnerSlider">
                <?php if( have_rows('banner_section') ): ?>
                    <?php while( have_rows('banner_section') ): the_row(); ?>
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
                            <div class="contactBannerOverlay"></div>
                            <div class="contactBannerOverlayThree"></div>
                            <div class="contactBannerOverlayFour"></div>
                            <div class="contactBannerOverlayFive"></div>
                            <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText whitepaperBannerText">
                                <div class="wrapper">
                                    <p class="font24 banner-text"><?php echo get_sub_field('banner_tag'); ?></p>
                                    <h1 class="font80 caslonGraphiqueEF"><?php the_title(); ?></h1>
                                    <p class="font24 colorG "><?php echo get_sub_field('banner_description'); ?></p>
                                    <div class="main-div">
                                        <div class="div-parts part1">
                                            <div>
                                                <?php $bannercalimage = get_sub_field('banner_calendar_icon');
                                                    if (!empty($bannercalimage)) : ?>
                                                    <img src="<?php echo esc_url($bannercalimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannercalimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="parts-text">
                                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('newsroom_date'); ?></h3>
                                                <h4 class="font20 colorLG">Published on <?php echo get_sub_field('published_on'); ?></h4>
                                            </div>
                                        </div>
                                        <div class="div-parts part2">
                                            <div>
                                                <?php $authorImg = get_sub_field('newsroom_author_image');
                                                    if (!empty($authorImg)) : ?>
                                                    <img src="<?php echo esc_url($authorImg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorImg['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="parts-text">
                                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('newsroom_author_name'); ?></h3>
                                                <h4 class="font20 colorLG"><?php echo get_sub_field('newsroom_author_designation'); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink();?>" class="cta1 font20 ">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <a href="#recommendedSection" class="scrollDown noScrollMobile">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
</section>

<section class="recommendedSection featuredSection" id="recommendedSection">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_field('feature_heading'); ?></h2>
        <div class="thoughtBoxWrapper">
            <div class="thoughtBoxSlider">
                <?php
                    $args = array('post_type' => 'newsroom-post','posts_per_page' => -1,'order' => 'DESC', 'meta_key'  => 'featured', 'meta_value'  => 'yes');
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                    <div class="thoughtBoxInnerSlider">
                        <div class="thoughtBoxContent">
                            <span class="fearutedNewsroomTag font20"><?php echo get_field('card_tag'); ?></span>
                            <div class="thoughtImg">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                            </div>
                            <h3 class="font24 commonsSemiBold colorG"><?php the_title(); ?></h3>
                            <?php if( have_rows('banner_section') ): ?>
                            <?php while( have_rows('banner_section') ): the_row(); ?>
                                <div class="box1">
                                    <p class="font20 box1-p1"><?php echo get_sub_field('banner_tag'); ?></p>
                                    <p class="font24 box1-p2"><?php the_title(); ?></p>
                                    <p class="box1-p3 font16"><?php echo get_sub_field('newsroom_date'); ?> | <?php echo get_sub_field('published_on'); ?> </p>
                                    <a href="<?php the_permalink();?>" class="cta2">Read more</a>
                                </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
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

<section class="chooseTopicSection chooseTopicNewsroomSection">
    <div class="wrapper">
        <div class="media-cov">
            <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_field('media_coverage_heading'); ?></h2>
            <div class="textField">
                <select name="cars" id="cars">
                    <option selected="">This week</option>
                    <option>This month</option>
                    <option>This year</option>
                </select>
            </div>
        </div>

        <div class="mobilechooseTopicFilter">
            <div class="showFilterMob">
                <img src="<?php bloginfo('template_directory');?>/images/all-topic.png" alt="">ALL
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="" class="downArrow">
        </div>

        <ul id="filterOptions">
            <li class="active"><a class="all"><img src="<?php bloginfo('template_directory'); ?>/images/all-topic.png" alt=""> All</a></li>
            <?php
                $terms = get_terms("newsroom_categories");
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
                $args = array('post_type' => 'newsroom-post', 'posts_per_page' => -1, 'order' => 'DESC');
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) : $the_query->the_post();

                $terms = get_the_terms( $post->ID, 'newsroom_categories' );
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
                    <span class="fearutedNewsroomTag font20"><?php echo get_field('card_tag'); ?></span>
                    <div class="choseTopicImg">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                        <h3 class="font24 commonsSemiBold colorG"><?php the_title(); ?></h3>
                        <img src="<?php bloginfo('template_directory');?>/images/news-arrow.png" alt=""
                            class="choseTopicArrow">
                    </div>
                    <?php if( have_rows('banner_section') ): ?>
                        <?php while( have_rows('banner_section') ): the_row(); ?>
                            <div class="choseTopicOverlay">
                                <p class="font20 box1-p1"><?php echo get_sub_field('banner_tag'); ?></p>
                                <p class="font24 box1-p2"><?php the_title(); ?></p>
                                <p class="box1-p3 font16"><?php echo get_sub_field('newsroom_date'); ?> | <?php echo get_sub_field('published_on'); ?></p>
                                <a href="<?php the_permalink();?>" class="cta2">Read more</a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="interestedSection">
    <?php if( have_rows('interested_in_section') ): ?>
        <?php while( have_rows('interested_in_section') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
            </div>
            <div class="interestedWrapper">
                <div class="interestedSlider">
                    <?php if( have_rows('slide_content') ): ?>
                        <?php while( have_rows('slide_content') ): the_row();?>
                            <?php if( get_row_layout() == 'single_box' ): ?>
                                <div class="interestedInnerSlider">
                                    <div class="interestedCard">
                                        <?php $intrestedimage = get_sub_field('content_image');
                                            if( !empty( $intrestedimage ) ): ?>
                                            <img src="<?php echo esc_url($intrestedimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($intrestedimage['alt']); ?>" class="caseBannerImg" />
                                        <?php endif; ?>
                                        <div class="interestedOverlayText">
                                            <p class="font20"><?php the_sub_field('content_heading'); ?></p>
                                            <h3 class="font40 commonsSemiBold"><?php the_sub_field('content_description'); ?></h3>
                                            <a href="<?php the_sub_field('cta_link'); ?>" class="cta2"><?php the_sub_field('cta_text'); ?></a>
                                        </div>
                                    </div>
                                </div>

                            <?php elseif( get_row_layout() == 'double_box' ): ?>
                                <div class="interestedInnerSlider">
                                    <div class="interestedCardTwo">
                                        <?php if( have_rows('double_box_content') ): ?>
                                            <?php while( have_rows('double_box_content') ): the_row(); ?>
                                                <div class="interestedLinkDiv">
                                                    <?php $intresteddoubleimage = get_sub_field('content_image');
                                                        if( !empty( $intresteddoubleimage ) ): ?>
                                                        <img src="<?php echo esc_url($intresteddoubleimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($intresteddoubleimage['alt']); ?>" class="caseBannerImg" />
                                                    <?php endif; ?>
                                                    <div class="interestedLinkText">
                                                        <div class="interestedLinkTextInner">
                                                            <p class="font16"><?php echo get_sub_field('content_heading'); ?></p>
                                                            <h4 class="font24 commonsMedium"><?php echo get_sub_field('content_description'); ?></h4>
                                                        </div>
                                                        <a href="<?php echo get_sub_field('cta_link'); ?>">
                                                            <?php $intrestedctaicon = get_sub_field('cta_icon');
                                                                if( !empty( $intrestedctaicon ) ): ?>
                                                                <img src="<?php echo esc_url($intrestedctaicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($intrestedctaicon['alt']); ?>" class="caseBannerImg" />
                                                            <?php endif; ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif;?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="sliderArrow">
                    <button class="back interestedSliderBack">
                        <img src="<?php bloginfo('template_directory');?>/images/life-left-slider.svg" alt="">
                    </button>
                    <button class="forward interestedSliderForward">
                        <img src="<?php bloginfo('template_directory');?>/images/life-right-slider.svg" alt="">
                    </button>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="deliverSection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <?php if( have_rows('discover_hidden') ): ?>
        <?php while( have_rows('discover_hidden') ): the_row(); ?>
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
            scrollTop: $("#recommendedSection").offset().top - 100}
        );
    });
</script>