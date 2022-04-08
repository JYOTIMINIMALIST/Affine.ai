<?php get_header(); /*Template Name: Industry Manufacturing*/ ?>

<section class="cpgBanner industryManuBanner">
    <div class="indmanuAnimation" style="z-index: 3;">
        <div id="industrymanu-banner"></div>
        <div id="industrymanu-banner-mob"></div>
    </div>
    <div class="cpgBannerSlider indmanuBannerImg">
        <?php if (have_rows('banner_section')) : ?>
            <?php while (have_rows('banner_section')) : the_row(); ?>
                <div class="cpgBannerInnerSlider">
                    <div class="cpgBannerHolder">
                        <div class="cpgBannerImg">
                            <?php $bannerdeskimage = get_sub_field('banner_desktop_image');
                            if (!empty($bannerdeskimage)) : ?>
                                <img src="<?php echo esc_url($bannerdeskimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerdeskimage['alt']); ?>" class="cpgSlider" />
                            <?php endif; ?>
                            <?php $bannermobimage = get_sub_field('banner_mobile_image');
                            if (!empty($bannermobimage)) : ?>
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
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
</section>

<section class="cpgServices solutionManuSection" id="cpgServices">
    <?php if (have_rows('solution_offerings_section')) : ?>
        <?php while (have_rows('solution_offerings_section')) : the_row(); ?>
            <div class="wrapper">
                <div class="cpgServicesContainer">
                    <div class="cpgServicesHeading">
                        <h2 class="font60 caslonGraphiqueEF"> <?php echo get_sub_field('section_heading'); ?> </h2>
                    </div>
                    <div class="cpgServicesHolder">
                        <?php if (have_rows('card_content')) : ?>
                            <?php while (have_rows('card_content')) : the_row(); ?>
                                <div class="cpgServicesCard">
                                    <div class="cpgServicesImg">
                                        <?php $serviceimage = get_sub_field('card_icon');
                                        if (!empty($serviceimage)) : ?>
                                            <img src="<?php echo esc_url($serviceimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($serviceimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="cpgServicesText">
                                        <h3 class="font30 commonsSemiBold"> <?php echo get_sub_field('card_heading'); ?> </h3>
                                        <?php if (have_rows('card_description')) : ?>
                                            <?php while (have_rows('card_description')) : the_row(); ?>
                                                <ul>
                                                    <li>
                                                        <h4 class="font16"><?php echo get_sub_field('description_points'); ?></h4>
                                                    </li>
                                                </ul>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <?php $card_link = get_sub_field('cta_link');
                                            if( !empty( $card_link ) ): ?>
                                            <a href="<?php echo $card_link ?>" class="cta2"><?php echo get_sub_field('cta_text'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="serviceAreasSection">
    <?php if (have_rows('service_area')) : ?>
        <?php while (have_rows('service_area')) : the_row(); ?>
            <div class="wrapper">
                <div class="serviceAreasHeading">
                    <h2 class="font60 caslonGraphiqueEF"><?php echo get_sub_field('service_heading'); ?></h2>
                </div>
                <div class="serviceAreasHolder">
                    <?php if (have_rows('service_content')) : ?>
                        <?php while (have_rows('service_content')) : the_row(); ?>
                            <div class="serviceAreasCard">
                                <div class="serviceAreasImg">
                                    <?php $serviceimage = get_sub_field('service_image');
                                    if (!empty($serviceimage)) : ?>
                                        <img src="<?php echo esc_url($serviceimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($serviceimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="serviceAreasText">
                                    <h3 class="font30 commonsSemiBold"><?php echo get_sub_field('service_title'); ?></h3>
                                    <a href="<?php echo get_sub_field('service_image_link'); ?>">
<!--                                         <?php $servicearrow = get_sub_field('service_arrow');
                                        if (!empty($servicearrow)) : ?>
                                            <img src="<?php echo esc_url($servicearrow['url']); ?>" loading="lazy" alt="<?php echo esc_attr($servicearrow['alt']); ?>" />
                                        <?php endif; ?> -->
                                    </a>
                                </div>
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

<!-- <section class="businessesSection recognitionAESection recognitionCPGSection">
    <?php if (have_rows('credentials_recognition')) : ?>
        <?php while (have_rows('credentials_recognition')) : the_row(); ?>
            <div class="businessesInner">
                <div class="wrapper">
                    <div class="sectionHeading">
                        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                    </div>
                    <div class="businessSlider">
                        <?php if (have_rows('credentials_content')) : ?>
                            <?php while (have_rows('credentials_content')) : the_row(); ?>
                                <div class="businessSliderCard">
                                    <div class="businessSliderCardInner">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/ae-left-leaf.png" alt="">
                                        <div class="businessCardText">
                                            <p class="colorG font16"><?php echo get_sub_field('credentials_heading'); ?></p>
                                            <h4 class="colorG font24 commonsSemiBold"><?php echo get_sub_field('credentials_description'); ?></h4>
                                        </div>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/ae-right-leaf.png" alt="">
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section> -->

<section class="industrySolutionSection">
    <?php if (have_rows('industry_focus_section')) : ?>
        <?php while (have_rows('industry_focus_section')) : the_row(); ?>
            <div class="wrapper">
                <div class="industrySolutionHolder">
                    <div class="industrySolutionImg">
                        <?php $industrysolimage = get_sub_field('box_image');
                        if (!empty($industrysolimage)) : ?>
                            <img src="<?php echo esc_url($industrysolimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($industrysolimage['alt']); ?>" class="solutionCpg" />
                        <?php endif; ?>
                        <?php $industrysolmobimage = get_sub_field('mobile_box_image');
                        if (!empty($industrysolmobimage)) : ?>
                            <img src="<?php echo esc_url($industrysolmobimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($industrysolmobimage['alt']); ?>" class="solutionCpgMob" />
                        <?php endif; ?>
                    </div>
                    <div class="industrySolutionText">
                        <div class="wrapper">
                            <p class="font16 colorG"><?php echo get_sub_field('box_tag'); ?></p>
                            <h2 class="font40 commonsSemiBold"><?php echo get_sub_field('box_heading'); ?></h2>
                            <h3 class="font24"><?php echo get_sub_field('box_description'); ?></h3>
                            <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="talkToExpertSection">
    <?php if (have_rows('talk_to_expert')) : ?>
        <?php while (have_rows('talk_to_expert')) : the_row(); ?>
            <div class="wrapper">
                <div class="ExpertCPGHolder">
                    <?php $talkexpertimage = get_sub_field('section_icon');
                    if (!empty($talkexpertimage)) : ?>
                        <img src="<?php echo esc_url($talkexpertimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($talkexpertimage['alt']); ?>" />
                    <?php endif; ?>
                    <h2 class="font60 caslonGraphiqueEF colorG"> <?php echo get_sub_field('section_heading'); ?> </h2>
                    <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                    <a href="" class="cta1 sparkleBtn" data-toggle="modal" data-target="#expert"> <?php echo get_sub_field('cta_text'); ?> </a>
                </div>
            </div>
            <div class="modal fade excellenceModal contactUsModal" id="expert" tabindex="-1" role="dialog" aria-labelledby="proposalTitle" aria-hidden="true">
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
    <div class="wrapper">
        <?php if (have_rows('explore_manufacturing')) : ?>
            <?php while (have_rows('explore_manufacturing')) : the_row(); ?>
                <div class="manuExploreHolder">
                    <div class="manuExploreImg">
                        <?php $exploremanuimage = get_sub_field('explore_manu_image');
                        if (!empty($exploremanuimage)) : ?>
                            <img src="<?php echo esc_url($exploremanuimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($exploremanuimage['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="manuExploreText">
                        <div class="wrapper">
                            <h2 class="colorWhite font48 commonsSemiBold"><?php echo get_sub_field('explore_manu_heading'); ?></h2>
                            <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta2"><?php echo get_sub_field('cta_text'); ?></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
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
                                <?php $thoughtboximage = get_sub_field('card_image');
                                    if( !empty( $thoughtboximage ) ): ?>
                                    <img src="<?php echo esc_url($thoughtboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($thoughtboximage['alt']); ?>" />
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


<script type="text/javascript">
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#cpgServices").offset().top - 50}
    );
});
if ($("#industrymanu-banner").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('industrymanu-banner'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/industrymanu-banner.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "industrymanu-banner", // Name for future reference. Optional.
  });
}
if ($("#industrymanu-banner-mob").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('industrymanu-banner-mob'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/industrymanu-banner-mob.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "industrymanu-banner-mob", // Name for future reference. Optional.
  });
}
</script>