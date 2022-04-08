<?php get_header(); /*Template Name: COE Cloud Vision */ ?>

<section class="coeAIVisionBanner coeCloudVisionBanner">
    <?php $banner_image = get_field('banner_image');
        if (!empty($banner_image)) : ?>
        <img src="<?php echo esc_url($banner_image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
    <?php endif; ?>
</section>

<section class="coeVisionBodyTextHolder">
    <div class="coeVisionBodyText">
        <div class="wrapper">
            <?php if (have_rows('heading_and_description')) : ?>
                <?php while (have_rows('heading_and_description')) : the_row(); ?>
                    <div class="visionBodyTextHead">
                        <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('heading'); ?></h1>
                        <h2 class="font24"><?php echo get_sub_field('description'); ?></h2>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('more_description')) : ?>
                <?php while (have_rows('more_description')) : the_row(); ?>
                    <div class="visionBodyTextHolder">
                        <p class="font24 colorG"><?php echo get_sub_field('points'); ?><br><br>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="recommendedSection cloudExpertSection" id="recommendedSection">
    <?php if (have_rows('experts_section', 522)) : ?>
        <?php while (have_rows('experts_section', 522)) : the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <div class="thoughtBoxWrapper">
                    <div class="thoughtBoxSlider">
                        <?php if (have_rows('experts_content')) : ?>
                            <?php while (have_rows('experts_content')) : the_row(); ?>
                                <div class="thoughtBoxInnerSlider">
                                    <a href="<?php echo get_site_url(); ?>/upcoming-event">
                                        <div class="expertBoxContent">
                                            <div class="expertImg">
                                                <?php $teammember = get_sub_field('team_member_image');
                                                if (!empty($teammember)) : ?>
                                                    <img src="<?php echo esc_url($teammember['url']); ?>" loading="lazy" alt="<?php echo esc_attr($teammember['alt']); ?>" />
                                                <?php endif; ?>
                                                <a href="<?php echo get_sub_field('linkedin_link'); ?>" target="_blank" class="linkedCTA">
                                                    <?php $linkedinicon = get_sub_field('linkedin_image');
                                                    if (!empty($linkedinicon)) : ?>
                                                        <img src="<?php echo esc_url($linkedinicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($linkedinicon['alt']); ?>" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <h3 class="font24 commonsSemiBold colorG"> <?php echo get_sub_field('team_member_name'); ?> </h3>
                                            <p class="font20 colorG"> <?php echo get_sub_field('team_member_designation'); ?> </p>
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