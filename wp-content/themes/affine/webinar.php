<?php get_header(); /*Template Name: Webinar */ ?>
<style>
.slick-list {
  overflow-y: auto;
}
</style>

<section class="partnershipBanner blogsArticleBanner">
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
                        <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText whitepaperBannerText">
                            <div class="wrapper">
                                <span class="upcomingTag font24"><?php echo get_sub_field('banner_tag'); ?></span>
                                <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                                <div class="main-div">
                                    <div class="div-parts part1">
                                        <div>
                                            <?php $calendaricon = get_sub_field('calendar_icon');
                                                if( !empty( $calendaricon ) ): ?>
                                                <img src="<?php echo esc_url($calendaricon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($calendaricon['alt']); ?>" class="caseBannerImg" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="parts-text">
                                            <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('upcoming_webinar_date'); ?></h3>
                                        </div>
                                    </div>
                                    <div class="div-parts part2">
                                        <div>
                                            <?php $speakerimage = get_sub_field('upcoming_webinar_speaker_image');
                                                if( !empty( $speakerimage ) ): ?>
                                                <img src="<?php echo esc_url($speakerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($speakerimage['alt']); ?>" class="caseBannerImg" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="parts-text">
                                            <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('upcoming_webinar_speaker_name'); ?></h3>
                                            <h4 class="font20 colorLG"><?php echo get_sub_field('upcoming_webinar_speaker_designation'); ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <a href="" data-toggle="modal" data-target="#proposal" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <a href="#chooseTopicSection" class="scrollDown noScrollMobile">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
    <!-- Request for webinar Modal-->
    <div class="modal fade excellenceModal contactUsModal" id="proposal" tabindex="-1" role="dialog" aria-labelledby="proposalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php bloginfo('template_directory');?>/images/close-icon.png" alt="">
                    </button>
                </div>
                <?php if( have_rows('banner_section') ): ?>
                    <?php while( have_rows('banner_section') ): the_row();?>
                        <div class="modal-body">
                            <div class="modalBodyInner">
                                <div class="flipModalHeader">
                                    <div class="formHeading">
                                        <h3 class="font48 commonsMedium"><?php the_sub_field('form_heading'); ?></h3>
                                    </div>
                                </div>
                                <?php the_sub_field('form_shortcode'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
    	        <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="chooseTopicSection worldVideoSection" id="chooseTopicSection">
    <?php if( have_rows('webinar_content') ): ?>
        <?php while( have_rows('webinar_content') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <div class="mobilechooseTopicFilter">
                    <div class="showFilterMob">ALL</div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="" class="downArrow">
                </div>
                <ul class="filter clearfix">
                    <li data-filter="all" class="all active">All</li>
                    <?php if( have_rows('filter_headings') ): ?>
                        <?php while( have_rows('filter_headings') ): the_row(); ?>
                            <li data-filter="<?php echo get_sub_field('filter_selection_list'); ?>" class="<?php echo get_sub_field('filter_selection_list'); ?>"><?php echo get_sub_field('filter_heading'); ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="dataHolder wrapper" id="ourHolder">
                <div class="dataSlider-nav">
                    <?php if( have_rows('webinar_content_data') ): ?>
                        <?php while( have_rows('webinar_content_data') ): the_row(); ?>
                            <?php $filter_list = get_sub_field('filter_selection_list');
                                if( $filter_list ): ?>
                                <div class="dataSliderInnerNav <?php foreach( $filter_list as $filter ): ?> <?php echo $filter ?> <?php endforeach; ?>" data-role="listview">
                                    <div class="dataContentNav">
                                        <p class="font16 commonsMedium colorG"><?php echo get_sub_field('webinar_date'); ?> | <?php echo get_sub_field('webinar_time'); ?></p>
                                        <h3 class="font24 colorG"><?php echo get_sub_field('heading'); ?></h3>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="dataSlider-for">
                    <?php if( have_rows('webinar_content_data') ): ?>
                        <?php while( have_rows('webinar_content_data') ): the_row(); ?>
                            <?php $filter_list = get_sub_field('filter_selection_list');
                                if( $filter_list ): ?>
                                <div class="dataSliderInnerFor <?php foreach( $filter_list as $filter ): ?> <?php echo $filter ?> <?php endforeach; ?>">
                                    <div class="dataContentFor">
                                        <div class="aboutWebinar">
                                            <h4 class="font40 colorG"><?php echo get_sub_field('heading'); ?></h4>
                                            <div class="webinarDateTimeHolder">
                                                <div class="webinarDateTimeContent">
                                                    <?php $webinardate = get_sub_field('webinar_date_icon');
                                                        if( !empty( $webinardate ) ): ?>
                                                        <img src="<?php echo esc_url($webinardate['url']); ?>" loading="lazy" alt="<?php echo esc_attr($webinardate['alt']); ?>" class="caseBannerImg" />
                                                    <?php endif; ?>
                                                    <p class="font24 commonsSemiBold colorG"><?php echo get_sub_field('webinar_date'); ?></p>
                                                </div>
                                                <div class="webinarDateTimeContent">
                                                    <?php $webinarclock = get_sub_field('webinar_clock_icon');
                                                        if( !empty( $webinarclock ) ): ?>
                                                        <img src="<?php echo esc_url($webinarclock['url']); ?>" loading="lazy" alt="<?php echo esc_attr($webinarclock['alt']); ?>" class="caseBannerImg" />
                                                    <?php endif; ?>
                                                    <p class="font24 commonsSemiBold colorG"><?php echo get_sub_field('webinar_time'); ?></p>
                                                </div>
                                            </div>
                                            <div class="keyPointer">
                                                <h5 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('webinar_key_points_heading'); ?></h5>
                                                <ul>
                                                    <?php if( have_rows('webinar_key_points_list') ): ?>
                                                        <?php while( have_rows('webinar_key_points_list') ): the_row(); ?>
                                                            <li>
                                                                <p class="font24"><?php echo get_sub_field('key_points_text'); ?></p>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="webinarHost">
                                            <div class="webinarHostInfo">
                                                <div class="webinarHostImg">
                                                    <?php $hostimage = get_sub_field('webinar_speaker_image');
                                                        if( !empty( $hostimage ) ): ?>
                                                        <img src="<?php echo esc_url($hostimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($hostimage['alt']); ?>" class="caseBannerImg" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="webinatHostName">
                                                    <h3 class="font24 colorG commonsSemiBold"><?php echo get_sub_field('webinar_speaker_name'); ?></h3>
                                                    <h3 class="font24 colorG"><?php echo get_sub_field('webinar_speaker_designation'); ?></h3>
                                                    <a href="<?php echo get_sub_field('linkedin_link'); ?>" target="_blank">
                                                        <?php $linkedinicon = get_sub_field('linkedin_icon');
                                                            if( !empty( $linkedinicon ) ): ?>
                                                            <img src="<?php echo esc_url($linkedinicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($linkedinicon['alt']); ?>" class="caseBannerImg" />
                                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="" data-toggle="modal" data-target="#proposalTwo" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="sliderArrow">
                    <button class="back dataSliderBack">
                        <img src="<?php bloginfo('template_directory');?>/images/life-left-slider.svg" alt="">
                    </button>
                    <button class="forward dataSliderForward">
                        <img src="<?php bloginfo('template_directory');?>/images/life-right-slider.svg" alt="">
                    </button>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- Request for webinar Modal-->
    <div class="modal fade excellenceModal contactUsModal" id="proposalTwo" tabindex="-1" role="dialog" aria-labelledby="proposalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php bloginfo('template_directory');?>/images/close-icon.png" alt="">
                    </button>
                </div>
                <?php if( have_rows('webinar_content') ): ?>
                    <?php while( have_rows('webinar_content') ): the_row();?>
                        <div class="modal-body">
                            <div class="modalBodyInner">
                                <div class="flipModalHeader">
                                    <div class="formHeading">
                                        <h3 class="font48 commonsMedium"><?php echo get_sub_field('webinar_form_heading'); ?></h3>
                                    </div>
                                </div>
                                <?php echo get_sub_field('webinar_form_shortcode'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
    	        <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="exploreSection recommendedBlogSection">
    <?php if( have_rows('browse_our_records') ): ?>
        <?php while( have_rows('browse_our_records') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <div class="exploreHolder">
                    <div class="exploreSlider">
                        <?php if( have_rows('browse_our_records_content') ): ?>
                            <?php while( have_rows('browse_our_records_content') ): the_row(); ?>
                                <div class="exploreInnerSlider">
                                    <div class="exploreContent recommendedContent">
                                        <div class="whitepaperTopicImg">
                                            <?php $videothumbnail = get_sub_field('video_thumbnail');
                                                if( !empty( $videothumbnail ) ): ?>
                                                <img src="<?php echo esc_url($videothumbnail['url']); ?>" loading="lazy" alt="<?php echo esc_attr($videothumbnail['alt']); ?>" class="caseBannerImg" />
                                            <?php endif; ?>
                                            <p class="font16"><?php echo get_sub_field('heading'); ?></p>
                                        </div>
                                        <a data-fancybox class="videoPlayBtn" href="<?php echo get_sub_field('video_link'); ?>">
                                            <img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="sliderArrow">
                        <button class="back exploreSliderBack">
                            <img src="<?php bloginfo('template_directory');?>/images/life-left-slider.svg" alt="">
                        </button>
                        <button class="forward exploreSliderForward">
                            <img src="<?php bloginfo('template_directory');?>/images/life-right-slider.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="deliverSection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <?php if( have_rows('discover_hidden_section') ): ?>
        <?php while( have_rows('discover_hidden_section') ): the_row(); ?>
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
        scrollTop: $("#chooseTopicSection").offset().top - 50}
    );
});
</script>