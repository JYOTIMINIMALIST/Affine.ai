<?php get_header(); /*Template Name: career */ ?>

<section class="partnershipBanner careerBanner">
    <?php if( have_rows('banner_section') ): ?>
        <?php while( have_rows('banner_section') ): the_row(); ?>
            <div class="partnershipBgImg">
                <?php $bannerimage = get_sub_field('banner_image');
                    if( !empty( $bannerimage ) ): ?>
                    <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" class="careerBgImg" />
                <?php endif; ?>
                <div class="contactBannerOverlayTwo"></div>
                <div class="contactBannerOverlay"></div>
                <div class="contactBannerOverlayThree"></div>
                <div class="contactBannerOverlayFour"></div>
                <div class="contactBannerOverlayFive"></div>
                <div class="careerBannerHolder">
                    <div class="wrapper">
                        <div class="careerSearch">
                            <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                            <div class="careerjobSlider">
                                <?php if( have_rows('banner_job_cards') ): ?>
                                    <?php while( have_rows('banner_job_cards') ): the_row(); ?>
                                        <div class="careerjobInnerSlider">
                                            <a href="<?php echo get_sub_field('job_link'); ?>">
                                                <div class="careerJobInfo">
                                                    <h3 class="font24 commonsMedium colorG"><?php echo get_sub_field('job_title'); ?></h3>
                                                    <p class="font16 colorG"><?php echo get_sub_field('job_location'); ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="searchDiv">
                                <label>Search</label>
                                <input type="text">
                                <img src="<?php bloginfo('template_directory'); ?>/images/search.png" alt="">
                            </div>
                            <div class="searchResultDiv">
                                <ul id="filterOptions">
                                    <li class="active"><a>Data Analyst</a></li>
                                    <li><a>Data engineer</a></li>
                                    <li><a>Technology</a></li>
                                    <li><a>Cloud</a></li>
                                    <li><a>Artificial Intelligence</a></li>
                                    <li><a>Data engineer</a></li>
                                    <li><a>Technology</a></li>
                                    <li><a>Cloud</a></li>
                                </ul>
                                <div class="searchJobResultHolder">
                                    <h3 class="font24 colorG">Jobs</h3>
                                    <div class="searchJobHolder">
                                        <div class="searchJobInner">
                                            <h4 class="font24 colorG commonsSemiBold">AI Data Consultant with data visualization
                                            </h4>
                                            <p class="font16 colorG">3 Years Experience | Mumbai | Full Time</p>
                                        </div>
                                        <div class="searchJobInner">
                                            <h4 class="font24 colorG commonsSemiBold">AI Data Consultant with data visualization
                                            </h4>
                                            <p class="font16 colorG">3 Years Experience | Mumbai | Full Time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo get_sub_field('cta_link'); ?>" class="font24 commonsMedium colorG positionCta"><?php echo get_sub_field('cta_text'); ?></a>
                        </div>
                        <div class="careerAnimeDiv">
                            <div class="careerImg">
                                <img src="<?php bloginfo('template_directory'); ?>/images/career-svg.svg" alt="">
                            </div>
                            <?php if( have_rows('banner_job_cards') ): ?>
                                <?php $counter=1; while( have_rows('banner_job_cards') ): the_row(); ?>
                                    <div class="careerjob jobDiv<?php echo $counter; ?> floating">
                                        <a href="<?php echo get_sub_field('job_link'); ?>">
                                            <div class="careerJobInfo">
                                                <h3 class="font24 commonsMedium colorG"><?php echo get_sub_field('job_title'); ?></h3>
                                                <p class="font16 colorG"><?php echo get_sub_field('job_location'); ?></p>
                                            </div>
                                            <div class="gotoImg">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/career-arrow.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                <?php $counter=$counter+1; endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#buzzing" class="scrollDown">
                <span class="font16">Scroll</span>
                <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
            </a>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="videoSection buzzing" id="buzzing">
    <?php if( have_rows('bold_bright_buzzing') ): ?>
        <?php while( have_rows('bold_bright_buzzing') ): the_row(); ?>
            <div class="wrapper">
                <div class="videos">
                    <h2 class="font60 caslonGraphiqueEF colorG video-h2"><?php echo get_sub_field('section_heading'); ?></h2>
                    <p class="font24 commonsRegular video-p1"><?php echo get_sub_field('section_description'); ?></p>
                </div>
                <div class="thumbnailDiv">
                    <?php $videoimage = get_sub_field('video_thumbnail');
                        if( !empty( $videoimage ) ): ?>
                        <img src="<?php echo esc_url($videoimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($videoimage['alt']); ?>" class="thumbnailImg" />
                    <?php endif; ?>
                    <a data-fancybox class="videoPlayBtn" href="<?php echo get_sub_field('video_link'); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" alt="">
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="excellenceSection workforceSec">
    <div class="wrapper">
        <div class="sectionHeading">
        <?php if( have_rows('workforce_section') ): ?>
            <?php while( have_rows('workforce_section') ): the_row(); ?>
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('heading'); ?></h2>
                <p class="font24 commonsRegular workforce-p1 colorG"><?php echo get_sub_field('description'); ?></p>
            <?php endwhile; ?>
         <?php endif; ?>
        </div>
        <div class="excellenceInner">
            <div class="filterHolder">
                <div class="mobileExcellenceFilter">
                    <img src="<?php bloginfo('template_directory'); ?>/images/all-colored-ex-topic.png" alt="" class="coloredIcon allTopicImage">
                    <p class="allTopicText">ALL TOPICS</p>
                    <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="" class="downArrow">
                </div>
                <div class="filterHolderInner">
                    <ul class="netflixFilter clearfix">
                        <li data-filtertarget="all" class="active menuClassDown" onclick="filter(this)"><img src="<?php bloginfo('template_directory'); ?>/images/all-colored-ex.png" alt="" class="coloredIcon">All</li>
                        <?php
                            $terms = get_terms("workforce_categories");
                            $count = count($terms);
                            echo '';
                            if ( $count > 0 ){
                                foreach ( $terms as $term ) {
                                    
                                    $termname = $term->name;
                                    $termslug = strtolower($term->slug);
                                    $icon = get_field('category_image', $term->taxonomy . '_' . $term->term_id);
                                    echo '<li data-filtertarget="'.$termslug.'" class="menuClassDown" onclick="filter(this)"><img src="'.$icon.'" alt="" class="coloredIcon">'.$termname.'</li>';
                                }
                            }
                            
                        ?>
                    </ul>
                </div>
            </div>
            <div class="excellenceHolder workforceHolder">
                <div class="excellenceHeading">
                    <h4 class="filterTextVal">ALL</h4>
                </div>
                <div class="excellenceSlider">
                    <?php
                        $args = array('post_type' => 'workforce-post','posts_per_page' => -1,'order' => 'DESC');
                        $the_query = new WP_Query( $args );
                        while ( $the_query->have_posts() ) : $the_query->the_post();

                        $terms = get_the_terms( $post->ID, 'workforce_categories' );
                        if ( $terms && ! is_wp_error( $terms ) ) : 
                        
                        $links = array();
                        $cat_name = array();
                        
                        foreach ( $terms as $term ) {
                        $links[] = $term->slug;
                        $cat_name[] = $term->name;
                        }
                        $tax_links = join( " ", str_replace(' ', '-', $links));          
                        $tax_name = join( " ", str_replace(' ', '-', $cat_name));          
                        $tax = strtolower($tax_links);
                        else :    
                        $tax = '';                    
                        endif; 
                    ?>
                    <div class="excellenceSliderInner  <?php echo $tax ?>">
                        <a href="<?php the_permalink();?>">
                            <div class="excellenceCard">
                                <div class="excellenceCardImg">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                                </div>
                                <div class="excellenceCardOverlay"></div>
                                <div class="excellenceCardText">
                                    <h3 class="font24 commonsSemiBold slideHeading">#<?php echo $tax_name ?></h3>
                                    <h3 class="commonsRegular font20"><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recommendedSection" id="recommendedSection">
    <div class="wrapper">
        <?php if( have_rows('break_the_routine') ): ?>
            <?php while( have_rows('break_the_routine') ): the_row(); ?>
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
            <?php endwhile; ?>
            <?php endif; ?>
        <div class="thoughtBoxWrapper">
            <div class="thoughtBoxSlider">
            <?php
                $args = array('post_type' => 'event','posts_per_page' => -1,'order' => 'DESC');
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <div class="thoughtBoxInnerSlider">
                    <a href="<?php the_permalink();?>">
                        <div class="thoughtBoxContent">
                            <div class="thoughtImg">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="" class="thumbnailImg" />
                            </div>
                            <div class="career-box1">
                                <div class="routine">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/standup-comedy.png" alt="">
                                    <p class="font16 commonsRegular colorG"><?php echo get_field('event_date'); ?> | <?php echo get_field('event_time'); ?></p>
                                </div>
                                <p class="font24 commonsBold routine-p1 colorG"><?php the_title(); ?></p>
                                <p class="routine-p2 font16 commonsRegular colorG"><?php $content = wp_strip_all_tags(get_the_content()); echo substr($content, 0, 50). '...'; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="sliderArrow">
                <button class="back thoughtSliderBack">
                    <img src="<?php bloginfo('template_directory'); ?>/images/life-left-slider.svg" alt="">
                </button>
                <button class="forward thoughtSliderForward">
                    <img src="<?php bloginfo('template_directory'); ?>/images/life-right-slider.svg" alt="">
                </button>
            </div>
        </div>
    </div>
</section>

<section class="interestedSection">
    <?php if( have_rows('fun_at_work') ): ?>
        <?php while( have_rows('fun_at_work') ): the_row(); ?>
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
                                        <?php $singleboximage = get_sub_field('box_image');
                                            if( !empty( $singleboximage ) ): ?>
                                            <img src="<?php echo esc_url($singleboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($singleboximage['alt']); ?>" class="thumbnailImg" />
                                        <?php endif; ?>
                                        <div class="interestedOverlayText">
                                            <h4 class="font24 commonsSemiBold colorG"><?php the_sub_field('box_heading'); ?></h4>
                                        </div>
                                    </div>
                                </div>

                            <?php elseif( get_row_layout() == 'double_box' ): ?>
                                <div class="interestedInnerSlider">
                                    <div class="interestedCardTwo">
                                        <?php if( have_rows('double_box_content') ): ?>
                                            <?php while( have_rows('double_box_content') ): the_row(); ?>
                                                <div class="interestedLinkDiv pool-party">
                                                    <?php $doubleboximage = get_sub_field('box_image');
                                                        if( !empty( $doubleboximage ) ): ?>
                                                        <img src="<?php echo esc_url($doubleboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($doubleboximage['alt']); ?>" class="thumbnailImg" />
                                                    <?php endif; ?>
                                                    <div class="interestedLinkText ">
                                                        <div class="interestedLinkTextInner">
                                                            <h4 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('box_heading'); ?></h4>
                                                        </div>
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
                        <img src="<?php bloginfo('template_directory'); ?>/images/life-left-slider.svg" alt="">
                    </button>
                    <button class="forward interestedSliderForward">
                        <img src="<?php bloginfo('template_directory'); ?>/images/life-right-slider.svg" alt="">
                    </button>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
<script>
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#buzzing").offset().top - 50}
    );
});
</script>