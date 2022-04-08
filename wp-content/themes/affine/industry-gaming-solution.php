<?php get_header(); /*Template Name: Industry Gaming Solution */ ?>

<section class="industryServicesBanner industrySolutionBanner">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
            <div class="servicesBannerImgHolder">
                <?php $bannerdesktopimage = get_sub_field('banner_desktop_image');
                if (!empty($bannerdesktopimage)) : ?>
                    <img src="<?php echo esc_url($bannerdesktopimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerdesktopimage['alt']); ?>" class="servicesBannerImg" />
                <?php endif; ?>
                <?php $bannermobileimage = get_sub_field('banner_mobile_image');
                if (!empty($bannermobileimage)) : ?>
                    <img src="<?php echo esc_url($bannermobileimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannermobileimage['alt']); ?>" class="servicesBannerImgMob" />
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="servicesBannerOverlayOne"></div>
    <div class="servicesBannerOverlayTwo"></div>
    <div class="servicesBannerOverlayThree"></div>
    <div class="servicesBannerText">
        <?php if (have_rows('banner_section')) : ?>
            <?php while (have_rows('banner_section')) : the_row(); ?>
                <div class="wrapper">
                    <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                    <p class="font24 colorG"><?php echo get_sub_field('banner_description'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <a href="#indutryServicesPage" class="scrollDown">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
    <?php $backgroundimage = get_field('background_image');
    if (!empty($backgroundimage)) : ?>
        <img src="<?php echo esc_url($backgroundimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($backgroundimage['alt']); ?>" class="serviceIcon1" />
    <?php endif; ?>

</section>

<section class="keySection" id="indutryServicesPage">
    <?php if (have_rows('key_points_section')) : ?>
        <?php while (have_rows('key_points_section')) : the_row(); ?>
            <?php $iconone = get_sub_field('icon_one');
            if (!empty($iconone)) : ?>
                <img src="<?php echo esc_url($iconone['url']); ?>" loading="lazy" alt="<?php echo esc_attr($iconone['alt']); ?>" class="serviceIcon5" />
            <?php endif; ?>
            <?php $icontwo = get_sub_field('icon_two');
            if (!empty($icontwo)) : ?>
                <img src="<?php echo esc_url($icontwo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($icontwo['alt']); ?>" class="serviceIcon6" />
            <?php endif; ?>
            <div class="wrapper">
                <div class="keyWrapper">
                    <?php if (have_rows('key_points')) : ?>
                        <?php while (have_rows('key_points')) : the_row(); ?>
                            <div class="keyHeading">
                                <h2 class="font60 caslonGraphiqueEF"><?php echo get_sub_field('key_points_heading'); ?></h2>
                                <p class="font24 olorG"><?php echo get_sub_field('key_points_description'); ?></p>
                            </div>
                            <div class="keyHolder">
                                <?php if (have_rows('key_points_boxes')) : ?>
                                    <?php while (have_rows('key_points_boxes')) : the_row(); ?>
                                        <div class="keyCard">
                                            <div class="keyCardImg">
                                                <?php $keynumberimage = get_sub_field('key_number_image');
                                                if (!empty($keynumberimage)) : ?>
                                                    <img src="<?php echo esc_url($keynumberimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($keynumberimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('key_number_description'); ?></h3>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>



<section class="recommendedSection studiesExcellenceSection">
    <?php if (have_rows('explore_center')) : ?>
        <?php while (have_rows('explore_center')) : the_row(); ?>
            <?php $exploreiconimage = get_sub_field('explore_icon_image');
            if (!empty($exploreiconimage)) : ?>
                <img src="<?php echo esc_url($exploreiconimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($exploreiconimage['alt']); ?>"  class="serviceIcon7" />
            <?php endif; ?>
            <?php $exploreiconimagetwo = get_sub_field('explore_icon_image_two');
            if (!empty($exploreiconimagetwo)) : ?>
                <img src="<?php echo esc_url($exploreiconimagetwo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($exploreiconimagetwo['alt']); ?>"  class="serviceIcon8" />
            <?php endif; ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('explore_heading'); ?></h2>
                <div class="thoughtBoxWrapper">
                    <div class="thoughtBoxSlider">
                        <?php if (have_rows('explore_boxes')) : ?>
                            <?php while (have_rows('explore_boxes')) : the_row(); ?>
                                <div class="thoughtBoxInnerSlider">
                                    <a href="<?php echo get_sub_field('explore_cta_link'); ?>">
                                        <div class="thoughtBoxContent">
                                            <div class="thoughtImg">
                                                <?php $exploreimage = get_sub_field('explore_image');
                                                if (!empty($exploreimage)) : ?>
                                                    <img src="<?php echo esc_url($exploreimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($exploreimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="serviceExcellenceText">
                                                <p class="font16"><?php echo get_sub_field('explore_box_title'); ?></p>
                                                <h5 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('explore_box_description'); ?></h5>
                                            </div>
                                        </div>
                                    </a>    
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
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
        <?php endwhile; ?>
    <?php endif; ?>
</section>



<?php get_footer(); ?>
<script>
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#indutryServicesPage").offset().top - 100}
    );
});  
</script>