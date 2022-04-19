<?php get_header(); ?>

<section class="partnershipBanner postEventBanner">
    <div class="partnershipBgImg">
        <?php $banner_image = get_field('banner_image');
        if (!empty($banner_image)) : ?>
            <img src="<?php echo esc_url($banner_image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($banner_image['alt']); ?>" class="caseBannerImg" />
        <?php endif; ?>
        <div class="contactBannerOverlayTwo"></div>
        <div class="contactBannerOverlayThree"></div>
        <div class="contactBannerOverlayFour"></div>
        <div class="contactBannerOverlayFive"></div>
        <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText whitepaperBannerText">
            <div class="wrapper">
                <h1 class="font80 caslonGraphiqueEF"><?php the_title(); ?></h1>
                <p class="font24 colorG"><?php echo get_field('banner_text'); ?></p>
                <div class="main-div post-event-text">
                    <div class="div-parts part1 cal">
                        <div class="parts-text">
                            <div class="eventInfo">
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/banner-img1.png" alt="">
                                </div>
                                <div class="headingEvent">
                                    <h3 class="font24 commonsSemiBold colorG"><?php echo get_field('event_date'); ?></h3>
                                    <h3 class="font24 commonsSemiBold colorG"><?php echo get_field('event_time'); ?></h3>
                                </div>
                            </div>

                            <?php $ctaText = get_field('upcoming_cta_text'); ?>
                            <?php if (!empty($ctaText)) { ?>
                                <a href="#bookyourslot" class="cta1 regNow"><?php echo $ctaText ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="details eventDetails">
    <div class="wrapper">
        <div class="details-text">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php $upcomingFormText = get_field('upcoming_form_heading'); ?>
<?php if (!empty($upcomingFormText)) { ?>
    <section class="bookyourslot" id="bookyourslot">
        <div class="wrapper">
            <div class="slotdetails">
                <h1 class="font48 commonsRegular"><?php echo $upcomingFormText ?></h1>
            </div>
            <?php echo get_field('upcoming_form_shortcode'); ?>
        </div>
    </section>
<?php } ?>

<?php $exploreText = get_field('post_event_moments_heading'); ?>
<?php if (!empty($exploreText)) { ?>
    <section class="interestedSection">
        <div class="wrapper">
            <h2 class="font60 caslonGraphiqueEF colorG"><?php echo $exploreText ?></h2>
        </div>
        <?php if (have_rows('post_event_moments_section')) : ?>
            <?php while (have_rows('post_event_moments_section')) : the_row(); ?>
                <div class="interestedWrapper">
                    <div class="interestedSlider">
                        <?php if (have_rows('slide_content')) : ?>
                            <?php while (have_rows('slide_content')) : the_row(); ?>
                                <?php if (get_row_layout() == 'single_box') : ?>
                                    <div class="interestedInnerSlider">
                                        <a href="<?php echo get_sub_field('content_heading_link'); ?>">
                                            <div class="interestedCard">
                                                <?php $intrestedimage = get_sub_field('content_image');
                                                if (!empty($intrestedimage)) : ?>
                                                    <img src="<?php echo esc_url($intrestedimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($intrestedimage['alt']); ?>" class="caseBannerImg" />
                                                <?php endif; ?>
                                                <div class="interestedOverlayText">
                                                    <h3 class="font24 commonsMedium"><?php the_sub_field('content_heading'); ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <?php elseif (get_row_layout() == 'double_box') : ?>
                                    <div class="interestedInnerSlider">
                                        <div class="interestedCardTwo">
                                            <?php if (have_rows('double_box_content')) : ?>
                                                <?php while (have_rows('double_box_content')) : the_row(); ?>
                                                    <a href="<?php echo get_sub_field('content_heading_link'); ?>">
                                                        <div class="interestedLinkDiv">
                                                            <?php $intresteddoubleimage = get_sub_field('content_image');
                                                            if (!empty($intresteddoubleimage)) : ?>
                                                                <img src="<?php echo esc_url($intresteddoubleimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($intresteddoubleimage['alt']); ?>" class="caseBannerImg" />
                                                            <?php endif; ?>
                                                            <div class="interestedLinkText ">
                                                                <div class="interestedLinkTextInner">
                                                                    <h4 class="font24 commonsMedium"><?php echo get_sub_field('content_heading'); ?></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
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
<?php } ?>

<?php get_footer(); ?>