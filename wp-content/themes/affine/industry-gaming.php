<?php get_header(); /*Template Name: Industry Gaming */ ?>

<section class="cpgBanner industryManuBanner">
	    <div class="indGameAnimation" style="z-index: 3;">
        <div id="industry-game-banner"></div>
        <div id="industry-game-banner-mob"></div>
    </div>
    <div class="cpgBannerSlider indGameBannerImg">
        <?php if( have_rows('banner_section') ): ?>
            <?php while( have_rows('banner_section') ): the_row(); ?>
                <div class="cpgBannerInnerSlider">
                    <div class="cpgBannerHolder">
                        <div class="cpgBannerImg">
                            <?php $bannerdeskimage = get_sub_field('banner_desktop_image');
                                if( !empty( $bannerdeskimage ) ): ?>
                                <img src="<?php echo esc_url($bannerdeskimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerdeskimage['alt']); ?>" class="cpgSlider" />
                            <?php endif; ?>
                            <?php $bannermobimage = get_sub_field('banner_mobile_image');
                                if( !empty( $bannermobimage ) ): ?>
                                <img src="<?php echo esc_url($bannermobimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannermobimage['alt']); ?>" class="cpgSliderMob" />
                            <?php endif; ?>
                        </div>
                        <div class="cpgBannerText">
                            <div class="wrapper">
                                <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                                <h3 class="font24 colorG"><?php echo get_sub_field('banner_description'); ?></h3>
                                <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta1 sparkleBtn"><?php echo get_sub_field('cta_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <a href="#cpgServices" class="scrollDown">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="">
    </a>
</section>


<section class="serviceAreasSection serviceGamingSection" id="cpgServices">
    <?php if( have_rows('services_section') ): ?>
        <?php while( have_rows('services_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="serviceAreasHeading">
                    <h2 class="font60 caslonGraphiqueEF"><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="aiAllHolder">
                    <?php if( have_rows('card_content') ): ?>
                        <?php while( have_rows('card_content') ): the_row(); ?>
                            <div class="gaming-card">
								<a href="<?php echo get_sub_field('services_page_link'); ?>">
                                <div class="allCardImg">
                                    <?php $serviceimage = get_sub_field('card_image');
                                        if( !empty( $serviceimage ) ): ?>
                                        <img src="<?php echo esc_url($serviceimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($serviceimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="allCardText">
                                    <h3 class="font30 commonsSemiBold"><?php echo get_sub_field('card_heading'); ?></h3>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/images/industry-gaming-border-img.png" alt="" class="gamingBorder">
								</a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="excellenceSection areasSection excellenceCPGSection">
    <div class="wrapper">
        <div class="sectionHeading">
            <h2 class="font60 caslonGraphiqueEF colorG">Resources that help us beyond what we did.</h2>
        </div>
        <div class="excellenceInner">
            <div class="filterHolder">
                <div class="mobileExcellenceFilter">
                    <img src="<?php bloginfo('template_directory'); ?>/images/all-inner.png" alt="" class="coloredIcon allTopicImage">
                    <p class="allTopicText">ALL TOPICS</p>
                    <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="" class="downArrow">
                </div>
                <div class="filterHolderInner">
                    <ul class="netflixFilter clearfix">
                        <li data-filtertarget="all" class="active menuClassDown" onclick="filter(this)">
                        <span class="all-inner">
                            <img src="<?php bloginfo('template_directory'); ?>/images/all-inner.png" alt="" class="coloredIcon">
                        </span>
                        All</li>
                        <?php
                            $post_type = array('video-post', 'casestudies-post', 'whitepaper-post', 'post');
                            foreach($post_type as $x => $val) {
                            $post_type_obj = get_post_type_object( $val );
                            $singlepostname = $post_type_obj->labels->singular_name;
                            $singleposticon = $post_type_obj->menu_icon;
                            if ($singlepostname == 'Post') {
                                $singlepostname='Blog';
                            }
                            if ($singleposticon == 'dashicons-admin-post') {
                                $singleposticon='https://ixdtm.com/projects/affine/wp-content/themes/affine/images/blogs-inner.png';
                            }
                        ?>
                            <li data-filtertarget="<?php echo $singlepostname ?>" class="menuClassDown" onclick="filter(this)">
                            <span class="<?php echo $singlepostname ?>-inner">
                                <img src="<?php echo $singleposticon?>" alt="" class="coloredIcon">
                            </span>
                                <?php echo $singlepostname ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="excellenceHolder innerExcellenceHolder">
                <div class="excellenceHeading">
                    <h4 class="filterTextVal">ALL</h4>
                    <!-- <div class="button-group js-radio-button-group" data-filter-group="color">
                        <label class="switch">
                            <input type="checkbox" class="filter" data-filter=".VideoOnly">
                            <span class="slider"></span>
                        </label> Show videos only
                    </div> -->
                </div>
                <div class="excellenceSlider">
                    <?php
                        $inner_page = get_field('inner_page_netflix');
                        $args = array(
                            'post_type' => array('video-post','casestudies-post','whitepaper-post','post'),
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'orderby' => array('featured_value' => 'DESC', 'date' => 'DESC'),
                            'meta_query' => array(
                                array(
                                    'key' => 'inner_page_netflix',
                                    'value' => $inner_page,
                                    'compare' => 'LIKE'
                                ),
                            )
                            // 'meta_key'  => 'inner_page_netflix',
                            // 'meta_value'  => 'COE Artificial Intelligence'
                        );
                        $query = new WP_Query( $args ); 
                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post();
                            $inner_page_id = get_field('inner_page_netflix'); ?>
                            <?php 
                                global $post; $post_slug = $post->post_type;
                                $current_page = get_queried_object();
                                $post_type_obj = get_post_type_object( $post_slug );
                                $singlepostname = $post_type_obj->labels->singular_name;
                                if ($singlepostname == 'Post') {
                                    $singlepostname ='Blog';
                                }
                                $page_id = array();
                                foreach ($inner_page_id as $value) {
                                    $page_id[] = $value->ID;
                                }
                                if(in_array($current_page->ID, $page_id)){
                            ?>
                                <div class="excellenceSliderInner <?php echo $singlepostname ?>">
                                    <div class="excellenceCard">
                                        <div class="excellenceCardImg">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                                        </div>
                                        <div class="excellenceCardOverlayTwo"></div>
                                        <div class="excellenceCardOverlay"></div>
                                        <div class="excellenceCardText">
                                            <h3 class="font24 commonsSemiBold"><?php the_title(); ?></h3>
                                            <a href="<?php the_permalink(''); ?>" class="font16 commonsMedium">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/news-arrow.png" alt="">
                                            </a>
                                        </div>
                                        <div class="filterTag">
                                            <p><?php echo $singlepostname ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                }
                                endwhile; ?>
                        <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="businessesSection recognitionSection recognitionGameSection businessesGamingSection">
    <?php if( have_rows('credentials_recognition') ): ?>
        <?php while( have_rows('credentials_recognition') ): the_row(); ?>
            <div class="businessesInner">
                <div class="sectionHeading">
                    <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="businessSlider">
                    <?php if( have_rows('credentials_content') ): ?>
                        <?php while( have_rows('credentials_content') ): the_row(); ?>
                            <div class="businessSliderCard">
                                <div class="businessSliderCardInner">
                                    <div class="businessCardImg">
                                        <?php $serviceimage = get_sub_field('credentials_logo');
                                            if( !empty( $serviceimage ) ): ?>
                                            <img src="<?php echo esc_url($serviceimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($serviceimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="businessCardText">
                                        <h4 class="colorG font20 commonsMedium"><?php echo get_sub_field('credentials_heading'); ?></h4>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <img src="<?php bloginfo('template_directory'); ?>/images/gaming-line-1.png" alt="" class="gamingLineUp">
    <img src="<?php bloginfo('template_directory'); ?>/images/gaming-line-2.png" alt="" class="gamingLineDown">
</section>


<section class="industryGamingSolutionSection">
    <?php if( have_rows('industry_focus_section') ): ?>
        <?php while( have_rows('industry_focus_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="industryGamingSolutionHolder">
                    <div class="industryGamingSolutionImg">
                        <?php $indgamingsolimage = get_sub_field('box_image');
                            if( !empty( $indgamingsolimage ) ): ?>
                            <img src="<?php echo esc_url($indgamingsolimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($indgamingsolimage['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="industryGamingSolutionText">
                        <p class="font16 colorG"><?php echo get_sub_field('box_tag'); ?></p>
                        <h2 class="font40 commonsSemiBold"><?php echo get_sub_field('box_heading'); ?></h2>
                        <h3 class="font24"><?php echo get_sub_field('box_description'); ?></h3>
                        <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="talkToExpertSection">
    <?php if( have_rows('talk_to_expert') ): ?>
        <?php while( have_rows('talk_to_expert') ): the_row(); ?>
            <div class="wrapper">
                <div class="expertGamingHolder">
                    <div class="expert-talk-img">
                        <?php $talktoimage = get_sub_field('section_icon');
                            if( !empty( $talktoimage ) ): ?>
                            <img src="<?php echo esc_url($talktoimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($talktoimage['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="expert-box">
                        <div class="expert-text">
                            <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                            <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                        </div>
                        <a href="#" class="cta1 sparkleBtn" data-toggle="modal" data-target="#expert"><?php echo get_sub_field('cta_text'); ?></a>
                    </div>
                </div>
            </div>
            <div class="modal fade excellenceModal contactUsModal" id="expert" tabindex="-1" role="dialog"
                aria-labelledby="proposalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php bloginfo('template_directory'); ?>/images/close-icon.png" alt="">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modalBodyInner">
                                <div class="expert-block">
                                    <div class="formHeading">
                                        <h3 class="font48 commonsMedium">Schedule a Call with expert</h3>
                                    </div>
                                </div>
                                <h5 class="font16 commonsRegular ex-p">We will give you a personalised walkthrough of technology
                                    solutions and how you can increase business</h5>
                                    <?php echo get_sub_field('popup_form'); ?>
                                <!-- <form>
                                    <div class="inputElement">
                                        <label>Full Name</label>
                                        <input type="text">
                                    </div>
                                    <div class="inputElement">
                                        <label>Country</label>
                                        <input type="text">
                                    </div>
                                    <div class="inputElement">
                                        <label>Mobile Number</label>
                                        <input type="text">
                                    </div>
                                    <div class="inputElement">
                                        <label>Email Id</label>
                                        <input type="text">
                                    </div>

                                    <h5 class="font16 commonsRegular">What time works best?</h5>
                                    <div class="expert-para">
                                        <p class="font24 commonsRegular">Today</p>
                                        <p class="font24 commonsRegular">Tomorrow</p>
                                        <p class="font24 commonsRegular">Wed, 12Mar</p>
                                    </div>

                                    <div class="inputElement expert-date">
                                        <label>Choose specific date</label>
                                        <input type="date" placeholder="Choose specific date">
                                    </div>
                                    <div class="inputElement expert-time">
                                        <label>Choose Suitable time</label>
                                        <input type="time" placeholder="Choose specific date">
                                    </div>
                                    <h5 class="font16 commonsRegular std-time">India Standard Time - Kolkata</h5>
                                    <div class="expert-btn">
                                        <button class="cta1">Submit Now</button>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="manuExploreSection">
    <?php if( have_rows('explore_excellence_section') ): ?>
        <?php while( have_rows('explore_excellence_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="manuExploreHolder">
                    <div class="manuExploreImg">
                        <?php $exploreexcellenceimage = get_sub_field('section_image');
                            if( !empty( $exploreexcellenceimage ) ): ?>
                            <img src="<?php echo esc_url($exploreexcellenceimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($exploreexcellenceimage['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="manuExploreText">
                        <div class="wrapper">
                            <h2 class="colorWhite font48 commonsSemiBold"><?php echo get_sub_field('section_heading'); ?></h2>
                            <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta2"><?php echo get_sub_field('cta_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="coeExploreSection">
    <?php if( have_rows('explore_affine_world') ): ?>
        <?php while( have_rows('explore_affine_world') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
            </div>
            <div class="coeExploreHolder">
                <div class="coeExploreEvent">
                    <?php if( have_rows('explore_upcoming_webinar') ): ?>
                        <?php while( have_rows('explore_upcoming_webinar') ): the_row(); ?>
                            <div class="coeExploreEventImg">
                                <?php $webinarimage = get_sub_field('background_image');
                                    if( !empty( $webinarimage ) ): ?>
                                    <img src="<?php echo esc_url($webinarimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($webinarimage['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="coeExploreEventText">
                                <div class="coeExploreEventTextOne">
                                    <p class="font20"><?php echo get_sub_field('section_tag'); ?></p>
                                    <h3 class="font40 commonsSemiBold"><?php echo get_sub_field('heading'); ?></h3>
                                    <div class="main-div">
                                        <div class="div-parts part2">
                                            <div>
                                                <?php $webinarmember = get_sub_field('member_image');
                                                    if( !empty( $webinarmember ) ): ?>
                                                    <img src="<?php echo esc_url($webinarmember['url']); ?>" loading="lazy" alt="<?php echo esc_attr($webinarmember['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="parts-text">
                                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('member_name'); ?></h3>
                                                <h4 class="font20 colorLG"><?php echo get_sub_field('member_designation'); ?></h4>
                                            </div>
                                        </div>
                                        <div class="div-parts part1">
                                            <div>
                                                <?php $webinarcalendar = get_sub_field('calendar_icon');
                                                    if( !empty( $webinarcalendar ) ): ?>
                                                    <img src="<?php echo esc_url($webinarcalendar['url']); ?>" loading="lazy" alt="<?php echo esc_attr($webinarcalendar['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="parts-text">
                                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('webinar_date'); ?></h3>
                                                <h4 class="font20 colorLG commonsMedium"><?php echo get_sub_field('webinar_time'); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="coeExploreEventTextTwo">
                                    <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta2"><?php echo get_sub_field('cta_text'); ?></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="coeExploreToughtBox">
                    <?php if( have_rows('explore_thoughbox_data') ): ?>
                        <?php while( have_rows('explore_thoughbox_data') ): the_row(); ?>
                            <div class="coeExploreToughtBoxImg">
                                <?php $thoughboximage = get_sub_field('card_image');
                                    if( !empty( $thoughboximage ) ): ?>
                                    <img src="<?php echo esc_url($thoughboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($thoughboximage['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo get_sub_field('card_cta_link'); ?>" class="ExploreToughtBoxCTA cta2"><?php echo get_sub_field('card_cta_text'); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="enterprisesSection enterprisesCPGSection">
    <?php if( have_rows('enterprises_section') ): ?>
        <?php while( have_rows('enterprises_section') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('heading'); ?></h2>
                <p class="font24 colorG"><?php echo get_sub_field('description'); ?></p>
                <a href="" data-toggle="modal" data-target="#proposal" class="cta1 sparkleBtn"><?php echo get_sub_field('cta_text'); ?></a>
            </div>
            <!-- Request for proposal Modal-->
            <div class="modal fade excellenceModal contactUsModal" id="proposal" tabindex="-1" role="dialog"
                aria-labelledby="proposalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php bloginfo('template_directory'); ?>/images/close-icon.png" alt="">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modalBodyInner">
                                <div class="flipModalHeader">
                                    <div class="formHeading">
                                        <h3 class="font48 commonsMedium">Request for Proposal</h3>
                                    </div>
                                </div>
                                <?php echo get_sub_field('popup_form'); ?>
                                <!-- <form>
                                    <div class="inputElement">
                                        <label>Full Name</label>
                                        <input type="text">
                                    </div>
                                    <div class="inputElement">
                                        <label>Business Email Id</label>
                                        <input type="text">
                                    </div>
                                    <div class="inputElement">
                                        <label>Company Name</label>
                                        <input type="text">
                                    </div>
                                    <div class="fileUploadDiv">
                                        <input type="file" name="uploadCV" id="uploadCV" class="custom-file-input">
                                        <span>
                                            <img src="<?php bloginfo('template_directory'); ?>/images/file-upload.png" alt="">
                                            <p class="font24">Click to browse file Or drag and drop, copy and paste files</p>
                                        </span>
                                    </div>
                                    <p class="font16 colorG notePara">If you don't have RFP documents with you, download RFP
                                        template and uploaded it
                                        <a href="" class="font16">Download here</a>
                                    </p>
                                    <button class="submitBtn2 expert-btn">Submit</button>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>

<script>
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#cpgServices").offset().top - 50}
    );
});
if ($("#industry-game-banner").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('industry-game-banner'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/industry-game-banner.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "industry-game-banner", // Name for future reference. Optional.
  });
}
if ($("#industry-game-banner-mob").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('industry-game-banner-mob'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/industry-game-banner-mob.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "industry-game-banner-mob", // Name for future reference. Optional.
  });
}
</script>