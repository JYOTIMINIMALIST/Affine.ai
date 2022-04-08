<?php get_header(); /*Template Name: About Us */ ?>

<section class="aboustUsBanner">
    <?php if( have_rows('banner_section') ): ?>
        <?php while( have_rows('banner_section') ): the_row(); ?>
            <div class="aboutUsBgImg">
                <!-- <img src="<?php bloginfo('template_directory');?>/images/slider-1.png" alt=""> -->
                <video autoplay playsinline muted id="aboutUsBgVideo">
                    <source src="<?php bloginfo('template_directory');?>/images/affine-way-bg.mp4" type="video/mp4">
                </video>
                <video autoplay playsinline muted id="aboutUsBgVideoMob">
                    <source src="<?php bloginfo('template_directory');?>/images/affine-way-bg-mob.mp4" type="video/mp4">
                </video>
                <div class="aboutUsBannerText">
                    <div class="wrapper">
                        <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                        <p class="font24 colorG"><?php echo get_sub_field('banner_description'); ?></p>
                    </div>
                </div>
                <a href="#aimSection" class="scrollDown">
                    <span class="font16">Scroll</span>
                    <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="">
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="aimSection" id="aimSection">
    <?php if( have_rows('our_aims_section') ): ?>
        <?php while( have_rows('our_aims_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="ourAimsHolder">
                    <div class="ourAimTextDiv">
                        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                        <h4 class="font40 colorG"><?php echo get_sub_field('section_description'); ?></h4>
                        <p class="font16 colorG"><?php echo get_sub_field('section_sub_description'); ?></p>
                    </div>
                    <div class="aimCardMobile">
                        <?php if( have_rows('customer_oriented_card_content') ): ?>
                            <?php while( have_rows('customer_oriented_card_content') ): the_row(); ?>
                                <div class="aimInnerCardMobile">
                                    <?php $customerorientedicon = get_sub_field('icon');
                                        if( !empty( $customerorientedicon ) ): ?>
                                        <img src="<?php echo esc_url($customerorientedicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($customerorientedicon['alt']); ?>" />
                                    <?php endif; ?>
                                    <p class="font24 colorG commonsMedium"><?php echo get_sub_field('heading'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if( have_rows('celebrating_excellence_card_content') ): ?>
                            <?php while( have_rows('celebrating_excellence_card_content') ): the_row(); ?>
                                <div class="aimInnerCardMobile">
                                    <?php $celebratingexcellenceicon = get_sub_field('icon');
                                        if( !empty( $celebratingexcellenceicon ) ): ?>
                                        <img src="<?php echo esc_url($celebratingexcellenceicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($celebratingexcellenceicon['alt']); ?>" />
                                    <?php endif; ?>
                                    <p class="font24 colorG commonsMedium"><?php echo get_sub_field('heading'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if( have_rows('continuous_learner_card_content') ): ?>
                            <?php while( have_rows('continuous_learner_card_content') ): the_row(); ?>
                                <div class="aimInnerCardMobile">
                                    <?php $continuouslearnericon = get_sub_field('icon');
                                        if( !empty( $continuouslearnericon ) ): ?>
                                        <img src="<?php echo esc_url($continuouslearnericon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($continuouslearnericon['alt']); ?>" />
                                    <?php endif; ?>
                                    <p class="font24 colorG commonsMedium"><?php echo get_sub_field('heading'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="ourAimImgDiv">
                        <?php $ouraimimage = get_sub_field('section_image');
                            if( !empty( $ouraimimage ) ): ?>
                            <img src="<?php echo esc_url($ouraimimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($ouraimimage['alt']); ?>" />
                        <?php endif; ?>
                        <?php if( have_rows('customer_oriented_card_content') ): ?>
                            <?php while( have_rows('customer_oriented_card_content') ): the_row(); ?>
                                <div class="aimCard learnerCard">
                                    <div class="aimCardOverlay"></div>
                                    <?php $customerorientedicon = get_sub_field('icon');
                                        if( !empty( $customerorientedicon ) ): ?>
                                        <img src="<?php echo esc_url($customerorientedicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($customerorientedicon['alt']); ?>" />
                                    <?php endif; ?>
                                    <p class="font24 colorG commonsMedium"><?php echo get_sub_field('heading'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if( have_rows('celebrating_excellence_card_content') ): ?>
                            <?php while( have_rows('celebrating_excellence_card_content') ): the_row(); ?>
                                <div class="aimCard aimExcellenceCard">
                                    <div class="aimCardOverlay"></div>
                                    <?php $celebratingexcellenceicon = get_sub_field('icon');
                                        if( !empty( $celebratingexcellenceicon ) ): ?>
                                        <img src="<?php echo esc_url($celebratingexcellenceicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($celebratingexcellenceicon['alt']); ?>" />
                                    <?php endif; ?>
                                    <p class="font24 colorG commonsMedium"><?php echo get_sub_field('heading'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if( have_rows('continuous_learner_card_content') ): ?>
                            <?php while( have_rows('continuous_learner_card_content') ): the_row(); ?>
                                <div class="aimCard customerCard">
                                    <div class="aimCardOverlay"></div>
                                    <?php $continuouslearnericon = get_sub_field('icon');
                                        if( !empty( $continuouslearnericon ) ): ?>
                                        <img src="<?php echo esc_url($continuouslearnericon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($continuouslearnericon['alt']); ?>" />
                                    <?php endif; ?>
                                    <p class="font24 colorG commonsMedium"><?php echo get_sub_field('heading'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="storySection">
    <?php if( have_rows('our_story') ): ?>
        <?php while( have_rows('our_story') ): the_row(); ?>
            <div class="wrapper">
                <div class="ourStoryHolder">
                    <div class="ourStoryTextDiv">
                        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                        <h4 class="font40 colorG">“<?php echo get_sub_field('section_sub_heading'); ?>”</h4>
                        <p class="font16 colorG"><?php echo get_sub_field('section_description'); ?></p>
                    </div>
                    <div class="ourStoryImgDiv">
                        <!-- <img src="<?php bloginfo('template_directory');?>/images/story-img.png" alt=""> -->
                        <div id="robotAnim"></div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="rewindSection">
    <div class="wrapper">
    <?php if( have_rows('rewind_section') ): ?>
        <?php while( have_rows('rewind_section') ): the_row(); ?>
            <div class="rewindHolder">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('rewind_heading'); ?></h2>
                <div class="rewindSliderHolder">
                    <div class="rewindSlider">
                        <?php if( have_rows('rewind_repeater') ): ?>
                        <?php while( have_rows('rewind_repeater') ): the_row(); ?>
                            <div class="rewindInnerSlider">
                                <div class="journeyHolder">
                                <span class="webinarYear font30 commonsMedium"><?php echo get_sub_field('year'); ?></span>
                                    <div class="journeyImgHolder">
                                        <div class="tab_container">
                                            <?php if( have_rows('tabs_content') ): ?>
                                            <?php $counter=1; while( have_rows('tabs_content') ): the_row(); ?>
                                                <div id="tab1<?php echo $counter; ?>" class="tabcontenttwo" <?php if($counter==1) { echo 'style="display:block;"'; } ?> >
                                                    
                                                    <?php if( have_rows('tab_images') ): ?>
                                                    <?php while( have_rows('tab_images') ): the_row();?>
                                                        <?php if( get_row_layout() == 'single_image' ): ?>
                                                        <div class="journeyImgInnerHolder">
                                                            <div class="journeyImgCard">
                                                                <img src="<?php echo get_sub_field('image'); ?>" alt="">
                                                            </div>
                                                        </div>

                                                        <?php elseif( get_row_layout() == 'two_images' ): ?>
                                                        <div class="journeyImgInnerHolderTwo">
                                                            <?php if( have_rows('image_content') ): ?>
                                                            <?php while( have_rows('image_content') ): the_row(); ?>
                                                                <div class="journeyImgCard">
                                                                    <img src="<?php echo get_sub_field('image'); ?>" alt="">
                                                                </div>
                                                            <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        </div>

                                                        <?php elseif( get_row_layout() == 'three_images' ): ?>
                                                        <div class="journeyImgInnerHolderThree">
                                                            <div class="journeyImgCard">
                                                                <img src="<?php echo get_sub_field('image_one'); ?>" alt="">
                                                            </div>
                                                            <div class="journeyImgCardInner">
                                                                <div>
                                                                    <img src="<?php echo get_sub_field('image_two'); ?>" alt="">
                                                                </div>
                                                                <div>
                                                                    <img src="<?php echo get_sub_field('image_three'); ?>" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endif;?>
                                                    <?php endwhile; ?>
                                                    <?php endif; ?>

                                                </div>
                                            <?php $counter=$counter+1; endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="journeyTextHolder">
                                        <img src="<?php echo get_sub_field('year_image'); ?>" alt=""
                                            class="journeyYearImg">
                                        <div class="overTopHeading">
                                            <h3 class="colorG font40 commonsMedium"><?php echo get_sub_field('tab_section_heading'); ?></h3>
                                        </div>
                                        <ul class="tabs">
                                            <?php if( have_rows('tabs_content') ): ?>
                                            <?php $counter=1; while( have_rows('tabs_content') ): the_row(); ?>
                                                <li class="tablinksdates <?php if($counter==1) { echo 'active'; } ?>" onclick="openTabJourney(event, 'tab1<?php echo $counter; ?>')">
                                                    <div class="journeyInnerText">
                                                        <p class="font16 colorG commonsLight"><?php echo get_sub_field('month'); ?></p>
                                                        <h4 class="font24 colorG commonsBold"><?php echo get_sub_field('tab_heading'); ?></h4>
                                                        <p class="font16 colorG commonsLight"><?php echo get_sub_field('tab_description'); ?></p>
                                                    </div>
                                                </li>
                                            <?php $counter=$counter+1; endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mobileJourneyHolder">
                                    <div class="overTopHolder">
                                        <img src="<?php echo get_sub_field('year_image'); ?>" alt=""
                                            class="journeyYearImg">
                                        <div class="overTopHeading">
                                            <h3 class="colorG font40 commonsMedium"><?php echo get_sub_field('tab_section_heading'); ?></h3>
                                        </div>
                                    </div>
                                    <div class="mobileJourneySlider">
                                        <?php if( have_rows('tabs_content') ): ?>
                                        <?php while( have_rows('tabs_content') ): the_row(); ?>
                                            <div class="mobileJourneyInnerSlider">
                                                <div class="mobileJourneyImgSlider">
                                                    <?php if( have_rows('tab_images') ): ?>
                                                    <?php while( have_rows('tab_images') ): the_row();?>
                                                        <?php if( get_row_layout() == 'single_image' ): ?>
                                                        <div class="mobileJourneyImg">
                                                            <img src="<?php echo get_sub_field('image'); ?>" alt="">
                                                        </div>

                                                        <?php elseif( get_row_layout() == 'two_images' ): ?>
                                                            <?php if( have_rows('image_content') ): ?>
                                                            <?php while( have_rows('image_content') ): the_row(); ?>
                                                                <div class="mobileJourneyImg">
                                                                    <img src="<?php echo get_sub_field('image'); ?>" alt="">
                                                                </div>
                                                            <?php endwhile; ?>
                                                            <?php endif; ?>

                                                        <?php elseif( get_row_layout() == 'three_images' ): ?>
                                                        <div class="mobileJourneyImg">
                                                            <img src="<?php echo get_sub_field('image_one'); ?>" alt="">
                                                        </div>
                                                        <div class="mobileJourneyImg">
                                                            <img src="<?php echo get_sub_field('image_two'); ?>" alt="">
                                                        </div>
                                                        <div class="mobileJourneyImg">
                                                            <img src="<?php echo get_sub_field('image_three'); ?>" alt="">
                                                        </div>
                                                        <?php endif;?>
                                                    <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="journeyInnerText">
                                                    <p class="font16 colorG commonsLight"><?php echo get_sub_field('month'); ?></p>
                                                    <h4 class="font24 colorG commonsBold"><?php echo get_sub_field('tab_heading'); ?></h4>
                                                    <p class="font16 colorG commonsLight"><?php echo get_sub_field('tab_description'); ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="sliderArrow">
                        <button class="back rewindSliderBack">
                            <img src="<?php bloginfo('template_directory');?>/images/life-left-slider.svg" alt="">
                        </button>
                        <button class="forward rewindSliderForward">
                            <img src="<?php bloginfo('template_directory');?>/images/life-right-slider.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<section class="missionSection">
    <?php if( have_rows('mission_vision_section') ): ?>
        <?php while( have_rows('mission_vision_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="missionHolder">
                    <div class="missionInnerHolder">
                        <div class="missionIcon">
                            <?php $missionicon = get_sub_field('mission_icon');
                                if( !empty( $missionicon ) ): ?>
                                <img src="<?php echo esc_url($missionicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($missionicon['alt']); ?>" />
                            <?php endif; ?>
                            <h2 class="font60 caslonGraphiqueEF colorG mobMissionIconText"><?php echo get_sub_field('mission_heading'); ?></h2>
                        </div>
                        <div class="missionText">
                            <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('mission_heading'); ?></h2>
                            <p class="font16 colorG"><?php echo get_sub_field('mission_description'); ?></p>
                        </div>
                    </div>
                    <div class="missionInnerHolder">
                        <div class="missionIcon">
                            <?php $visionicon = get_sub_field('vision_icon');
                                if( !empty( $visionicon ) ): ?>
                                <img src="<?php echo esc_url($visionicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($visionicon['alt']); ?>" />
                            <?php endif; ?>
                            <h2 class="font60 caslonGraphiqueEF colorG mobMissionIconText"><?php echo get_sub_field('vision_heading'); ?></h2>
                        </div>
                        <div class="missionText">
                            <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('vision_heading'); ?></h2>
                            <p class="font16 colorG"><?php echo get_sub_field('vision_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="videoSection">
    <?php if( have_rows('video_section') ): ?>
        <?php while( have_rows('video_section') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <div class="thumbnailDiv">
                    <?php $videothumbnail = get_sub_field('video_thumbnail_image');
                        if( !empty( $videothumbnail ) ): ?>
                        <img src="<?php echo esc_url($videothumbnail['url']); ?>" loading="lazy" alt="<?php echo esc_attr($videothumbnail['alt']); ?>" class="thumbnailImg" />
                    <?php endif; ?>
                    <a data-fancybox class="videoPlayBtn" href="<?php echo get_sub_field('video_link'); ?>">
                        <img src="<?php bloginfo('template_directory');?>/images/play-btn.png" alt="">
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="deliverSection discoverSection">
    <?php if( have_rows('discover_section') ): ?>
        <?php while( have_rows('discover_section') ): the_row(); ?>
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
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};
$(window).on('resize scroll', function() {
    if ($('#aimSection').isInViewport()) {
        $(".aimCard").addClass("active");
        $(".learnerCard").addClass("active");
        $(".aimExcellenceCard").addClass("active");
        $(".customerCard").addClass("active");
    }
});
</script>