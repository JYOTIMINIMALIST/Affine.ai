<?php get_header(); /*Template Name: Academia */ ?>

<section class="partnershipBanner">
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
                <div class="partnershipBannerText">
                    <div class="wrapper">
                        <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                        <div class="partnersHolder">
                            <?php if( have_rows('banner_logos_list') ): ?>
                                <?php while( have_rows('banner_logos_list') ): the_row(); ?>
                                    <div class="partnersInnerHolder">
                                        <?php $logoimage = get_sub_field('logo_image');
                                            if( !empty( $logoimage ) ): ?>
                                            <img src="<?php echo esc_url($logoimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($logoimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <a href="#technologySection" class="scrollDown">
                    <span class="font16">Scroll</span>
                    <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="">
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="technologySection" id="technologySection">
    <?php if( have_rows('our_technology_section') ): ?>
        <?php while( have_rows('our_technology_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="technologyHeading">
                    <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                    <div class="technologySubHeading">
                        <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                    </div>
                </div>
                <div class="aboutCEOHolder">
                    <div class="CEOImg">
                        <?php $memberimage = get_sub_field('member_image');
                            if( !empty( $memberimage ) ): ?>
                            <img src="<?php echo esc_url($memberimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($memberimage['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="CEOTExt">
                        <h3 cl="font48 commonsMedium colorG"><?php echo get_sub_field('member_description'); ?></h3>
                        <p class="font30 colorG commonsLight"><?php echo get_sub_field('member_name_and_designation'); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php if( have_rows('academia_content') ): ?>
    <?php while( have_rows('academia_content') ): the_row(); ?>
        <?php $academialogo = get_sub_field('academia_logo');
        if( !empty( $academialogo ) ): ?>
        <section class="proudPatnerSection acadmiaPartnerHolder">
            <div class="wrapper">
                <div class="proudPatnerHolder">
                    <div class="proudPatnerInnerHolder">
                        <div class="acadmiaCard">
                            <div class="acadmiaCardLeft">
                                <div class="acadmiaInnerCardLeft">
                                    <img src="<?php echo esc_url($academialogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($academialogo['alt']); ?>" />
                                    <h3 class="font40 commonsMedium colorG"><?php echo get_sub_field('academia_name'); ?></h3>
                                </div>
                                <p class="font24 commonsLight colorG"><?php echo get_sub_field('academia_description'); ?></p>
                            </div>
                            <div class="acadmiaCardRight">
                                <?php $academiamember = get_sub_field('academia_member_image');
                                    if( !empty( $academiamember ) ): ?>
                                    <img src="<?php echo esc_url($academiamember['url']); ?>" loading="lazy" alt="<?php echo esc_attr($academiamember['alt']); ?>" />
                                <?php endif; ?>
                                <div class="companyAuthorInfo">
                                    <h2 class="font30 colorG"><?php echo get_sub_field('academia_member_description'); ?></h2>
                                    <p class="font24 colorG"><?php echo get_sub_field('academia_member_name_designation'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>