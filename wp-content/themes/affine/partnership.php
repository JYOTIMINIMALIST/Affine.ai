<?php get_header(); /*Template Name: Partnership */ ?>

<section class="partnershipBanner academiaBanner">
    <?php if (have_rows('banner_section')) : ?>
        <?php while (have_rows('banner_section')) : the_row(); ?>
            <?php echo get_sub_field('desk_banner'); ?>
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
                            <?php if (have_rows('banner_logos_list')) : ?>
                                <?php while (have_rows('banner_logos_list')) : the_row(); ?>
                                    <div class="partnersInnerHolder">
                                        <?php $logoimage = get_sub_field('logo_image');
                                        if (!empty($logoimage)) : ?>
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
                    <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="technologySection" id="technologySection">
    <div class="wrapper">
        <?php if (have_rows('our_technology_section')) : ?>
            <?php while (have_rows('our_technology_section')) : the_row(); ?>
                <div class="technologyHeading">
                    <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                    <div class="technologySubHeading">
                        <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                    </div>
                </div>
                <div class="aboutCEOHolder">
                    <div class="CEOImg">
                        <?php $memberimage = get_sub_field('member_image');
                        if (!empty($memberimage)) : ?>
                            <img src="<?php echo esc_url($memberimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($memberimage['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="CEOTExt">
                        <h3 cl="font48 commonsMedium colorG"><?php echo get_sub_field('member_description'); ?></h3>
                        <p class="font30 colorG commonsLight"><?php echo get_sub_field('member_name_and_designation'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('partnership_content')) : ?>
            <?php while (have_rows('partnership_content')) : the_row(); ?>
                <div class="otherCompaniesHolder">
                    <div class="otherCompaniesInnerHolder">
                        <div class="comapnyImg">
                            <?php $partnershiplogo = get_sub_field('partnership_logo');
                            if (!empty($partnershiplogo)) : ?>
                                <img src="<?php echo esc_url($partnershiplogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($partnershiplogo['alt']); ?>" />
                            <?php endif; ?>
                            <p class="font30 commonsLight"><?php echo get_sub_field('partnership_name'); ?></p>
                        </div>
                        <div class="companyText">
                            <h3 class="font30 commonsMedium"><?php echo get_sub_field('partnership_description'); ?></h3>
                            <div class="comapanyOwner">
                                <?php $partnershipmemberimage = get_sub_field('partnership_member_image');
                                if (!empty($partnershipmemberimage)) : ?>
                                    <img src="<?php echo esc_url($partnershipmemberimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($partnershipmemberimage['alt']); ?>" />
                                <?php endif; ?>
                                <p class="font20 commonsLight"><?php echo get_sub_field('partnership_member_designation'); ?></p>
                            </div>
                        </div>
                    </div> 
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php if (have_rows('proud_partner_section')) : ?>
    <?php while (have_rows('proud_partner_section')) : the_row(); ?>
        <?php $proudpartnerlogo = get_sub_field('proud_partner_logo');
            if (!empty($proudpartnerlogo)) : ?>
            <section class="proudPatnerSection">
                <div class="wrapper">
                    <div class="proudPatnerHolder">
                        <div class="proudPatnerInnerHolder">
                            <div class="proudPatnerImgHolder">
                                <div class="proudPatnerImg">
                                    <img src="<?php echo esc_url($proudpartnerlogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($proudpartnerlogo['alt']); ?>" />
                                </div>
                                <div class="proudPatnerHeadMob">
                                    <p class="font24 commonsLight"><?php echo get_sub_field('section_heading'); ?></p>
                                    <h2 class="font48 commonsMedium colorG"><?php echo get_sub_field('proud_partner_heading'); ?></h2>
                                </div>
                            </div>

                            <div class="proudPatnerText">
                                <div class="proudPatnerHead">
                                    <p class="font24 commonsLight"><?php echo get_sub_field('section_heading'); ?></p>
                                    <h2 class="font48 commonsMedium colorG"><?php echo get_sub_field('proud_partner_heading'); ?></h2>
                                </div>

                                <div class="proudPatnerFeatures">
                                    <?php if (have_rows('proud_partner_features')) : ?>
                                        <?php while (have_rows('proud_partner_features')) : the_row(); ?>
                                            <div class="featureCard">
                                                <?php $featureicon = get_sub_field('feature_icon');
                                                if (!empty($featureicon)) : ?>
                                                    <img src="<?php echo esc_url($featureicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($featureicon['alt']); ?>" />
                                                <?php endif; ?>
                                                <p class="font24 commonsMedium colorG"><?php echo get_sub_field('feature_heading'); ?></p>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="proudPatnerAuthor">
                                    <?php $proudpartnermemberimage = get_sub_field('proud_partner_member_image');
                                    if (!empty($proudpartnermemberimage)) : ?>
                                        <img src="<?php echo esc_url($proudpartnermemberimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($proudpartnermemberimage['alt']); ?>" />
                                    <?php endif; ?>
                                    <div class="proudPatnerInfo">
                                        <h4 class="font30"><?php echo get_sub_field('proud_partner_member_description'); ?></h4>
                                        <p class="font16 commonsLight"><?php echo get_sub_field('proud_partner_member_name'); ?></p>
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
<script>
    $(".scrollDown").click(function() {
        $('html,body').animate({
            scrollTop: $("#technologySection").offset().top - 100}
        );
    });
</script>