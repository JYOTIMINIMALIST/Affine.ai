<?php get_header(); /*Template Name: Why-Join-Us*/ ?>

<section class="videoSection join-us-header">
    <?php if( have_rows('join_video_section') ): ?>
        <?php while( have_rows('join_video_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="videos">
                    <h2 class="font60 caslonGraphiqueEF colorG video-h2"><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="thumbnailDiv">
                    <?php $videothumbnail = get_sub_field('video_thumbnail');
                        if( !empty( $videothumbnail ) ): ?>
                        <img src="<?php echo esc_url($videothumbnail['url']); ?>" loading="lazy" alt="<?php echo esc_attr($videothumbnail['alt']); ?>" />
                    <?php endif; ?>
                    <a data-fancybox class="videoPlayBtn" href="<?php echo get_sub_field('video_link'); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" alt="">
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="possibilitiesSection">
    <?php if( have_rows('unlimited_possibilities_section') ): ?>
        <?php while( have_rows('unlimited_possibilities_section') ): the_row(); ?>
            <div class="possibilitiesHolder">
                <div class="wrapper">
                    <h2 class="font60 caslonGraphiqueEF colorG developmentHead"><?php echo get_sub_field('section_heading'); ?></h2>
                    <div class="possibilitiesImgHolder">
                        <div class="possibilitiesBigImg">
                            <?php $possibilitiesbg = get_sub_field('section_background_image');
                                if( !empty( $possibilitiesbg ) ): ?>
                                <img src="<?php echo esc_url($possibilitiesbg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($possibilitiesbg['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <?php if( have_rows('unlimited_possibilities_content') ): ?>
                            <?php $counter=1; while( have_rows('unlimited_possibilities_content') ): the_row(); ?>
                                <div class="possibilitiesSmallImgHolder possibilitiesPosition<?php echo $counter; ?>">
                                    <div class="possibilitiesSmallImg">
                                        <?php $possibilitiesicon = get_sub_field('content_icon');
                                            if( !empty( $possibilitiesicon ) ): ?>
                                            <img src="<?php echo esc_url($possibilitiesicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($possibilitiesicon['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <p class="font16 commonsMedium colorG"><?php echo get_sub_field('content_heading'); ?></p>
                                </div>
                            <?php $counter=$counter+1; endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="possibilitiesImgMobileHolder">
                        <?php if( have_rows('unlimited_possibilities_content') ): ?>
                            <?php while( have_rows('unlimited_possibilities_content') ): the_row(); ?>
                                <div class="possibilitiesSmallImgMobileHolder">
                                    <div class="possibilitiesSmallImg">
                                        <?php $possibilitiesicon = get_sub_field('content_icon');
                                            if( !empty( $possibilitiesicon ) ): ?>
                                            <img src="<?php echo esc_url($possibilitiesicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($possibilitiesicon['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <p class="font16 commonsMedium colorG"><?php echo get_sub_field('content_heading'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="possibilitiesBigImgHolder">
                            <?php $possibilitiesbg = get_sub_field('section_background_image');
                                if( !empty( $possibilitiesbg ) ): ?>
                                <img src="<?php echo esc_url($possibilitiesbg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($possibilitiesbg['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="development">
    <?php if( have_rows('learning_and_development') ): ?>
        <?php while( have_rows('learning_and_development') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG developmentHead"><?php echo get_sub_field('section_heading'); ?></h2>
                <div class="dev-laern">
                    <?php if( have_rows('learning_content') ): ?>
                        <?php while( have_rows('learning_content') ): the_row(); ?>
                            <div class="learn">
                                <div class="learn-develop">
                                    <?php $learningimage = get_sub_field('content_image');
                                        if( !empty( $learningimage ) ): ?>
                                        <img src="<?php echo esc_url($learningimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($learningimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="learn-develop2">
                                    <h2 class="font42 commonsBold"><?php echo get_sub_field('content_heading'); ?></h2>
                                    <h4 class="font20 commonsRegular"><?php echo get_sub_field('content_description'); ?></h4>
                                </div>
                                <a href="<?php echo get_sub_field('cta_link'); ?>">
                                    <?php $ctaicon = get_sub_field('cta_icon');
                                        if( !empty( $ctaicon ) ): ?>
                                        <img src="<?php echo esc_url($ctaicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($ctaicon['alt']); ?>" />
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>