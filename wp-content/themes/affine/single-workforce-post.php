<?php get_header(); ?>

<section class="hr-team">
    <div class="wrapper">
        <div class="lead-hr">
            <div class="hr-image">
                <?php $banner_image = get_field('banner_image');
                    if( !empty( $banner_image ) ): ?>
                    <img src="<?php echo esc_url($banner_image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="hr-detail">
                <div class="hr-part1">
                    <?php $catImg = get_field('category_image');
                        if( !empty( $catImg ) ): ?>
                        <img src="<?php echo esc_url($catImg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($catImg['alt']); ?>" />
                    <?php endif; ?>
                    <h6 class="font20 commonsBold"><?php echo get_field('category_name'); ?></h6>
                </div>
                <div class="hr-part2">
                    <h1 class="font60 caslonGraphiqueEF colorG"><?php the_title(); ?></h1>
                    <h6 class="font24 commonsRegular"><?php echo get_field('designation'); ?></h6>
                </div>
                <h6 class="font24 commonsRegular hr-review"><?php echo get_field('banner_description'); ?></h6>
            </div>
        </div>
    </div>
</section>

<section class="details unstoppableDetails">
    <div class="wrapper">
        <div class="details-text">
            <p class="font60 caslonGraphiqueEF colorG "><?php echo get_field('about_heading'); ?></p>
            <p class="font24  colorG details-p2"><?php echo get_field('about_description'); ?></p>

            <?php $aboutImg = get_field('about_image');
                if( !empty( $aboutImg ) ): ?>
                <img src="<?php echo esc_url($aboutImg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($aboutImg['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="recommendedSection exolore-ateam" id="recommendedSection">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG "><?php echo get_field('explore_heading'); ?></h2>
        <h6 class="font24 commonsRegular"><?php echo get_field('explore_description'); ?></h6>
        <div class="thoughtBoxWrapper">
            <div class="thoughtBoxSlider">
                <?php $related_post = get_field('related_post');
                    if ($related_post) : ?>
                        <?php foreach ($related_post as $post) : setup_postdata($post); ?>
                        <div class="thoughtBoxInnerSlider">
                            <a href="<?php the_permalink();?>">
                                <div class="thoughtBoxContent">
                                    <div class="thoughtImg">
                                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                                    </div>
                                    <div class="a-team-part">
                                        <h5 class="font16 commonsSemiBold relatedWorkText" style="color:<?php echo get_field('category_color') ?>;">#<?php echo get_field('category_name'); ?></h3>
                                        <h4 class="commonsRegular font20"><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
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
</section>


<?php get_footer(); ?>