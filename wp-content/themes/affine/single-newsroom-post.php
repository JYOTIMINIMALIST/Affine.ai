<?php get_header(); ?>

<section class="partnershipBanner blogsArticleBanner">
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
		                    <div class="div-parts">
		                        <div>
                                    <?php $authorImg = get_sub_field('newsroom_author_image');
                                        if( !empty( $authorImg ) ): ?>
                                        <img src="<?php echo esc_url($authorImg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorImg['alt']); ?>" />
                                    <?php endif; ?>
		                        </div>
		                        <div class="parts-text">
		                        <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('newsroom_author_name'); ?></h3>
		                        <h4 class="font20 colorLG"><?php echo get_sub_field('newsroom_date'); ?> | <?php echo reading_time(); ?> read</h4>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="details">
    <div class="wrapper">
        <div class="details-text">
        	<?php the_content(); ?>
        </div>
        <div class="author">
        	<?php if( have_rows('about_author_details') ): ?>
				<?php while( have_rows('about_author_details') ): the_row(); ?>
					<div class="details-author">
                        <?php $aboutAuthorImg = get_sub_field('about_author_image');
                            if( !empty( $aboutAuthorImg ) ): ?>
                            <img src="<?php echo esc_url($aboutAuthorImg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($aboutAuthorImg['alt']); ?>" />
                        <?php endif; ?>
		                <div class="AuthorInfo">
		                    <h6 class="author-h6 font24"><?php echo get_sub_field('section_heading'); ?></h6>
		                    <h2 class="font30 colorG author-h2"><?php echo get_sub_field('about_author_description'); ?></h2>
		                    <p class="font24 colorG author-p commonsExtraBold"><?php echo get_sub_field('about_author_name'); ?></p>
		                </div>
		            </div>
		            <div class="social-icon-nw">
                        <?php if( have_rows('author_social_sites') ): ?>
                            <?php while( have_rows('author_social_sites') ): the_row(); ?>
                                <a href="<?php echo get_sub_field('social_link'); ?>">
                                    <?php $socialIcon = get_sub_field('social_icon');
                                        if( !empty( $socialIcon ) ): ?>
                                        <img src="<?php echo esc_url($socialIcon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($socialIcon['alt']); ?>" />
                                    <?php endif; ?>
                                </a>
                            <?php endwhile; ?>
			            <?php endif; ?>
		            </div>
				<?php endwhile; ?>
			<?php endif; ?>
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

<?php get_footer(); ?>