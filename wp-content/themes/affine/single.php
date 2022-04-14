<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package affine
 */

get_header();
?>

<section class="partnershipBanner blogsArticleBanner">
    <div class="partnershipBgImg">
        <img src="<?php echo get_field('banner_image'); ?>" alt="" class="desktopBanner" >
        <img src="<?php echo get_field('mobile_banner_image'); ?>" alt="" class="mobileBanner">
        <div class="contactBannerOverlayTwo"></div>
        <div class="contactBannerOverlayThree"></div>
        <div class="contactBannerOverlayFour"></div>
        <div class="contactBannerOverlayFive"></div>
        <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText whitepaperBannerText">
            <div class="wrapper">
                <h1 class="font80 caslonGraphiqueEF"><?php the_title(); ?></h1>
                <p class="font24 colorG"><?php echo get_field('banner_description'); ?></p>
                <div class="main-div">
                    <?php if( have_rows('author_details') ): ?>
                    <?php while( have_rows('author_details') ): the_row(); ?>
                        <div class="div-parts">
                            <div class="authorDivImg">
                                <?php $authorimage = get_sub_field('author_image');
                                    if (!empty($authorimage)) : ?>
                                    <img src="<?php echo esc_url($authorimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorimage['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="parts-text">
                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('author_name'); ?></h3>
                                <h4 class="font20 colorLG"><?php echo get_sub_field('author_designation'); ?></h4>
                            </div>
                        </div>
                    <?php endwhile; ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
	.details-text h2{font-size: 60px;color: #EAEAEA;padding-top: 20px;}
	.details-text h3{font-size: 40px;color: #EAEAEA;padding-top: 20px}
	.details-text h4{font-size: 30px;color: #EAEAEA;padding-top: 20px}
	.details-text p{font-size: 24px;color: #EAEAEA;padding-top: 20px}
	.details-text img{margin: 30px 0px;}
	@media all and (max-width: 1600px) {
		.details-text h2{font-size: 40px;color: #EAEAEA;}
		.details-text h3{font-size: 26px;color: #EAEAEA;}
		.details-text h4{font-size: 24px;color: #EAEAEA;}
		.details-text p{font-size: 20px;color: #EAEAEA;}
	}
	@media all and (max-width: 900px) {
		.details-text h2{font-size: 32px;color: #EAEAEA;}
		.details-text h3{font-size: 22px;color: #EAEAEA;}
		.details-text h4{font-size: 20px;color: #EAEAEA;}
		.details-text p{font-size: 18px;color: #EAEAEA;}
	}
</style>

<section class="details">
    <div class="wrapper">
        <div class="details-text">
        	<?php the_content(); ?>
        </div>
        <div class="authorSlider">
            <?php if( have_rows('author_details') ): ?>
            <?php while( have_rows('author_details') ): the_row(); ?>
                <div class="author">
                    <div class="details-author">
                        <?php $authorimage = get_sub_field('author_image');
                            if (!empty($authorimage)) : ?>
                            <img src="<?php echo esc_url($authorimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorimage['alt']); ?>" />
                        <?php endif; ?>
                        <div class="AuthorInfo">
                            <h6 class="author-h6">About Author</h6>
                            <h2 class="font30 colorG author-h2 "><?php echo get_sub_field('author_description'); ?></h2>
                            <p class="font24 colorG author-p commonsBold"><?php echo get_sub_field('author_name'); ?></p>
                        </div>
                    </div>
                    <div class="social-icon-nw">
                        <?php if( have_rows('social_icons') ): ?>
                        <?php while( have_rows('social_icons') ): the_row(); ?>
                            <a href="<?php echo get_sub_field('cta_link'); ?>">
                                <img src="<?php echo get_sub_field('icons'); ?>" alt="">
                            </a>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>    
        </div>
    </div>
</section>

<section class="exploreSection recommendedBlogSection">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG">Recommended Blogs & Articles</h2>
        <div class="exploreHolder">
            <div class="exploreSlider">
            <?php
                $related_post = get_field('related_post');
                if ($related_post) : ?>
                    <?php foreach ($related_post as $post) : setup_postdata($post); ?>
                        <div class="exploreInnerSlider">
                            <a href="<?php the_permalink();?>">
                                <div class="exploreContent recommendedContent">
                                    <div class="whitepaperTopicImg">
                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="">
                                    </div>
                                    <h3 class="font30 commonsSemiBold colorG"><?php the_title(); ?></h3>
                                    <h4 class="font16 colorG"><?php $content = wp_strip_all_tags(get_the_content()); echo substr($content, 0, 150). '...'; ?></h4>
                                    <div class="whitepaperAuthorInfo">
                                        <?php if( have_rows('author_details') ): ?>
                                        <?php while( have_rows('author_details') ): the_row(); ?>
                                            <div class="authorInner">
                                                <div class="whitepaperAuthorImg">
                                                    <?php $authorimage = get_sub_field('author_image');
                                                        if (!empty($authorimage)) : ?>
                                                        <img src="<?php echo esc_url($authorimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorimage['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="whitepaperAuthorText">
                                                    <h5 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('author_name'); ?></h5>
                                                    <p class="font16 colorG"><?php echo get_sub_field('author_designation'); ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
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
</section>

<?php get_footer(); ?>