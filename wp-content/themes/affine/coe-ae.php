<?php get_header(); /*Template Name: COE AE*/ ?>

<section class="coeAEBanner">
    <?php if( have_rows('banner_section') ): ?>
        <?php while( have_rows('banner_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="coeAEHolder">
                    <div class="AEBannerImg">
                        <div class="circle-1">
                            <div class="circle-2">
                                <div class="circle-3">
                                    <div class="squareBox">
                                        <span class="dotBox dot-1"></span>
                                        <span class="dotBox dot-2"></span>
                                        <span class="dotBox dot-3"></span>
                                        <span class="dotBox dot-4"></span>
                                        <span class="dotBox dot-5"></span>
                                        <span class="dotBox dot-6"></span>
                                        <span class="dotBox dot-7"></span>
                                        <span class="dotBox dot-8"></span>
                                        <span class="dotBox dot-9"></span>
                                        <span class="dotBox dot-10"></span>
                                        <span class="dotBox dot-11"></span>
                                        <span class="dotBox dot-12"></span>
                                        <span class="dotBox dot-13"></span>
                                        <span class="dotBox dot-14"></span>
                                        <span class="dotBox dot-15"></span>
                                        <span class="dotBox dot-16"></span>
                                        <span class="dotBox dot-17"></span>
                                        <span class="dotBox dot-18"></span>
                                        <span class="dotBox dot-19"></span>
                                        <span class="dotBox dot-20"></span>
                                        <span class="squareDot"></span>
                                    </div>
                                    <div class="blueAffineLogo">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/affine-logo-ae.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="AEBannerInnerImg">
                            <?php $bannerimage = get_sub_field('ae_banner_image');
                                if( !empty( $bannerimage ) ): ?>
                                <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>"/>
                            <?php endif; ?>
                            </div>
                            <div class="dataBaseImages">
                                <img src="<?php bloginfo('template_directory'); ?>/images/data1.png" alt="" class="data1">
                                <img src="<?php bloginfo('template_directory'); ?>/images/data2.png" alt="" class="data2">
                                <img src="<?php bloginfo('template_directory'); ?>/images/data3.png" alt="" class="data3">
                            </div>
                        </div>
                    </div>
                    <div class="AEBannerText">
                        <div class="AEBannerInnerText">
                            <h1 class="font80 caslonGraphiqueEF"><?php echo get_sub_field('banner_heading'); ?></h1>
                            <?php $link = get_sub_field('cta_link');
                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <a href="#repositorySection" class="scrollDown">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
</section>

<section class="repositorySection" id="repositorySection">
    <div class="wrapper">
        <div class="repositoryOverlay">
            <div class="animeDivRepo animePosition-1"></div>
            <div class="animeDivRepo animePosition-2"></div>
            <div class="animeDivRepo animePosition-3"></div>
            <div class="animeDivRepo animePosition-4"></div>
            <div class="animeDivRepo animePosition-5"></div>
            <div class="animeDivRepo animePosition-6"></div>
            <div class="animeDivRepo animePosition-7"></div>
            <div class="animeDivRepo animePosition-8"></div>
            <div class="animeDivRepo animePosition-9"></div>
            <div class="animeDivRepo animePosition-10"></div>
            <div class="animeDivRepo animePosition-11"></div>
            <div class="animeDivRepo animePosition-12"></div>
            <div class="animeDivRepo animePosition-13"></div>
            <div class="animeDivRepo animePosition-14"></div>
            <div class="animeDivRepo animePosition-15"></div>
            <div class="animeDivRepo animePosition-16"></div>
            <div class="animeDivRepo animePosition-17"></div>
            <div class="animeDivRepo animePosition-18"></div>
            <div class="animeDivRepo animePosition-19"></div>
            <div class="animeDivRepo animePosition-20"></div>
        </div>
        <?php if( have_rows('knowledge_repository') ): ?>
            <?php while( have_rows('knowledge_repository') ): the_row(); ?>
                <div class="repositoryHolder">
                    <div class="repositoryHead">
                        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                        <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                    </div>
                    <div class="repositoryInnerHolder">
                        <?php if( have_rows('card_content') ): ?>
                            <?php while( have_rows('card_content') ): the_row(); ?>
                                <div class="repositoryCard">
                                    <div class="repositoryCardImg">
                                        <?php $repositoryimage = get_sub_field('card_icon');
                                            if( !empty( $repositoryimage ) ): ?>
                                            <img src="<?php echo esc_url($repositoryimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($repositoryimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="font30 commonsSemiBold"><?php echo get_sub_field('card_heading'); ?></h3>
                                    <?php $card_cta_link = get_sub_field('card_cta_link');
                                        if( !empty( $card_cta_link ) ): ?>
                                        <a href="<?php echo $card_cta_link ?>" class="cta2"><?php echo get_sub_field('card_cta_text'); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section class="businessesSection recognitionAESection">
    <?php if( have_rows('credentials_recognition') ): ?>
        <?php while( have_rows('credentials_recognition') ): the_row(); ?>
            <div class="businessesInner">
                <div class="wrapper">
                    <div class="sectionHeading">
                        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                    </div>
                    <div class="businessSlider">
                        <?php if( have_rows('credentials_content') ): ?>
                            <?php while( have_rows('credentials_content') ): the_row(); ?>
                                <div class="businessSliderCard">
                                    <div class="businessSliderCardInner">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/ae-left-leaf.png" alt="">
                                        <div class="businessCardText">
                                            <p class="colorG font16"><?php echo get_sub_field('heading'); ?></p>
                                            <h4 class="colorG font24 commonsSemiBold"><?php echo get_sub_field('sub_heading'); ?></h4>
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
</section>

<section class="coeVisionSection">
    <?php if( have_rows('vision_research_section') ): ?>
        <?php while( have_rows('vision_research_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="coeVisionHolder">
                    <?php if( have_rows('vision_box_content') ): ?>
                        <?php while( have_rows('vision_box_content') ): the_row(); ?>
                            <div class="coeVisionDiv">
                                <div class="coeVisionImg">
                                    <?php $visionimage = get_sub_field('box_icon');
                                        if( !empty( $visionimage ) ): ?>
                                        <img src="<?php echo esc_url($visionimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($visionimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <h2 class="font40"><?php echo get_sub_field('box_heading'); ?></h2>
                                <p class="font24"><?php echo get_sub_field('box_description'); ?></p>
                                <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="coeVisionSliderWrapper">
                        <div class="coeVisionSlider">
                            <?php if( have_rows('research_box_content') ): ?>
                                <?php while( have_rows('research_box_content') ): the_row(); ?>
                                    <div class="coeVisionInnerSlider">
                                        <div class="coeVisionSliderDiv">
                                            <div class="coeVisionSliderImg">
                                                <?php $researchsolimage = get_sub_field('box_image');
                                                    if( !empty( $researchsolimage ) ): ?>
                                                    <img src="<?php echo esc_url($researchsolimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($researchsolimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="coeVisionSliderText">
                                                <p class="font16 colorG"><?php echo get_sub_field('box_tag'); ?></p>
                                                <h3 class="font40 commonsSemiBold colorG"><?php echo get_sub_field('box_heading'); ?></h3>
                                                <h4 class="font24 colorG"><?php echo get_sub_field('box_description'); ?></h4>
                                                <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="sliderArrow">
                            <button class="back coeVisionSliderBack">
                                <img src="<?php bloginfo('template_directory'); ?>/images/life-left-slider.svg" alt="">
                            </button>
                            <button class="forward coeVisionSliderForward">
                                <img src="<?php bloginfo('template_directory'); ?>/images/life-right-slider.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="excellenceSection areasSection">
    <div class="wrapper">
        <div class="sectionHeading">
            <h2 class="font60 caslonGraphiqueEF colorG">Research Areas</h2>
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
<section class="expertAESection">
    <?php if( have_rows('experts_section') ): ?>
        <?php while( have_rows('experts_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="expertAEHead">
                    <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="expertAEHolder">
                    <?php if( have_rows('experts_content') ): ?>
                        <?php $counter=1; while( have_rows('experts_content') ): the_row(); ?>
                            <div class="expertAECard aeCard-<?php echo $counter; ?>">
                                <div class="expertAECardImg">
                                    <?php $teamimage = get_sub_field('team_member_image');
                                        if( !empty( $teamimage ) ): ?>
                                        <img src="<?php echo esc_url($teamimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($teamimage['alt']); ?>" />
                                    <?php endif; ?>
                                    <a href="<?php echo get_sub_field('linkedin_link'); ?>" target="_blank" class="linkedCTA">
                                        <?php $linkedinimage = get_sub_field('linkedin_image');
                                            if( !empty( $linkedinimage ) ): ?>
                                            <img src="<?php echo esc_url($linkedinimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($linkedinimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('team_member_name'); ?></h3>
                                <p class="font16 colorG"><?php echo get_sub_field('team_member_designation'); ?></p>
                            </div>
                        <?php $counter=$counter+1; endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="expertAESlider">
                    <?php if( have_rows('experts_content') ): ?>
                        <?php while( have_rows('experts_content') ): the_row(); ?>
                            <div class="expertAEInnerSlider">
                                <div class="expertAESliderCard">
                                    <div class="expertAECardImg">
                                        <?php $teamimage = get_sub_field('team_member_image');
                                            if( !empty( $teamimage ) ): ?>
                                            <img src="<?php echo esc_url($teamimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($teamimage['alt']); ?>" />
                                        <?php endif; ?>
                                        <a href="<?php echo get_sub_field('linkedin_link'); ?>" class="linkedCTA">
                                            <?php $linkedinimage = get_sub_field('linkedin_image');
                                                if( !empty( $linkedinimage ) ): ?>
                                                <img src="<?php echo esc_url($linkedinimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($linkedinimage['alt']); ?>" />
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <h3 class="font48 commonsSemiBold colorG"><?php echo get_sub_field('team_member_name'); ?></h3>
                                    <p class="font30 colorG"><?php echo get_sub_field('team_member_designation'); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="talkToExpertSection">
    <?php if( have_rows('talk_to_expert') ): ?>
        <?php while( have_rows('talk_to_expert') ): the_row(); ?>
            <div class="wrapper">
                <?php $talkexpertimage = get_sub_field('section_icon');
                    if( !empty( $talkexpertimage ) ): ?>
                    <img src="<?php echo esc_url($talkexpertimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($talkexpertimage['alt']); ?>" />
                <?php endif; ?>
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                <a href="" class="cta1 sparkleBtn" data-toggle="modal" data-target="#expert"><?php echo get_sub_field('cta_text'); ?></a>
                <img src="<?php bloginfo('template_directory'); ?>/images/data1.png" alt="" class="talkToExpertData1">
                <img src="<?php bloginfo('template_directory'); ?>/images/data3.png" alt="" class="talkToExpertData2">
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
                                <h5 class="font16 commonsRegular ex-p">We will give you a personalised walkthrough of technology solutions and how you can increase business</h5>
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
                <?php if( have_rows('explore_thoughbox_data') ): ?>
                    <?php while( have_rows('explore_thoughbox_data') ): the_row(); ?>
                        <div class="coeExploreToughtBox">
                            <div class="coeExploreToughtBoxImg">
                                <?php $thoughboximage = get_sub_field('card_image');
                                    if( !empty( $thoughboximage ) ): ?>
                                    <img src="<?php echo esc_url($thoughboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($thoughboximage['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <a href="<?php echo get_sub_field('card_cta_link'); ?>" class="ExploreToughtBoxCTA cta2"><?php echo get_sub_field('card_cta_text'); ?></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php if( have_rows('enterprises_section') ): ?>
    <?php while( have_rows('enterprises_section') ): the_row(); ?>
        <section class="enterprisesSection AEenterprisesSection" style="background: url(<?php echo get_sub_field('background_image'); ?>);background-repeat: no-repeat;background-position: center;">
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
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
<script>
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#repositorySection").offset().top - 50}
    );
});
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};
$(window).on('resize scroll', function() {
    if ($('.repositorySection').isInViewport()) {
        $('.animeDivRepo').addClass('active');
        setTimeout(() => {
            $('.repositoryOverlay').fadeOut();
        }, 3500);
        setTimeout(() => {
            $('.repositoryHolder').fadeIn();
        }, 3000);
    }
    if ($('.expertAESection').isInViewport()) {
        $('.expertAECard').addClass('active');
    }
});
</script>