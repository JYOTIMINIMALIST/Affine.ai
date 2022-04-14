<?php get_header(); /*Template Name: COE AI Vision*/ ?>

<section class="coeAIVisionBanner">
    <?php $banner_image = get_field('banner_image');
        if (!empty($banner_image)) : ?>
        <img src="<?php echo esc_url($banner_image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
    <?php endif; ?>
    <img src="<?php bloginfo('template_directory'); ?>/images/vision-banner-bg.png" alt="" class="visionBannerBg">
</section>

<section class="coeVisionBodyTextHolder">
<img src="<?php bloginfo('template_directory'); ?>/images/iron-man-circle.png" alt="" class="visionAIBg-1">
<img src="<?php bloginfo('template_directory'); ?>/images/rain-drop-bg.png" alt="" class="visionAIBg-2">
<img src="<?php bloginfo('template_directory'); ?>/images/tech-lines.png" alt="" class="visionAIBg-3">
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

<section class="lifeSection expertsSection">
    <?php if (have_rows('experts_section', 59)) : ?>
        <?php while (have_rows('experts_section', 59)) : the_row(); ?>
            <div class="lifeHolder">
                <h2 class="font48 caslonGraphiqueEF"><?php echo get_sub_field('section_heading'); ?></h2>
                <div class="lifeSliderWrapper">
                    <div class="lifeSlider">
                        <?php if (have_rows('experts_content')) : ?>
                            <?php while (have_rows('experts_content')) : the_row(); ?>
                                <div class="expertsCard">
                                    <div class="expertsCardImg">
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
                                    <div>
                                        <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('team_member_name'); ?></h3>
                                        <p class="font16 colorG"><?php echo get_sub_field('team_member_designation'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="sliderArrow">
                        <button class="back lifeSliderBack">
                            <img src="<?php bloginfo('template_directory'); ?>/images/life-left-slider.svg" alt="">
                        </button>
                        <button class="forward lifeSliderForward">
                            <img src="<?php bloginfo('template_directory'); ?>/images/life-right-slider.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>