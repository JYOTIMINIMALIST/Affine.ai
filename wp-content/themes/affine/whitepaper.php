<?php get_header(); /*Template Name: Whitepaper */ ?>


<section class="partnershipBanner">
    <div class="caseStudiesSlider">
        <?php
            $args = array('post_type' => 'whitepaper-post','posts_per_page' => -1,'order' => 'DESC', 'meta_key'  => 'show_in_banner', 'meta_value'  => 'yes');
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <div class="caseStudiesInnerSlider">
                <div class="partnershipBgImg">
                    <?php $bannerimage = get_field('top_banner_image');
                        if (!empty($bannerimage)) : ?>
                        <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" class="desktopBanner"/>
                    <?php endif; ?>
                    <?php $mobile_banner_image = get_field('mobile_banner_image');
                        if( !empty( $mobile_banner_image ) ): ?>
                        <img src="<?php echo esc_url($mobile_banner_image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($mobile_banner_image['alt']); ?>" class="mobileBanner" />
                    <?php endif; ?>
                    <div class="contactBannerOverlayTwo"></div>
                    <div class="contactBannerOverlayThree"></div>
                    <div class="contactBannerOverlayFour"></div>
                    <div class="contactBannerOverlayFive"></div>
                    <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText whitepaperBannerText">
                        <div class="wrapper">
                            <h1 class="font80 caslonGraphiqueEF"><?php the_title(); ?></h1>
                            <p class="font24 colorG"><?php $content = wp_strip_all_tags(get_the_content()); echo substr($content, 0, 100). '...'; ?></p>
                            <!-- <div class="main-div">
                                <div class="div-parts part1">
                                    <div>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/banner-img1.png" alt="">
                                    </div>
                                    <div class="parts-text">
                                        <h3 class="font24 commonsSemiBold colorG"><?php echo get_field('blog_publish_date'); ?></h3>
                                    </div>
                                </div>
                                <div class="div-parts part2">
                                    <?php if( have_rows('author_details') ): ?>
                                        <?php while( have_rows('author_details') ): the_row(); ?>
                                            <div class="authorImgListing">
                                                <?php $authorimage = get_sub_field('author_image');
                                                    if (!empty($authorimage)) : ?>
                                                    <img src="<?php echo esc_url($authorimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="parts-text">
                                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('author_name'); ?></h3>
                                                <h4 class="font20 colorLG"><?php echo get_sub_field('author_designation'); ?></h4>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div> -->
                            <a href="<?php the_permalink();?>" class="cta1">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <a href="#chooseTopicSection" class="scrollDown noScrollMobile">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
</section>

<section class="chooseTopicSection chooseWhitepaperSection" id="chooseTopicSection">
    <div class="wrapper">
        <?php if( have_rows('whitepaper_content') ): ?>
        <?php while( have_rows('whitepaper_content') ): the_row(); ?>
            <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="mobilechooseTopicFilter">
            <div class="showFilterMob">
                <img src="<?php bloginfo('template_directory');?>/images/all-topic.png" alt="">ALL
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="" class="downArrow">
        </div>
        <ul id="filterOptions">
            <li class="active">
                <a class="all"><img src="<?php bloginfo('template_directory');?>/images/all-topic.png" alt=""> All</a>
            </li>
            <?php
                $terms = get_terms("whitepaper_categories");
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
                $args = array('post_type' => 'whitepaper-post','posts_per_page' => 6, 'paged' => $paged,'order' => 'DESC');
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) : $the_query->the_post();

                $terms = get_the_terms( $post->ID, 'whitepaper_categories' );
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
                <div class="choseTopicWhitepaperContent item <?php echo $tax ?>">
                    <a href="<?php the_permalink();?>">
                        <div class="whitepaperTopicImg">
                            <?php $whitepaperimage = get_sub_field('whitepaper_banner');
                                if( !empty( $whitepaperimage ) ): ?>
                                <img src="<?php echo esc_url($whitepaperimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($whitepaperimage['alt']); ?>" />
                            <?php endif; ?>
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                            <p class="font16"><?php echo get_field('whitepaper_publish_date'); ?></p>
                            <img src="<?php bloginfo('template_directory');?>/images/news-arrow.png" alt="" class="choseTopicArrow">
                        </div>
                        <h3 class="font30 commonsSemiBold colorG"><?php the_title(); ?></h3>
                        <h4 class="font16 colorG"><?php $content = get_the_content(); echo substr($content, 0, 200). '...'; ?></h4>
                        <div class="whitepaperAuthorInfo">
                            <?php if( have_rows('whitepaper_host_content') ): ?>
                                <?php while( have_rows('whitepaper_host_content') ): the_row(); ?>
                                    <div class="authorInner">
                                        <div class="whitepaperAuthorImg">
                                            <?php $whitepaperhost = get_sub_field('host_image');
                                                if( !empty( $whitepaperhost ) ): ?>
                                                <img src="<?php echo esc_url($whitepaperhost['url']); ?>" loading="lazy" alt="<?php echo esc_attr($whitepaperhost['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="whitepaperAuthorText">
                                            <h5 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('host_name'); ?></h5>
                                            <p class="font16 colorG"><?php echo get_sub_field('host_designation'); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
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
            scrollTop: $("#chooseTopicSection").offset().top - 100}
        );
    });
</script>