<?php get_header(); /*Template Name: Industry Gaming Services */ ?>

<section class="industryServicesBanner">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
            <div class="servicesBannerImgHolder">
                <?php $bannerdesktopimage = get_sub_field('banner_desktop_image');
                if (!empty($bannerdesktopimage)) : ?>
                    <img src="<?php echo esc_url($bannerdesktopimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerdesktopimage['alt']); ?>" class="servicesBannerImg" />
                <?php endif; ?>
                <?php $bannerdesktopimage = get_sub_field('banner_desktop_image');
                if (!empty($bannerdesktopimage)) : ?>
                    <img src="<?php echo esc_url($bannerdesktopimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerdesktopimage['alt']); ?>" class="servicesBannerImgMob" />
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
<section class="serviceSolutionsSection" id="indutryServicesPage">
    <?php if (have_rows('solution_and_strategy')) : ?>
        <?php while (have_rows('solution_and_strategy')) : the_row(); ?>
            <?php $iconone = get_sub_field('icon_one');
            if (!empty($iconone)) : ?>
                <img src="<?php echo esc_url($iconone['url']); ?>" loading="lazy" alt="<?php echo esc_attr($iconone['alt']); ?>" class="serviceIcon2" />
            <?php endif; ?>
            <?php $icontwo = get_sub_field('icon_two');
            if (!empty($icontwo)) : ?>
                <img src="<?php echo esc_url($icontwo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($icontwo['alt']); ?>"  class="serviceIcon3" />
            <?php endif; ?>
            <div class="wrapper">
                <?php if (have_rows('affine_solutions')) : ?>
                    <?php while (have_rows('affine_solutions')) : the_row(); ?>
                        <div class="serviceSolutionsHead">
                            <h2 class="font60 caslonGraphiqueEF"><?php echo get_sub_field('solution_heading'); ?></h2>
                            <p class="font24 colorG"><?php echo get_sub_field('solution_description'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="serviceSliderWrapper">
                    <div class="serviceSliderInnerWrapper">
                    <div class="serviceSlider-for">
                            <?php if (have_rows('creative_section_strategy')) : ?>
                                <?php while (have_rows('creative_section_strategy')) : the_row(); ?>
                                    <div class="serviceInnerForSlider">
                                        <div class="forServiceHolder">
                                            <div class="forServiceImg">
                                                <?php $creativeimage = get_sub_field('creative_image');
                                                if (!empty($creativeimage)) : ?>
                                                    <img src="<?php echo esc_url($creativeimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($creativeimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="forServiceText">
                                                <h2 class="font40"><?php echo get_sub_field('creative_heading'); ?></h2>
                                                <h3 class="font24 colorG"><?php echo get_sub_field('creative_description'); ?></h3>
                                                <ul>
                                                    <?php if (have_rows('creative_points')) : ?>
                                                        <?php while (have_rows('creative_points')) : the_row(); ?>
                                                            <li>
                                                                <p class="font16 colorG"><?php echo get_sub_field('points'); ?></p>
                                                            </li>

                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="serviceSlider-nav">
                            <?php if (have_rows('creative_section_strategy')) : ?>
                                <?php while (have_rows('creative_section_strategy')) : the_row(); ?>
                                    <div class="serviceInnerNavSlider">
                                        <div class="navServiceHolder">
                                            <h4 class="font24 colorG"><?php echo get_sub_field('creative_heading'); ?></h4>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="sliderArrow">
                            <button class="back serviceSliderBack">
                                <img src="<?php bloginfo('template_directory'); ?>/images/life-left-slider.svg" alt="">
                            </button>
                            <button class="forward serviceSliderForward">
                                <img src="<?php bloginfo('template_directory'); ?>/images/life-right-slider.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="recommendedSection serviceExcellenceSection">
<div class="wrapper">
        <?php if (have_rows('explore_center')) : ?>
            <?php while (have_rows('explore_center')) : the_row(); ?>
                <?php $exploreiconimage = get_sub_field('explore_icon_image');
                if (!empty($exploreiconimage)) : ?>
                    <img src="<?php echo esc_url($exploreiconimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($exploreiconimage['alt']); ?>" class="serviceIcon4" />
                <?php endif; ?>
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('explore_heading'); ?></h2>
                <div class="thoughtBoxWrapper">
                    <div class="thoughtBoxSlider">
                        <?php if (have_rows('explore_boxes')) : ?>
                            <?php while (have_rows('explore_boxes')) : the_row(); ?>
                                <div class="thoughtBoxInnerSlider">
                                    <div class="thoughtBoxContent">
                                        <div class="thoughtImg">
                                            <?php $exploreimage = get_sub_field('explore_image');
                                            if (!empty($exploreimage)) : ?>
                                                <img src="<?php echo esc_url($exploreimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($exploreimage['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="serviceExcellenceText">
                                            <p class="font20"><?php echo get_sub_field('explore_box_tag'); ?></p>
                                            <h5 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('explore_box_title'); ?></h5>
                                        </div>
                                        <div class="thoughtOverlay">
                                            <h6 class="font20"><?php echo get_sub_field('explore_box_tag'); ?></h6>
                                            <h4 class="font20 commonsSemiBold colorG"><?php echo get_sub_field('explore_box_description'); ?></h4>
                                            <a href="<?php echo get_sub_field('overlay_cta_link'); ?>" class="cta2"><?php echo get_sub_field('overlay_cta'); ?></a>
                                        </div>
                                        <?php $box_tags = get_sub_field('box_tags');
                                            if (!empty($box_tags)) : ?>
                                            <div class="statusTag">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/eye-icon.png" alt="">
                                                <p class="font16"><?php echo $box_tags ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
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
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
   
</section>



<section class="publisherSection">
    <div class="wrapper">
        <?php if (have_rows('publisher_section')) : ?>
            <?php while (have_rows('publisher_section')) : the_row(); ?>
                <a href="<?php echo get_sub_field('cta_link'); ?>" class="publisherCtaDesktop">
                    <div class="publisherHolder">
                        <div class="publisherImgHolder">
                            <div class="publisherImgOne">
                                <?php $imageone = get_sub_field('image_one');
                                if (!empty($imageone)) : ?>
                                    <img src="<?php echo esc_url($imageone['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imageone['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="publisherImgTwo">
                                <div>
                                    <?php $imagetwo = get_sub_field('image_two');
                                    if (!empty($imagetwo)) : ?>
                                        <img src="<?php echo esc_url($imagetwo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagetwo['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <?php $imagethree = get_sub_field('image_three');
                                    if (!empty($imagethree)) : ?>
                                        <img src="<?php echo esc_url($imagethree['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagethree['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="publisherTextHolder">
                            <h3 class="font40 commonsSemiBold"><?php echo get_sub_field('heading_one'); ?></h3>
                            <h2 class="caslonGraphiqueEF font60"><?php echo get_sub_field('heading_two'); ?></h2>
                            <p class="font24 colorG"><?php echo get_sub_field('know_more_description'); ?></p>
                            <h6 class="publisherCTA"><?php echo get_sub_field('know_more_cta'); ?></h6>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
<script>
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#indutryServicesPage").offset().top - 100}
    );
});  
</script>