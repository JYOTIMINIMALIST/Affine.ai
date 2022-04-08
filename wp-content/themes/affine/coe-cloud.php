<?php get_header(); /*Template Name: COE CLOUD*/ ?>

<section class="coeAIBanner">
    <div class="cloudAnimation" style="z-index: 3;">
        <div id="cloud-banner"></div>
        <div id="cloud-banner-mob"></div>
    </div>
    <div class="coeCloudSlider cloudBannerImg">
        <?php if( have_rows('banner_section') ): ?>
            <?php while( have_rows('banner_section') ): the_row(); ?>
                <div class="coeCloudInnerSlider">
                    <div class="AIBannerImg">
                        <?php $bannerimage = get_sub_field('banner_image');
                            if( !empty( $bannerimage ) ): ?>
                            <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" class="cloudBannerImg desktopBanner" />
                        <?php endif; ?>
                        <?php $mobile_banner_image = get_sub_field('mobile_banner_image');
                            if( !empty( $mobile_banner_image ) ): ?>
                            <img src="<?php echo esc_url($mobile_banner_image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($mobile_banner_image['alt']); ?>" class="cloudBannerImg mobileBanner" />
                        <?php endif; ?>
                        <img src="<?php bloginfo('template_directory'); ?>/images/overlay-cloud-bg.png" alt="" class="overlayCloud">
                    </div>
                    <div class="AIBannerText cloudBannerText">
                        <div class="wrapper">
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
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    <a href="#cloudsection" class="scrollDown cloudBannerImg">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
</section>

<section class="cloudsection" id="cloudsection">
    <?php if( have_rows('cloud_solutions') ): ?>
        <?php while( have_rows('cloud_solutions') ): the_row(); ?>
            <div class="wrapper">
                <div class="cloudHeading">
                    <h1 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h1>
                    <h4 class="font24 commonsRegular colorG"><?php echo get_sub_field('section_description'); ?></h4>
                </div>
                <div class="ai-ml-solution">
                    <div class="ml-solutionInner"></div>
                    <?php if( have_rows('card_content') ): ?>
                        <?php while( have_rows('card_content') ): the_row(); ?>
                            <div class="ml-solutionInner ml-solutionInnerAfter">
                                <div class="ml-solutionImg">
                                    <?php $cloudboximage = get_sub_field('card_image');
                                        if( !empty( $cloudboximage ) ): ?>
                                        <img src="<?php echo esc_url($cloudboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($cloudboximage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <h2 class="font40 commonsSemiBold colorG"><?php echo get_sub_field('card_heading'); ?></h2>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="ml-solutionInner"></div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
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
                                            <h4 class="colorG font24 commonsSemiBold"><?php echo get_sub_field('heading'); ?></h4>
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
                    <div class="coeVisionDiv">
                        <?php if( have_rows('vision_box_content') ): ?>
                            <?php while( have_rows('vision_box_content') ): the_row(); ?>
                                <div class="coeVisionImg">
                                    <?php $visionboximage = get_sub_field('box_icon');
                                        if( !empty( $visionboximage ) ): ?>
                                        <img src="<?php echo esc_url($visionboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($visionboximage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <h2 class="font40"><?php echo get_sub_field('box_heading'); ?></h2>
                                <p class="font24"><?php echo get_sub_field('box_description'); ?></p>
                                <a href="<?php echo get_sub_field('cta_link'); ?>" class="cta1"><?php echo get_sub_field('cta_text'); ?></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="coeVisionSliderWrapper">
                        <div class="coeVisionSlider">
                            <?php if( have_rows('research_box_content') ): ?>
                                <?php while( have_rows('research_box_content') ): the_row(); ?>
                                    <div class="coeVisionInnerSlider">
                                        <div class="coeVisionSliderDiv">
                                            <div class="coeVisionSliderImg">
                                                <?php $rearchboximage = get_sub_field('box_image');
                                                    if( !empty( $rearchboximage ) ): ?>
                                                    <img src="<?php echo esc_url($rearchboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($rearchboximage['alt']); ?>" />
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

<section class="recommendedSection cloudExpertSection" id="recommendedSection">
    <div class="wrapper">
    <?php if( have_rows('experts_section') ): ?>
        <?php while( have_rows('experts_section') ): the_row(); ?>
        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
        <div class="thoughtBoxWrapper">
            <div class="thoughtBoxSlider">
            <?php if( have_rows('experts_content') ): ?>
        <?php while( have_rows('experts_content') ): the_row(); ?>
                <div class="thoughtBoxInnerSlider">
                    <div class="expertBoxContent">
                        <div class="expertImg">
                        <?php $expertimage = get_sub_field('team_member_image');
                            if( !empty( $expertimage ) ): ?>
                                <img src="<?php echo esc_url($expertimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($expertimage['alt']); ?>" />
                            <?php endif; ?>
                            <a href="<?php echo get_sub_field('linkedin_link'); ?>" target="_blank" class="linkedCTA">
                                <?php $linkedinicon = get_sub_field('linkedin_image');
                                    if( !empty( $linkedinicon ) ): ?>
                                    <img src="<?php echo esc_url($linkedinicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($linkedinicon['alt']); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>
                        <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('team_member_name'); ?></h3>
                        <p class="font20 colorG"><?php echo get_sub_field('team_member_designation'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
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
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<section class="talkToExpertSection talkToExpertCloudSection" id="talkToExpertCloudSection">
    <div class="cloudTalkBg">
        <svg id="cloud-talk-Anim" viewBox="0 0 1483 482" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.6">
                <path d="M1169.06 185.635H1294.58L1394.4 86.1479H1458.94" stroke="#0100FF" />
                <path d="M1217.33 252.222H1341.61L1359.9 270.5V341.787L1388.65 370.51H1475.4" stroke="#0100FF" />
                <path d="M1198.69 307.672L1198.69 465.587" stroke="#0100FF" />
                <path d="M1102.52 111.921V68.9135L1162.88 8.59424H1270.28" stroke="#0100FF" />
                <g opacity="0.3">
                    <path
                        d="M1314.12 181.979C1313.8 182.107 1313.36 182.235 1312.72 182.426C1312.08 182.618 1311.5 182.746 1311.05 182.81L1310.86 181.787C1311.57 181.659 1312.27 181.403 1313.04 181.02C1313.74 180.636 1314.38 180.252 1314.89 179.805L1315.91 179.997V192.274L1318.73 192.466V193.361H1311.31V192.466L1314.19 192.274V181.979H1314.12Z"
                        fill="#5905E1" />
                    <path
                        d="M1336.76 181.978C1336.44 182.106 1335.99 182.234 1335.35 182.426C1334.71 182.617 1334.14 182.745 1333.69 182.809L1333.5 181.786C1334.2 181.658 1334.91 181.402 1335.67 181.019C1336.38 180.635 1337.02 180.251 1337.53 179.804L1338.55 179.996V192.273L1341.36 192.465V193.36H1333.88V192.465L1336.76 192.273V181.978Z"
                        fill="#5905E1" />
                    <path
                        d="M1400.71 191.633C1399.88 190.29 1399.43 188.692 1399.43 186.709C1399.43 185.367 1399.68 184.152 1400.2 183.128C1400.71 182.105 1401.35 181.274 1402.24 180.698C1403.07 180.123 1404.03 179.867 1405.06 179.867C1406.91 179.867 1408.25 180.443 1409.08 181.658C1409.91 182.873 1410.3 184.471 1410.3 186.518C1410.3 187.861 1410.04 189.075 1409.6 190.099C1409.15 191.186 1408.44 192.017 1407.61 192.593C1406.78 193.232 1405.82 193.488 1404.8 193.488C1402.94 193.552 1401.6 192.912 1400.71 191.633ZM1407.49 191.058C1408.06 190.035 1408.32 188.564 1408.32 186.773C1408.32 182.873 1407.17 180.89 1404.86 180.89C1403.65 180.89 1402.75 181.402 1402.11 182.361C1401.54 183.32 1401.22 184.727 1401.22 186.454C1401.22 188.18 1401.47 189.651 1402.05 190.866C1402.63 192.017 1403.52 192.657 1404.74 192.657C1406.01 192.593 1406.97 192.081 1407.49 191.058Z"
                        fill="#5905E1" />
                    <path
                        d="M1417.91 181.978C1417.59 182.106 1417.14 182.234 1416.5 182.426C1415.86 182.617 1415.29 182.745 1414.84 182.809L1414.65 181.786C1415.35 181.658 1416.05 181.402 1416.82 181.019C1417.52 180.635 1418.16 180.251 1418.68 179.804L1419.7 179.996V192.273L1422.51 192.465V193.36H1415.09V192.465L1417.97 192.273V181.978H1417.91Z"
                        fill="#5905E1" />
                    <path
                        d="M1443.49 191.633C1442.66 190.29 1442.21 188.692 1442.21 186.709C1442.21 185.367 1442.46 184.152 1442.98 183.128C1443.49 182.105 1444.13 181.274 1445.02 180.698C1445.85 180.123 1446.81 179.867 1447.84 179.867C1449.69 179.867 1451.03 180.443 1451.86 181.658C1452.7 182.873 1453.08 184.471 1453.08 186.518C1453.08 187.861 1452.82 189.075 1452.38 190.099C1451.93 191.186 1451.22 192.017 1450.39 192.593C1449.56 193.232 1448.6 193.488 1447.58 193.488C1445.73 193.552 1444.38 192.912 1443.49 191.633ZM1450.33 191.058C1450.9 190.035 1451.16 188.564 1451.16 186.773C1451.16 182.873 1450.01 180.89 1447.71 180.89C1446.49 180.89 1445.6 181.402 1444.96 182.361C1444.38 183.32 1444.06 184.727 1444.06 186.454C1444.06 188.18 1444.32 189.651 1444.89 190.866C1445.47 192.017 1446.36 192.657 1447.58 192.657C1448.86 192.593 1449.75 192.081 1450.33 191.058Z"
                        fill="#5905E1" />
                    <path
                        d="M1476.48 181.978C1476.16 182.106 1475.72 182.234 1475.08 182.426C1474.44 182.617 1473.86 182.745 1473.41 182.809L1473.22 181.786C1473.93 181.658 1474.63 181.402 1475.4 181.019C1476.1 180.635 1476.74 180.251 1477.25 179.804L1478.27 179.996V192.273L1481.09 192.465V193.36H1473.67V192.465L1476.55 192.273V181.978H1476.48Z"
                        fill="#5905E1" />
                    <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="1309" y="178" width="174"
                        height="17">
                        <rect x="1309.53" y="178.472" width="172.809" height="16.4215" fill="#5905E1" />
                    </mask>
                    <g mask="url(#mask0)">
                        <path
                            d="M1314.12 181.979C1313.8 182.107 1313.36 182.235 1312.72 182.426C1312.08 182.618 1311.5 182.746 1311.05 182.81L1310.86 181.787C1311.57 181.659 1312.27 181.403 1313.04 181.02C1313.74 180.636 1314.38 180.252 1314.89 179.805L1315.91 179.997V192.274L1318.73 192.466V193.361H1311.31V192.466L1314.19 192.274V181.979H1314.12Z"
                            fill="#5905E1" />
                        <path
                            d="M1336.76 181.978C1336.44 182.106 1335.99 182.234 1335.35 182.426C1334.71 182.617 1334.14 182.745 1333.69 182.809L1333.5 181.786C1334.2 181.658 1334.91 181.402 1335.67 181.019C1336.38 180.635 1337.02 180.251 1337.53 179.804L1338.55 179.996V192.273L1341.36 192.465V193.36H1333.88V192.465L1336.76 192.273V181.978Z"
                            fill="#5905E1" />
                        <path
                            d="M1400.71 191.633C1399.88 190.29 1399.43 188.692 1399.43 186.709C1399.43 185.367 1399.68 184.152 1400.2 183.128C1400.71 182.105 1401.35 181.274 1402.24 180.698C1403.07 180.123 1404.03 179.867 1405.06 179.867C1406.91 179.867 1408.25 180.443 1409.08 181.658C1409.91 182.873 1410.3 184.471 1410.3 186.518C1410.3 187.861 1410.04 189.075 1409.6 190.099C1409.15 191.186 1408.44 192.017 1407.61 192.593C1406.78 193.232 1405.82 193.488 1404.8 193.488C1402.94 193.552 1401.6 192.912 1400.71 191.633ZM1407.49 191.058C1408.06 190.035 1408.32 188.564 1408.32 186.773C1408.32 182.873 1407.17 180.89 1404.86 180.89C1403.65 180.89 1402.75 181.402 1402.11 182.361C1401.54 183.32 1401.22 184.727 1401.22 186.454C1401.22 188.18 1401.47 189.651 1402.05 190.866C1402.63 192.017 1403.52 192.657 1404.74 192.657C1406.01 192.593 1406.97 192.081 1407.49 191.058Z"
                            fill="#5905E1" />
                        <path
                            d="M1417.91 181.978C1417.59 182.106 1417.14 182.234 1416.5 182.426C1415.86 182.617 1415.29 182.745 1414.84 182.809L1414.65 181.786C1415.35 181.658 1416.05 181.402 1416.82 181.019C1417.52 180.635 1418.16 180.251 1418.68 179.804L1419.7 179.996V192.273L1422.51 192.465V193.36H1415.09V192.465L1417.97 192.273V181.978H1417.91Z"
                            fill="#5905E1" />
                        <path
                            d="M1443.49 191.633C1442.66 190.29 1442.21 188.692 1442.21 186.709C1442.21 185.367 1442.46 184.152 1442.98 183.128C1443.49 182.105 1444.13 181.274 1445.02 180.698C1445.85 180.123 1446.81 179.867 1447.84 179.867C1449.69 179.867 1451.03 180.443 1451.86 181.658C1452.7 182.873 1453.08 184.471 1453.08 186.518C1453.08 187.861 1452.82 189.075 1452.38 190.099C1451.93 191.186 1451.22 192.017 1450.39 192.593C1449.56 193.232 1448.6 193.488 1447.58 193.488C1445.73 193.552 1444.38 192.912 1443.49 191.633ZM1450.33 191.058C1450.9 190.035 1451.16 188.564 1451.16 186.773C1451.16 182.873 1450.01 180.89 1447.71 180.89C1446.49 180.89 1445.6 181.402 1444.96 182.361C1444.38 183.32 1444.06 184.727 1444.06 186.454C1444.06 188.18 1444.32 189.651 1444.89 190.866C1445.47 192.017 1446.36 192.657 1447.58 192.657C1448.86 192.593 1449.75 192.081 1450.33 191.058Z"
                            fill="#5905E1" />
                        <path
                            d="M1476.48 181.978C1476.16 182.106 1475.72 182.234 1475.08 182.426C1474.44 182.617 1473.86 182.745 1473.41 182.809L1473.22 181.786C1473.93 181.658 1474.63 181.402 1475.4 181.019C1476.1 180.635 1476.74 180.251 1477.25 179.804L1478.27 179.996V192.273L1481.09 192.465V193.36H1473.67V192.465L1476.55 192.273V181.978H1476.48Z"
                            fill="#5905E1" />
                    </g>
                </g>
                <circle cx="1466.75" cy="85.8991" r="7.86104" stroke="#0100FF" />
                <circle cx="1198.69" cy="473.448" r="7.86104" stroke="#0100FF" />
                <circle cx="1277.3" cy="8.86104" r="7.86104" stroke="#0100FF" />
                <path d="M383.279 185.635H187.763L87.9452 86.1479H23.4034" stroke="#0100FF" />
                <path d="M255.009 252.222H140.728L122.437 270.5V341.787L93.6939 370.51H6.94141" stroke="#0100FF" />
                <path d="M283.65 285.672L283.65 465.587" stroke="#0100FF" />
                <path d="M379.82 121.921V68.9135L319.459 8.59424H212.064" stroke="#0100FF" />
                <g opacity="0.3">
                    <path
                        d="M168.218 181.979C168.537 182.107 168.985 182.235 169.625 182.426C170.264 182.618 170.84 182.746 171.287 182.81L171.479 181.787C170.776 181.659 170.072 181.403 169.305 181.02C168.601 180.636 167.962 180.252 167.45 179.805L166.427 179.997V192.274L163.614 192.466V193.361H171.031V192.466L168.154 192.274V181.979H168.218Z"
                        fill="#5905E1" />
                    <path
                        d="M145.581 181.978C145.9 182.106 146.348 182.234 146.988 182.426C147.627 182.617 148.203 182.745 148.65 182.809L148.842 181.786C148.139 181.658 147.435 181.402 146.668 181.019C145.964 180.635 145.325 180.251 144.813 179.804L143.79 179.996V192.273L140.977 192.465V193.36H148.458V192.465L145.581 192.273V181.978Z"
                        fill="#5905E1" />
                    <path
                        d="M81.6341 191.633C82.4654 190.29 82.913 188.692 82.913 186.709C82.913 185.367 82.6572 184.152 82.1457 183.128C81.6341 182.105 80.9946 181.274 80.0994 180.698C79.2681 180.123 78.3089 179.867 77.2857 179.867C75.4313 179.867 74.0884 180.443 73.2571 181.658C72.4258 182.873 72.0421 184.471 72.0421 186.518C72.0421 187.861 72.2979 189.075 72.7455 190.099C73.1931 191.186 73.8966 192.017 74.7279 192.593C75.5592 193.232 76.5184 193.488 77.5415 193.488C79.396 193.552 80.7388 192.912 81.6341 191.633ZM74.8558 191.058C74.2802 190.035 74.0245 188.564 74.0245 186.773C74.0245 182.873 75.1755 180.89 77.4776 180.89C78.6926 180.89 79.5878 181.402 80.2273 182.361C80.8028 183.32 81.1225 184.727 81.1225 186.454C81.1225 188.18 80.8667 189.651 80.2912 190.866C79.7157 192.017 78.8204 192.657 77.6055 192.657C76.3265 192.593 75.3673 192.081 74.8558 191.058Z"
                        fill="#5905E1" />
                    <path
                        d="M64.4324 181.978C64.7521 182.106 65.1997 182.234 65.8392 182.426C66.4787 182.617 67.0542 182.745 67.5018 182.809L67.6937 181.786C66.9903 181.658 66.2868 181.402 65.5195 181.019C64.8161 180.635 64.1766 180.251 63.665 179.804L62.6419 179.996V192.273L59.8282 192.465V193.36H67.246V192.465L64.3684 192.273V181.978H64.4324Z"
                        fill="#5905E1" />
                    <path
                        d="M38.8538 191.633C39.6851 190.29 40.1328 188.692 40.1328 186.709C40.1328 185.367 39.877 184.152 39.3654 183.128C38.8538 182.105 38.2144 181.274 37.3191 180.698C36.4878 180.123 35.5286 179.867 34.5054 179.867C32.651 179.867 31.3081 180.443 30.4768 181.658C29.6455 182.873 29.2618 184.471 29.2618 186.518C29.2618 187.861 29.5176 189.075 29.9652 190.099C30.4129 191.186 31.1163 192.017 31.9476 192.593C32.7789 193.232 33.7381 193.488 34.7612 193.488C36.6157 193.552 37.9586 192.912 38.8538 191.633ZM32.0115 191.058C31.436 190.035 31.1802 188.564 31.1802 186.773C31.1802 182.873 32.3313 180.89 34.6333 180.89C35.8483 180.89 36.7436 181.402 37.383 182.361C37.9586 183.32 38.2783 184.727 38.2783 186.454C38.2783 188.18 38.0225 189.651 37.447 190.866C36.8715 192.017 35.9762 192.657 34.7612 192.657C33.4823 192.593 32.587 192.081 32.0115 191.058Z"
                        fill="#5905E1" />
                    <path
                        d="M5.85737 181.978C6.17711 182.106 6.62474 182.234 7.26421 182.426C7.90367 182.617 8.47917 182.745 8.9268 182.809L9.11865 181.786C8.41524 181.658 7.71183 181.402 6.94447 181.019C6.24106 180.635 5.60158 180.251 5.09001 179.804L4.06688 179.996V192.273L1.25321 192.465V193.36H8.67102V192.465L5.79342 192.273V181.978H5.85737Z"
                        fill="#5905E1" />
                    <mask id="mask1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="178" width="173"
                        height="17">
                        <rect width="172.809" height="16.4215" transform="matrix(-1 0 0 1 172.809 178.472)"
                            fill="#5905E1" />
                    </mask>
                    <g mask="url(#mask1)">
                        <path
                            d="M168.218 181.979C168.537 182.107 168.985 182.235 169.625 182.426C170.264 182.618 170.84 182.746 171.287 182.81L171.479 181.787C170.776 181.659 170.072 181.403 169.305 181.02C168.601 180.636 167.962 180.252 167.45 179.805L166.427 179.997V192.274L163.614 192.466V193.361H171.031V192.466L168.154 192.274V181.979H168.218Z"
                            fill="#5905E1" />
                        <path
                            d="M145.581 181.978C145.9 182.106 146.348 182.234 146.988 182.426C147.627 182.617 148.203 182.745 148.65 182.809L148.842 181.786C148.139 181.658 147.435 181.402 146.668 181.019C145.964 180.635 145.325 180.251 144.813 179.804L143.79 179.996V192.273L140.977 192.465V193.36H148.458V192.465L145.581 192.273V181.978Z"
                            fill="#5905E1" />
                        <path
                            d="M81.6341 191.633C82.4654 190.29 82.913 188.692 82.913 186.709C82.913 185.367 82.6572 184.152 82.1457 183.128C81.6341 182.105 80.9946 181.274 80.0994 180.698C79.2681 180.123 78.3089 179.867 77.2857 179.867C75.4313 179.867 74.0884 180.443 73.2571 181.658C72.4258 182.873 72.0421 184.471 72.0421 186.518C72.0421 187.861 72.2979 189.075 72.7455 190.099C73.1931 191.186 73.8966 192.017 74.7279 192.593C75.5592 193.232 76.5184 193.488 77.5415 193.488C79.396 193.552 80.7388 192.912 81.6341 191.633ZM74.8558 191.058C74.2802 190.035 74.0245 188.564 74.0245 186.773C74.0245 182.873 75.1755 180.89 77.4776 180.89C78.6926 180.89 79.5878 181.402 80.2273 182.361C80.8028 183.32 81.1225 184.727 81.1225 186.454C81.1225 188.18 80.8667 189.651 80.2912 190.866C79.7157 192.017 78.8204 192.657 77.6055 192.657C76.3265 192.593 75.3673 192.081 74.8558 191.058Z"
                            fill="#5905E1" />
                        <path
                            d="M64.4324 181.978C64.7521 182.106 65.1997 182.234 65.8392 182.426C66.4787 182.617 67.0542 182.745 67.5018 182.809L67.6937 181.786C66.9903 181.658 66.2868 181.402 65.5195 181.019C64.8161 180.635 64.1766 180.251 63.665 179.804L62.6419 179.996V192.273L59.8282 192.465V193.36H67.246V192.465L64.3684 192.273V181.978H64.4324Z"
                            fill="#5905E1" />
                        <path
                            d="M38.8538 191.633C39.6851 190.29 40.1328 188.692 40.1328 186.709C40.1328 185.367 39.877 184.152 39.3654 183.128C38.8538 182.105 38.2144 181.274 37.3191 180.698C36.4878 180.123 35.5286 179.867 34.5054 179.867C32.651 179.867 31.3081 180.443 30.4768 181.658C29.6455 182.873 29.2618 184.471 29.2618 186.518C29.2618 187.861 29.5176 189.075 29.9652 190.099C30.4129 191.186 31.1163 192.017 31.9476 192.593C32.7789 193.232 33.7381 193.488 34.7612 193.488C36.6157 193.552 37.9586 192.912 38.8538 191.633ZM32.0115 191.058C31.436 190.035 31.1802 188.564 31.1802 186.773C31.1802 182.873 32.3313 180.89 34.6333 180.89C35.8483 180.89 36.7436 181.402 37.383 182.361C37.9586 183.32 38.2783 184.727 38.2783 186.454C38.2783 188.18 38.0225 189.651 37.447 190.866C36.8715 192.017 35.9762 192.657 34.7612 192.657C33.4823 192.593 32.587 192.081 32.0115 191.058Z"
                            fill="#5905E1" />
                        <path
                            d="M5.85737 181.978C6.17711 182.106 6.62474 182.234 7.26421 182.426C7.90367 182.617 8.47917 182.745 8.9268 182.809L9.11865 181.786C8.41524 181.658 7.71183 181.402 6.94447 181.019C6.24106 180.635 5.60158 180.251 5.09001 179.804L4.06688 179.996V192.273L1.25321 192.465V193.36H8.67102V192.465L5.79342 192.273V181.978H5.85737Z"
                            fill="#5905E1" />
                    </g>
                </g>
                <circle r="7.86104" transform="matrix(-1 0 0 1 15.5885 85.8991)" stroke="#0100FF" />
                <circle r="7.86104" transform="matrix(-1 0 0 1 283.65 473.448)" stroke="#0100FF" />
                <circle r="7.86104" transform="matrix(-1 0 0 1 205.039 8.86104)" stroke="#0100FF" />
                <g style="mix-blend-mode:hard-light">
                    <path
                        d="M778.1 67.0751C777.4 67.0751 776.7 66.7751 776.2 66.2751C775.7 65.7751 775.4 65.0751 775.4 64.3751C775.4 63.6751 775.7 62.9751 776.2 62.4751C777.2 61.4751 778.9 61.4751 779.9 62.4751C780.4 62.9751 780.7 63.6751 780.7 64.3751C780.7 65.0751 780.4 65.7751 779.9 66.2751C779.4 66.7751 778.8 67.0751 778.1 67.0751ZM776.8 63.1751C776.1 63.8751 776.1 64.9751 776.8 65.6751C777.5 66.3751 778.6 66.3751 779.3 65.6751C779.6 65.3751 779.8 64.8751 779.8 64.3751C779.8 63.8751 779.6 63.4751 779.3 63.0751C778.9 62.6751 778.5 62.5751 778 62.5751C777.6 62.6751 777.2 62.8751 776.8 63.1751Z"
                        fill="#0100FF" />
                    <path
                        d="M948.8 219.575C947.9 220.475 946.5 220.475 945.7 219.575C944.8 218.675 944.8 217.275 945.7 216.475C946.6 215.575 948 215.575 948.8 216.475C949.7 217.375 949.7 218.775 948.8 219.575Z"
                        fill="#0100FF" />
                    <path
                        d="M992.7 215.775C991.8 216.675 990.4 216.675 989.6 215.775C988.7 214.875 988.7 213.475 989.6 212.675C990.5 211.775 991.9 211.775 992.7 212.675C993.5 213.475 993.5 214.875 992.7 215.775Z"
                        fill="#0100FF" />
                    <path
                        d="M919.2 223.375C918.3 224.275 916.9 224.275 916.1 223.375C915.2 222.475 915.2 221.075 916.1 220.275C917 219.375 918.4 219.375 919.2 220.275C920.1 221.075 920.1 222.475 919.2 223.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1007.9 208.675C1007 209.575 1005.6 209.575 1004.8 208.675C1003.9 207.775 1003.9 206.375 1004.8 205.575C1005.7 204.675 1007.1 204.675 1007.9 205.575C1008.8 206.475 1008.8 207.875 1007.9 208.675Z"
                        fill="#0100FF" />
                    <path
                        d="M1042.9 181.875C1042 182.775 1040.6 182.775 1039.8 181.875C1038.9 180.975 1038.9 179.575 1039.8 178.775C1040.7 177.875 1042.1 177.875 1042.9 178.775C1043.8 179.675 1043.8 181.075 1042.9 181.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1005.7 152.275C1004.8 153.175 1003.4 153.175 1002.6 152.275C1001.7 151.375 1001.7 149.975 1002.6 149.175C1003.5 148.275 1004.9 148.275 1005.7 149.175C1006.6 149.975 1006.6 151.375 1005.7 152.275Z"
                        fill="#0100FF" />
                    <path
                        d="M945.5 199.475C944.5 198.475 944.5 196.875 945.5 195.875C946 195.375 946.6 195.175 947.3 195.175C948 195.175 948.6 195.475 949.1 195.875C950.1 196.875 950.1 198.475 949.1 199.475C948.6 199.975 948 200.175 947.3 200.175C946.6 200.275 946 199.975 945.5 199.475ZM945.9 196.375C945.2 197.075 945.2 198.275 945.9 199.075C946.6 199.775 947.8 199.775 948.6 199.075C949.3 198.375 949.3 197.175 948.6 196.375C948.2 195.975 947.7 195.775 947.3 195.775C946.8 195.775 946.3 195.975 945.9 196.375Z"
                        fill="#0100FF" />
                    <path
                        d="M949.2 180.175C948.2 179.175 948.2 177.575 949.2 176.575C949.7 176.075 950.3 175.875 951 175.875C951.7 175.875 952.3 176.175 952.8 176.575C953.8 177.575 953.8 179.175 952.8 180.175C952.3 180.675 951.7 180.875 951 180.875C950.3 180.975 949.7 180.675 949.2 180.175ZM949.6 177.075C948.9 177.775 948.9 178.975 949.6 179.775C950.3 180.475 951.5 180.475 952.3 179.775C953 179.075 953 177.875 952.3 177.075C951.9 176.675 951.4 176.475 951 176.475C950.5 176.575 950 176.675 949.6 177.075Z"
                        fill="#0100FF" />
                    <path
                        d="M976.6 168.875C975.6 167.875 975.6 166.275 976.6 165.275C977.1 164.775 977.7 164.575 978.4 164.575C979.1 164.575 979.7 164.875 980.2 165.275C981.2 166.275 981.2 167.875 980.2 168.875C979.7 169.375 979.1 169.575 978.4 169.575C977.8 169.575 977.1 169.375 976.6 168.875ZM977.1 165.675C976.4 166.375 976.4 167.575 977.1 168.375C977.8 169.075 979 169.075 979.8 168.375C980.5 167.675 980.5 166.475 979.8 165.675C979.4 165.275 978.9 165.075 978.5 165.075C977.9 165.175 977.4 165.375 977.1 165.675Z"
                        fill="#0100FF" />
                    <path
                        d="M934.5 181.875C933.6 182.775 932.2 182.775 931.4 181.875C930.5 180.975 930.5 179.575 931.4 178.775C932.3 177.875 933.7 177.875 934.5 178.775C935.4 179.675 935.4 181.075 934.5 181.875Z"
                        fill="#0100FF" />
                    <path
                        d="M980 133.275C979.1 134.175 977.7 134.175 976.9 133.275C976 132.375 976 130.975 976.9 130.175C977.8 129.275 979.2 129.275 980 130.175C980.8 131.075 980.8 132.475 980 133.275Z"
                        fill="#0100FF" />
                    <path
                        d="M938.9 194.875C938 195.775 936.6 195.775 935.8 194.875C934.9 193.975 934.9 192.575 935.8 191.775C936.7 190.875 938.1 190.875 938.9 191.775C939.8 192.575 939.8 193.975 938.9 194.875Z"
                        fill="#0100FF" />
                    <path
                        d="M895.8 150.075C894.9 150.975 893.5 150.975 892.7 150.075C891.8 149.175 891.8 147.775 892.7 146.975C893.6 146.075 895 146.075 895.8 146.975C896.7 147.775 896.7 149.175 895.8 150.075Z"
                        fill="#0100FF" />
                    <path
                        d="M938.9 110.975C938 111.875 936.6 111.875 935.8 110.975C934.9 110.075 934.9 108.675 935.8 107.875C936.7 106.975 938.1 106.975 938.9 107.875C939.8 108.775 939.8 110.175 938.9 110.975Z"
                        fill="#0100FF" />
                    <path
                        d="M937.2 221.175C936.3 222.075 934.9 222.075 934.1 221.175C933.2 220.275 933.2 218.875 934.1 218.075C935 217.175 936.4 217.175 937.2 218.075C938.1 218.875 938.1 220.275 937.2 221.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1003.5 219.575C1002.6 220.475 1001.2 220.475 1000.4 219.575C999.5 218.675 999.5 217.275 1000.4 216.475C1001.3 215.575 1002.7 215.575 1003.5 216.475C1004.4 217.375 1004.4 218.775 1003.5 219.575Z"
                        fill="#0100FF" />
                    <path opacity="0.63"
                        d="M953.6 212.375C952.9 212.375 952.2 212.075 951.7 211.575C951.2 211.075 950.9 210.375 950.9 209.675C950.9 208.975 951.2 208.275 951.7 207.775C952.2 207.275 952.9 206.975 953.6 206.975C954.3 206.975 955 207.275 955.5 207.775C956 208.275 956.3 208.975 956.3 209.675C956.3 210.375 956 211.075 955.5 211.575C955 212.075 954.3 212.375 953.6 212.375ZM952.3 208.475C952 208.775 951.8 209.275 951.8 209.775C951.8 210.275 952 210.675 952.3 211.075C952.6 211.375 953.1 211.575 953.6 211.575C954.1 211.575 954.5 211.375 954.9 211.075C955.2 210.775 955.4 210.275 955.4 209.775C955.4 209.275 955.2 208.875 954.9 208.475C954.5 208.075 954.1 207.975 953.6 207.975C953.2 207.975 952.7 208.175 952.3 208.475Z"
                        fill="#0100FF" />
                    <path
                        d="M844.9 139.475C843.9 138.475 843.9 136.875 844.9 135.875C845.9 134.875 847.5 134.875 848.5 135.875C849.5 136.875 849.5 138.475 848.5 139.475C848 139.975 847.4 140.175 846.7 140.175C846.1 140.275 845.4 139.975 844.9 139.475ZM845.4 136.375C844.7 137.075 844.7 138.275 845.4 139.075C846.1 139.775 847.3 139.775 848.1 139.075C848.8 138.375 848.8 137.175 848.1 136.375C847.7 135.975 847.3 135.775 846.8 135.775C846.2 135.875 845.8 136.075 845.4 136.375Z"
                        fill="#0100FF" />
                    <path
                        d="M866.5 91.6752C865.5 90.6752 865.5 89.0752 866.5 88.0752C867.5 87.0752 869.1 87.0752 870.1 88.0752C871.1 89.0752 871.1 90.6752 870.1 91.6752C869.6 92.1752 869 92.3752 868.3 92.3752C867.6 92.4752 867 92.1752 866.5 91.6752ZM866.9 88.5752C866.2 89.2752 866.2 90.4752 866.9 91.2752C867.6 91.9752 868.8 91.9752 869.6 91.2752C870.3 90.5752 870.3 89.3752 869.6 88.5752C869.2 88.1752 868.8 87.9752 868.3 87.9752C867.8 87.9752 867.3 88.1752 866.9 88.5752Z"
                        fill="#0100FF" />
                    <path
                        d="M890.6 100.475C889.6 99.475 889.6 97.875 890.6 96.875C891.6 95.875 893.2 95.875 894.2 96.875C895.2 97.875 895.2 99.475 894.2 100.475C893.7 100.975 893.1 101.175 892.4 101.175C891.7 101.175 891.1 100.975 890.6 100.475ZM891 97.275C890.3 97.975 890.3 99.175 891 99.975C891.7 100.675 892.9 100.675 893.7 99.975C894.4 99.275 894.4 98.075 893.7 97.275C893.3 96.875 892.9 96.675 892.4 96.675C891.8 96.775 891.4 96.975 891 97.275Z"
                        fill="#0100FF" />
                    <path
                        d="M872.7 71.2748C871.7 70.2748 871.7 68.6748 872.7 67.6748C873.7 66.6748 875.3 66.6748 876.3 67.6748C877.3 68.6748 877.3 70.2748 876.3 71.2748C875.8 71.7748 875.2 71.9748 874.5 71.9748C873.9 72.0748 873.2 71.7748 872.7 71.2748ZM873.2 68.1748C872.5 68.8748 872.5 70.0748 873.2 70.8748C873.9 71.5748 875.1 71.5748 875.9 70.8748C876.6 70.1748 876.6 68.9748 875.9 68.1748C875.5 67.7748 875.1 67.5748 874.6 67.5748C874 67.5748 873.5 67.7748 873.2 68.1748Z"
                        fill="#0100FF" />
                    <path
                        d="M855.8 130.775C854.9 131.675 853.5 131.675 852.7 130.775C851.8 129.875 851.8 128.475 852.7 127.675C853.6 126.775 855 126.775 855.8 127.675C856.6 128.575 856.6 129.975 855.8 130.775Z"
                        fill="#0100FF" />
                    <path
                        d="M923.3 188.775C922.3 187.775 922.3 186.175 923.3 185.175C924.3 184.175 925.9 184.175 926.9 185.175C927.9 186.175 927.9 187.775 926.9 188.775C926.4 189.275 925.8 189.475 925.1 189.475C924.4 189.475 923.8 189.275 923.3 188.775ZM923.7 185.675C923 186.375 923 187.575 923.7 188.375C924.4 189.075 925.6 189.075 926.4 188.375C927.1 187.675 927.1 186.475 926.4 185.675C926 185.275 925.6 185.075 925.1 185.075C924.5 185.075 924.1 185.275 923.7 185.675Z"
                        fill="#0100FF" />
                    <path
                        d="M929.8 203.675C928.9 204.575 927.5 204.575 926.7 203.675C925.8 202.775 925.8 201.375 926.7 200.575C927.6 199.675 929 199.675 929.8 200.575C930.6 201.475 930.6 202.875 929.8 203.675Z"
                        fill="#0100FF" />
                    <path
                        d="M877.9 134.075C877 134.975 875.6 134.975 874.8 134.075C873.9 133.175 873.9 131.775 874.8 130.975C875.7 130.075 877.1 130.075 877.9 130.975C878.7 131.775 878.7 133.175 877.9 134.075Z"
                        fill="#0100FF" />
                    <path
                        d="M840.5 127.475C839.6 128.375 838.2 128.375 837.4 127.475C836.5 126.575 836.5 125.175 837.4 124.375C838.3 123.475 839.7 123.475 840.5 124.375C841.4 125.175 841.4 126.575 840.5 127.475Z"
                        fill="#0100FF" />
                    <path
                        d="M836.1 117.575C835.2 118.475 833.8 118.475 833 117.575C832.1 116.675 832.1 115.275 833 114.475C833.9 113.575 835.3 113.575 836.1 114.475C837 115.275 837 116.675 836.1 117.575Z"
                        fill="#0100FF" />
                    <path
                        d="M875.2 114.275C874.3 115.175 872.9 115.175 872.1 114.275C871.2 113.375 871.2 111.975 872.1 111.175C873 110.275 874.4 110.275 875.2 111.175C876.1 111.975 876.1 113.375 875.2 114.275Z"
                        fill="#0100FF" />
                    <path
                        d="M898.7 117.775C898 118.475 896.8 118.275 895.9 117.375C895 116.475 894.9 115.275 895.6 114.575C896.3 113.875 897.5 114.075 898.4 114.975C899.2 115.875 899.4 117.175 898.7 117.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1042.9 258.175C1042 259.075 1040.6 259.075 1039.8 258.175C1038.9 257.275 1038.9 255.875 1039.8 255.075C1040.7 254.175 1042.1 254.175 1042.9 255.075C1043.8 255.875 1043.8 257.275 1042.9 258.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1052.4 258.375C1051.4 257.375 1051.4 255.775 1052.4 254.775C1053.4 253.775 1055 253.775 1056 254.775C1057 255.775 1057 257.375 1056 258.375C1055.5 258.875 1054.9 259.075 1054.2 259.075C1053.5 259.075 1052.9 258.875 1052.4 258.375ZM1055.5 257.875C1056.2 257.175 1056.2 255.975 1055.5 255.175C1054.8 254.475 1053.6 254.475 1052.8 255.175C1052.1 255.875 1052.1 257.075 1052.8 257.875C1053.6 258.675 1054.8 258.675 1055.5 257.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1052.3 237.975C1051.8 237.475 1051.5 236.775 1051.5 236.075C1051.5 235.375 1051.8 234.675 1052.3 234.175C1053.3 233.175 1055 233.175 1056 234.175C1056.5 234.675 1056.8 235.375 1056.8 236.075C1056.8 236.775 1056.5 237.475 1056 237.975C1055.5 238.475 1054.8 238.775 1054.1 238.775C1053.5 238.675 1052.8 238.475 1052.3 237.975ZM1055.5 237.375C1056.2 236.675 1056.2 235.575 1055.5 234.875C1054.8 234.175 1053.7 234.175 1053 234.875C1052.7 235.175 1052.5 235.675 1052.5 236.175C1052.5 236.675 1052.7 237.075 1053 237.475C1053.6 238.075 1054.7 238.075 1055.5 237.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1072.2 217.675C1071.7 217.175 1071.4 216.475 1071.4 215.775C1071.4 215.075 1071.7 214.375 1072.2 213.875C1073.2 212.875 1074.9 212.875 1075.9 213.875C1076.4 214.375 1076.7 215.075 1076.7 215.775C1076.7 216.475 1076.4 217.175 1075.9 217.675C1075.4 218.175 1074.7 218.475 1074 218.475C1073.4 218.475 1072.7 218.175 1072.2 217.675ZM1075.3 217.075C1076 216.375 1076 215.275 1075.3 214.575C1074.6 213.875 1073.5 213.875 1072.8 214.575C1072.5 214.875 1072.3 215.375 1072.3 215.875C1072.3 216.375 1072.5 216.775 1072.8 217.175C1073.5 217.775 1074.6 217.775 1075.3 217.075Z"
                        fill="#0100FF" />
                    <path
                        d="M1079.5 241.575C1079 241.075 1078.7 240.375 1078.7 239.675C1078.7 238.975 1079 238.275 1079.5 237.775C1080.5 236.775 1082.2 236.775 1083.2 237.775C1083.7 238.275 1084 238.975 1084 239.675C1084 240.375 1083.7 241.075 1083.2 241.575C1082.7 242.075 1082 242.375 1081.3 242.375C1080.6 242.375 1080 242.075 1079.5 241.575ZM1082.6 240.975C1083.3 240.275 1083.3 239.175 1082.6 238.475C1081.9 237.775 1080.8 237.775 1080.1 238.475C1079.8 238.775 1079.6 239.275 1079.6 239.775C1079.6 240.275 1079.8 240.675 1080.1 241.075C1080.7 241.675 1081.9 241.675 1082.6 240.975Z"
                        fill="#0100FF" />
                    <path
                        d="M1067.8 308.875C1066.8 307.875 1066.8 306.275 1067.8 305.275C1068.8 304.275 1070.4 304.275 1071.4 305.275C1072.4 306.275 1072.4 307.875 1071.4 308.875C1070.9 309.375 1070.3 309.575 1069.6 309.575C1069 309.575 1068.3 309.375 1067.8 308.875ZM1071 308.375C1071.4 307.975 1071.6 307.575 1071.6 307.075C1071.6 306.575 1071.4 306.075 1071 305.775C1070.3 305.075 1069.1 305.075 1068.3 305.775C1067.6 306.475 1067.6 307.675 1068.3 308.475C1069 309.175 1070.2 309.175 1071 308.375Z"
                        fill="#0100FF" />
                    <path
                        d="M886.9 137.675C885.9 136.675 885.9 135.075 886.9 134.075C887.9 133.075 889.5 133.075 890.5 134.075C891.5 135.075 891.5 136.675 890.5 137.675C890 138.175 889.4 138.375 888.7 138.375C888.1 138.375 887.4 138.175 886.9 137.675ZM890.1 137.175C890.8 136.475 890.8 135.275 890.1 134.475C889.4 133.775 888.2 133.775 887.4 134.475C886.7 135.175 886.7 136.375 887.4 137.175C888.1 137.975 889.3 137.975 890.1 137.175Z"
                        fill="#0100FF" />
                    <path
                        d="M925.8 134.275C924.8 133.275 924.8 131.675 925.8 130.675C926.8 129.675 928.4 129.675 929.4 130.675C930.4 131.675 930.4 133.275 929.4 134.275C928.9 134.775 928.3 134.975 927.6 134.975C926.9 135.075 926.3 134.775 925.8 134.275ZM928.9 133.875C929.6 133.175 929.6 131.975 928.9 131.175C928.2 130.475 927 130.475 926.2 131.175C925.5 131.875 925.5 133.075 926.2 133.875C927 134.575 928.2 134.575 928.9 133.875Z"
                        fill="#0100FF" />
                    <path
                        d="M863.2 142.175C862.3 143.075 860.9 143.075 860.1 142.175C859.2 141.275 859.2 139.875 860.1 139.075C861 138.175 862.4 138.175 863.2 139.075C864.1 139.875 864 141.275 863.2 142.175Z"
                        fill="#0100FF" />
                    <path
                        d="M900.2 79.775C899.3 80.675 897.9 80.675 897.1 79.775C896.2 78.875 896.2 77.475 897.1 76.675C898 75.775 899.4 75.775 900.2 76.675C901.1 77.575 901.1 78.975 900.2 79.775Z"
                        fill="#0100FF" />
                    <path
                        d="M864.6 131.075C863.6 130.075 863.6 128.375 864.6 127.375C865.6 126.375 867.3 126.375 868.3 127.375C869.3 128.375 869.3 130.075 868.3 131.075C867.8 131.575 867.1 131.875 866.4 131.875C865.8 131.875 865.1 131.575 864.6 131.075ZM867.7 130.475C868.4 129.775 868.4 128.675 867.7 127.975C867 127.275 865.9 127.275 865.2 127.975C864.5 128.675 864.5 129.775 865.2 130.475C865.9 131.175 867 131.175 867.7 130.475Z"
                        fill="#0100FF" />
                    <path
                        d="M698.9 70.775C698 71.675 696.6 71.675 695.8 70.775C694.9 69.875 694.9 68.475 695.8 67.675C696.7 66.775 698.1 66.775 698.9 67.675C699.8 68.475 699.7 69.875 698.9 70.775Z"
                        fill="#0100FF" />
                    <path
                        d="M643.6 40.5748C642.7 41.4748 641.3 41.4748 640.5 40.5748C639.6 39.6748 639.6 38.2748 640.5 37.4748C641.4 36.5748 642.8 36.5748 643.6 37.4748C644.4 38.3748 644.4 39.7748 643.6 40.5748Z"
                        fill="#0100FF" />
                    <path opacity="0.63"
                        d="M786.7 76.175C786.2 75.675 786 75.075 786 74.375C786 73.675 786.3 73.075 786.7 72.575C787.2 72.075 787.8 71.875 788.5 71.875C789.2 71.875 789.8 72.175 790.3 72.575C791.3 73.575 791.3 75.175 790.3 76.175C789.8 76.675 789.2 76.875 788.5 76.875C787.8 76.975 787.2 76.675 786.7 76.175ZM787.1 73.075C786.7 73.475 786.5 73.875 786.5 74.375C786.5 74.875 786.7 75.375 787.1 75.675C787.5 76.075 787.9 76.275 788.4 76.275C788.9 76.275 789.4 76.075 789.7 75.675C790.4 74.975 790.4 73.775 789.7 72.975C789.3 72.575 788.8 72.375 788.4 72.375C788 72.575 787.5 72.675 787.1 73.075Z"
                        fill="#0100FF" />
                    <path
                        d="M836.1 143.375C835.2 144.275 833.8 144.275 833 143.375C832.1 142.475 832.1 141.075 833 140.275C833.9 139.375 835.3 139.375 836.1 140.275C837 141.175 837 142.575 836.1 143.375Z"
                        fill="#0100FF" />
                    <path
                        d="M813.5 130.975C812.5 129.975 812.5 128.375 813.5 127.375C814 126.875 814.6 126.675 815.3 126.675C816 126.675 816.6 126.975 817.1 127.375C818.1 128.375 818.1 129.975 817.1 130.975C816.6 131.475 816 131.675 815.3 131.675C814.7 131.775 814 131.475 813.5 130.975ZM814 127.875C813.3 128.575 813.3 129.775 814 130.575C814.7 131.275 815.9 131.275 816.7 130.575C817.4 129.875 817.4 128.675 816.7 127.875C816.3 127.475 815.8 127.275 815.4 127.275C814.8 127.275 814.4 127.475 814 127.875Z"
                        fill="#0100FF" />
                    <path
                        d="M828.8 129.275C827.9 130.175 826.5 130.175 825.7 129.275C824.8 128.375 824.8 126.975 825.7 126.175C826.6 125.275 828 125.275 828.8 126.175C829.6 126.975 829.6 128.375 828.8 129.275Z"
                        fill="#0100FF" />
                    <path
                        d="M841.3 154.775C840.4 155.675 839 155.675 838.2 154.775C837.3 153.875 837.3 152.475 838.2 151.675C839.1 150.775 840.5 150.775 841.3 151.675C842.2 152.475 842.2 153.875 841.3 154.775Z"
                        fill="#0100FF" />
                    <path
                        d="M822 144.975C821.3 144.975 820.7 144.675 820.2 144.275C819.7 143.775 819.5 143.175 819.5 142.475C819.5 141.775 819.8 141.175 820.2 140.675C820.7 140.175 821.3 139.975 822 139.975C822.7 139.975 823.3 140.275 823.8 140.675C824.8 141.675 824.8 143.275 823.8 144.275C823.3 144.775 822.6 144.975 822 144.975ZM820.6 141.075C820.2 141.475 820 141.875 820 142.375C820 142.875 820.2 143.375 820.6 143.675C821 144.075 821.4 144.275 821.9 144.275C822.4 144.275 822.9 144.075 823.2 143.675C823.6 143.275 823.8 142.875 823.8 142.375C823.8 141.875 823.6 141.375 823.2 141.075C822.8 140.675 822.4 140.475 821.9 140.475C821.5 140.575 821 140.775 820.6 141.075Z"
                        fill="#0100FF" />
                    <path
                        d="M826.1 159.175C825.2 160.075 823.8 160.075 823 159.175C822.1 158.275 822.1 156.875 823 156.075C823.9 155.175 825.3 155.175 826.1 156.075C826.9 156.975 826.9 158.375 826.1 159.175Z"
                        fill="#0100FF" />
                    <path
                        d="M706.9 92.9752C706 93.8752 704.6 93.8752 703.8 92.9752C702.9 92.0752 702.9 90.6752 703.8 89.8752C704.7 88.9752 706.1 88.9752 706.9 89.8752C707.8 90.6752 707.8 92.0752 706.9 92.9752Z"
                        fill="#0100FF" />
                    <path
                        d="M720.3 89.275C719.4 90.175 718 90.175 717.2 89.275C716.3 88.375 716.3 86.975 717.2 86.175C718.1 85.275 719.5 85.275 720.3 86.175C721.1 86.975 721.1 88.375 720.3 89.275Z"
                        fill="#0100FF" />
                    <path
                        d="M811.8 89.6749C810.9 90.5749 809.5 90.5749 808.7 89.6749C807.8 88.7749 807.8 87.3749 808.7 86.5749C809.6 85.6749 811 85.6749 811.8 86.5749C812.7 87.3749 812.7 88.7749 811.8 89.6749Z"
                        fill="#0100FF" />
                    <path
                        d="M1090.9 340.875C1090 341.775 1088.6 341.775 1087.8 340.875C1086.9 339.975 1086.9 338.575 1087.8 337.775C1088.7 336.875 1090.1 336.875 1090.9 337.775C1091.8 338.575 1091.8 339.975 1090.9 340.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1149 351.275C1148.1 352.175 1146.7 352.175 1145.9 351.275C1145.1 350.375 1145 348.975 1145.9 348.175C1146.8 347.275 1148.2 347.275 1149 348.175C1149.8 349.075 1149.8 350.475 1149 351.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1133.4 330.775C1132.5 331.675 1131.1 331.675 1130.3 330.775C1129.4 329.875 1129.4 328.475 1130.3 327.675C1131.2 326.775 1132.6 326.775 1133.4 327.675C1134.3 328.475 1134.3 329.875 1133.4 330.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1117.9 331.375C1117 332.275 1115.6 332.275 1114.8 331.375C1113.9 330.475 1113.9 329.075 1114.8 328.275C1115.7 327.375 1117.1 327.375 1117.9 328.275C1118.8 329.075 1118.8 330.575 1117.9 331.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1089.5 293.275C1088.6 294.175 1087.2 294.175 1086.4 293.275C1085.5 292.375 1085.5 290.975 1086.4 290.175C1087.3 289.275 1088.7 289.275 1089.5 290.175C1090.4 290.975 1090.4 292.375 1089.5 293.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1110.1 349.375C1109.2 350.275 1107.8 350.275 1107 349.375C1106.1 348.475 1106.1 347.075 1107 346.275C1107.9 345.375 1109.3 345.375 1110.1 346.275C1110.9 347.175 1110.9 348.575 1110.1 349.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1096.2 371.475C1095.3 372.375 1093.9 372.375 1093.1 371.475C1092.2 370.575 1092.2 369.175 1093.1 368.375C1094 367.475 1095.4 367.475 1096.2 368.375C1097 369.275 1097 370.675 1096.2 371.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1103.1 275.275C1102.2 276.175 1100.8 276.175 1100 275.275C1099.1 274.375 1099.1 272.975 1100 272.175C1100.9 271.275 1102.3 271.275 1103.1 272.175C1103.9 273.075 1103.9 274.475 1103.1 275.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1077 269.275C1076 268.275 1076 266.675 1077 265.675C1078 264.675 1079.6 264.675 1080.6 265.675C1081.6 266.675 1081.6 268.275 1080.6 269.275C1080.1 269.775 1079.5 269.975 1078.8 269.975C1078.1 270.075 1077.5 269.775 1077 269.275ZM1080.1 268.875C1080.8 268.175 1080.8 266.975 1080.1 266.175C1079.4 265.475 1078.2 265.475 1077.4 266.175C1076.7 266.875 1076.7 268.075 1077.4 268.875C1078.2 269.575 1079.4 269.575 1080.1 268.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1082.3 306.075C1081.4 306.975 1080 306.975 1079.2 306.075C1078.3 305.175 1078.3 303.775 1079.2 302.975C1080.1 302.075 1081.5 302.075 1082.3 302.975C1083.1 303.875 1083.1 305.275 1082.3 306.075Z"
                        fill="#0100FF" />
                    <path
                        d="M1154.4 317.975C1153.5 318.875 1152.1 318.875 1151.3 317.975C1150.4 317.075 1150.4 315.675 1151.3 314.875C1152.2 313.975 1153.6 313.975 1154.4 314.875C1155.3 315.675 1155.3 317.075 1154.4 317.975Z"
                        fill="#0100FF" />
                    <path
                        d="M1112.3 297.375C1111.4 298.275 1110 298.275 1109.2 297.375C1108.4 296.475 1108.3 295.075 1109.2 294.275C1110.1 293.375 1111.5 293.375 1112.3 294.275C1113.2 295.075 1113.1 296.475 1112.3 297.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1125.4 277.575C1124.5 278.475 1123.1 278.475 1122.3 277.575C1121.4 276.675 1121.4 275.275 1122.3 274.475C1123.2 273.575 1124.6 273.575 1125.4 274.475C1126.3 275.275 1126.3 276.675 1125.4 277.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1132.3 260.375C1131.4 261.275 1130 261.275 1129.2 260.375C1128.3 259.475 1128.3 258.075 1129.2 257.275C1130.1 256.375 1131.5 256.375 1132.3 257.275C1133.2 258.075 1133.2 259.475 1132.3 260.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1061.1 281.975C1060.2 282.875 1058.8 282.875 1058 281.975C1057.1 281.075 1057.1 279.675 1058 278.875C1058.9 277.975 1060.3 277.975 1061.1 278.875C1062 279.675 1062 281.075 1061.1 281.975Z"
                        fill="#0100FF" />
                    <path
                        d="M1053.1 269.075C1052.2 269.975 1050.8 269.975 1050 269.075C1049.1 268.175 1049.1 266.775 1050 265.975C1050.9 265.075 1052.3 265.075 1053.1 265.975C1054 266.775 1054 268.175 1053.1 269.075Z"
                        fill="#0100FF" />
                    <path opacity="0.63"
                        d="M707.6 81.3752C706.9 81.3752 706.3 81.0752 705.8 80.6752C704.8 79.6752 704.8 78.0752 705.8 77.0752C706.8 76.0752 708.4 76.0752 709.4 77.0752C710.4 78.0752 710.4 79.6752 709.4 80.6752C708.9 81.0752 708.3 81.3752 707.6 81.3752ZM706.3 77.4752C705.6 78.1752 705.6 79.3752 706.3 80.1752C707 80.8752 708.2 80.8752 709 80.1752C709.7 79.4752 709.7 78.2752 709 77.4752C708.6 77.0752 708.2 76.8752 707.7 76.8752C707.1 76.9752 706.6 77.1752 706.3 77.4752Z"
                        fill="#0100FF" />
                    <path
                        d="M758.7 78.1749C757.8 79.0749 756.4 79.0749 755.6 78.1749C754.7 77.2749 754.7 75.8749 755.6 75.0749C756.5 74.1749 757.9 74.1749 758.7 75.0749C759.6 75.9749 759.6 77.3749 758.7 78.1749Z"
                        fill="#0100FF" />
                    <path
                        d="M665.6 118.175C664.7 119.075 663.3 119.075 662.5 118.175C661.6 117.275 661.6 115.875 662.5 115.075C663.4 114.175 664.8 114.175 665.6 115.075C666.5 115.875 666.4 117.275 665.6 118.175Z"
                        fill="#0100FF" />
                    <path
                        d="M748.4 68.7748C747.4 67.7748 747.4 66.1748 748.4 65.1748C749.4 64.1748 751 64.1748 752 65.1748C753 66.1748 753 67.7748 752 68.7748C751.5 69.2748 750.9 69.4748 750.2 69.4748C749.5 69.4748 748.8 69.2748 748.4 68.7748ZM751.5 68.3748C752.2 67.6748 752.2 66.4748 751.5 65.6748C750.8 64.9748 749.6 64.9748 748.8 65.6748C748.1 66.3748 748.1 67.5748 748.8 68.3748C749.5 69.0748 750.7 69.0748 751.5 68.3748Z"
                        fill="#0100FF" />
                    <path
                        d="M726.1 77.5748C725.2 78.4748 723.8 78.4748 723 77.5748C722.1 76.6748 722.1 75.2748 723 74.4748C723.9 73.5748 725.3 73.5748 726.1 74.4748C727 75.3748 727 76.7748 726.1 77.5748Z"
                        fill="#0100FF" />
                    <path
                        d="M765.7 66.6749C764.8 67.5749 763.4 67.5749 762.6 66.6749C761.7 65.7749 761.7 64.3749 762.6 63.5749C763.5 62.6749 764.9 62.6749 765.7 63.5749C766.6 64.3749 766.5 65.7749 765.7 66.6749Z"
                        fill="#0100FF" />
                    <path
                        d="M662.3 158.075C661.6 158.075 660.9 157.775 660.4 157.275C659.4 156.275 659.4 154.575 660.4 153.575C661.4 152.575 663.1 152.575 664.1 153.575C664.6 154.075 664.9 154.775 664.9 155.475C664.9 156.175 664.6 156.875 664.1 157.375C663.7 157.775 663.1 158.075 662.3 158.075C662.3 158.075 662.4 158.075 662.3 158.075ZM661.1 154.175C660.4 154.875 660.4 155.975 661.1 156.675C661.4 156.975 661.9 157.175 662.4 157.175C662.9 157.175 663.3 156.975 663.7 156.675C664.4 155.975 664.4 154.875 663.7 154.175C663.3 153.775 662.9 153.675 662.4 153.675C661.9 153.575 661.4 153.775 661.1 154.175Z"
                        fill="#0100FF" />
                    <path
                        d="M691.4 102.675C690.4 101.675 690.4 100.075 691.4 99.0752C692.4 98.0752 694 98.0752 695 99.0752C696 100.075 696 101.675 695 102.675C694.5 103.175 693.9 103.375 693.2 103.375C692.6 103.375 691.9 103.175 691.4 102.675ZM691.9 99.4752C691.2 100.175 691.2 101.375 691.9 102.175C692.3 102.575 692.7 102.775 693.2 102.775C693.7 102.775 694.2 102.575 694.5 102.175C695.2 101.475 695.2 100.275 694.5 99.4752C694.1 99.0752 693.6 98.8752 693.1 98.8752C692.7 98.9752 692.2 99.1752 691.9 99.4752Z"
                        fill="#0100FF" />
                    <path
                        d="M668.9 90.7748C668.2 90.7748 667.5 90.4748 667 89.9748C666.5 89.4748 666.2 88.7748 666.2 88.0748C666.2 87.3748 666.5 86.6748 667 86.1748C668 85.1748 669.7 85.1748 670.7 86.1748C671.2 86.6748 671.5 87.3748 671.5 88.0748C671.5 88.7748 671.2 89.4748 670.7 89.9748C670.2 90.4748 669.6 90.7748 668.9 90.7748ZM667.6 86.8748C666.9 87.5748 666.9 88.6748 667.6 89.3748C667.9 89.6748 668.4 89.8748 668.9 89.8748C669.4 89.8748 669.8 89.6748 670.2 89.3748C670.9 88.6748 670.9 87.5748 670.2 86.8748C669.8 86.4748 669.4 86.3748 668.9 86.3748C668.4 86.2748 667.9 86.4748 667.6 86.8748Z"
                        fill="#0100FF" />
                    <path
                        d="M663.2 49.975C662.5 49.975 661.8 49.675 661.3 49.175C660.8 48.675 660.5 47.975 660.5 47.275C660.5 46.575 660.8 45.875 661.3 45.375C662.3 44.375 664 44.375 665 45.375C665.5 45.875 665.8 46.575 665.8 47.275C665.8 47.975 665.5 48.675 665 49.175C664.5 49.775 663.9 49.975 663.2 49.975ZM661.9 46.075C661.2 46.775 661.2 47.875 661.9 48.575C662.2 48.875 662.7 49.075 663.2 49.075C663.7 49.075 664.1 48.875 664.5 48.575C665.2 47.875 665.2 46.775 664.5 46.075C664.1 45.675 663.7 45.575 663.2 45.575C662.7 45.575 662.3 45.775 661.9 46.075Z"
                        fill="#0100FF" />
                    <path
                        d="M650.9 129.075C649.9 128.075 649.9 126.475 650.9 125.475C651.9 124.475 653.5 124.475 654.5 125.475C655.5 126.475 655.5 128.075 654.5 129.075C654 129.575 653.4 129.775 652.7 129.775C652 129.875 651.4 129.575 650.9 129.075ZM651.3 125.975C650.6 126.675 650.6 127.875 651.3 128.675C652 129.375 653.2 129.375 654 128.675C654.7 127.975 654.7 126.775 654 125.975C653.6 125.575 653.1 125.375 652.6 125.375C652.2 125.375 651.7 125.575 651.3 125.975Z"
                        fill="#0100FF" />
                    <path
                        d="M733.6 84.8751C732.7 85.7751 731.3 85.7751 730.5 84.8751C729.6 83.9751 729.6 82.5751 730.5 81.7751C731.4 80.8751 732.8 80.8751 733.6 81.7751C734.5 82.5751 734.5 83.9751 733.6 84.8751Z"
                        fill="#0100FF" />
                    <path
                        d="M671.9 130.275C671.2 130.275 670.5 129.975 670 129.475C669.5 128.975 669.2 128.275 669.2 127.575C669.2 126.875 669.5 126.175 670 125.675C670.5 125.175 671.1 124.875 671.9 124.875C672.6 124.875 673.3 125.175 673.8 125.675C674.3 126.175 674.6 126.875 674.6 127.575C674.6 128.275 674.3 128.975 673.8 129.475C673.3 129.975 672.6 130.275 671.9 130.275ZM670.6 126.375C670.3 126.675 670.1 127.175 670.1 127.675C670.1 128.175 670.3 128.575 670.6 128.975C670.9 129.275 671.4 129.475 671.9 129.475C672.4 129.475 672.8 129.275 673.2 128.975C673.5 128.675 673.7 128.175 673.7 127.675C673.7 127.175 673.5 126.775 673.2 126.375C672.8 125.975 672.4 125.875 671.9 125.875C671.4 125.875 671 126.075 670.6 126.375Z"
                        fill="#0100FF" />
                    <path
                        d="M658.8 100.075C658.3 99.5751 658.1 98.9751 658.1 98.2751C658.1 97.5751 658.4 96.9751 658.8 96.4751C659.8 95.4751 661.4 95.4751 662.4 96.4751C663.4 97.4751 663.4 99.0751 662.4 100.075C661.9 100.575 661.3 100.775 660.6 100.775C659.9 100.875 659.3 100.575 658.8 100.075ZM659.2 96.9751C658.8 97.3751 658.6 97.7751 658.6 98.2751C658.6 98.7751 658.8 99.2751 659.2 99.5751C659.6 99.9751 660 100.175 660.5 100.175C661 100.175 661.5 99.9751 661.8 99.5751C662.5 98.8751 662.5 97.6751 661.8 96.8751C661.4 96.4751 660.9 96.2751 660.4 96.2751C660.1 96.4751 659.6 96.5751 659.2 96.9751Z"
                        fill="#0100FF" />
                    <path
                        d="M638 91.6752C637.5 91.1752 637.3 90.5752 637.3 89.8752C637.3 89.1752 637.6 88.5752 638 88.0752C639 87.0752 640.6 87.0752 641.6 88.0752C642.6 89.0752 642.6 90.6752 641.6 91.6752C641.1 92.1752 640.5 92.3752 639.8 92.3752C639.1 92.3752 638.5 92.1752 638 91.6752ZM638.4 88.5752C638 88.9752 637.8 89.3752 637.8 89.8752C637.8 90.3752 638 90.8752 638.4 91.1752C638.8 91.5752 639.2 91.7752 639.7 91.7752C640.2 91.7752 640.7 91.5752 641 91.1752C641.7 90.4752 641.7 89.2752 641 88.4752C640.6 88.0752 640.1 87.8752 639.6 87.8752C639.3 87.9752 638.8 88.1752 638.4 88.5752Z"
                        fill="#0100FF" />
                    <path
                        d="M665 26.5751C664.5 26.0751 664.3 25.4751 664.3 24.7751C664.3 24.0751 664.6 23.4751 665 22.9751C666 21.9751 667.6 21.9751 668.6 22.9751C669.6 23.9751 669.6 25.5751 668.6 26.5751C668.1 27.0751 667.5 27.2751 666.8 27.2751C666.1 27.3751 665.5 27.0751 665 26.5751ZM665.4 23.4751C665 23.8751 664.8 24.2751 664.8 24.7751C664.8 25.2751 665 25.7751 665.4 26.0751C665.8 26.4751 666.2 26.6751 666.7 26.6751C667.2 26.6751 667.7 26.4751 668 26.0751C668.7 25.3751 668.7 24.1751 668 23.3751C667.6 22.9751 667.1 22.7751 666.6 22.7751C666.3 22.9751 665.8 23.1751 665.4 23.4751Z"
                        fill="#0100FF" />
                    <path
                        d="M1031.4 248.875C1030.4 247.875 1030.4 246.275 1031.4 245.275C1031.9 244.775 1032.5 244.575 1033.2 244.575C1033.9 244.575 1034.5 244.875 1035 245.275C1036 246.275 1036 247.875 1035 248.875C1034.5 249.375 1033.9 249.575 1033.2 249.575C1032.6 249.575 1031.9 249.375 1031.4 248.875ZM1034.5 248.375C1035.2 247.675 1035.2 246.475 1034.5 245.675C1034.1 245.275 1033.7 245.075 1033.2 245.075C1032.7 245.075 1032.2 245.275 1031.9 245.675C1031.5 246.075 1031.3 246.475 1031.3 246.975C1031.3 247.475 1031.5 247.975 1031.9 248.275C1032.6 249.175 1033.8 249.175 1034.5 248.375Z"
                        fill="#0100FF" />
                    <path
                        d="M987.9 225.275C987 226.175 985.6 226.175 984.8 225.275C983.9 224.375 983.9 222.975 984.8 222.175C985.7 221.275 987.1 221.275 987.9 222.175C988.8 222.975 988.8 224.375 987.9 225.275Z"
                        fill="#0100FF" />
                    <path
                        d="M991.1 204.375C990.4 204.375 989.8 204.075 989.3 203.675C988.8 203.175 988.6 202.575 988.6 201.875C988.6 201.175 988.9 200.575 989.3 200.075C989.8 199.575 990.4 199.375 991.1 199.375C991.8 199.375 992.4 199.675 992.9 200.075C993.9 201.075 993.9 202.675 992.9 203.675C992.4 204.075 991.8 204.375 991.1 204.375ZM989.8 200.475C989.4 200.875 989.2 201.275 989.2 201.775C989.2 202.275 989.4 202.775 989.8 203.075C990.2 203.475 990.6 203.675 991.1 203.675C991.6 203.675 992.1 203.475 992.4 203.075C992.8 202.675 993 202.275 993 201.775C993 201.275 992.8 200.775 992.4 200.475C992 200.075 991.6 199.875 991.1 199.875C990.6 199.975 990.1 200.175 989.8 200.475Z"
                        fill="#0100FF" />
                    <path
                        d="M997.2 174.675C996.5 174.675 995.9 174.375 995.4 173.975C994.9 173.475 994.7 172.875 994.7 172.175C994.7 171.475 995 170.875 995.4 170.375C995.9 169.875 996.5 169.675 997.2 169.675C997.9 169.675 998.5 169.975 999 170.375C1000 171.375 1000 172.975 999 173.975C998.5 174.375 997.9 174.675 997.2 174.675ZM995.9 170.775C995.5 171.175 995.3 171.575 995.3 172.075C995.3 172.575 995.5 173.075 995.9 173.375C996.3 173.775 996.7 173.975 997.2 173.975C997.7 173.975 998.2 173.775 998.5 173.375C998.9 172.975 999.1 172.575 999.1 172.075C999.1 171.575 998.9 171.075 998.5 170.775C998.1 170.375 997.7 170.175 997.2 170.175C996.7 170.175 996.2 170.375 995.9 170.775Z"
                        fill="#0100FF" />
                    <path
                        d="M980 213.175C979.1 214.075 977.7 214.075 976.9 213.175C976 212.275 976 210.875 976.9 210.075C977.8 209.175 979.2 209.175 980 210.075C980.8 210.875 980.8 212.275 980 213.175Z"
                        fill="#0100FF" />
                    <path
                        d="M917.6 214.775C916.9 214.775 916.3 214.475 915.8 214.075C915.3 213.575 915.1 212.975 915.1 212.275C915.1 211.575 915.4 210.975 915.8 210.475C916.3 209.975 916.9 209.775 917.6 209.775C918.3 209.775 918.9 210.075 919.4 210.475C920.4 211.475 920.4 213.075 919.4 214.075C919 214.575 918.3 214.775 917.6 214.775ZM916.3 210.975C915.9 211.375 915.7 211.775 915.7 212.275C915.7 212.775 915.9 213.275 916.3 213.575C916.7 213.975 917.1 214.175 917.6 214.175C918.1 214.175 918.6 213.975 918.9 213.575C919.6 212.875 919.6 211.675 918.9 210.875C918.5 210.475 918.1 210.275 917.6 210.275C917.1 210.375 916.7 210.575 916.3 210.975Z"
                        fill="#0100FF" />
                    <path
                        d="M684.5 95.1749C683.6 96.0749 682.2 96.0749 681.4 95.1749C680.5 94.2749 680.5 92.8749 681.4 92.0749C682.3 91.1749 683.7 91.1749 684.5 92.0749C685.4 92.8749 685.4 94.2749 684.5 95.1749Z"
                        fill="#0100FF" />
                    <path
                        d="M708.9 67.1752C707.9 66.1752 707.9 64.5752 708.9 63.5752C709.9 62.5752 711.5 62.5752 712.5 63.5752C713.5 64.5752 713.5 66.1752 712.5 67.1752C712 67.6752 711.4 67.8752 710.7 67.8752C710 67.8752 709.4 67.6752 708.9 67.1752ZM709.3 64.0752C708.6 64.7752 708.6 65.9752 709.3 66.7752C710 67.4752 711.2 67.4752 712 66.7752C712.7 66.0752 712.7 64.8752 712 64.0752C711.6 63.6752 711.2 63.4752 710.7 63.4752C710.2 63.4752 709.7 63.6752 709.3 64.0752Z"
                        fill="#0100FF" />
                    <path
                        d="M746.1 85.6749C745.2 86.5749 743.8 86.5749 743 85.6749C742.1 84.7749 742.1 83.3749 743 82.5749C743.9 81.6749 745.3 81.6749 746.1 82.5749C746.9 83.3749 746.9 84.7749 746.1 85.6749Z"
                        fill="#0100FF" />
                    <path
                        d="M941.2 209.775C940.3 210.675 938.9 210.675 938.1 209.775C937.2 208.875 937.2 207.475 938.1 206.675C939 205.775 940.4 205.775 941.2 206.675C942 207.475 942 208.875 941.2 209.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1073.4 260.775C1072.5 261.675 1071.1 261.675 1070.3 260.775C1069.4 259.875 1069.4 258.475 1070.3 257.675C1071.2 256.775 1072.6 256.775 1073.4 257.675C1074.3 258.475 1074.3 259.875 1073.4 260.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1089.1 259.275C1088.2 260.175 1086.8 260.175 1086 259.275C1085.1 258.375 1085.1 256.975 1086 256.175C1086.9 255.275 1088.3 255.275 1089.1 256.175C1090 257.075 1090 258.475 1089.1 259.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1098.6 231.275C1097.7 232.175 1096.3 232.175 1095.5 231.275C1094.6 230.375 1094.6 228.975 1095.5 228.175C1096.4 227.275 1097.8 227.275 1098.6 228.175C1099.5 228.975 1099.5 230.375 1098.6 231.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1063.3 247.875C1062.4 248.775 1061 248.775 1060.2 247.875C1059.3 246.975 1059.3 245.575 1060.2 244.775C1061.1 243.875 1062.5 243.875 1063.3 244.775C1064.2 245.675 1064.2 247.075 1063.3 247.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1071.2 232.575C1070.3 233.475 1068.9 233.475 1068.1 232.575C1067.2 231.675 1067.2 230.275 1068.1 229.475C1069 228.575 1070.4 228.575 1071.2 229.475C1072.1 230.375 1072.1 231.775 1071.2 232.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1065.5 268.375C1064.6 269.275 1063.2 269.275 1062.4 268.375C1061.5 267.475 1061.5 266.075 1062.4 265.275C1063.3 264.375 1064.7 264.375 1065.5 265.275C1066.4 266.075 1066.4 267.475 1065.5 268.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M741.3 75.3751C740.4 76.2751 739 76.2751 738.2 75.3751C737.4 74.4751 737.3 73.0751 738.2 72.2751C739.1 71.3751 740.5 71.3751 741.3 72.2751C742.2 73.0751 742.2 74.4751 741.3 75.3751Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M729.4 40.5748C728.5 41.4748 727.1 41.4748 726.3 40.5748C725.4 39.6748 725.4 38.2748 726.3 37.4748C727.2 36.5748 728.6 36.5748 729.4 37.4748C730.3 38.3748 730.3 39.7748 729.4 40.5748Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M724.6 63.4751C723.9 63.4751 723.3 63.1751 722.8 62.7751C722.3 62.2751 722.1 61.6751 722.1 60.9751C722.1 60.2751 722.4 59.6751 722.8 59.1751C723.3 58.6751 723.9 58.4751 724.6 58.4751C725.3 58.4751 725.9 58.7751 726.4 59.1751C726.9 59.6751 727.1 60.2751 727.1 60.9751C727.1 61.6751 726.8 62.2751 726.4 62.7751C725.9 63.1751 725.2 63.4751 724.6 63.4751ZM723.2 59.5751C722.8 59.9751 722.6 60.3751 722.6 60.8751C722.6 61.3751 722.8 61.8751 723.2 62.1751C723.6 62.5751 724 62.7751 724.5 62.7751C725 62.7751 725.5 62.5751 725.8 62.1751C726.2 61.7751 726.4 61.3751 726.4 60.8751C726.4 60.3751 726.2 59.8751 725.8 59.5751C725.4 59.1751 725 58.9751 724.5 58.9751C724.1 59.0751 723.6 59.2751 723.2 59.5751Z"
                        fill="#0100FF" />
                    <path
                        d="M743.5 62.5748C742.6 63.4748 741.2 63.4748 740.4 62.5748C739.5 61.6748 739.5 60.2748 740.4 59.4748C741.3 58.5748 742.7 58.5748 743.5 59.4748C744.4 60.2748 744.4 61.6748 743.5 62.5748Z"
                        fill="#0100FF" />
                    <path
                        d="M714.8 11.9752C713.9 12.8752 712.5 12.8752 711.7 11.9752C710.8 11.0752 710.8 9.6752 711.7 8.8752C712.6 7.9752 714 7.9752 714.8 8.8752C715.6 9.6752 715.6 11.0752 714.8 11.9752Z"
                        fill="#0100FF" />
                    <path
                        d="M745.8 14.1749C744.9 15.0749 743.5 15.0749 742.7 14.1749C741.8 13.2749 741.8 11.8749 742.7 11.0749C743.6 10.1749 745 10.1749 745.8 11.0749C746.6 11.8749 746.6 13.2749 745.8 14.1749Z"
                        fill="#0100FF" />
                    <path
                        d="M760.9 87.0748C760 87.9748 758.6 87.9748 757.8 87.0748C756.9 86.1748 756.9 84.7748 757.8 83.9748C758.7 83.0748 760.1 83.0748 760.9 83.9748C761.8 84.7748 761.8 86.1748 760.9 87.0748Z"
                        fill="#0100FF" />
                    <path
                        d="M662.1 75.9752C661.2 76.8752 659.8 76.8752 659 75.9752C658.1 75.0752 658.1 73.6752 659 72.8752C659.9 71.9752 661.3 71.9752 662.1 72.8752C663 73.7752 663 75.1752 662.1 75.9752Z"
                        fill="#0100FF" />
                    <path
                        d="M773 77.5748C772.1 78.4748 770.7 78.4748 769.9 77.5748C769 76.6748 769 75.2748 769.9 74.4748C770.8 73.5748 772.2 73.5748 773 74.4748C773.9 75.3748 773.9 76.7748 773 77.5748Z"
                        fill="#0100FF" />
                    <path
                        d="M773 89.275C772.1 90.175 770.7 90.175 769.9 89.275C769 88.375 769 86.975 769.9 86.175C770.8 85.275 772.2 85.275 773 86.175C773.9 86.975 773.9 88.375 773 89.275Z"
                        fill="#0100FF" />
                    <path
                        d="M784.5 85.6749C783.6 86.5749 782.2 86.5749 781.4 85.6749C780.5 84.7749 780.5 83.3749 781.4 82.5749C782.3 81.6749 783.7 81.6749 784.5 82.5749C785.4 83.3749 785.4 84.7749 784.5 85.6749Z"
                        fill="#0100FF" />
                    <path
                        d="M804.1 80.775C803.2 81.675 801.8 81.675 801 80.775C800.1 79.875 800.1 78.475 801 77.675C801.9 76.775 803.3 76.775 804.1 77.675C805 78.475 805 79.875 804.1 80.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1077.8 293.275C1076.9 294.175 1075.5 294.175 1074.7 293.275C1073.8 292.375 1073.8 290.975 1074.7 290.175C1075.6 289.275 1077 289.275 1077.8 290.175C1078.7 290.975 1078.7 292.375 1077.8 293.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1066.7 295.175C1065.8 296.075 1064.4 296.075 1063.6 295.175C1062.7 294.275 1062.7 292.875 1063.6 292.075C1064.5 291.175 1065.9 291.175 1066.7 292.075C1067.5 292.875 1067.5 294.275 1066.7 295.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1034.5 235.475C1033.6 236.375 1032.2 236.375 1031.4 235.475C1030.5 234.575 1030.5 233.175 1031.4 232.375C1032.3 231.475 1033.7 231.475 1034.5 232.375C1035.3 233.175 1035.3 234.575 1034.5 235.475Z"
                        fill="#0100FF" />
                    <path
                        d="M377 342.775C376.1 343.675 374.7 343.675 373.9 342.775C373 341.875 373 340.475 373.9 339.675C374.8 338.775 376.2 338.775 377 339.675C377.9 340.475 377.9 341.875 377 342.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1020.4 214.475C1019.5 215.375 1018.1 215.375 1017.3 214.475C1016.4 213.575 1016.4 212.175 1017.3 211.375C1018.2 210.475 1019.6 210.475 1020.4 211.375C1021.2 212.175 1021.2 213.575 1020.4 214.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1021.8 228.475C1020.8 227.475 1020.8 225.775 1021.8 224.775C1022.8 223.775 1024.5 223.775 1025.5 224.775C1026.5 225.775 1026.5 227.475 1025.5 228.475C1025 228.975 1024.3 229.275 1023.6 229.275C1023 229.275 1022.3 228.975 1021.8 228.475ZM1022.4 225.375C1021.7 226.075 1021.7 227.175 1022.4 227.875C1023.1 228.575 1024.2 228.575 1024.9 227.875C1025.6 227.175 1025.6 226.075 1024.9 225.375C1024.5 224.975 1024.1 224.875 1023.6 224.875C1023.2 224.775 1022.7 224.975 1022.4 225.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1062.5 189.575C1061.5 188.575 1061.5 186.875 1062.5 185.875C1063.5 184.875 1065.2 184.875 1066.2 185.875C1067.2 186.875 1067.2 188.575 1066.2 189.575C1065.7 190.075 1065 190.375 1064.3 190.375C1063.7 190.375 1063 190.075 1062.5 189.575ZM1063.1 186.475C1062.4 187.175 1062.4 188.275 1063.1 188.975C1063.8 189.675 1064.9 189.675 1065.6 188.975C1066.3 188.275 1066.3 187.175 1065.6 186.475C1065.2 186.075 1064.8 185.975 1064.3 185.975C1063.9 185.875 1063.5 186.075 1063.1 186.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1021.8 201.175C1020.8 200.175 1020.8 198.475 1021.8 197.475C1022.8 196.475 1024.5 196.475 1025.5 197.475C1026.5 198.475 1026.5 200.175 1025.5 201.175C1025 201.675 1024.3 201.975 1023.6 201.975C1023 201.975 1022.3 201.675 1021.8 201.175ZM1022.4 198.075C1021.7 198.775 1021.7 199.875 1022.4 200.575C1023.1 201.275 1024.2 201.275 1024.9 200.575C1025.6 199.875 1025.6 198.775 1024.9 198.075C1024.5 197.675 1024.1 197.575 1023.6 197.575C1023.2 197.475 1022.7 197.675 1022.4 198.075Z"
                        fill="#0100FF" />
                    <path
                        d="M381.5 270.775C380.6 271.675 379.2 271.675 378.4 270.775C377.5 269.875 377.5 268.475 378.4 267.675C379.3 266.775 380.7 266.775 381.5 267.675C382.4 268.475 382.3 269.875 381.5 270.775Z"
                        fill="#0100FF" />
                    <path
                        d="M342.1 269.175C341.2 270.075 339.8 270.075 339 269.175C338.1 268.275 338.1 266.875 339 266.075C339.9 265.175 341.3 265.175 342.1 266.075C343 266.975 343 268.375 342.1 269.175Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M475.7 261.775C475 261.775 474.3 261.475 473.8 260.975C473.3 260.475 473 259.775 473 259.075C473 258.375 473.3 257.675 473.8 257.175C474.8 256.175 476.5 256.175 477.5 257.175C478 257.675 478.3 258.375 478.3 259.075C478.3 259.775 478 260.475 477.5 260.975C477.1 261.575 476.4 261.775 475.7 261.775ZM474.5 257.875C473.8 258.575 473.8 259.675 474.5 260.375C475.2 261.075 476.3 261.075 477 260.375C477.3 260.075 477.5 259.575 477.5 259.075C477.5 258.575 477.3 258.175 477 257.775C476.6 257.375 476.2 257.275 475.7 257.275C475.3 257.375 474.8 257.575 474.5 257.875Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M461.8 248.775C460.9 249.675 459.5 249.675 458.7 248.775C457.8 247.875 457.8 246.475 458.7 245.675C459.6 244.775 461 244.775 461.8 245.675C462.7 246.475 462.7 247.875 461.8 248.775Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M456.6 262.575C455.7 263.475 454.3 263.475 453.5 262.575C452.6 261.675 452.6 260.275 453.5 259.475C454.4 258.575 455.8 258.575 456.6 259.475C457.5 260.275 457.5 261.675 456.6 262.575Z"
                        fill="#0100FF" />
                    <path
                        d="M413 266.975C412.1 267.875 410.7 267.875 409.9 266.975C409 266.075 409 264.675 409.9 263.875C410.8 262.975 412.2 262.975 413 263.875C413.9 264.675 413.9 266.075 413 266.975Z"
                        fill="#0100FF" />
                    <path
                        d="M1001.3 230.075C1000.4 230.975 999 230.975 998.2 230.075C997.3 229.175 997.3 227.775 998.2 226.975C999.1 226.075 1000.5 226.075 1001.3 226.975C1002.2 227.875 1002.1 229.275 1001.3 230.075Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M458.8 211.075C457.9 211.975 456.5 211.975 455.7 211.075C454.8 210.175 454.8 208.775 455.7 207.975C456.6 207.075 458 207.075 458.8 207.975C459.7 208.875 459.7 210.275 458.8 211.075Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M429 181.975C428.1 182.875 426.7 182.875 425.9 181.975C425 181.075 425 179.675 425.9 178.875C426.8 177.975 428.2 177.975 429 178.875C429.9 179.775 429.9 181.175 429 181.975Z"
                        fill="#0100FF" />
                    <path
                        d="M433.4 238.075C432.5 238.975 431.1 238.975 430.3 238.075C429.4 237.175 429.4 235.775 430.3 234.975C431.2 234.075 432.6 234.075 433.4 234.975C434.3 235.875 434.3 237.275 433.4 238.075Z"
                        fill="#0100FF" />
                    <path
                        d="M413.4 213.375C412.5 214.275 411.1 214.275 410.3 213.375C409.4 212.475 409.4 211.075 410.3 210.275C411.2 209.375 412.6 209.375 413.4 210.275C414.3 211.075 414.3 212.475 413.4 213.375Z"
                        fill="#0100FF" />
                    <path
                        d="M410.8 281.175C409.9 282.075 408.5 282.075 407.7 281.175C406.8 280.275 406.8 278.875 407.7 278.075C408.6 277.175 410 277.175 410.8 278.075C411.7 278.975 411.6 280.375 410.8 281.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1025.2 242.475C1024.3 243.375 1022.9 243.375 1022.1 242.475C1021.2 241.575 1021.2 240.175 1022.1 239.375C1023 238.475 1024.4 238.475 1025.2 239.375C1026.1 240.175 1026.1 241.575 1025.2 242.475Z"
                        fill="#0100FF" />
                    <path
                        d="M389 330.875C388.1 331.775 386.7 331.775 385.9 330.875C385 329.975 385 328.575 385.9 327.775C386.8 326.875 388.2 326.875 389 327.775C389.9 328.575 389.9 329.975 389 330.875Z"
                        fill="#0100FF" />
                    <path
                        d="M425 417.175C424.1 418.075 422.7 418.075 421.9 417.175C421 416.275 421 414.875 421.9 414.075C422.8 413.175 424.2 413.175 425 414.075C425.9 414.975 425.9 416.375 425 417.175Z"
                        fill="#0100FF" />
                    <path
                        d="M403.8 439.275C402.9 440.175 401.5 440.175 400.7 439.275C399.8 438.375 399.8 436.975 400.7 436.175C401.6 435.275 403 435.275 403.8 436.175C404.7 437.075 404.7 438.475 403.8 439.275Z"
                        fill="#0100FF" />
                    <path
                        d="M452.6 402.275C451.7 403.175 450.3 403.175 449.5 402.275C448.6 401.375 448.6 399.975 449.5 399.175C450.4 398.275 451.8 398.275 452.6 399.175C453.4 399.975 453.4 401.375 452.6 402.275Z"
                        fill="#0100FF" />
                    <path
                        d="M377 378.875C376.1 379.775 374.7 379.775 373.9 378.875C373 377.975 373 376.575 373.9 375.775C374.8 374.875 376.2 374.875 377 375.775C377.9 376.575 377.9 377.975 377 378.875Z"
                        fill="#0100FF" />
                    <path
                        d="M359.8 371.975C358.9 372.875 357.5 372.875 356.7 371.975C355.8 371.075 355.8 369.675 356.7 368.875C357.6 367.975 359 367.975 359.8 368.875C360.6 369.775 360.6 371.175 359.8 371.975Z"
                        fill="#0100FF" />
                    <path
                        d="M362 332.675C361.1 333.575 359.7 333.575 358.9 332.675C358 331.775 358 330.375 358.9 329.575C359.8 328.675 361.2 328.675 362 329.575C362.9 330.375 362.9 331.775 362 332.675Z"
                        fill="#0100FF" />
                    <path
                        d="M342.1 344.975C341.2 345.875 339.8 345.875 339 344.975C338.1 344.075 338.1 342.675 339 341.875C339.9 340.975 341.3 340.975 342.1 341.875C343 342.675 343 344.075 342.1 344.975Z"
                        fill="#0100FF" />
                    <path
                        d="M422 402.275C421.1 403.175 419.7 403.175 418.9 402.275C418 401.375 418 399.975 418.9 399.175C419.8 398.275 421.2 398.275 422 399.175C422.8 399.975 422.8 401.375 422 402.275Z"
                        fill="#0100FF" />
                    <path
                        d="M481 427.475C480.1 428.375 478.7 428.375 477.9 427.475C477 426.575 477 425.175 477.9 424.375C478.8 423.475 480.2 423.475 481 424.375C481.9 425.275 481.9 426.675 481 427.475Z"
                        fill="#0100FF" />
                    <path
                        d="M489.5 444.575C488.6 445.475 487.2 445.475 486.4 444.575C485.5 443.675 485.5 442.275 486.4 441.475C487.3 440.575 488.7 440.575 489.5 441.475C490.3 442.275 490.3 443.675 489.5 444.575Z"
                        fill="#0100FF" />
                    <path
                        d="M464.1 427.475C463.2 428.375 461.8 428.375 461 427.475C460.1 426.575 460.1 425.175 461 424.375C461.9 423.475 463.3 423.475 464.1 424.375C464.9 425.275 464.9 426.675 464.1 427.475Z"
                        fill="#0100FF" />
                    <path
                        d="M367.2 425.275C366.3 426.175 364.9 426.175 364.1 425.275C363.2 424.375 363.2 422.975 364.1 422.175C365 421.275 366.4 421.275 367.2 422.175C368.1 422.975 368.1 424.375 367.2 425.275Z"
                        fill="#0100FF" />
                    <path
                        d="M403.8 393.075C402.9 393.975 401.5 393.975 400.7 393.075C399.8 392.175 399.8 390.775 400.7 389.975C401.6 389.075 403 389.075 403.8 389.975C404.7 390.875 404.7 392.275 403.8 393.075Z"
                        fill="#0100FF" />
                    <path
                        d="M381.5 362.575C380.6 363.475 379.2 363.475 378.4 362.575C377.5 361.675 377.5 360.275 378.4 359.475C379.3 358.575 380.7 358.575 381.5 359.475C382.4 360.375 382.3 361.775 381.5 362.575Z"
                        fill="#0100FF" />
                    <path
                        d="M355.7 393.075C354.8 393.975 353.4 393.975 352.6 393.075C351.7 392.175 351.7 390.775 352.6 389.975C353.5 389.075 354.9 389.075 355.7 389.975C356.6 390.875 356.6 392.275 355.7 393.075Z"
                        fill="#0100FF" />
                    <path
                        d="M438.9 411.875C438 412.775 436.6 412.775 435.8 411.875C434.9 410.975 434.9 409.575 435.8 408.775C436.7 407.875 438.1 407.875 438.9 408.775C439.7 409.675 439.7 411.075 438.9 411.875Z"
                        fill="#0100FF" />
                    <path
                        d="M533 428.075C532.1 428.975 530.7 428.975 529.9 428.075C529 427.175 529 425.775 529.9 424.975C530.8 424.075 532.2 424.075 533 424.975C533.9 425.875 533.9 427.275 533 428.075Z"
                        fill="#0100FF" />
                    <path
                        d="M539.6 453.575C538.7 454.475 537.3 454.475 536.5 453.575C535.6 452.675 535.6 451.275 536.5 450.475C537.4 449.575 538.8 449.575 539.6 450.475C540.5 451.275 540.5 452.675 539.6 453.575Z"
                        fill="#0100FF" />
                    <path
                        d="M537.4 404.475C536.5 405.375 535.1 405.375 534.3 404.475C533.4 403.575 533.4 402.175 534.3 401.375C535.2 400.475 536.6 400.475 537.4 401.375C538.3 402.175 538.3 403.575 537.4 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M587.1 404.475C586.2 405.375 584.8 405.375 584 404.475C583.1 403.575 583.1 402.175 584 401.375C584.9 400.475 586.3 400.475 587.1 401.375C588 402.175 588 403.575 587.1 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M621.8 427.475C620.9 428.375 619.5 428.375 618.7 427.475C617.8 426.575 617.8 425.175 618.7 424.375C619.6 423.475 621 423.475 621.8 424.375C622.7 425.275 622.7 426.675 621.8 427.475Z"
                        fill="#0100FF" />
                    <path
                        d="M633.3 449.075C632.4 449.975 631 449.975 630.2 449.075C629.3 448.175 629.3 446.775 630.2 445.975C631.1 445.075 632.5 445.075 633.3 445.975C634.2 446.875 634.2 448.275 633.3 449.075Z"
                        fill="#0100FF" />
                    <path
                        d="M690.1 404.175C689.2 405.075 687.8 405.075 687 404.175C686.1 403.275 686.1 401.875 687 401.075C687.9 400.175 689.3 400.175 690.1 401.075C691 401.975 691 403.375 690.1 404.175Z"
                        fill="#0100FF" />
                    <path
                        d="M659.5 428.075C658.6 428.975 657.2 428.975 656.4 428.075C655.5 427.175 655.5 425.775 656.4 424.975C657.3 424.075 658.7 424.075 659.5 424.975C660.3 425.875 660.3 427.275 659.5 428.075Z"
                        fill="#0100FF" />
                    <path
                        d="M601.6 404.475C600.7 405.375 599.3 405.375 598.5 404.475C597.6 403.575 597.6 402.175 598.5 401.375C599.4 400.475 600.8 400.475 601.6 401.375C602.5 402.175 602.5 403.575 601.6 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M642.2 416.375C641.3 417.275 639.9 417.275 639.1 416.375C638.2 415.475 638.2 414.075 639.1 413.275C640 412.375 641.4 412.375 642.2 413.275C643 414.075 643 415.475 642.2 416.375Z"
                        fill="#0100FF" />
                    <path
                        d="M698.5 414.975C697.6 415.875 696.2 415.875 695.4 414.975C694.5 414.075 694.5 412.675 695.4 411.875C696.3 410.975 697.7 410.975 698.5 411.875C699.4 412.775 699.4 414.175 698.5 414.975Z"
                        fill="#0100FF" />
                    <path
                        d="M694.1 461.975C693.2 462.875 691.8 462.875 691 461.975C690.1 461.075 690.1 459.675 691 458.875C691.9 457.975 693.3 457.975 694.1 458.875C694.9 459.675 694.9 461.075 694.1 461.975Z"
                        fill="#0100FF" />
                    <path
                        d="M676.5 446.875C675.6 447.775 674.2 447.775 673.4 446.875C672.5 445.975 672.5 444.575 673.4 443.775C674.3 442.875 675.7 442.875 676.5 443.775C677.4 444.675 677.4 446.075 676.5 446.875Z"
                        fill="#0100FF" />
                    <path
                        d="M651.9 404.875C651 405.775 649.6 405.775 648.8 404.875C647.9 403.975 647.9 402.575 648.8 401.775C649.7 400.875 651.1 400.875 651.9 401.775C652.8 402.675 652.8 404.075 651.9 404.875Z"
                        fill="#0100FF" />
                    <path
                        d="M466.3 404.475C465.4 405.375 464 405.375 463.2 404.475C462.3 403.575 462.3 402.175 463.2 401.375C464.1 400.475 465.5 400.475 466.3 401.375C467.1 402.175 467.1 403.575 466.3 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M435.6 397.575C434.7 398.475 433.3 398.475 432.5 397.575C431.6 396.675 431.6 395.275 432.5 394.475C433.4 393.575 434.8 393.575 435.6 394.475C436.5 395.275 436.5 396.675 435.6 397.575Z"
                        fill="#0100FF" />
                    <path
                        d="M521 404.475C520.1 405.375 518.7 405.375 517.9 404.475C517 403.575 517 402.175 517.9 401.375C518.8 400.475 520.2 400.475 521 401.375C521.8 402.175 521.8 403.575 521 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M572.8 403.075C571.9 403.975 570.5 403.975 569.7 403.075C568.8 402.175 568.8 400.775 569.7 399.975C570.6 399.075 572 399.075 572.8 399.975C573.7 400.775 573.7 402.175 572.8 403.075Z"
                        fill="#0100FF" />
                    <path
                        d="M505.8 414.975C504.9 415.875 503.5 415.875 502.7 414.975C501.8 414.075 501.8 412.675 502.7 411.875C503.6 410.975 505 410.975 505.8 411.875C506.7 412.775 506.6 414.175 505.8 414.975Z"
                        fill="#0100FF" />
                    <path
                        d="M560.5 416.375C559.6 417.275 558.2 417.275 557.4 416.375C556.5 415.475 556.5 414.075 557.4 413.275C558.3 412.375 559.7 412.375 560.5 413.275C561.3 414.075 561.3 415.475 560.5 416.375Z"
                        fill="#0100FF" />
                    <path
                        d="M635.5 404.475C634.6 405.375 633.2 405.375 632.4 404.475C631.5 403.575 631.5 402.175 632.4 401.375C633.3 400.475 634.7 400.475 635.5 401.375C636.4 402.175 636.4 403.575 635.5 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M497.4 425.875C496.5 426.775 495.1 426.775 494.3 425.875C493.4 424.975 493.4 423.575 494.3 422.775C495.2 421.875 496.6 421.875 497.4 422.775C498.3 423.675 498.3 425.075 497.4 425.875Z"
                        fill="#0100FF" />
                    <path
                        d="M505.8 437.875C504.9 438.775 503.5 438.775 502.7 437.875C501.8 436.975 501.8 435.575 502.7 434.775C503.6 433.875 505 433.875 505.8 434.775C506.7 435.675 506.6 437.075 505.8 437.875Z"
                        fill="#0100FF" />
                    <path
                        d="M393 396.475C392.1 397.375 390.7 397.375 389.9 396.475C389 395.575 389 394.175 389.9 393.375C390.8 392.475 392.2 392.475 393 393.375C393.9 394.275 393.9 395.675 393 396.475Z"
                        fill="#0100FF" />
                    <path
                        d="M377 403.775C376.1 404.675 374.7 404.675 373.9 403.775C373 402.875 373 401.475 373.9 400.675C374.8 399.775 376.2 399.775 377 400.675C377.9 401.475 377.9 402.875 377 403.775Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M477.3 247.875C476.4 248.775 475 248.775 474.2 247.875C473.3 246.975 473.3 245.575 474.2 244.775C475.1 243.875 476.5 243.875 477.3 244.775C478.2 245.675 478.2 247.075 477.3 247.875Z"
                        fill="#0100FF" />
                    <path
                        d="M460.2 232.575C459.7 232.075 459.4 231.375 459.4 230.675C459.4 229.975 459.7 229.275 460.2 228.775C460.7 228.275 461.4 227.975 462.1 227.975C462.8 227.975 463.5 228.275 464 228.775C465 229.775 465 231.475 464 232.475C463.5 232.975 462.8 233.275 462.1 233.275C461.4 233.375 460.7 233.075 460.2 232.575ZM460.8 229.475C460.5 229.775 460.3 230.275 460.3 230.775C460.3 231.275 460.5 231.675 460.8 232.075C461.5 232.775 462.6 232.775 463.3 232.075C464 231.375 464 230.275 463.3 229.575C462.9 229.175 462.5 229.075 462 229.075C461.6 228.975 461.2 229.075 460.8 229.475Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M439.6 250.375C439.1 249.875 438.8 249.175 438.8 248.475C438.8 247.775 439.1 247.075 439.6 246.575C440.1 246.075 440.8 245.775 441.5 245.775C442.2 245.775 442.9 246.075 443.4 246.575C444.4 247.575 444.4 249.275 443.4 250.275C442.9 250.775 442.2 251.075 441.5 251.075C440.8 251.175 440.1 250.875 439.6 250.375ZM440.2 247.275C439.9 247.575 439.7 248.075 439.7 248.575C439.7 249.075 439.9 249.475 440.2 249.875C440.9 250.575 442 250.575 442.7 249.875C443.4 249.175 443.4 248.075 442.7 247.375C442.3 246.975 441.9 246.875 441.4 246.875C441 246.775 440.6 246.975 440.2 247.275Z"
                        fill="#0100FF" />
                    <path
                        d="M397.5 296.075C396.8 296.075 396.2 295.775 395.7 295.375C395.2 294.875 395 294.275 395 293.575C395 292.875 395.3 292.275 395.7 291.775C396.7 290.775 398.3 290.775 399.3 291.775C399.8 292.275 400 292.875 400 293.575C400 294.275 399.7 294.875 399.3 295.375C398.8 295.875 398.2 296.075 397.5 296.075ZM396.2 292.275C395.8 292.675 395.6 293.075 395.6 293.575C395.6 294.075 395.8 294.575 396.2 294.875C396.6 295.275 397 295.475 397.5 295.475C398 295.475 398.5 295.275 398.8 294.875C399.2 294.475 399.4 294.075 399.4 293.575C399.4 293.075 399.2 292.575 398.8 292.275C398.4 291.875 398 291.675 397.5 291.675C397 291.675 396.6 291.875 396.2 292.275Z"
                        fill="#0100FF" />
                    <path
                        d="M374.8 285.575C373.9 286.475 372.5 286.475 371.7 285.575C370.8 284.675 370.8 283.275 371.7 282.475C372.6 281.575 374 281.575 374.8 282.475C375.6 283.375 375.7 284.675 374.8 285.575Z"
                        fill="#0100FF" />
                    <path
                        d="M359.8 272.975C358.9 273.875 357.5 273.875 356.7 272.975C355.8 272.075 355.8 270.675 356.7 269.875C357.6 268.975 359 268.975 359.8 269.875C360.6 270.675 360.6 272.075 359.8 272.975Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1090.2 309.675C1089.5 309.675 1088.8 309.375 1088.3 308.875C1087.8 308.375 1087.5 307.675 1087.5 306.975C1087.5 306.275 1087.8 305.575 1088.3 305.075C1088.8 304.575 1089.5 304.275 1090.2 304.275C1090.9 304.275 1091.6 304.575 1092.1 305.075C1092.6 305.575 1092.9 306.275 1092.9 306.975C1092.9 307.675 1092.6 308.375 1092.1 308.875C1091.5 309.475 1090.9 309.675 1090.2 309.675ZM1088.9 305.775C1088.6 306.075 1088.4 306.575 1088.4 307.075C1088.4 307.575 1088.6 307.975 1088.9 308.375C1089.2 308.675 1089.7 308.875 1090.2 308.875C1090.7 308.875 1091.1 308.675 1091.5 308.375C1091.8 308.075 1092 307.575 1092 307.075C1092 306.575 1091.8 306.175 1091.5 305.775C1091.1 305.375 1090.7 305.275 1090.2 305.275C1089.7 305.275 1089.3 305.475 1088.9 305.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1032.2 219.575C1031.3 220.475 1029.9 220.475 1029.1 219.575C1028.2 218.675 1028.2 217.275 1029.1 216.475C1030 215.575 1031.4 215.575 1032.2 216.475C1033.1 217.375 1033.1 218.775 1032.2 219.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1042.9 201.175C1042 202.075 1040.6 202.075 1039.8 201.175C1038.9 200.275 1038.9 198.875 1039.8 198.075C1040.7 197.175 1042.1 197.175 1042.9 198.075C1043.7 198.975 1043.8 200.375 1042.9 201.175Z"
                        fill="#0100FF" />
                    <path
                        d="M377 322.175C376.1 323.075 374.7 323.075 373.9 322.175C373 321.275 373 319.875 373.9 319.075C374.8 318.175 376.2 318.175 377 319.075C377.9 319.875 377.9 321.275 377 322.175Z"
                        fill="#0100FF" />
                    <path
                        d="M445.4 423.675C444.5 424.575 443.1 424.575 442.3 423.675C441.4 422.775 441.4 421.375 442.3 420.575C443.2 419.675 444.6 419.675 445.4 420.575C446.2 421.475 446.2 422.875 445.4 423.675Z"
                        fill="#0100FF" />
                    <path
                        d="M441.1 440.075C440.2 440.975 438.8 440.975 438 440.075C437.1 439.175 437.1 437.775 438 436.975C438.9 436.075 440.3 436.075 441.1 436.975C442 437.875 442 439.275 441.1 440.075Z"
                        fill="#0100FF" />
                    <path
                        d="M416.8 429.675C415.9 430.575 414.5 430.575 413.7 429.675C412.8 428.775 412.8 427.375 413.7 426.575C414.6 425.675 416 425.675 416.8 426.575C417.7 427.475 417.6 428.875 416.8 429.675Z"
                        fill="#0100FF" />
                    <path
                        d="M389.4 378.875C388.5 379.775 387.1 379.775 386.3 378.875C385.4 377.975 385.4 376.575 386.3 375.775C387.2 374.875 388.6 374.875 389.4 375.775C390.3 376.575 390.3 377.975 389.4 378.875Z"
                        fill="#0100FF" />
                    <path
                        d="M368.6 358.175C367.7 359.075 366.3 359.075 365.5 358.175C364.6 357.275 364.6 355.875 365.5 355.075C366.4 354.175 367.8 354.175 368.6 355.075C369.5 355.875 369.5 357.275 368.6 358.175Z"
                        fill="#0100FF" />
                    <path
                        d="M338.5 371.575C337.6 372.475 336.2 372.475 335.4 371.575C334.5 370.675 334.5 369.275 335.4 368.475C336.3 367.575 337.7 367.575 338.5 368.475C339.3 369.275 339.3 370.675 338.5 371.575Z"
                        fill="#0100FF" />
                    <path
                        d="M479.1 189.875C478.2 190.775 476.8 190.775 476 189.875C475.1 188.975 475.1 187.575 476 186.775C476.9 185.875 478.3 185.875 479.1 186.775C480 187.675 480 189.075 479.1 189.875Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M450.3 234.975C449.4 235.875 448 235.875 447.2 234.975C446.3 234.075 446.3 232.675 447.2 231.875C448.1 230.975 449.5 230.975 450.3 231.875C451.1 232.675 451.1 234.075 450.3 234.975Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M440.4 213.375C439.5 214.275 438.1 214.275 437.3 213.375C436.4 212.475 436.4 211.075 437.3 210.275C438.2 209.375 439.6 209.375 440.4 210.275C441.3 211.075 441.3 212.475 440.4 213.375Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M406.8 250.075C405.9 250.975 404.5 250.975 403.7 250.075C402.8 249.175 402.8 247.775 403.7 246.975C404.6 246.075 406 246.075 406.8 246.975C407.7 247.875 407.7 249.275 406.8 250.075Z"
                        fill="#0100FF" />
                    <path
                        d="M435.6 264.775C434.7 265.675 433.3 265.675 432.5 264.775C431.6 263.875 431.6 262.475 432.5 261.675C433.4 260.775 434.8 260.775 435.6 261.675C436.5 262.475 436.5 263.875 435.6 264.775Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M390.5 262.875C390 262.375 389.7 261.675 389.7 260.975C389.7 260.275 390 259.575 390.5 259.075C391.5 258.075 393.2 258.075 394.2 259.075C395.2 260.075 395.2 261.775 394.2 262.775C393.7 263.275 393 263.575 392.3 263.575C391.7 263.575 391 263.375 390.5 262.875ZM393.7 262.275C394.4 261.575 394.4 260.475 393.7 259.775C393 259.075 391.9 259.075 391.2 259.775C390.5 260.475 390.5 261.575 391.2 262.275C391.8 262.975 393 262.975 393.7 262.275Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M361.2 248.175C360.7 247.675 360.4 246.975 360.4 246.275C360.4 245.575 360.7 244.875 361.2 244.375C362.2 243.375 363.9 243.375 364.9 244.375C365.9 245.375 365.9 247.075 364.9 248.075C364.4 248.575 363.7 248.875 363 248.875C362.4 248.975 361.7 248.675 361.2 248.175ZM364.3 247.575C365 246.875 365 245.775 364.3 245.075C363.6 244.375 362.5 244.375 361.8 245.075C361.1 245.775 361.1 246.875 361.8 247.575C362.5 248.275 363.6 248.275 364.3 247.575Z"
                        fill="#0100FF" />
                    <path
                        d="M422 253.075C421.1 253.975 419.7 253.975 418.9 253.075C418 252.175 418 250.775 418.9 249.975C419.8 249.075 421.2 249.075 422 249.975C422.8 250.775 422.8 252.175 422 253.075Z"
                        fill="#0100FF" />
                    <path
                        d="M393 229.375C392.1 230.275 390.7 230.275 389.9 229.375C389 228.475 389 227.075 389.9 226.275C390.8 225.375 392.2 225.375 393 226.275C393.9 227.075 393.9 228.475 393 229.375Z"
                        fill="#0100FF" />
                    <path
                        d="M1082 356.575C1081.5 356.075 1081.3 355.475 1081.3 354.775C1081.3 354.075 1081.6 353.475 1082 352.975C1083 351.975 1084.6 351.975 1085.6 352.975C1086.6 353.975 1086.6 355.575 1085.6 356.575C1085.1 357.075 1084.5 357.275 1083.8 357.275C1083.2 357.275 1082.5 357.075 1082 356.575ZM1085.2 356.175C1085.6 355.775 1085.8 355.375 1085.8 354.875C1085.8 354.375 1085.6 353.875 1085.2 353.575C1084.5 352.875 1083.3 352.875 1082.5 353.575C1081.8 354.275 1081.8 355.475 1082.5 356.275C1083.2 356.875 1084.4 356.875 1085.2 356.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1090.1 325.175C1089.1 324.175 1089.1 322.475 1090.1 321.475C1091.1 320.475 1092.8 320.475 1093.8 321.475C1094.8 322.475 1094.8 324.175 1093.8 325.175C1093.3 325.675 1092.6 325.975 1091.9 325.975C1091.3 325.975 1090.6 325.675 1090.1 325.175ZM1093.2 324.575C1093.9 323.875 1093.9 322.775 1093.2 322.075C1092.5 321.375 1091.4 321.375 1090.7 322.075C1090 322.775 1090 323.875 1090.7 324.575C1091.4 325.275 1092.5 325.275 1093.2 324.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1130 354.775C1129 353.775 1129 352.075 1130 351.075C1131 350.075 1132.7 350.075 1133.7 351.075C1134.7 352.075 1134.7 353.775 1133.7 354.775C1133.2 355.275 1132.5 355.575 1131.8 355.575C1131.2 355.475 1130.5 355.275 1130 354.775ZM1133.2 354.175C1133.9 353.475 1133.9 352.375 1133.2 351.675C1132.5 350.975 1131.4 350.975 1130.7 351.675C1130 352.375 1130 353.475 1130.7 354.175C1131.3 354.875 1132.4 354.875 1133.2 354.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1111.5 370.275C1110.5 369.275 1110.5 367.575 1111.5 366.575C1112.5 365.575 1114.2 365.575 1115.2 366.575C1116.2 367.575 1116.2 369.275 1115.2 370.275C1114.7 370.775 1114 371.075 1113.3 371.075C1112.7 371.075 1112 370.775 1111.5 370.275ZM1114.6 369.675C1115.3 368.975 1115.3 367.875 1114.6 367.175C1113.9 366.475 1112.8 366.475 1112.1 367.175C1111.4 367.875 1111.4 368.975 1112.1 369.675C1112.8 370.375 1113.9 370.375 1114.6 369.675Z"
                        fill="#0100FF" />
                    <path
                        d="M1117.2 394.475C1116.2 393.475 1116.2 391.775 1117.2 390.775C1118.2 389.775 1119.9 389.775 1120.9 390.775C1121.9 391.775 1121.9 393.475 1120.9 394.475C1120.4 394.975 1119.7 395.275 1119 395.275C1118.4 395.175 1117.7 394.975 1117.2 394.475ZM1120.4 393.875C1121.1 393.175 1121.1 392.075 1120.4 391.375C1119.7 390.675 1118.6 390.675 1117.9 391.375C1117.2 392.075 1117.2 393.175 1117.9 393.875C1118.5 394.575 1119.7 394.575 1120.4 393.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1084.5 391.775C1083.5 390.775 1083.5 389.075 1084.5 388.075C1085.5 387.075 1087.2 387.075 1088.2 388.075C1089.2 389.075 1089.2 390.775 1088.2 391.775C1087.7 392.275 1087 392.575 1086.3 392.575C1085.7 392.575 1085 392.275 1084.5 391.775ZM1087.6 391.275C1088.3 390.575 1088.3 389.475 1087.6 388.775C1086.9 388.075 1085.8 388.075 1085.1 388.775C1084.4 389.475 1084.4 390.575 1085.1 391.275C1085.8 391.975 1086.9 391.975 1087.6 391.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1077.6 411.775C1076.6 410.775 1076.6 409.075 1077.6 408.075C1078.6 407.075 1080.3 407.075 1081.3 408.075C1082.3 409.075 1082.3 410.775 1081.3 411.775C1080.8 412.275 1080.1 412.575 1079.4 412.575C1078.7 412.575 1078.1 412.275 1077.6 411.775ZM1080.7 411.175C1081.4 410.475 1081.4 409.375 1080.7 408.675C1080 407.975 1078.9 407.975 1078.2 408.675C1077.5 409.375 1077.5 410.475 1078.2 411.175C1078.8 411.875 1080 411.875 1080.7 411.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1124.2 312.675C1123.2 311.675 1123.2 309.975 1124.2 308.975C1125.2 307.975 1126.9 307.975 1127.9 308.975C1128.9 309.975 1128.9 311.675 1127.9 312.675C1127.4 313.175 1126.7 313.475 1126 313.475C1125.4 313.375 1124.7 313.175 1124.2 312.675ZM1127.3 312.075C1128 311.375 1128 310.275 1127.3 309.575C1126.6 308.875 1125.5 308.875 1124.8 309.575C1124.1 310.275 1124.1 311.375 1124.8 312.075C1125.5 312.775 1126.6 312.775 1127.3 312.075Z"
                        fill="#0100FF" />
                    <path
                        d="M1085.1 281.975C1084.2 282.875 1082.8 282.875 1082 281.975C1081.1 281.075 1081.1 279.675 1082 278.875C1082.9 277.975 1084.3 277.975 1085.1 278.875C1086 279.675 1086 281.075 1085.1 281.975Z"
                        fill="#0100FF" />
                    <path
                        d="M1118.4 235.875C1117.5 236.775 1116.1 236.775 1115.3 235.875C1114.4 234.975 1114.4 233.575 1115.3 232.775C1116.2 231.875 1117.6 231.875 1118.4 232.775C1119.3 233.575 1119.3 234.975 1118.4 235.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1107.9 252.375C1107 253.275 1105.6 253.275 1104.8 252.375C1103.9 251.475 1103.9 250.075 1104.8 249.275C1105.7 248.375 1107.1 248.375 1107.9 249.275C1108.7 250.075 1108.7 251.475 1107.9 252.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1067.8 323.175C1066.8 322.175 1066.8 320.575 1067.8 319.575C1068.8 318.575 1070.4 318.575 1071.4 319.575C1072.4 320.575 1072.4 322.175 1071.4 323.175C1070.9 323.675 1070.3 323.875 1069.6 323.875C1069 323.975 1068.3 323.675 1067.8 323.175ZM1071 322.775C1071.7 322.075 1071.7 320.875 1071 320.075C1070.3 319.375 1069.1 319.375 1068.3 320.075C1067.6 320.775 1067.6 321.975 1068.3 322.775C1069 323.475 1070.2 323.475 1071 322.775Z"
                        fill="#0100FF" />
                    <path
                        d="M391.7 311.875C390.8 312.775 389.4 312.775 388.6 311.875C387.7 310.975 387.7 309.575 388.6 308.775C389.5 307.875 390.9 307.875 391.7 308.775C392.6 309.675 392.6 311.075 391.7 311.875Z"
                        fill="#0100FF" />
                    <path
                        d="M363 313.275C362.3 313.275 361.6 312.975 361.1 312.475C360.6 311.975 360.3 311.275 360.3 310.575C360.3 309.875 360.6 309.175 361.1 308.675C362.1 307.675 363.8 307.675 364.8 308.675C365.3 309.175 365.6 309.875 365.6 310.575C365.6 311.275 365.3 311.975 364.8 312.475C364.4 312.975 363.8 313.275 363 313.275C363.1 313.275 363.1 313.275 363 313.275ZM361.8 309.375C361.5 309.675 361.3 310.175 361.3 310.675C361.3 311.175 361.5 311.575 361.8 311.975C362.1 312.275 362.6 312.475 363.1 312.475C363.6 312.475 364 312.275 364.4 311.975C365.1 311.275 365.1 310.175 364.4 309.475C364 309.075 363.6 308.975 363.1 308.975C362.6 308.875 362.1 309.075 361.8 309.375Z"
                        fill="#0100FF" />
                    <path
                        d="M351 320.075C350.3 320.075 349.6 319.775 349.1 319.275C348.6 318.775 348.3 318.075 348.3 317.375C348.3 316.675 348.6 315.975 349.1 315.475C350.1 314.475 351.8 314.475 352.8 315.475C353.3 315.975 353.6 316.675 353.6 317.375C353.6 318.075 353.3 318.775 352.8 319.275C352.4 319.775 351.7 320.075 351 320.075ZM349.7 316.175C349.4 316.475 349.2 316.975 349.2 317.475C349.2 317.975 349.4 318.375 349.7 318.775C350 319.075 350.5 319.275 351 319.275C351.5 319.275 351.9 319.075 352.3 318.775C353 318.075 353 316.975 352.3 316.275C351.9 315.875 351.5 315.775 351 315.775C350.5 315.575 350.1 315.775 349.7 316.175Z"
                        fill="#0100FF" />
                    <path
                        d="M330.7 325.375C330 325.375 329.3 325.075 328.8 324.575C328.3 324.075 328 323.375 328 322.675C328 321.975 328.3 321.275 328.8 320.775C329.8 319.775 331.5 319.775 332.5 320.775C333 321.275 333.3 321.975 333.3 322.675C333.3 323.375 333 324.075 332.5 324.575C332.1 325.175 331.4 325.375 330.7 325.375ZM329.5 321.475C329.2 321.775 329 322.275 329 322.775C329 323.275 329.2 323.675 329.5 324.075C329.8 324.375 330.3 324.575 330.8 324.575C331.3 324.575 331.7 324.375 332.1 324.075C332.8 323.375 332.8 322.275 332.1 321.575C331.7 321.175 331.3 321.075 330.8 321.075C330.3 320.975 329.8 321.175 329.5 321.475Z"
                        fill="#0100FF" />
                    <path
                        d="M330.7 302.775C330 302.775 329.3 302.475 328.8 301.975C328.3 301.475 328 300.775 328 300.075C328 299.375 328.3 298.675 328.8 298.175C329.8 297.175 331.5 297.175 332.5 298.175C333 298.675 333.3 299.375 333.3 300.075C333.3 300.775 333 301.475 332.5 301.975C332.1 302.475 331.4 302.775 330.7 302.775ZM329.5 298.875C329.2 299.175 329 299.675 329 300.175C329 300.675 329.2 301.075 329.5 301.475C329.8 301.775 330.3 301.975 330.8 301.975C331.3 301.975 331.7 301.775 332.1 301.475C332.8 300.775 332.8 299.675 332.1 298.975C331.7 298.575 331.3 298.475 330.8 298.475C330.3 298.275 329.8 298.475 329.5 298.875Z"
                        fill="#0100FF" />
                    <path
                        d="M351.5 296.175C350.8 296.175 350.1 295.875 349.6 295.375C349.1 294.875 348.8 294.175 348.8 293.475C348.8 292.775 349.1 292.075 349.6 291.575C350.6 290.575 352.3 290.575 353.3 291.575C353.8 292.075 354.1 292.775 354.1 293.475C354.1 294.175 353.8 294.875 353.3 295.375C352.9 295.975 352.2 296.175 351.5 296.175ZM350.3 292.275C350 292.575 349.8 293.075 349.8 293.575C349.8 294.075 350 294.475 350.3 294.875C350.6 295.175 351.1 295.375 351.6 295.375C352.1 295.375 352.5 295.175 352.9 294.875C353.6 294.175 353.6 293.075 352.9 292.375C352.5 291.975 352.1 291.875 351.6 291.875C351.1 291.775 350.6 291.975 350.3 292.275Z"
                        fill="#0100FF" />
                    <path
                        d="M420.8 392.675C420.1 392.675 419.4 392.375 418.9 391.875C418.4 391.375 418.1 390.675 418.1 389.975C418.1 389.275 418.4 388.575 418.9 388.075C419.9 387.075 421.6 387.075 422.6 388.075C423.1 388.575 423.4 389.275 423.4 389.975C423.4 390.675 423.1 391.375 422.6 391.875C422.2 392.475 421.5 392.675 420.8 392.675ZM419.6 388.775C419.3 389.075 419.1 389.575 419.1 390.075C419.1 390.575 419.3 390.975 419.6 391.375C419.9 391.675 420.4 391.875 420.9 391.875C421.4 391.875 421.8 391.675 422.2 391.375C422.9 390.675 422.9 389.575 422.2 388.875C421.8 388.475 421.4 388.375 420.9 388.375C420.4 388.275 419.9 388.475 419.6 388.775Z"
                        fill="#0100FF" />
                    <path
                        d="M486.1 418.275C485.4 418.275 484.7 417.975 484.2 417.475C483.7 416.975 483.4 416.275 483.4 415.575C483.4 414.875 483.7 414.175 484.2 413.675C485.2 412.675 486.9 412.675 487.9 413.675C488.4 414.175 488.7 414.875 488.7 415.575C488.7 416.275 488.4 416.975 487.9 417.475C487.5 417.975 486.8 418.275 486.1 418.275ZM484.8 414.375C484.5 414.675 484.3 415.175 484.3 415.675C484.3 416.175 484.5 416.575 484.8 416.975C485.1 417.275 485.6 417.475 486.1 417.475C486.6 417.475 487 417.275 487.4 416.975C488.1 416.275 488.1 415.175 487.4 414.475C487 414.075 486.6 413.975 486.1 413.975C485.7 413.875 485.2 413.975 484.8 414.375Z"
                        fill="#0100FF" />
                    <path
                        d="M502 465.575C501.3 465.575 500.6 465.275 500.1 464.775C499.6 464.275 499.3 463.575 499.3 462.875C499.3 462.175 499.6 461.475 500.1 460.975C501.1 459.975 502.8 459.975 503.8 460.975C504.3 461.475 504.6 462.175 504.6 462.875C504.6 463.575 504.3 464.275 503.8 464.775C503.4 465.375 502.7 465.575 502 465.575ZM500.7 461.675C500.4 461.975 500.2 462.475 500.2 462.975C500.2 463.475 500.4 463.875 500.7 464.275C501 464.575 501.5 464.775 502 464.775C502.5 464.775 502.9 464.575 503.3 464.275C504 463.575 504 462.475 503.3 461.775C502.9 461.375 502.5 461.275 502 461.275C501.5 461.175 501.1 461.375 500.7 461.675Z"
                        fill="#0100FF" />
                    <path
                        d="M526.6 416.475C525.9 416.475 525.2 416.175 524.7 415.675C524.2 415.175 523.9 414.475 523.9 413.775C523.9 413.075 524.2 412.375 524.7 411.875C525.7 410.875 527.4 410.875 528.4 411.875C528.9 412.375 529.2 413.075 529.2 413.775C529.2 414.475 528.9 415.175 528.4 415.675C527.9 416.175 527.3 416.475 526.6 416.475ZM525.3 412.575C525 412.875 524.8 413.375 524.8 413.875C524.8 414.375 525 414.775 525.3 415.175C525.6 415.475 526.1 415.675 526.6 415.675C527.1 415.675 527.5 415.475 527.9 415.175C528.6 414.475 528.6 413.375 527.9 412.675C527.5 412.275 527.1 412.175 526.6 412.175C526.1 412.075 525.7 412.175 525.3 412.575Z"
                        fill="#0100FF" />
                    <path
                        d="M519.4 445.575C518.7 445.575 518 445.275 517.5 444.775C517 444.275 516.7 443.575 516.7 442.875C516.7 442.175 517 441.475 517.5 440.975C518.5 439.975 520.2 439.975 521.2 440.975C521.7 441.475 522 442.175 522 442.875C522 443.575 521.7 444.275 521.2 444.775C520.8 445.275 520.1 445.575 519.4 445.575ZM518.1 441.675C517.8 441.975 517.6 442.475 517.6 442.975C517.6 443.475 517.8 443.875 518.1 444.275C518.4 444.575 518.9 444.775 519.4 444.775C519.9 444.775 520.3 444.575 520.7 444.275C521.4 443.575 521.4 442.475 520.7 441.775C520.3 441.375 519.9 441.275 519.4 441.275C518.9 441.175 518.5 441.375 518.1 441.675Z"
                        fill="#0100FF" />
                    <path
                        d="M635.8 428.575C635.1 428.575 634.4 428.275 633.9 427.775C633.4 427.275 633.1 426.575 633.1 425.875C633.1 425.175 633.4 424.475 633.9 423.975C634.9 422.975 636.6 422.975 637.6 423.975C638.1 424.475 638.4 425.175 638.4 425.875C638.4 426.575 638.1 427.275 637.6 427.775C637.1 428.275 636.5 428.575 635.8 428.575ZM634.5 424.675C634.2 424.975 634 425.475 634 425.975C634 426.475 634.2 426.875 634.5 427.275C634.8 427.575 635.3 427.775 635.8 427.775C636.3 427.775 636.7 427.575 637.1 427.275C637.8 426.575 637.8 425.475 637.1 424.775C636.7 424.375 636.3 424.275 635.8 424.275C635.3 424.075 634.9 424.275 634.5 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M635.8 470.075C635.1 470.075 634.4 469.775 633.9 469.275C633.4 468.775 633.1 468.075 633.1 467.375C633.1 466.675 633.4 465.975 633.9 465.475C634.9 464.475 636.6 464.475 637.6 465.475C638.1 465.975 638.4 466.675 638.4 467.375C638.4 468.075 638.1 468.775 637.6 469.275C637.1 469.775 636.5 470.075 635.8 470.075ZM634.5 466.175C634.2 466.475 634 466.975 634 467.475C634 467.975 634.2 468.375 634.5 468.775C634.8 469.075 635.3 469.275 635.8 469.275C636.3 469.275 636.7 469.075 637.1 468.775C637.8 468.075 637.8 466.975 637.1 466.275C636.7 465.875 636.3 465.775 635.8 465.775C635.3 465.575 634.8 465.775 634.5 466.175Z"
                        fill="#0100FF" />
                    <path
                        d="M674.5 428.575C673.8 428.575 673.1 428.275 672.6 427.775C672.1 427.275 671.8 426.575 671.8 425.875C671.8 425.175 672.1 424.475 672.6 423.975C673.6 422.975 675.3 422.975 676.3 423.975C676.8 424.475 677.1 425.175 677.1 425.875C677.1 426.575 676.8 427.275 676.3 427.775C675.9 428.275 675.2 428.575 674.5 428.575ZM673.2 424.675C672.9 424.975 672.7 425.475 672.7 425.975C672.7 426.475 672.9 426.875 673.2 427.275C673.5 427.575 674 427.775 674.5 427.775C675 427.775 675.4 427.575 675.8 427.275C676.5 426.575 676.5 425.475 675.8 424.775C675.4 424.375 675 424.275 674.5 424.275C674.1 424.075 673.6 424.275 673.2 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M670.1 470.075C669.4 470.075 668.7 469.775 668.2 469.275C667.7 468.775 667.4 468.075 667.4 467.375C667.4 466.675 667.7 465.975 668.2 465.475C669.2 464.475 670.9 464.475 671.9 465.475C672.4 465.975 672.7 466.675 672.7 467.375C672.7 468.075 672.4 468.775 671.9 469.275C671.4 469.775 670.8 470.075 670.1 470.075ZM668.8 466.175C668.5 466.475 668.3 466.975 668.3 467.475C668.3 467.975 668.5 468.375 668.8 468.775C669.1 469.075 669.6 469.275 670.1 469.275C670.6 469.275 671 469.075 671.4 468.775C672.1 468.075 672.1 466.975 671.4 466.275C671 465.875 670.6 465.775 670.1 465.775C669.6 465.575 669.2 465.775 668.8 466.175Z"
                        fill="#0100FF" />
                    <path
                        d="M591.5 417.375C590.8 417.375 590.1 417.075 589.6 416.575C589.1 416.075 588.8 415.375 588.8 414.675C588.8 413.975 589.1 413.275 589.6 412.775C590.6 411.775 592.3 411.775 593.3 412.775C593.8 413.275 594.1 413.975 594.1 414.675C594.1 415.375 593.8 416.075 593.3 416.575C592.9 417.075 592.2 417.375 591.5 417.375ZM590.3 413.475C590 413.775 589.8 414.275 589.8 414.775C589.8 415.275 590 415.675 590.3 416.075C590.6 416.375 591.1 416.575 591.6 416.575C592.1 416.575 592.5 416.375 592.9 416.075C593.6 415.375 593.6 414.275 592.9 413.575C592.5 413.175 592.1 413.075 591.6 413.075C591.1 412.975 590.6 413.175 590.3 413.475Z"
                        fill="#0100FF" />
                    <path
                        d="M670.1 406.275C669.4 406.275 668.7 405.975 668.2 405.475C667.7 404.975 667.4 404.275 667.4 403.575C667.4 402.875 667.7 402.175 668.2 401.675C669.2 400.675 670.9 400.675 671.9 401.675C672.4 402.175 672.7 402.875 672.7 403.575C672.7 404.275 672.4 404.975 671.9 405.475C671.4 406.075 670.8 406.275 670.1 406.275ZM668.8 402.375C668.5 402.675 668.3 403.175 668.3 403.675C668.3 404.175 668.5 404.575 668.8 404.975C669.1 405.275 669.6 405.475 670.1 405.475C670.6 405.475 671 405.275 671.4 404.975C672.1 404.275 672.1 403.175 671.4 402.475C671 402.075 670.6 401.975 670.1 401.975C669.6 401.875 669.2 402.075 668.8 402.375Z"
                        fill="#0100FF" />
                    <path
                        d="M604.1 428.575C603.4 428.575 602.7 428.275 602.2 427.775C601.7 427.275 601.4 426.575 601.4 425.875C601.4 425.175 601.7 424.475 602.2 423.975C603.2 422.975 604.9 422.975 605.9 423.975C606.4 424.475 606.7 425.175 606.7 425.875C606.7 426.575 606.4 427.275 605.9 427.775C605.5 428.275 604.8 428.575 604.1 428.575ZM602.8 424.675C602.5 424.975 602.3 425.475 602.3 425.975C602.3 426.475 602.5 426.875 602.8 427.275C603.1 427.575 603.6 427.775 604.1 427.775C604.6 427.775 605 427.575 605.4 427.275C606.1 426.575 606.1 425.475 605.4 424.775C605 424.375 604.6 424.275 604.1 424.275C603.6 424.075 603.2 424.275 602.8 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M610.3 444.775C609.6 444.775 608.9 444.475 608.4 443.975C607.9 443.475 607.6 442.775 607.6 442.075C607.6 441.375 607.9 440.675 608.4 440.175C609.4 439.175 611.1 439.175 612.1 440.175C612.6 440.675 612.9 441.375 612.9 442.075C612.9 442.775 612.6 443.475 612.1 443.975C611.7 444.575 611 444.775 610.3 444.775ZM609.1 440.875C608.8 441.175 608.6 441.675 608.6 442.175C608.6 442.675 608.8 443.075 609.1 443.475C609.4 443.775 609.9 443.975 610.4 443.975C610.9 443.975 611.3 443.775 611.7 443.475C612.4 442.775 612.4 441.675 611.7 440.975C611.3 440.575 610.9 440.475 610.4 440.475C609.9 440.375 609.4 440.575 609.1 440.875Z"
                        fill="#0100FF" />
                    <path
                        d="M597.9 465.575C597.2 465.575 596.5 465.275 596 464.775C595.5 464.275 595.2 463.575 595.2 462.875C595.2 462.175 595.5 461.475 596 460.975C597 459.975 598.7 459.975 599.7 460.975C600.2 461.475 600.5 462.175 600.5 462.875C600.5 463.575 600.2 464.275 599.7 464.775C599.2 465.375 598.6 465.575 597.9 465.575ZM596.6 461.675C596.3 461.975 596.1 462.475 596.1 462.975C596.1 463.475 596.3 463.875 596.6 464.275C596.9 464.575 597.4 464.775 597.9 464.775C598.4 464.775 598.8 464.575 599.2 464.275C599.9 463.575 599.9 462.475 599.2 461.775C598.8 461.375 598.4 461.275 597.9 461.275C597.4 461.175 597 461.375 596.6 461.675Z"
                        fill="#0100FF" />
                    <path
                        d="M695.1 426.975C694.4 426.975 693.7 426.675 693.2 426.175C692.7 425.675 692.4 424.975 692.4 424.275C692.4 423.575 692.7 422.875 693.2 422.375C694.2 421.375 695.9 421.375 696.9 422.375C697.4 422.875 697.7 423.575 697.7 424.275C697.7 424.975 697.4 425.675 696.9 426.175C696.5 426.675 695.8 426.975 695.1 426.975ZM693.9 423.075C693.6 423.375 693.4 423.875 693.4 424.375C693.4 424.875 693.6 425.275 693.9 425.675C694.2 425.975 694.7 426.175 695.2 426.175C695.7 426.175 696.1 425.975 696.5 425.675C697.2 424.975 697.2 423.875 696.5 423.175C696.1 422.775 695.7 422.675 695.2 422.675C694.7 422.575 694.2 422.675 693.9 423.075Z"
                        fill="#0100FF" />
                    <path
                        d="M568.3 428.575C567.6 428.575 566.9 428.275 566.4 427.775C565.9 427.275 565.6 426.575 565.6 425.875C565.6 425.175 565.9 424.475 566.4 423.975C567.4 422.975 569.1 422.975 570.1 423.975C570.6 424.475 570.9 425.175 570.9 425.875C570.9 426.575 570.6 427.275 570.1 427.775C569.6 428.275 569 428.575 568.3 428.575ZM567 424.675C566.7 424.975 566.5 425.475 566.5 425.975C566.5 426.475 566.7 426.875 567 427.275C567.3 427.575 567.8 427.775 568.3 427.775C568.8 427.775 569.2 427.575 569.6 427.275C570.3 426.575 570.3 425.475 569.6 424.775C569.2 424.375 568.8 424.275 568.3 424.275C567.8 424.075 567.4 424.275 567 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M552.3 465.575C551.6 465.575 550.9 465.275 550.4 464.775C549.9 464.275 549.6 463.575 549.6 462.875C549.6 462.175 549.9 461.475 550.4 460.975C551.4 459.975 553.1 459.975 554.1 460.975C554.6 461.475 554.9 462.175 554.9 462.875C554.9 463.575 554.6 464.275 554.1 464.775C553.6 465.375 553 465.575 552.3 465.575ZM551 461.675C550.7 461.975 550.5 462.475 550.5 462.975C550.5 463.475 550.7 463.875 551 464.275C551.3 464.575 551.8 464.775 552.3 464.775C552.8 464.775 553.2 464.575 553.6 464.275C554.3 463.575 554.3 462.475 553.6 461.775C553.2 461.375 552.8 461.275 552.3 461.275C551.8 461.175 551.4 461.375 551 461.675Z"
                        fill="#0100FF" />
                    <path
                        d="M618.5 405.575C617.8 405.575 617.1 405.275 616.6 404.775C616.1 404.275 615.8 403.575 615.8 402.875C615.8 402.175 616.1 401.475 616.6 400.975C617.6 399.975 619.3 399.975 620.3 400.975C620.8 401.475 621.1 402.175 621.1 402.875C621.1 403.575 620.8 404.275 620.3 404.775C619.8 405.275 619.2 405.575 618.5 405.575ZM617.2 401.675C616.9 401.975 616.7 402.475 616.7 402.975C616.7 403.475 616.9 403.875 617.2 404.275C617.5 404.575 618 404.775 618.5 404.775C619 404.775 619.4 404.575 619.8 404.275C620.5 403.575 620.5 402.475 619.8 401.775C619.4 401.375 619 401.275 618.5 401.275C618 401.075 617.6 401.275 617.2 401.675Z"
                        fill="#0100FF" />
                    <path
                        d="M409.2 383.675C408.5 383.675 407.8 383.375 407.3 382.875C406.8 382.375 406.5 381.675 406.5 380.975C406.5 380.275 406.8 379.575 407.3 379.075C408.3 378.075 410 378.075 411 379.075C411.5 379.575 411.8 380.275 411.8 380.975C411.8 381.675 411.5 382.375 411 382.875C410.6 383.375 409.9 383.675 409.2 383.675ZM408 379.775C407.7 380.075 407.5 380.575 407.5 381.075C407.5 381.575 407.7 381.975 408 382.375C408.3 382.675 408.8 382.875 409.3 382.875C409.8 382.875 410.2 382.675 410.6 382.375C411.3 381.675 411.3 380.575 410.6 379.875C410.2 379.475 409.8 379.375 409.3 379.375C408.8 379.175 408.3 379.375 408 379.775Z"
                        fill="#0100FF" />
                    <path
                        d="M452.8 418.275C452.1 418.275 451.4 417.975 450.9 417.475C450.4 416.975 450.1 416.275 450.1 415.575C450.1 414.875 450.4 414.175 450.9 413.675C451.9 412.675 453.6 412.675 454.6 413.675C455.1 414.175 455.4 414.875 455.4 415.575C455.4 416.275 455.1 416.975 454.6 417.475C454.2 417.975 453.5 418.275 452.8 418.275ZM451.5 414.375C451.2 414.675 451 415.175 451 415.675C451 416.175 451.2 416.575 451.5 416.975C451.8 417.275 452.3 417.475 452.8 417.475C453.3 417.475 453.7 417.275 454.1 416.975C454.8 416.275 454.8 415.175 454.1 414.475C453.7 414.075 453.3 413.975 452.8 413.975C452.4 413.875 451.9 413.975 451.5 414.375Z"
                        fill="#0100FF" />
                    <path
                        d="M458.1 436.275C457.4 436.275 456.7 435.975 456.2 435.475C455.7 434.975 455.4 434.275 455.4 433.575C455.4 432.875 455.7 432.175 456.2 431.675C457.2 430.675 458.9 430.675 459.9 431.675C460.4 432.175 460.7 432.875 460.7 433.575C460.7 434.275 460.4 434.975 459.9 435.475C459.4 436.075 458.8 436.275 458.1 436.275ZM456.8 432.375C456.5 432.675 456.3 433.175 456.3 433.675C456.3 434.175 456.5 434.575 456.8 434.975C457.1 435.275 457.6 435.475 458.1 435.475C458.6 435.475 459 435.275 459.4 434.975C460.1 434.275 460.1 433.175 459.4 432.475C459 432.075 458.6 431.975 458.1 431.975C457.6 431.875 457.2 432.075 456.8 432.375Z"
                        fill="#0100FF" />
                    <path
                        d="M397.5 372.675C396.8 372.675 396.1 372.375 395.6 371.875C395.1 371.375 394.8 370.675 394.8 369.975C394.8 369.275 395.1 368.575 395.6 368.075C396.6 367.075 398.3 367.075 399.3 368.075C399.8 368.575 400.1 369.275 400.1 369.975C400.1 370.675 399.8 371.375 399.3 371.875C398.9 372.375 398.2 372.675 397.5 372.675ZM396.3 368.775C396 369.075 395.8 369.575 395.8 370.075C395.8 370.575 396 370.975 396.3 371.375C396.6 371.675 397.1 371.875 397.6 371.875C398.1 371.875 398.5 371.675 398.9 371.375C399.6 370.675 399.6 369.575 398.9 368.875C398.5 368.475 398.1 368.375 397.6 368.375C397.1 368.175 396.6 368.375 396.3 368.775Z"
                        fill="#0100FF" />
                    <path
                        d="M467.9 451.975C467.2 451.975 466.5 451.675 466 451.175C465.5 450.675 465.2 449.975 465.2 449.275C465.2 448.575 465.5 447.875 466 447.375C467 446.375 468.7 446.375 469.7 447.375C470.2 447.875 470.5 448.575 470.5 449.275C470.5 449.975 470.2 450.675 469.7 451.175C469.3 451.675 468.6 451.975 467.9 451.975ZM466.6 448.075C466.3 448.375 466.1 448.875 466.1 449.375C466.1 449.875 466.3 450.275 466.6 450.675C466.9 450.975 467.4 451.175 467.9 451.175C468.4 451.175 468.8 450.975 469.2 450.675C469.9 449.975 469.9 448.875 469.2 448.175C468.8 447.775 468.4 447.675 467.9 447.675C467.4 447.575 467 447.675 466.6 448.075Z"
                        fill="#0100FF" />
                    <path
                        d="M389.7 356.575C389 356.575 388.3 356.275 387.8 355.775C387.3 355.275 387 354.575 387 353.875C387 353.175 387.3 352.475 387.8 351.975C388.8 350.975 390.5 350.975 391.5 351.975C392 352.475 392.3 353.175 392.3 353.875C392.3 354.575 392 355.275 391.5 355.775C391 356.375 390.4 356.575 389.7 356.575ZM388.4 352.675C388.1 352.975 387.9 353.475 387.9 353.975C387.9 354.475 388.1 354.875 388.4 355.275C388.7 355.575 389.2 355.775 389.7 355.775C390.2 355.775 390.6 355.575 391 355.275C391.7 354.575 391.7 353.475 391 352.775C390.6 352.375 390.2 352.275 389.7 352.275C389.2 352.175 388.7 352.375 388.4 352.675Z"
                        fill="#0100FF" />
                    <path
                        d="M1041.5 229.575C1040.5 228.575 1040.5 226.975 1041.5 225.975C1042 225.475 1042.6 225.275 1043.3 225.275C1044 225.275 1044.6 225.575 1045.1 225.975C1046.1 226.975 1046.1 228.575 1045.1 229.575C1044.6 230.075 1044 230.275 1043.3 230.275C1042.6 230.275 1042 230.075 1041.5 229.575ZM1041.9 226.475C1041.2 227.175 1041.2 228.375 1041.9 229.175C1042.6 229.875 1043.8 229.875 1044.6 229.175C1045.3 228.475 1045.3 227.275 1044.6 226.475C1044.2 226.075 1043.7 225.875 1043.3 225.875C1042.8 225.875 1042.3 226.075 1041.9 226.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1049.8 218.475C1048.8 217.475 1048.8 215.875 1049.8 214.875C1050.3 214.375 1050.9 214.175 1051.6 214.175C1052.3 214.175 1052.9 214.475 1053.4 214.875C1054.4 215.875 1054.4 217.475 1053.4 218.475C1052.9 218.975 1052.3 219.175 1051.6 219.175C1050.9 219.275 1050.3 218.975 1049.8 218.475ZM1050.2 215.375C1049.5 216.075 1049.5 217.275 1050.2 218.075C1050.9 218.775 1052.1 218.775 1052.9 218.075C1053.6 217.375 1053.6 216.175 1052.9 215.375C1052.5 214.975 1052 214.775 1051.6 214.775C1051.1 214.775 1050.6 214.975 1050.2 215.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M381.5 299.475C380.6 300.375 379.2 300.375 378.4 299.475C377.5 298.575 377.5 297.175 378.4 296.375C379.3 295.475 380.7 295.475 381.5 296.375C382.4 297.175 382.3 298.575 381.5 299.475Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M409.1 407.475C408.2 408.375 406.8 408.375 406 407.475C405.1 406.575 405.1 405.175 406 404.375C406.9 403.475 408.3 403.475 409.1 404.375C409.9 405.175 409.9 406.575 409.1 407.475Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M396.5 414.975C395.6 415.875 394.2 415.875 393.4 414.975C392.5 414.075 392.5 412.675 393.4 411.875C394.3 410.975 395.7 410.975 396.5 411.875C397.3 412.775 397.3 414.175 396.5 414.975Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M515.6 425.275C514.7 426.175 513.3 426.175 512.5 425.275C511.6 424.375 511.6 422.975 512.5 422.175C513.4 421.275 514.8 421.275 515.6 422.175C516.5 422.975 516.5 424.375 515.6 425.275Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M657.2 417.175C656.3 418.075 654.9 418.075 654.1 417.175C653.2 416.275 653.2 414.875 654.1 414.075C655 413.175 656.4 413.175 657.2 414.075C658.1 414.975 658.1 416.375 657.2 417.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M471.7 417.175C470.8 418.075 469.4 418.075 468.6 417.175C467.7 416.275 467.7 414.875 468.6 414.075C469.5 413.175 470.9 413.175 471.7 414.075C472.6 414.975 472.5 416.375 471.7 417.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M543.5 418.075C542.6 418.975 541.2 418.975 540.4 418.075C539.5 417.175 539.5 415.775 540.4 414.975C541.3 414.075 542.7 414.075 543.5 414.975C544.4 415.775 544.4 417.175 543.5 418.075Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M626.3 415.775C625.4 416.675 624 416.675 623.2 415.775C622.3 414.875 622.3 413.475 623.2 412.675C624.1 411.775 625.5 411.775 626.3 412.675C627.1 413.575 627.1 414.975 626.3 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M654.1 447.175C653.2 448.075 651.8 448.075 651 447.175C650.1 446.275 650.1 444.875 651 444.075C651.9 443.175 653.3 443.175 654.1 444.075C655 444.875 655 446.275 654.1 447.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M587.1 427.475C586.2 428.375 584.8 428.375 584 427.475C583.1 426.575 583.1 425.175 584 424.375C584.9 423.475 586.3 423.475 587.1 424.375C588 425.275 588 426.675 587.1 427.475Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M587.1 449.075C586.2 449.975 584.8 449.975 584 449.075C583.1 448.175 583.1 446.775 584 445.975C584.9 445.075 586.3 445.075 587.1 445.975C588 446.875 588 448.275 587.1 449.075Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M575.5 415.875C574.6 416.775 573.2 416.775 572.4 415.875C571.5 414.975 571.5 413.575 572.4 412.775C573.3 411.875 574.7 411.875 575.5 412.775C576.4 413.675 576.4 415.075 575.5 415.875Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M481 403.075C480.1 403.975 478.7 403.975 477.9 403.075C477 402.175 477 400.775 477.9 399.975C478.8 399.075 480.2 399.075 481 399.975C481.9 400.775 481.9 402.175 481 403.075Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M499.7 404.475C498.8 405.375 497.4 405.375 496.6 404.475C495.7 403.575 495.7 402.175 496.6 401.375C497.5 400.475 498.9 400.475 499.7 401.375C500.5 402.175 500.5 403.575 499.7 404.475Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M609.7 415.775C608.8 416.675 607.4 416.675 606.6 415.775C605.7 414.875 605.7 413.475 606.6 412.675C607.5 411.775 608.9 411.775 609.7 412.675C610.5 413.575 610.5 414.975 609.7 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M678.7 415.375C677.8 416.275 676.4 416.275 675.6 415.375C674.7 414.475 674.7 413.075 675.6 412.275C676.5 411.375 677.9 411.375 678.7 412.275C679.6 413.175 679.6 414.575 678.7 415.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M696.7 441.075C695.8 441.975 694.4 441.975 693.6 441.075C692.7 440.175 692.7 438.775 693.6 437.975C694.5 437.075 695.9 437.075 696.7 437.975C697.6 438.875 697.6 440.275 696.7 441.075Z"
                        fill="#0100FF" />
                    <path
                        d="M732.7 427.475C731.8 428.375 730.4 428.375 729.6 427.475C728.7 426.575 728.7 425.175 729.6 424.375C730.5 423.475 731.9 423.475 732.7 424.375C733.6 425.275 733.6 426.675 732.7 427.475Z"
                        fill="#0100FF" />
                    <path
                        d="M728.3 445.575C727.4 446.475 726 446.475 725.2 445.575C724.3 444.675 724.3 443.275 725.2 442.475C726.1 441.575 727.5 441.575 728.3 442.475C729.2 443.275 729.2 444.675 728.3 445.575Z"
                        fill="#0100FF" />
                    <path
                        d="M719.2 476.175C718.3 477.075 716.9 477.075 716.1 476.175C715.2 475.275 715.2 473.875 716.1 473.075C717 472.175 718.4 472.175 719.2 473.075C720 473.975 720 475.375 719.2 476.175Z"
                        fill="#0100FF" />
                    <path
                        d="M801 404.175C800.1 405.075 798.7 405.075 797.9 404.175C797 403.275 797 401.875 797.9 401.075C798.8 400.175 800.2 400.175 801 401.075C801.8 401.975 801.8 403.375 801 404.175Z"
                        fill="#0100FF" />
                    <path
                        d="M770.3 428.075C769.4 428.975 768 428.975 767.2 428.075C766.3 427.175 766.3 425.775 767.2 424.975C768.1 424.075 769.5 424.075 770.3 424.975C771.2 425.875 771.2 427.275 770.3 428.075Z"
                        fill="#0100FF" />
                    <path
                        d="M772.5 457.475C771.6 458.375 770.2 458.375 769.4 457.475C768.5 456.575 768.5 455.175 769.4 454.375C770.3 453.475 771.7 453.475 772.5 454.375C773.4 455.275 773.4 456.675 772.5 457.475Z"
                        fill="#0100FF" />
                    <path
                        d="M796.5 468.175C795.6 469.075 794.2 469.075 793.4 468.175C792.5 467.275 792.5 465.875 793.4 465.075C794.3 464.175 795.7 464.175 796.5 465.075C797.4 465.875 797.4 467.275 796.5 468.175Z"
                        fill="#0100FF" />
                    <path
                        d="M712.5 404.475C711.6 405.375 710.2 405.375 709.4 404.475C708.5 403.575 708.5 402.175 709.4 401.375C710.3 400.475 711.7 400.475 712.5 401.375C713.4 402.175 713.4 403.575 712.5 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M753 416.375C752.1 417.275 750.7 417.275 749.9 416.375C749 415.475 749 414.075 749.9 413.275C750.8 412.375 752.2 412.375 753 413.275C753.9 414.075 753.9 415.475 753 416.375Z"
                        fill="#0100FF" />
                    <path
                        d="M809.4 414.975C808.5 415.875 807.1 415.875 806.3 414.975C805.4 414.075 805.4 412.675 806.3 411.875C807.2 410.975 808.6 410.975 809.4 411.875C810.2 412.775 810.2 414.175 809.4 414.975Z"
                        fill="#0100FF" />
                    <path
                        d="M762.8 404.875C761.9 405.775 760.5 405.775 759.7 404.875C758.8 403.975 758.8 402.575 759.7 401.775C760.6 400.875 762 400.875 762.8 401.775C763.7 402.675 763.7 404.075 762.8 404.875Z"
                        fill="#0100FF" />
                    <path
                        d="M746.4 404.475C745.5 405.375 744.1 405.375 743.3 404.475C742.4 403.575 742.4 402.175 743.3 401.375C744.2 400.475 745.6 400.475 746.4 401.375C747.3 402.175 747.3 403.575 746.4 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M746.6 428.575C745.9 428.575 745.2 428.275 744.7 427.775C744.2 427.275 743.9 426.575 743.9 425.875C743.9 425.175 744.2 424.475 744.7 423.975C745.7 422.975 747.4 422.975 748.4 423.975C748.9 424.475 749.2 425.175 749.2 425.875C749.2 426.575 748.9 427.275 748.4 427.775C748 428.275 747.3 428.575 746.6 428.575ZM745.4 424.675C745.1 424.975 744.9 425.475 744.9 425.975C744.9 426.475 745.1 426.875 745.4 427.275C745.7 427.575 746.2 427.775 746.7 427.775C747.2 427.775 747.6 427.575 748 427.275C748.7 426.575 748.7 425.475 748 424.775C747.6 424.375 747.2 424.275 746.7 424.275C746.2 424.075 745.7 424.275 745.4 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M737.8 467.375C737.1 467.375 736.4 467.075 735.9 466.575C735.4 466.075 735.1 465.375 735.1 464.675C735.1 463.975 735.4 463.275 735.9 462.775C736.9 461.775 738.6 461.775 739.6 462.775C740.1 463.275 740.4 463.975 740.4 464.675C740.4 465.375 740.1 466.075 739.6 466.575C739.1 467.175 738.5 467.375 737.8 467.375ZM736.5 463.475C736.2 463.775 736 464.275 736 464.775C736 465.275 736.2 465.675 736.5 466.075C736.8 466.375 737.3 466.575 737.8 466.575C738.3 466.575 738.7 466.375 739.1 466.075C739.8 465.375 739.8 464.275 739.1 463.575C738.7 463.175 738.3 463.075 737.8 463.075C737.3 462.975 736.9 463.175 736.5 463.475Z"
                        fill="#0100FF" />
                    <path
                        d="M785.4 428.575C784.7 428.575 784 428.275 783.5 427.775C783 427.275 782.7 426.575 782.7 425.875C782.7 425.175 783 424.475 783.5 423.975C784.5 422.975 786.2 422.975 787.2 423.975C787.7 424.475 788 425.175 788 425.875C788 426.575 787.7 427.275 787.2 427.775C786.7 428.275 786.1 428.575 785.4 428.575ZM784.1 424.675C783.8 424.975 783.6 425.475 783.6 425.975C783.6 426.475 783.8 426.875 784.1 427.275C784.4 427.575 784.9 427.775 785.4 427.775C785.9 427.775 786.3 427.575 786.7 427.275C787.4 426.575 787.4 425.475 786.7 424.775C786.3 424.375 785.9 424.275 785.4 424.275C784.9 424.075 784.5 424.275 784.1 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M797.2 442.175C796.5 442.175 795.8 441.875 795.3 441.375C794.8 440.875 794.5 440.175 794.5 439.475C794.5 438.775 794.8 438.075 795.3 437.575C796.3 436.575 798 436.575 799 437.575C799.5 438.075 799.8 438.775 799.8 439.475C799.8 440.175 799.5 440.875 799 441.375C798.6 441.875 797.9 442.175 797.2 442.175ZM795.9 438.275C795.6 438.575 795.4 439.075 795.4 439.575C795.4 440.075 795.6 440.475 795.9 440.875C796.2 441.175 796.7 441.375 797.2 441.375C797.7 441.375 798.1 441.175 798.5 440.875C799.2 440.175 799.2 439.075 798.5 438.375C798.1 437.975 797.7 437.875 797.2 437.875C796.7 437.775 796.3 437.875 795.9 438.275Z"
                        fill="#0100FF" />
                    <path
                        d="M780.9 406.275C780.2 406.275 779.5 405.975 779 405.475C778.5 404.975 778.2 404.275 778.2 403.575C778.2 402.875 778.5 402.175 779 401.675C780 400.675 781.7 400.675 782.7 401.675C783.2 402.175 783.5 402.875 783.5 403.575C783.5 404.275 783.2 404.975 782.7 405.475C782.3 406.075 781.7 406.275 780.9 406.275C780.9 406.275 781 406.275 780.9 406.275ZM779.7 402.375C779.4 402.675 779.2 403.175 779.2 403.675C779.2 404.175 779.4 404.575 779.7 404.975C780 405.275 780.5 405.475 781 405.475C781.5 405.475 781.9 405.275 782.3 404.975C783 404.275 783 403.175 782.3 402.475C781.9 402.075 781.5 401.975 781 401.975C780.5 401.875 780 402.075 779.7 402.375Z"
                        fill="#0100FF" />
                    <path
                        d="M715 428.575C714.3 428.575 713.6 428.275 713.1 427.775C712.6 427.275 712.3 426.575 712.3 425.875C712.3 425.175 712.6 424.475 713.1 423.975C714.1 422.975 715.8 422.975 716.8 423.975C717.3 424.475 717.6 425.175 717.6 425.875C717.6 426.575 717.3 427.275 716.8 427.775C716.3 428.275 715.7 428.575 715 428.575ZM713.7 424.675C713.4 424.975 713.2 425.475 713.2 425.975C713.2 426.475 713.4 426.875 713.7 427.275C714 427.575 714.5 427.775 715 427.775C715.5 427.775 715.9 427.575 716.3 427.275C717 426.575 717 425.475 716.3 424.775C715.9 424.375 715.5 424.275 715 424.275C714.5 424.075 714.1 424.275 713.7 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M710.9 446.575C710.2 446.575 709.5 446.275 709 445.775C708.5 445.275 708.2 444.575 708.2 443.875C708.2 443.175 708.5 442.475 709 441.975C710 440.975 711.7 440.975 712.7 441.975C713.2 442.475 713.5 443.175 713.5 443.875C713.5 444.575 713.2 445.275 712.7 445.775C712.3 446.375 711.7 446.575 710.9 446.575C710.9 446.575 711 446.575 710.9 446.575ZM709.7 442.675C709.4 442.975 709.2 443.475 709.2 443.975C709.2 444.475 709.4 444.875 709.7 445.275C710 445.575 710.5 445.775 711 445.775C711.5 445.775 711.9 445.575 712.3 445.275C713 444.575 713 443.475 712.3 442.775C711.9 442.375 711.5 442.275 711 442.275C710.5 442.175 710 442.375 709.7 442.675Z"
                        fill="#0100FF" />
                    <path
                        d="M806 426.975C805.3 426.975 804.6 426.675 804.1 426.175C803.6 425.675 803.3 424.975 803.3 424.275C803.3 423.575 803.6 422.875 804.1 422.375C805.1 421.375 806.8 421.375 807.8 422.375C808.3 422.875 808.6 423.575 808.6 424.275C808.6 424.975 808.3 425.675 807.8 426.175C807.4 426.675 806.7 426.975 806 426.975ZM804.7 423.075C804.4 423.375 804.2 423.875 804.2 424.375C804.2 424.875 804.4 425.275 804.7 425.675C805 425.975 805.5 426.175 806 426.175C806.5 426.175 806.9 425.975 807.3 425.675C808 424.975 808 423.875 807.3 423.175C806.9 422.775 806.5 422.675 806 422.675C805.6 422.575 805.1 422.675 804.7 423.075Z"
                        fill="#0100FF" />
                    <path
                        d="M729.3 405.575C728.6 405.575 727.9 405.275 727.4 404.775C726.9 404.275 726.6 403.575 726.6 402.875C726.6 402.175 726.9 401.475 727.4 400.975C728.4 399.975 730.1 399.975 731.1 400.975C731.6 401.475 731.9 402.175 731.9 402.875C731.9 403.575 731.6 404.275 731.1 404.775C730.7 405.275 730.1 405.575 729.3 405.575C729.4 405.575 729.4 405.575 729.3 405.575ZM728.1 401.675C727.8 401.975 727.6 402.475 727.6 402.975C727.6 403.475 727.8 403.875 728.1 404.275C728.4 404.575 728.9 404.775 729.4 404.775C729.9 404.775 730.3 404.575 730.7 404.275C731.4 403.575 731.4 402.475 730.7 401.775C730.3 401.375 729.9 401.275 729.4 401.275C728.9 401.075 728.4 401.275 728.1 401.675Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M768.1 417.175C767.2 418.075 765.8 418.075 765 417.175C764.1 416.275 764.1 414.875 765 414.075C765.9 413.175 767.3 413.175 768.1 414.075C769 414.975 769 416.375 768.1 417.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M778.5 444.675C777.6 445.575 776.2 445.575 775.4 444.675C774.5 443.775 774.5 442.375 775.4 441.575C776.3 440.675 777.7 440.675 778.5 441.575C779.4 442.375 779.4 443.775 778.5 444.675Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M750.8 446.375C749.9 447.275 748.5 447.275 747.7 446.375C746.8 445.475 746.8 444.075 747.7 443.275C748.6 442.375 750 442.375 750.8 443.275C751.7 444.075 751.7 445.475 750.8 446.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M737.1 415.775C736.2 416.675 734.8 416.675 734 415.775C733.1 414.875 733.1 413.475 734 412.675C734.9 411.775 736.3 411.775 737.1 412.675C738 413.575 738 414.975 737.1 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M720.5 415.775C719.6 416.675 718.2 416.675 717.4 415.775C716.5 414.875 716.5 413.475 717.4 412.675C718.3 411.775 719.7 411.775 720.5 412.675C721.4 413.575 721.4 414.975 720.5 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M789.6 415.375C788.7 416.275 787.3 416.275 786.5 415.375C785.6 414.475 785.6 413.075 786.5 412.275C787.4 411.375 788.8 411.375 789.6 412.275C790.4 413.175 790.4 414.575 789.6 415.375Z"
                        fill="#0100FF" />
                    <path
                        d="M843.6 427.475C842.7 428.375 841.3 428.375 840.5 427.475C839.6 426.575 839.6 425.175 840.5 424.375C841.4 423.475 842.8 423.475 843.6 424.375C844.5 425.275 844.5 426.675 843.6 427.475Z"
                        fill="#0100FF" />
                    <path
                        d="M835.8 448.575C834.9 449.475 833.5 449.475 832.7 448.575C831.8 447.675 831.8 446.275 832.7 445.475C833.6 444.575 835 444.575 835.8 445.475C836.7 446.275 836.7 447.775 835.8 448.575Z"
                        fill="#0100FF" />
                    <path
                        d="M911.8 404.175C910.9 405.075 909.5 405.075 908.7 404.175C907.8 403.275 907.8 401.875 908.7 401.075C909.6 400.175 911 400.175 911.8 401.075C912.7 401.975 912.7 403.375 911.8 404.175Z"
                        fill="#0100FF" />
                    <path
                        d="M881.2 428.075C880.3 428.975 878.9 428.975 878.1 428.075C877.2 427.175 877.2 425.775 878.1 424.975C879 424.075 880.4 424.075 881.2 424.975C882.1 425.875 882.1 427.275 881.2 428.075Z"
                        fill="#0100FF" />
                    <path
                        d="M875.9 445.975C875 446.875 873.6 446.875 872.8 445.975C871.9 445.075 871.9 443.675 872.8 442.875C873.7 441.975 875.1 441.975 875.9 442.875C876.7 443.675 876.7 445.075 875.9 445.975Z"
                        fill="#0100FF" />
                    <path
                        d="M853.8 461.975C852.9 462.875 851.5 462.875 850.7 461.975C849.8 461.075 849.8 459.675 850.7 458.875C851.6 457.975 853 457.975 853.8 458.875C854.7 459.675 854.7 461.075 853.8 461.975Z"
                        fill="#0100FF" />
                    <path
                        d="M823.4 404.475C822.5 405.375 821.1 405.375 820.3 404.475C819.4 403.575 819.4 402.175 820.3 401.375C821.2 400.475 822.6 400.475 823.4 401.375C824.3 402.175 824.3 403.575 823.4 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M863.9 416.375C863 417.275 861.6 417.275 860.8 416.375C859.9 415.475 859.9 414.075 860.8 413.275C861.7 412.375 863.1 412.375 863.9 413.275C864.8 414.075 864.8 415.475 863.9 416.375Z"
                        fill="#0100FF" />
                    <path
                        d="M920.2 414.975C919.3 415.875 917.9 415.875 917.1 414.975C916.2 414.075 916.2 412.675 917.1 411.875C918 410.975 919.4 410.975 920.2 411.875C921.1 412.775 921.1 414.175 920.2 414.975Z"
                        fill="#0100FF" />
                    <path
                        d="M907.4 460.175C906.5 461.075 905.1 461.075 904.3 460.175C903.4 459.275 903.4 457.875 904.3 457.075C905.2 456.175 906.6 456.175 907.4 457.075C908.3 457.875 908.3 459.275 907.4 460.175Z"
                        fill="#0100FF" />
                    <path
                        d="M873.7 404.875C872.8 405.775 871.4 405.775 870.6 404.875C869.7 403.975 869.7 402.575 870.6 401.775C871.5 400.875 872.9 400.875 873.7 401.775C874.5 402.675 874.5 404.075 873.7 404.875Z"
                        fill="#0100FF" />
                    <path
                        d="M857.3 404.475C856.4 405.375 855 405.375 854.2 404.475C853.3 403.575 853.3 402.175 854.2 401.375C855.1 400.475 856.5 400.475 857.3 401.375C858.1 402.175 858.1 403.575 857.3 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M857.5 428.575C856.8 428.575 856.1 428.275 855.6 427.775C855.1 427.275 854.8 426.575 854.8 425.875C854.8 425.175 855.1 424.475 855.6 423.975C856.6 422.975 858.3 422.975 859.3 423.975C859.8 424.475 860.1 425.175 860.1 425.875C860.1 426.575 859.8 427.275 859.3 427.775C858.9 428.275 858.2 428.575 857.5 428.575ZM856.2 424.675C855.9 424.975 855.7 425.475 855.7 425.975C855.7 426.475 855.9 426.875 856.2 427.275C856.5 427.575 857 427.775 857.5 427.775C858 427.775 858.4 427.575 858.8 427.275C859.5 426.575 859.5 425.475 858.8 424.775C858.4 424.375 858 424.275 857.5 424.275C857 424.075 856.6 424.275 856.2 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M854.9 446.175C854.2 446.175 853.5 445.875 853 445.375C852.5 444.875 852.2 444.175 852.2 443.475C852.2 442.775 852.5 442.075 853 441.575C854 440.575 855.7 440.575 856.7 441.575C857.2 442.075 857.5 442.775 857.5 443.475C857.5 444.175 857.2 444.875 856.7 445.375C856.2 445.875 855.6 446.175 854.9 446.175ZM853.6 442.275C853.3 442.575 853.1 443.075 853.1 443.575C853.1 444.075 853.3 444.475 853.6 444.875C853.9 445.175 854.4 445.375 854.9 445.375C855.4 445.375 855.8 445.175 856.2 444.875C856.9 444.175 856.9 443.075 856.2 442.375C855.8 441.975 855.4 441.875 854.9 441.875C854.4 441.775 854 441.975 853.6 442.275Z"
                        fill="#0100FF" />
                    <path
                        d="M896.2 428.575C895.5 428.575 894.8 428.275 894.3 427.775C893.8 427.275 893.5 426.575 893.5 425.875C893.5 425.175 893.8 424.475 894.3 423.975C895.3 422.975 897 422.975 898 423.975C898.5 424.475 898.8 425.175 898.8 425.875C898.8 426.575 898.5 427.275 898 427.775C897.6 428.275 896.9 428.575 896.2 428.575ZM895 424.675C894.7 424.975 894.5 425.475 894.5 425.975C894.5 426.475 894.7 426.875 895 427.275C895.3 427.575 895.8 427.775 896.3 427.775C896.8 427.775 897.2 427.575 897.6 427.275C898.3 426.575 898.3 425.475 897.6 424.775C897.2 424.375 896.8 424.275 896.3 424.275C895.8 424.075 895.3 424.275 895 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M896.7 446.175C896 446.175 895.3 445.875 894.8 445.375C894.3 444.875 894 444.175 894 443.475C894 442.775 894.3 442.075 894.8 441.575C895.8 440.575 897.5 440.575 898.5 441.575C899 442.075 899.3 442.775 899.3 443.475C899.3 444.175 899 444.875 898.5 445.375C898 445.875 897.4 446.175 896.7 446.175ZM895.4 442.275C895.1 442.575 894.9 443.075 894.9 443.575C894.9 444.075 895.1 444.475 895.4 444.875C895.7 445.175 896.2 445.375 896.7 445.375C897.2 445.375 897.6 445.175 898 444.875C898.7 444.175 898.7 443.075 898 442.375C897.6 441.975 897.2 441.875 896.7 441.875C896.2 441.775 895.7 441.975 895.4 442.275Z"
                        fill="#0100FF" />
                    <path
                        d="M877.4 462.975C876.7 462.975 876 462.675 875.5 462.175C875 461.675 874.7 460.975 874.7 460.275C874.7 459.575 875 458.875 875.5 458.375C876.5 457.375 878.2 457.375 879.2 458.375C879.7 458.875 880 459.575 880 460.275C880 460.975 879.7 461.675 879.2 462.175C878.8 462.675 878.1 462.975 877.4 462.975ZM876.2 459.075C875.9 459.375 875.7 459.875 875.7 460.375C875.7 460.875 875.9 461.275 876.2 461.675C876.5 461.975 877 462.175 877.5 462.175C878 462.175 878.4 461.975 878.8 461.675C879.5 460.975 879.5 459.875 878.8 459.175C878.4 458.775 878 458.675 877.5 458.675C877 458.575 876.5 458.775 876.2 459.075Z"
                        fill="#0100FF" />
                    <path
                        d="M891.8 406.275C891.1 406.275 890.4 405.975 889.9 405.475C889.4 404.975 889.1 404.275 889.1 403.575C889.1 402.875 889.4 402.175 889.9 401.675C890.9 400.675 892.6 400.675 893.6 401.675C894.1 402.175 894.4 402.875 894.4 403.575C894.4 404.275 894.1 404.975 893.6 405.475C893.2 406.075 892.5 406.275 891.8 406.275ZM890.6 402.375C890.3 402.675 890.1 403.175 890.1 403.675C890.1 404.175 890.3 404.575 890.6 404.975C890.9 405.275 891.4 405.475 891.9 405.475C892.4 405.475 892.8 405.275 893.2 404.975C893.9 404.275 893.9 403.175 893.2 402.475C892.8 402.075 892.4 401.975 891.9 401.975C891.4 401.875 890.9 402.075 890.6 402.375Z"
                        fill="#0100FF" />
                    <path
                        d="M825.8 428.575C825.1 428.575 824.4 428.275 823.9 427.775C823.4 427.275 823.1 426.575 823.1 425.875C823.1 425.175 823.4 424.475 823.9 423.975C824.9 422.975 826.6 422.975 827.6 423.975C828.1 424.475 828.4 425.175 828.4 425.875C828.4 426.575 828.1 427.275 827.6 427.775C827.2 428.275 826.5 428.575 825.8 428.575ZM824.6 424.675C824.3 424.975 824.1 425.475 824.1 425.975C824.1 426.475 824.3 426.875 824.6 427.275C824.9 427.575 825.4 427.775 825.9 427.775C826.4 427.775 826.8 427.575 827.2 427.275C827.9 426.575 827.9 425.475 827.2 424.775C826.8 424.375 826.4 424.275 825.9 424.275C825.4 424.075 824.9 424.275 824.6 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M817 444.375C816.3 444.375 815.6 444.075 815.1 443.575C814.6 443.075 814.3 442.375 814.3 441.675C814.3 440.975 814.6 440.275 815.1 439.775C816.1 438.775 817.8 438.775 818.8 439.775C819.3 440.275 819.6 440.975 819.6 441.675C819.6 442.375 819.3 443.075 818.8 443.575C818.3 444.075 817.7 444.375 817 444.375ZM815.7 440.475C815.4 440.775 815.2 441.275 815.2 441.775C815.2 442.275 815.4 442.675 815.7 443.075C816 443.375 816.5 443.575 817 443.575C817.5 443.575 817.9 443.375 818.3 443.075C819 442.375 819 441.275 818.3 440.575C817.9 440.175 817.5 440.075 817 440.075C816.5 439.975 816.1 440.175 815.7 440.475Z"
                        fill="#0100FF" />
                    <path
                        d="M916.9 426.975C916.2 426.975 915.5 426.675 915 426.175C914.5 425.675 914.2 424.975 914.2 424.275C914.2 423.575 914.5 422.875 915 422.375C916 421.375 917.7 421.375 918.7 422.375C919.2 422.875 919.5 423.575 919.5 424.275C919.5 424.975 919.2 425.675 918.7 426.175C918.2 426.675 917.6 426.975 916.9 426.975ZM915.6 423.075C915.3 423.375 915.1 423.875 915.1 424.375C915.1 424.875 915.3 425.275 915.6 425.675C915.9 425.975 916.4 426.175 916.9 426.175C917.4 426.175 917.8 425.975 918.2 425.675C918.9 424.975 918.9 423.875 918.2 423.175C917.8 422.775 917.4 422.675 916.9 422.675C916.4 422.575 916 422.675 915.6 423.075Z"
                        fill="#0100FF" />
                    <path
                        d="M840.2 405.575C839.5 405.575 838.8 405.275 838.3 404.775C837.8 404.275 837.5 403.575 837.5 402.875C837.5 402.175 837.8 401.475 838.3 400.975C839.3 399.975 841 399.975 842 400.975C842.5 401.475 842.8 402.175 842.8 402.875C842.8 403.575 842.5 404.275 842 404.775C841.6 405.275 840.9 405.575 840.2 405.575ZM839 401.675C838.7 401.975 838.5 402.475 838.5 402.975C838.5 403.475 838.7 403.875 839 404.275C839.3 404.575 839.8 404.775 840.3 404.775C840.8 404.775 841.2 404.575 841.6 404.275C842.3 403.575 842.3 402.475 841.6 401.775C841.2 401.375 840.8 401.275 840.3 401.275C839.8 401.075 839.3 401.275 839 401.675Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M879 417.175C878.1 418.075 876.7 418.075 875.9 417.175C875 416.275 875 414.875 875.9 414.075C876.8 413.175 878.2 413.175 879 414.075C879.9 414.975 879.9 416.375 879 417.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M848 415.775C847.1 416.675 845.7 416.675 844.9 415.775C844 414.875 844 413.475 844.9 412.675C845.8 411.775 847.2 411.775 848 412.675C848.9 413.575 848.9 414.975 848 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M833.6 465.975C832.7 466.875 831.3 466.875 830.5 465.975C829.6 465.075 829.6 463.675 830.5 462.875C831.4 461.975 832.8 461.975 833.6 462.875C834.5 463.675 834.5 465.075 833.6 465.975Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M831.4 415.775C830.5 416.675 829.1 416.675 828.3 415.775C827.4 414.875 827.4 413.475 828.3 412.675C829.2 411.775 830.6 411.775 831.4 412.675C832.3 413.575 832.3 414.975 831.4 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M811.6 461.975C810.7 462.875 809.3 462.875 808.5 461.975C807.6 461.075 807.6 459.675 808.5 458.875C809.4 457.975 810.8 457.975 811.6 458.875C812.5 459.675 812.5 461.075 811.6 461.975Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M900.4 415.375C899.5 416.275 898.1 416.275 897.3 415.375C896.4 414.475 896.4 413.075 897.3 412.275C898.2 411.375 899.6 411.375 900.4 412.275C901.3 413.175 901.3 414.575 900.4 415.375Z"
                        fill="#0100FF" />
                    <path
                        d="M954.5 427.475C953.6 428.375 952.2 428.375 951.4 427.475C950.5 426.575 950.5 425.175 951.4 424.375C952.3 423.475 953.7 423.475 954.5 424.375C955.3 425.275 955.3 426.675 954.5 427.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1022.7 404.175C1021.8 405.075 1020.4 405.075 1019.6 404.175C1018.7 403.275 1018.7 401.875 1019.6 401.075C1020.5 400.175 1021.9 400.175 1022.7 401.075C1023.6 401.975 1023.6 403.375 1022.7 404.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1028.9 390.675C1028 391.575 1026.6 391.575 1025.8 390.675C1024.9 389.775 1024.9 388.375 1025.8 387.575C1026.7 386.675 1028.1 386.675 1028.9 387.575C1029.8 388.475 1029.8 389.875 1028.9 390.675Z"
                        fill="#0100FF" />
                    <path
                        d="M992.1 428.075C991.2 428.975 989.8 428.975 989 428.075C988.1 427.175 988.1 425.775 989 424.975C989.9 424.075 991.3 424.075 992.1 424.975C992.9 425.875 992.9 427.275 992.1 428.075Z"
                        fill="#0100FF" />
                    <path
                        d="M979.2 445.575C978.3 446.475 976.9 446.475 976.1 445.575C975.2 444.675 975.2 443.275 976.1 442.475C977 441.575 978.4 441.575 979.2 442.475C980.1 443.275 980.1 444.675 979.2 445.575Z"
                        fill="#0100FF" />
                    <path
                        d="M934.3 404.475C933.4 405.375 932 405.375 931.2 404.475C930.3 403.575 930.3 402.175 931.2 401.375C932.1 400.475 933.5 400.475 934.3 401.375C935.1 402.175 935.1 403.575 934.3 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M974.8 416.375C973.9 417.275 972.5 417.275 971.7 416.375C970.8 415.475 970.8 414.075 971.7 413.275C972.6 412.375 974 412.375 974.8 413.275C975.6 414.075 975.6 415.475 974.8 416.375Z"
                        fill="#0100FF" />
                    <path
                        d="M950 445.175C949.1 446.075 947.7 446.075 946.9 445.175C946 444.275 946 442.875 946.9 442.075C947.8 441.175 949.2 441.175 950 442.075C950.9 442.875 950.9 444.275 950 445.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1031.1 414.975C1030.2 415.875 1028.8 415.875 1028 414.975C1027.1 414.075 1027.1 412.675 1028 411.875C1028.9 410.975 1030.3 410.975 1031.1 411.875C1032 412.775 1032 414.175 1031.1 414.975Z"
                        fill="#0100FF" />
                    <path
                        d="M1037.3 428.075C1036.4 428.975 1035 428.975 1034.2 428.075C1033.3 427.175 1033.3 425.775 1034.2 424.975C1035.1 424.075 1036.5 424.075 1037.3 424.975C1038.2 425.875 1038.2 427.275 1037.3 428.075Z"
                        fill="#0100FF" />
                    <path
                        d="M1037.3 450.775C1036.4 451.675 1035 451.675 1034.2 450.775C1033.3 449.875 1033.3 448.475 1034.2 447.675C1035.1 446.775 1036.5 446.775 1037.3 447.675C1038.2 448.575 1038.2 449.975 1037.3 450.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1051.4 405.275C1050.5 406.175 1049.1 406.175 1048.3 405.275C1047.4 404.375 1047.4 402.975 1048.3 402.175C1049.2 401.275 1050.6 401.275 1051.4 402.175C1052.3 402.975 1052.3 404.375 1051.4 405.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1053.6 425.275C1052.7 426.175 1051.3 426.175 1050.5 425.275C1049.6 424.375 1049.6 422.975 1050.5 422.175C1051.4 421.275 1052.8 421.275 1053.6 422.175C1054.5 422.975 1054.5 424.375 1053.6 425.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1065.8 407.475C1064.9 408.375 1063.5 408.375 1062.7 407.475C1061.8 406.575 1061.8 405.175 1062.7 404.375C1063.6 403.475 1065 403.475 1065.8 404.375C1066.7 405.175 1066.7 406.575 1065.8 407.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1069.3 424.875C1068.4 425.775 1067 425.775 1066.2 424.875C1065.3 423.975 1065.3 422.575 1066.2 421.775C1067.1 420.875 1068.5 420.875 1069.3 421.775C1070.2 422.575 1070.2 423.975 1069.3 424.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1085.5 432.575C1084.6 433.475 1083.2 433.475 1082.4 432.575C1081.5 431.675 1081.5 430.275 1082.4 429.475C1083.3 428.575 1084.7 428.575 1085.5 429.475C1086.4 430.275 1086.4 431.675 1085.5 432.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1057.5 385.575C1056.6 386.475 1055.2 386.475 1054.4 385.575C1053.5 384.675 1053.5 383.275 1054.4 382.475C1055.3 381.575 1056.7 381.575 1057.5 382.475C1058.4 383.275 1058.4 384.675 1057.5 385.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1063.3 374.475C1062.4 375.375 1061 375.375 1060.2 374.475C1059.3 373.575 1059.3 372.175 1060.2 371.375C1061.1 370.475 1062.5 370.475 1063.3 371.375C1064.2 372.275 1064.2 373.675 1063.3 374.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1037.3 401.875C1036.4 402.775 1035 402.775 1034.2 401.875C1033.3 400.975 1033.3 399.575 1034.2 398.775C1035.1 397.875 1036.5 397.875 1037.3 398.775C1038.2 399.575 1038.2 400.975 1037.3 401.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1059.4 450.775C1058.5 451.675 1057.1 451.675 1056.3 450.775C1055.4 449.875 1055.4 448.475 1056.3 447.675C1057.2 446.775 1058.6 446.775 1059.4 447.675C1060.3 448.575 1060.3 449.975 1059.4 450.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1047 392.875C1046.1 393.775 1044.7 393.775 1043.9 392.875C1043 391.975 1043 390.575 1043.9 389.775C1044.8 388.875 1046.2 388.875 1047 389.775C1047.8 390.675 1047.8 392.075 1047 392.875Z"
                        fill="#0100FF" />
                    <path
                        d="M1062.2 393.775C1061.3 394.675 1059.9 394.675 1059.1 393.775C1058.2 392.875 1058.2 391.475 1059.1 390.675C1060 389.775 1061.4 389.775 1062.2 390.675C1063.1 391.475 1063.1 392.875 1062.2 393.775Z"
                        fill="#0100FF" />
                    <path
                        d="M1110.1 409.675C1109.2 410.575 1107.8 410.575 1107 409.675C1106.1 408.775 1106.1 407.375 1107 406.575C1107.9 405.675 1109.3 405.675 1110.1 406.575C1110.9 407.475 1110.9 408.875 1110.1 409.675Z"
                        fill="#0100FF" />
                    <path
                        d="M984.5 404.875C983.6 405.775 982.2 405.775 981.4 404.875C980.5 403.975 980.5 402.575 981.4 401.775C982.3 400.875 983.7 400.875 984.5 401.775C985.4 402.675 985.4 404.075 984.5 404.875Z"
                        fill="#0100FF" />
                    <path
                        d="M968.1 404.475C967.2 405.375 965.8 405.375 965 404.475C964.1 403.575 964.1 402.175 965 401.375C965.9 400.475 967.3 400.475 968.1 401.375C969 402.175 969 403.575 968.1 404.475Z"
                        fill="#0100FF" />
                    <path
                        d="M968.4 428.575C967.7 428.575 967 428.275 966.5 427.775C966 427.275 965.7 426.575 965.7 425.875C965.7 425.175 966 424.475 966.5 423.975C967.5 422.975 969.2 422.975 970.2 423.975C970.7 424.475 971 425.175 971 425.875C971 426.575 970.7 427.275 970.2 427.775C969.7 428.275 969.1 428.575 968.4 428.575ZM967.1 424.675C966.8 424.975 966.6 425.475 966.6 425.975C966.6 426.475 966.8 426.875 967.1 427.275C967.4 427.575 967.9 427.775 968.4 427.775C968.9 427.775 969.3 427.575 969.7 427.275C970.4 426.575 970.4 425.475 969.7 424.775C969.3 424.375 968.9 424.275 968.4 424.275C967.9 424.075 967.5 424.275 967.1 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M957.3 463.375C956.6 463.375 955.9 463.075 955.4 462.575C954.9 462.075 954.6 461.375 954.6 460.675C954.6 459.975 954.9 459.275 955.4 458.775C956.4 457.775 958.1 457.775 959.1 458.775C959.6 459.275 959.9 459.975 959.9 460.675C959.9 461.375 959.6 462.075 959.1 462.575C958.7 463.175 958 463.375 957.3 463.375ZM956 459.475C955.7 459.775 955.5 460.275 955.5 460.775C955.5 461.275 955.7 461.675 956 462.075C956.3 462.375 956.8 462.575 957.3 462.575C957.8 462.575 958.2 462.375 958.6 462.075C959.3 461.375 959.3 460.275 958.6 459.575C958.2 459.175 957.8 459.075 957.3 459.075C956.9 458.975 956.4 459.175 956 459.475Z"
                        fill="#0100FF" />
                    <path
                        d="M930.5 458.975C929.8 458.975 929.1 458.675 928.6 458.175C928.1 457.675 927.8 456.975 927.8 456.275C927.8 455.575 928.1 454.875 928.6 454.375C929.6 453.375 931.3 453.375 932.3 454.375C932.8 454.875 933.1 455.575 933.1 456.275C933.1 456.975 932.8 457.675 932.3 458.175C931.8 458.675 931.2 458.975 930.5 458.975ZM929.2 455.075C928.9 455.375 928.7 455.875 928.7 456.375C928.7 456.875 928.9 457.275 929.2 457.675C929.5 457.975 930 458.175 930.5 458.175C931 458.175 931.4 457.975 931.8 457.675C932.5 456.975 932.5 455.875 931.8 455.175C931.4 454.775 931 454.675 930.5 454.675C930 454.575 929.6 454.675 929.2 455.075Z"
                        fill="#0100FF" />
                    <path
                        d="M1015.9 396.575C1015.2 396.575 1014.5 396.275 1014 395.775C1013.5 395.275 1013.2 394.575 1013.2 393.875C1013.2 393.175 1013.5 392.475 1014 391.975C1015 390.975 1016.7 390.975 1017.7 391.975C1018.2 392.475 1018.5 393.175 1018.5 393.875C1018.5 394.575 1018.2 395.275 1017.7 395.775C1017.2 396.275 1016.6 396.575 1015.9 396.575ZM1014.6 392.675C1014.3 392.975 1014.1 393.475 1014.1 393.975C1014.1 394.475 1014.3 394.875 1014.6 395.275C1014.9 395.575 1015.4 395.775 1015.9 395.775C1016.4 395.775 1016.8 395.575 1017.2 395.275C1017.9 394.575 1017.9 393.475 1017.2 392.775C1016.8 392.375 1016.4 392.275 1015.9 392.275C1015.4 392.175 1015 392.375 1014.6 392.675Z"
                        fill="#0100FF" />
                    <path
                        d="M1050.2 377.375C1049.5 377.375 1048.8 377.075 1048.3 376.575C1047.8 376.075 1047.5 375.375 1047.5 374.675C1047.5 373.975 1047.8 373.275 1048.3 372.775C1049.3 371.775 1051 371.775 1052 372.775C1052.5 373.275 1052.8 373.975 1052.8 374.675C1052.8 375.375 1052.5 376.075 1052 376.575C1051.6 377.075 1050.9 377.375 1050.2 377.375ZM1049 373.475C1048.7 373.775 1048.5 374.275 1048.5 374.775C1048.5 375.275 1048.7 375.675 1049 376.075C1049.3 376.375 1049.8 376.575 1050.3 376.575C1050.8 376.575 1051.2 376.375 1051.6 376.075C1052.3 375.375 1052.3 374.275 1051.6 373.575C1051.2 373.175 1050.8 373.075 1050.3 373.075C1049.8 372.975 1049.3 373.075 1049 373.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1040.6 382.575C1039.9 382.575 1039.2 382.275 1038.7 381.775C1038.2 381.275 1037.9 380.575 1037.9 379.875C1037.9 379.175 1038.2 378.475 1038.7 377.975C1039.7 376.975 1041.4 376.975 1042.4 377.975C1042.9 378.475 1043.2 379.175 1043.2 379.875C1043.2 380.575 1042.9 381.275 1042.4 381.775C1042 382.375 1041.3 382.575 1040.6 382.575ZM1039.4 378.675C1039.1 378.975 1038.9 379.475 1038.9 379.975C1038.9 380.475 1039.1 380.875 1039.4 381.275C1039.7 381.575 1040.2 381.775 1040.7 381.775C1041.2 381.775 1041.6 381.575 1042 381.275C1042.7 380.575 1042.7 379.475 1042 378.775C1041.6 378.375 1041.2 378.275 1040.7 378.275C1040.2 378.175 1039.7 378.375 1039.4 378.675Z"
                        fill="#0100FF" />
                    <path
                        d="M1000.9 401.875C1000.2 401.875 999.5 401.575 999 401.075C998.5 400.575 998.2 399.875 998.2 399.175C998.2 398.475 998.5 397.775 999 397.275C1000 396.275 1001.7 396.275 1002.7 397.275C1003.2 397.775 1003.5 398.475 1003.5 399.175C1003.5 399.875 1003.2 400.575 1002.7 401.075C1002.2 401.575 1001.6 401.875 1000.9 401.875ZM999.6 397.975C999.3 398.275 999.1 398.775 999.1 399.275C999.1 399.775 999.3 400.175 999.6 400.575C999.9 400.875 1000.4 401.075 1000.9 401.075C1001.4 401.075 1001.8 400.875 1002.2 400.575C1002.9 399.875 1002.9 398.775 1002.2 398.075C1001.8 397.675 1001.4 397.575 1000.9 397.575C1000.4 397.375 1000 397.575 999.6 397.975Z"
                        fill="#0100FF" />
                    <path
                        d="M995.3 410.775C994.6 410.775 993.9 410.475 993.4 409.975C992.9 409.475 992.6 408.775 992.6 408.075C992.6 407.375 992.9 406.675 993.4 406.175C994.4 405.175 996.1 405.175 997.1 406.175C997.6 406.675 997.9 407.375 997.9 408.075C997.9 408.775 997.6 409.475 997.1 409.975C996.7 410.475 996 410.775 995.3 410.775ZM994.1 406.875C993.8 407.175 993.6 407.675 993.6 408.175C993.6 408.675 993.8 409.075 994.1 409.475C994.4 409.775 994.9 409.975 995.4 409.975C995.9 409.975 996.3 409.775 996.7 409.475C997.4 408.775 997.4 407.675 996.7 406.975C996.3 406.575 995.9 406.475 995.4 406.475C994.9 406.275 994.4 406.475 994.1 406.875Z"
                        fill="#0100FF" />
                    <path
                        d="M936.7 428.575C936 428.575 935.3 428.275 934.8 427.775C934.3 427.275 934 426.575 934 425.875C934 425.175 934.3 424.475 934.8 423.975C935.8 422.975 937.5 422.975 938.5 423.975C939 424.475 939.3 425.175 939.3 425.875C939.3 426.575 939 427.275 938.5 427.775C938.1 428.275 937.4 428.575 936.7 428.575ZM935.4 424.675C935.1 424.975 934.9 425.475 934.9 425.975C934.9 426.475 935.1 426.875 935.4 427.275C935.7 427.575 936.2 427.775 936.7 427.775C937.2 427.775 937.6 427.575 938 427.275C938.7 426.575 938.7 425.475 938 424.775C937.6 424.375 937.2 424.275 936.7 424.275C936.2 424.075 935.8 424.275 935.4 424.675Z"
                        fill="#0100FF" />
                    <path
                        d="M1017.7 420.475C1017 420.475 1016.3 420.175 1015.8 419.675C1015.3 419.175 1015 418.475 1015 417.775C1015 417.075 1015.3 416.375 1015.8 415.875C1016.8 414.875 1018.5 414.875 1019.5 415.875C1020 416.375 1020.3 417.075 1020.3 417.775C1020.3 418.475 1020 419.175 1019.5 419.675C1019 420.175 1018.4 420.475 1017.7 420.475ZM1016.4 416.575C1016.1 416.875 1015.9 417.375 1015.9 417.875C1015.9 418.375 1016.1 418.775 1016.4 419.175C1016.7 419.475 1017.2 419.675 1017.7 419.675C1018.2 419.675 1018.6 419.475 1019 419.175C1019.7 418.475 1019.7 417.375 1019 416.675C1018.6 416.275 1018.2 416.175 1017.7 416.175C1017.2 416.075 1016.8 416.175 1016.4 416.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1017.7 441.775C1017 441.775 1016.3 441.475 1015.8 440.975C1015.3 440.475 1015 439.775 1015 439.075C1015 438.375 1015.3 437.675 1015.8 437.175C1016.8 436.175 1018.5 436.175 1019.5 437.175C1020 437.675 1020.3 438.375 1020.3 439.075C1020.3 439.775 1020 440.475 1019.5 440.975C1019 441.475 1018.4 441.775 1017.7 441.775ZM1016.4 437.875C1016.1 438.175 1015.9 438.675 1015.9 439.175C1015.9 439.675 1016.1 440.075 1016.4 440.475C1016.7 440.775 1017.2 440.975 1017.7 440.975C1018.2 440.975 1018.6 440.775 1019 440.475C1019.7 439.775 1019.7 438.675 1019 437.975C1018.6 437.575 1018.2 437.475 1017.7 437.475C1017.2 437.375 1016.8 437.475 1016.4 437.875Z"
                        fill="#0100FF" />
                    <path
                        d="M951.1 405.575C950.4 405.575 949.7 405.275 949.2 404.775C948.7 404.275 948.4 403.575 948.4 402.875C948.4 402.175 948.7 401.475 949.2 400.975C950.2 399.975 951.9 399.975 952.9 400.975C953.4 401.475 953.7 402.175 953.7 402.875C953.7 403.575 953.4 404.275 952.9 404.775C952.5 405.275 951.8 405.575 951.1 405.575ZM949.8 401.675C949.5 401.975 949.3 402.475 949.3 402.975C949.3 403.475 949.5 403.875 949.8 404.275C950.1 404.575 950.6 404.775 951.1 404.775C951.6 404.775 952 404.575 952.4 404.275C953.1 403.575 953.1 402.475 952.4 401.775C952 401.375 951.6 401.275 951.1 401.275C950.6 401.075 950.2 401.275 949.8 401.675Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M989.9 417.175C989 418.075 987.6 418.075 986.8 417.175C985.9 416.275 985.9 414.875 986.8 414.075C987.7 413.175 989.1 413.175 989.9 414.075C990.7 414.975 990.7 416.375 989.9 417.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M984.5 463.775C983.6 464.675 982.2 464.675 981.4 463.775C980.5 462.875 980.5 461.475 981.4 460.675C982.3 459.775 983.7 459.775 984.5 460.675C985.4 461.475 985.4 462.875 984.5 463.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M958.9 415.775C958 416.675 956.6 416.675 955.8 415.775C954.9 414.875 954.9 413.475 955.8 412.675C956.7 411.775 958.1 411.775 958.9 412.675C959.7 413.575 959.7 414.975 958.9 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M921.1 443.375C920.2 444.275 918.8 444.275 918 443.375C917.1 442.475 917.1 441.075 918 440.275C918.9 439.375 920.3 439.375 921.1 440.275C921.9 441.075 921.9 442.475 921.1 443.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M942.3 415.775C941.4 416.675 940 416.675 939.2 415.775C938.3 414.875 938.3 413.475 939.2 412.675C940.1 411.775 941.5 411.775 942.3 412.675C943.1 413.575 943.1 414.975 942.3 415.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1011.3 409.675C1010.4 410.575 1009 410.575 1008.2 409.675C1007.3 408.775 1007.3 407.375 1008.2 406.575C1009.1 405.675 1010.5 405.675 1011.3 406.575C1012.2 407.475 1012.2 408.875 1011.3 409.675Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1005.1 417.575C1004.2 418.475 1002.8 418.475 1002 417.575C1001.1 416.675 1001.1 415.275 1002 414.475C1002.9 413.575 1004.3 413.575 1005.1 414.475C1006 415.375 1005.9 416.775 1005.1 417.575Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1002 462.375C1001.1 463.275 999.7 463.275 998.9 462.375C998 461.475 998 460.075 998.9 459.275C999.8 458.375 1001.2 458.375 1002 459.275C1002.9 460.075 1002.9 461.475 1002 462.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M999.8 441.075C998.9 441.975 997.5 441.975 996.7 441.075C995.8 440.175 995.8 438.775 996.7 437.975C997.6 437.075 999 437.075 999.8 437.975C1000.7 438.875 1000.7 440.275 999.8 441.075Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1073.7 379.775C1072.8 380.675 1071.4 380.675 1070.6 379.775C1069.7 378.875 1069.7 377.475 1070.6 376.675C1071.5 375.775 1072.9 375.775 1073.7 376.675C1074.6 377.475 1074.6 378.875 1073.7 379.775Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M556 404.475C555.1 405.375 553.7 405.375 552.9 404.475C552 403.575 552 402.175 552.9 401.375C553.8 400.475 555.2 400.475 556 401.375C556.9 402.175 556.9 403.575 556 404.475Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M551.6 428.075C550.7 428.975 549.3 428.975 548.5 428.075C547.6 427.175 547.6 425.775 548.5 424.975C549.4 424.075 550.8 424.075 551.6 424.975C552.5 425.875 552.5 427.275 551.6 428.075Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M560.5 441.575C559.6 442.475 558.2 442.475 557.4 441.575C556.5 440.675 556.5 439.275 557.4 438.475C558.3 437.575 559.7 437.575 560.5 438.475C561.3 439.275 561.3 440.675 560.5 441.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1011.1 236.075C1010.4 236.075 1009.8 235.775 1009.3 235.375C1008.3 234.375 1008.3 232.775 1009.3 231.775C1010.3 230.775 1011.9 230.775 1012.9 231.775C1013.9 232.775 1013.9 234.375 1012.9 235.375C1012.4 235.875 1011.8 236.075 1011.1 236.075ZM1009.8 232.175C1009.1 232.875 1009.1 234.075 1009.8 234.875C1010.5 235.575 1011.7 235.575 1012.5 234.875C1013.2 234.175 1013.2 232.975 1012.5 232.175C1012.1 231.775 1011.7 231.575 1011.2 231.575C1010.6 231.675 1010.1 231.875 1009.8 232.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1041.5 244.875C1040.5 243.875 1040.5 242.275 1041.5 241.275C1042.5 240.275 1044.1 240.275 1045.1 241.275C1046.1 242.275 1046.1 243.875 1045.1 244.875C1044.6 245.375 1044 245.575 1043.3 245.575C1042.6 245.575 1042 245.375 1041.5 244.875ZM1044.6 244.475C1045 244.075 1045.2 243.675 1045.2 243.175C1045.2 242.675 1045 242.175 1044.6 241.875C1043.9 241.175 1042.7 241.175 1041.9 241.875C1041.2 242.575 1041.2 243.775 1041.9 244.575C1042.6 245.175 1043.9 245.175 1044.6 244.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1014.6 223.075C1013.7 223.975 1012.3 223.975 1011.5 223.075C1010.6 222.175 1010.6 220.775 1011.5 219.975C1012.4 219.075 1013.8 219.075 1014.6 219.975C1015.4 220.775 1015.4 222.175 1014.6 223.075Z"
                        fill="#0100FF" />
                    <path
                        d="M594.8 135.175C593.9 136.075 592.5 136.075 591.7 135.175C590.8 134.275 590.8 132.875 591.7 132.075C592.6 131.175 594 131.175 594.8 132.075C595.7 132.975 595.7 134.375 594.8 135.175Z"
                        fill="#0100FF" />
                    <path
                        d="M498.6 192.175C497.7 193.075 496.3 193.075 495.5 192.175C494.6 191.275 494.6 189.875 495.5 189.075C496.4 188.175 497.8 188.175 498.6 189.075C499.5 189.875 499.5 191.275 498.6 192.175Z"
                        fill="#0100FF" />
                    <path
                        d="M472.8 175.475C472.1 175.475 471.5 175.175 471 174.775C470.5 174.275 470.3 173.675 470.3 172.975C470.3 172.275 470.6 171.675 471 171.175C471.5 170.675 472.1 170.475 472.8 170.475C473.5 170.475 474.1 170.775 474.6 171.175C475.6 172.175 475.6 173.775 474.6 174.775C474.1 175.275 473.5 175.475 472.8 175.475ZM471.5 171.675C471.1 172.075 470.9 172.475 470.9 172.975C470.9 173.475 471.1 173.975 471.5 174.275C471.9 174.675 472.3 174.875 472.8 174.875C473.3 174.875 473.8 174.675 474.1 174.275C474.5 173.875 474.7 173.475 474.7 172.975C474.7 172.475 474.5 171.975 474.1 171.675C473.7 171.275 473.2 171.075 472.8 171.075C472.3 171.075 471.8 171.275 471.5 171.675Z"
                        fill="#0100FF" />
                    <path
                        d="M460.3 159.775C459.6 159.775 459 159.475 458.5 159.075C458 158.575 457.8 157.975 457.8 157.275C457.8 156.575 458.1 155.975 458.5 155.475C459 154.975 459.6 154.775 460.3 154.775C461 154.775 461.6 155.075 462.1 155.475C463.1 156.475 463.1 158.075 462.1 159.075C461.6 159.475 461 159.775 460.3 159.775ZM458.9 155.875C458.5 156.275 458.3 156.675 458.3 157.175C458.3 157.675 458.5 158.175 458.9 158.475C459.3 158.875 459.7 159.075 460.2 159.075C460.7 159.075 461.2 158.875 461.5 158.475C461.9 158.075 462.1 157.675 462.1 157.175C462.1 156.675 461.9 156.175 461.5 155.875C461.1 155.475 460.6 155.275 460.2 155.275C459.8 155.275 459.3 155.475 458.9 155.875Z"
                        fill="#0100FF" />
                    <path
                        d="M530.2 120.275C529.7 119.775 529.5 119.175 529.5 118.475C529.5 117.775 529.8 117.175 530.2 116.675C530.7 116.175 531.3 115.975 532 115.975C532.7 115.975 533.3 116.275 533.8 116.675C534.8 117.675 534.8 119.275 533.8 120.275C533.3 120.775 532.7 120.975 532 120.975C531.3 121.075 530.6 120.775 530.2 120.275ZM530.6 117.175C530.2 117.575 530 117.975 530 118.475C530 118.975 530.2 119.475 530.6 119.775C531 120.075 531.4 120.375 531.9 120.375C532.4 120.375 532.9 120.175 533.2 119.775C533.9 119.075 533.9 117.875 533.2 117.075C532.8 116.675 532.3 116.475 531.9 116.475C531.5 116.575 531 116.775 530.6 117.175Z"
                        fill="#0100FF" />
                    <path
                        d="M481.3 163.675C480.4 164.575 479 164.575 478.2 163.675C477.3 162.775 477.3 161.375 478.2 160.575C479.1 159.675 480.5 159.675 481.3 160.575C482.2 161.375 482.2 162.775 481.3 163.675Z"
                        fill="#0100FF" />
                    <path
                        d="M454.4 126.975C453.5 127.875 452.1 127.875 451.3 126.975C450.4 126.075 450.4 124.675 451.3 123.875C452.2 122.975 453.6 122.975 454.4 123.875C455.2 124.775 455.2 126.175 454.4 126.975Z"
                        fill="#0100FF" />
                    <path
                        d="M610.3 135.875C609.6 135.875 609 135.575 608.5 135.175C608 134.675 607.8 134.075 607.8 133.375C607.8 132.675 608.1 132.075 608.5 131.575C609 131.075 609.6 130.875 610.3 130.875C611 130.875 611.6 131.175 612.1 131.575C613.1 132.575 613.1 134.175 612.1 135.175C611.6 135.575 611 135.875 610.3 135.875ZM609 131.975C608.6 132.375 608.4 132.775 608.4 133.275C608.4 133.775 608.6 134.275 609 134.575C609.4 134.975 609.8 135.175 610.3 135.175C610.8 135.175 611.3 134.975 611.6 134.575C612 134.175 612.2 133.775 612.2 133.275C612.2 132.775 612 132.275 611.6 131.975C611.2 131.575 610.7 131.375 610.3 131.375C609.8 131.375 609.3 131.575 609 131.975Z"
                        fill="#0100FF" />
                    <path
                        d="M620.7 126.975C619.8 127.875 618.4 127.875 617.6 126.975C616.8 126.075 616.7 124.675 617.6 123.875C618.5 122.975 619.9 122.975 620.7 123.875C621.5 124.775 621.5 126.175 620.7 126.975Z"
                        fill="#0100FF" />
                    <path
                        d="M394 281.175C393.1 282.075 391.7 282.075 390.9 281.175C390 280.275 390 278.875 390.9 278.075C391.8 277.175 393.2 277.175 394 278.075C394.8 278.875 394.8 280.275 394 281.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1079.5 320.675C1078.5 319.675 1078.5 318.075 1079.5 317.075C1080 316.575 1080.6 316.375 1081.3 316.375C1082 316.375 1082.6 316.675 1083.1 317.075C1084.1 318.075 1084.1 319.675 1083.1 320.675C1082.6 321.175 1082 321.375 1081.3 321.375C1080.7 321.375 1080 321.175 1079.5 320.675ZM1080 317.575C1079.3 318.275 1079.3 319.475 1080 320.275C1080.7 320.975 1081.9 320.975 1082.7 320.275C1083.4 319.575 1083.4 318.375 1082.7 317.575C1082.3 317.175 1081.8 316.975 1081.4 316.975C1080.8 316.975 1080.3 317.175 1080 317.575Z"
                        fill="#0100FF" />
                    <path
                        d="M1104.5 310.675C1103.5 309.675 1103.5 308.075 1104.5 307.075C1105 306.575 1105.6 306.375 1106.3 306.375C1107 306.375 1107.6 306.675 1108.1 307.075C1109.1 308.075 1109.1 309.675 1108.1 310.675C1107.6 311.175 1107 311.375 1106.3 311.375C1105.6 311.375 1105 311.175 1104.5 310.675ZM1105 307.475C1104.3 308.175 1104.3 309.375 1105 310.175C1105.7 310.875 1106.9 310.875 1107.7 310.175C1108.4 309.475 1108.4 308.275 1107.7 307.475C1107.3 307.075 1106.8 306.875 1106.4 306.875C1105.8 306.975 1105.3 307.175 1105 307.475Z"
                        fill="#0100FF" />
                    <path
                        d="M1134.8 293.475C1133.8 292.475 1133.8 290.875 1134.8 289.875C1135.3 289.375 1135.9 289.175 1136.6 289.175C1137.3 289.175 1137.9 289.475 1138.4 289.875C1139.4 290.875 1139.4 292.475 1138.4 293.475C1137.9 293.975 1137.3 294.175 1136.6 294.175C1136 294.175 1135.3 293.975 1134.8 293.475ZM1135.3 290.375C1134.6 291.075 1134.6 292.275 1135.3 293.075C1136 293.775 1137.2 293.775 1138 293.075C1138.7 292.375 1138.7 291.175 1138 290.375C1137.6 289.975 1137.1 289.775 1136.7 289.775C1136.1 289.775 1135.7 289.975 1135.3 290.375Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M809.6 117.575C808.7 118.475 807.3 118.475 806.5 117.575C805.6 116.675 805.6 115.275 806.5 114.475C807.4 113.575 808.8 113.575 809.6 114.475C810.5 115.275 810.5 116.675 809.6 117.575Z"
                        fill="#0100FF" />
                    <path
                        d="M814.1 102.475C813.2 103.375 811.8 103.375 811 102.475C810.1 101.575 810.1 100.175 811 99.3752C811.9 98.4752 813.3 98.4752 814.1 99.3752C814.9 100.175 814.9 101.575 814.1 102.475Z"
                        fill="#0100FF" />
                    <path
                        d="M821 115.975C820.1 116.875 818.7 116.875 817.9 115.975C817 115.075 817 113.675 817.9 112.875C818.8 111.975 820.2 111.975 821 112.875C821.9 113.675 821.9 115.075 821 115.975Z"
                        fill="#0100FF" />
                    <path
                        d="M580.8 132.975C579.9 133.875 578.5 133.875 577.7 132.975C576.8 132.075 576.8 130.675 577.7 129.875C578.6 128.975 580 128.975 580.8 129.875C581.7 130.775 581.7 132.175 580.8 132.975Z"
                        fill="#0100FF" />
                    <path
                        d="M567.7 135.175C566.8 136.075 565.4 136.075 564.6 135.175C563.7 134.275 563.7 132.875 564.6 132.075C565.5 131.175 566.9 131.175 567.7 132.075C568.5 132.975 568.5 134.375 567.7 135.175Z"
                        fill="#0100FF" />
                    <path
                        d="M488.8 147.875C487.9 148.775 486.5 148.775 485.7 147.875C484.8 146.975 484.8 145.575 485.7 144.775C486.6 143.875 488 143.875 488.8 144.775C489.7 145.575 489.7 146.975 488.8 147.875Z"
                        fill="#0100FF" />
                    <path
                        d="M479.9 131.875C479 132.775 477.6 132.775 476.8 131.875C475.9 130.975 475.9 129.575 476.8 128.775C477.7 127.875 479.1 127.875 479.9 128.775C480.8 129.575 480.8 130.975 479.9 131.875Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M598.3 125.475C597.6 125.475 597 125.175 596.5 124.775C596 124.275 595.8 123.675 595.8 122.975C595.8 122.275 596.1 121.675 596.5 121.175C597.5 120.175 599.1 120.175 600.1 121.175C600.6 121.675 600.8 122.275 600.8 122.975C600.8 123.675 600.5 124.275 600.1 124.775C599.6 125.175 599 125.475 598.3 125.475ZM596.9 121.575C596.2 122.275 596.2 123.475 596.9 124.275C597.3 124.675 597.7 124.875 598.2 124.875C598.7 124.875 599.2 124.675 599.5 124.275C599.9 123.875 600.1 123.475 600.1 122.975C600.1 122.475 599.9 121.975 599.5 121.675C599.1 121.275 598.7 121.075 598.2 121.075C597.8 120.975 597.3 121.175 596.9 121.575Z"
                        fill="#0100FF" />
                    <path
                        d="M594.8 110.275C593.9 111.175 592.5 111.175 591.7 110.275C590.8 109.375 590.8 107.975 591.7 107.175C592.6 106.275 594 106.275 594.8 107.175C595.7 107.975 595.7 109.375 594.8 110.275Z"
                        fill="#0100FF" />
                    <path
                        d="M471.8 208.875C470.9 209.775 469.5 209.775 468.7 208.875C467.8 207.975 467.8 206.575 468.7 205.775C469.6 204.875 471 204.875 471.8 205.775C472.7 206.675 472.7 208.075 471.8 208.875Z"
                        fill="#0100FF" />
                    <path
                        d="M682.9 78.8752C682.2 78.8752 681.6 78.5752 681.1 78.1752C680.1 77.1752 680.1 75.5752 681.1 74.5752C682.1 73.5752 683.7 73.5752 684.7 74.5752C685.7 75.5752 685.7 77.1752 684.7 78.1752C684.2 78.5752 683.6 78.8752 682.9 78.8752ZM681.6 74.9752C680.9 75.6752 680.9 76.8752 681.6 77.6752C682.3 78.3752 683.5 78.3752 684.3 77.6752C685 76.9752 685 75.7752 684.3 74.9752C683.9 74.5752 683.5 74.3752 683 74.3752C682.4 74.4752 682 74.6752 681.6 74.9752Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M827.2 108.975C826.5 108.975 825.9 108.675 825.4 108.275C824.4 107.275 824.4 105.675 825.4 104.675C825.9 104.175 826.5 103.975 827.2 103.975C827.9 103.975 828.5 104.275 829 104.675C829.5 105.175 829.7 105.775 829.7 106.475C829.7 107.175 829.4 107.775 829 108.275C828.5 108.775 827.9 108.975 827.2 108.975ZM825.9 105.175C825.2 105.875 825.2 107.075 825.9 107.875C826.3 108.275 826.7 108.475 827.2 108.475C827.7 108.475 828.2 108.275 828.5 107.875C828.9 107.475 829.1 107.075 829.1 106.575C829.1 106.075 828.9 105.575 828.5 105.275C828.1 104.875 827.7 104.675 827.2 104.675C826.7 104.575 826.2 104.775 825.9 105.175Z"
                        fill="#0100FF" />
                    <path
                        d="M628.8 113.175C627.9 114.075 626.5 114.075 625.7 113.175C624.8 112.275 624.8 110.875 625.7 110.075C626.6 109.175 628 109.175 628.8 110.075C629.7 110.975 629.6 112.375 628.8 113.175Z"
                        fill="#0100FF" />
                    <path
                        d="M622.9 95.1749C622 96.0749 620.6 96.0749 619.8 95.1749C618.9 94.2749 618.9 92.8749 619.8 92.0749C620.7 91.1749 622.1 91.1749 622.9 92.0749C623.8 92.8749 623.8 94.2749 622.9 95.1749Z"
                        fill="#0100FF" />
                    <path
                        d="M610 47.1749C609.1 48.0749 607.7 48.0749 606.9 47.1749C606 46.2749 606 44.8749 606.9 44.0749C607.8 43.1749 609.2 43.1749 610 44.0749C610.8 44.8749 610.8 46.2749 610 47.1749Z"
                        fill="#0100FF" />
                    <path
                        d="M694.5 87.0748C693.6 87.9748 692.2 87.9748 691.4 87.0748C690.5 86.1748 690.5 84.7748 691.4 83.9748C692.3 83.0748 693.7 83.0748 694.5 83.9748C695.3 84.7748 695.3 86.1748 694.5 87.0748Z"
                        fill="#0100FF" />
                    <path
                        d="M560 125.975C559.1 126.875 557.7 126.875 556.9 125.975C556 125.075 556 123.675 556.9 122.875C557.8 121.975 559.2 121.975 560 122.875C560.9 123.675 560.9 125.075 560 125.975Z"
                        fill="#0100FF" />
                    <path
                        d="M540.3 151.375C539.8 150.875 539.6 150.275 539.6 149.575C539.6 148.875 539.9 148.275 540.3 147.775C541.3 146.775 542.9 146.775 543.9 147.775C544.9 148.775 544.9 150.375 543.9 151.375C543.4 151.875 542.8 152.075 542.1 152.075C541.5 152.175 540.8 151.875 540.3 151.375ZM543.5 150.975C543.9 150.575 544.1 150.175 544.1 149.675C544.1 149.175 543.9 148.675 543.5 148.375C542.8 147.675 541.6 147.675 540.8 148.375C540.1 149.075 540.1 150.275 540.8 151.075C541.5 151.675 542.7 151.675 543.5 150.975Z"
                        fill="#0100FF" />
                    <path
                        d="M566.8 123.675C565.8 122.675 565.8 121.075 566.8 120.075C567.8 119.075 569.4 119.075 570.4 120.075C571.4 121.075 571.4 122.675 570.4 123.675C569.9 124.175 569.3 124.375 568.6 124.375C568 124.375 567.3 124.175 566.8 123.675ZM570 123.175C570.7 122.475 570.7 121.275 570 120.475C569.3 119.775 568.1 119.775 567.3 120.475C566.6 121.175 566.6 122.375 567.3 123.175C568 123.975 569.2 123.975 570 123.175Z"
                        fill="#0100FF" />
                    <path
                        d="M507 156.975C506.1 157.875 504.7 157.875 503.9 156.975C503 156.075 503 154.675 503.9 153.875C504.8 152.975 506.2 152.975 507 153.875C507.9 154.775 507.9 156.175 507 156.975Z"
                        fill="#0100FF" />
                    <path
                        d="M460.3 192.375C459.8 191.875 459.6 191.275 459.6 190.575C459.6 189.875 459.9 189.275 460.3 188.775C461.3 187.775 462.9 187.775 463.9 188.775C464.9 189.775 464.9 191.375 463.9 192.375C463.4 192.875 462.8 193.075 462.1 193.075C461.4 193.075 460.8 192.875 460.3 192.375ZM463.4 191.875C463.8 191.475 464 191.075 464 190.575C464 190.075 463.8 189.575 463.4 189.275C462.7 188.575 461.5 188.575 460.7 189.275C460 189.975 460 191.175 460.7 191.975C461.5 192.675 462.7 192.675 463.4 191.875Z"
                        fill="#0100FF" />
                    <path
                        d="M444.7 184.775C444.2 184.275 444 183.675 444 182.975C444 182.275 444.3 181.675 444.7 181.175C445.7 180.175 447.3 180.175 448.3 181.175C449.3 182.175 449.3 183.775 448.3 184.775C447.8 185.275 447.2 185.475 446.5 185.475C445.9 185.475 445.2 185.275 444.7 184.775ZM447.8 184.275C448.2 183.875 448.4 183.475 448.4 182.975C448.4 182.475 448.2 181.975 447.8 181.675C447.1 180.975 445.9 180.975 445.1 181.675C444.4 182.375 444.4 183.575 445.1 184.375C445.9 185.075 447.1 185.075 447.8 184.275Z"
                        fill="#0100FF" />
                    <path
                        d="M512.5 167.775C511.6 168.675 510.2 168.675 509.4 167.775C508.5 166.875 508.5 165.475 509.4 164.675C510.3 163.775 511.7 163.775 512.5 164.675C513.4 165.575 513.4 166.975 512.5 167.775Z"
                        fill="#0100FF" />
                    <path
                        d="M501.8 179.675C501.3 179.175 501 178.475 501 177.775C501 177.075 501.3 176.375 501.8 175.875C502.8 174.875 504.5 174.875 505.5 175.875C506 176.375 506.3 177.075 506.3 177.775C506.3 178.475 506 179.175 505.5 179.675C505 180.175 504.3 180.475 503.6 180.475C503 180.475 502.3 180.175 501.8 179.675ZM504.9 179.075C505.6 178.375 505.6 177.275 504.9 176.575C504.2 175.875 503.1 175.875 502.4 176.575C501.7 177.275 501.7 178.375 502.4 179.075C503.1 179.775 504.2 179.775 504.9 179.075Z"
                        fill="#0100FF" />
                    <path
                        d="M1077.6 333.475C1076.6 332.475 1076.6 330.875 1077.6 329.875C1078.6 328.875 1080.2 328.875 1081.2 329.875C1082.2 330.875 1082.2 332.475 1081.2 333.475C1080.7 333.975 1080.1 334.175 1079.4 334.175C1078.8 334.275 1078.1 333.975 1077.6 333.475ZM1080.8 333.075C1081.5 332.375 1081.5 331.175 1080.8 330.375C1080.1 329.675 1078.9 329.675 1078.1 330.375C1077.4 331.075 1077.4 332.275 1078.1 333.075C1078.8 333.775 1080 333.775 1080.8 333.075Z"
                        fill="#0100FF" />
                    <path
                        d="M1054.1 367.575C1053.1 366.575 1053.1 364.975 1054.1 363.975C1055.1 362.975 1056.7 362.975 1057.7 363.975C1058.7 364.975 1058.7 366.575 1057.7 367.575C1057.2 368.075 1056.6 368.275 1055.9 368.275C1055.3 368.375 1054.6 368.075 1054.1 367.575ZM1057.3 367.175C1058 366.475 1058 365.275 1057.3 364.475C1056.6 363.775 1055.4 363.775 1054.6 364.475C1053.9 365.175 1053.9 366.375 1054.6 367.175C1055.3 367.875 1056.5 367.875 1057.3 367.175Z"
                        fill="#0100FF" />
                    <path opacity="0.5"
                        d="M1065.9 338.575C1064.9 337.575 1064.9 335.975 1065.9 334.975C1066.9 333.975 1068.5 333.975 1069.5 334.975C1070.5 335.975 1070.5 337.575 1069.5 338.575C1069 339.075 1068.4 339.275 1067.7 339.275C1067.1 339.275 1066.4 339.075 1065.9 338.575ZM1069.1 338.075C1069.5 337.675 1069.7 337.275 1069.7 336.775C1069.7 336.275 1069.5 335.775 1069.1 335.475C1068.4 334.775 1067.2 334.775 1066.4 335.475C1065.7 336.175 1065.7 337.375 1066.4 338.175C1067.1 338.875 1068.3 338.875 1069.1 338.075Z"
                        fill="#0100FF" />
                    <path
                        d="M682.3 113.175C681.4 114.075 680 114.075 679.2 113.175C678.3 112.275 678.3 110.875 679.2 110.075C680.1 109.175 681.5 109.175 682.3 110.075C683.2 110.975 683.2 112.375 682.3 113.175Z"
                        fill="#0100FF" />
                    <path
                        d="M676.1 102.475C675.2 103.375 673.8 103.375 673 102.475C672.1 101.575 672.1 100.175 673 99.3752C673.9 98.4752 675.3 98.4752 676.1 99.3752C677 100.175 677 101.575 676.1 102.475Z"
                        fill="#0100FF" />
                    <path
                        d="M620.7 74.0748C619.8 74.9748 618.4 74.9748 617.6 74.0748C616.7 73.1748 616.7 71.7748 617.6 70.9748C618.5 70.0748 619.9 70.0748 620.7 70.9748C621.5 71.8748 621.5 73.2748 620.7 74.0748Z"
                        fill="#0100FF" />
                    <path
                        d="M581.9 123.775C581.2 123.775 580.5 123.475 580 122.975C579.5 122.475 579.2 121.775 579.2 121.075C579.2 120.375 579.5 119.675 580 119.175C581 118.175 582.7 118.175 583.7 119.175C584.7 120.175 584.7 121.875 583.7 122.875C583.3 123.475 582.6 123.775 581.9 123.775ZM580.6 119.875C579.9 120.575 579.9 121.675 580.6 122.375C581.3 123.075 582.4 123.075 583.1 122.375C583.8 121.675 583.8 120.575 583.1 119.875C582.7 119.475 582.3 119.375 581.8 119.375C581.4 119.375 581 119.475 580.6 119.875Z"
                        fill="#0100FF" />
                    <path
                        d="M558.4 141.875C557.7 141.875 557.1 141.575 556.6 141.175C556.1 140.675 555.9 140.075 555.9 139.375C555.9 138.675 556.2 138.075 556.6 137.575C557.6 136.575 559.2 136.575 560.2 137.575C561.2 138.575 561.2 140.175 560.2 141.175C559.7 141.575 559.1 141.875 558.4 141.875ZM557.1 137.975C556.4 138.675 556.4 139.875 557.1 140.675C557.5 141.075 557.9 141.275 558.4 141.275C558.9 141.275 559.4 141.075 559.7 140.675C560.1 140.275 560.3 139.875 560.3 139.375C560.3 138.875 560.1 138.375 559.7 138.075C559.3 137.675 558.8 137.475 558.3 137.475C557.9 137.375 557.5 137.575 557.1 137.975Z"
                        fill="#0100FF" />
                    <path opacity="0.3"
                        d="M477.5 228.675C476.8 228.675 476.1 228.375 475.6 227.875C475.1 227.375 474.8 226.675 474.8 225.975C474.8 225.275 475.1 224.575 475.6 224.075C476.6 223.075 478.3 223.075 479.3 224.075C480.3 225.075 480.3 226.775 479.3 227.775C478.9 228.375 478.2 228.675 477.5 228.675ZM476.3 224.675C475.6 225.375 475.6 226.475 476.3 227.175C477 227.875 478.1 227.875 478.8 227.175C479.5 226.475 479.5 225.375 478.8 224.675C478.4 224.275 478 224.175 477.5 224.175C477.1 224.175 476.6 224.375 476.3 224.675Z"
                        fill="#0100FF" />
                    <path
                        d="M518.3 146.875C517.6 146.875 517 146.575 516.5 146.175C516 145.675 515.8 145.075 515.8 144.375C515.8 143.675 516.1 143.075 516.5 142.575C517.5 141.575 519.1 141.575 520.1 142.575C521.1 143.575 521.1 145.175 520.1 146.175C519.6 146.675 519 146.875 518.3 146.875ZM517 142.975C516.3 143.675 516.3 144.875 517 145.675C517.4 146.075 517.8 146.275 518.3 146.275C518.8 146.275 519.3 146.075 519.6 145.675C520 145.275 520.2 144.875 520.2 144.375C520.2 143.875 520 143.375 519.6 143.075C519.2 142.675 518.7 142.475 518.2 142.475C517.9 142.475 517.4 142.675 517 142.975Z"
                        fill="#0100FF" />
                    <path
                        d="M507 137.075C506.1 137.975 504.7 137.975 503.9 137.075C503 136.175 503 134.775 503.9 133.975C504.8 133.075 506.2 133.075 507 133.975C507.9 134.875 507.9 136.275 507 137.075Z"
                        fill="#0100FF" />
                    <path
                        d="M498.6 122.575C497.7 123.475 496.3 123.475 495.5 122.575C494.6 121.675 494.6 120.275 495.5 119.475C496.4 118.575 497.8 118.575 498.6 119.475C499.5 120.375 499.5 121.775 498.6 122.575Z"
                        fill="#0100FF" />
                    <path
                        d="M487.3 209.975C486.6 209.975 485.9 209.675 485.4 209.175C484.9 208.675 484.6 207.975 484.6 207.275C484.6 206.575 484.9 205.875 485.4 205.375C486.4 204.375 488.1 204.375 489.1 205.375C489.6 205.875 489.9 206.575 489.9 207.275C489.9 207.975 489.6 208.675 489.1 209.175C488.6 209.675 488 209.975 487.3 209.975ZM486 206.075C485.3 206.775 485.3 207.875 486 208.575C486.3 208.875 486.8 209.075 487.3 209.075C487.8 209.075 488.2 208.875 488.6 208.575C489.3 207.875 489.3 206.775 488.6 206.075C488.2 205.675 487.8 205.575 487.3 205.575C486.8 205.575 486.4 205.675 486 206.075Z"
                        fill="#0100FF" />
                    <path
                        d="M627.6 130.975C626.6 129.975 626.6 128.375 627.6 127.375C628.6 126.375 630.2 126.375 631.2 127.375C632.2 128.375 632.2 129.975 631.2 130.975C630.7 131.475 630.1 131.675 629.4 131.675C628.8 131.775 628.1 131.475 627.6 130.975ZM628.1 127.875C627.4 128.575 627.4 129.775 628.1 130.575C628.8 131.275 630 131.275 630.8 130.575C631.5 129.875 631.5 128.675 630.8 127.875C630.4 127.475 629.9 127.275 629.4 127.275C628.9 127.275 628.5 127.475 628.1 127.875Z"
                        fill="#0100FF" />
                    <path
                        d="M631 142.775C630.1 143.675 628.7 143.675 627.9 142.775C627 141.875 627 140.475 627.9 139.675C628.8 138.775 630.2 138.775 631 139.675C631.9 140.575 631.9 141.975 631 142.775Z"
                        fill="#0100FF" />
                    <path
                        d="M665 140.075C664.3 140.075 663.6 139.775 663.1 139.275C662.1 138.275 662.1 136.575 663.1 135.575C664.1 134.575 665.8 134.575 666.8 135.575C667.8 136.575 667.8 138.275 666.8 139.275C666.3 139.775 665.7 140.075 665 140.075ZM663.7 136.175C663 136.875 663 137.975 663.7 138.675C664.4 139.375 665.5 139.375 666.2 138.675C666.9 137.975 666.9 136.875 666.2 136.175C665.8 135.775 665.4 135.675 664.9 135.675C664.5 135.575 664.1 135.775 663.7 136.175Z"
                        fill="#0100FF" />
                    <path
                        d="M654.2 153.075C653.3 153.975 651.9 153.975 651.1 153.075C650.2 152.175 650.2 150.775 651.1 149.975C652 149.075 653.4 149.075 654.2 149.975C655.1 150.875 655.1 152.275 654.2 153.075Z"
                        fill="#0100FF" />
                    <path
                        d="M581.9 113.575C581.2 113.575 580.5 113.275 580 112.775C579.5 112.275 579.2 111.575 579.2 110.875C579.2 110.175 579.5 109.475 580 108.975C580.5 108.475 581.2 108.175 581.9 108.175C582.6 108.175 583.3 108.475 583.8 108.975C584.3 109.475 584.6 110.175 584.6 110.875C584.6 111.575 584.3 112.275 583.8 112.775C583.3 113.275 582.6 113.575 581.9 113.575ZM580.6 109.675C580.3 109.975 580.1 110.475 580.1 110.975C580.1 111.475 580.3 111.875 580.6 112.275C581.3 112.975 582.4 112.975 583.1 112.275C583.4 111.975 583.6 111.475 583.6 110.975C583.6 110.475 583.4 110.075 583.1 109.675C582.8 109.375 582.3 109.175 581.8 109.175C581.4 109.075 581 109.275 580.6 109.675Z"
                        fill="#0100FF" />
                    <path
                        d="M579.3 76.4752C578.6 76.4752 577.9 76.1752 577.4 75.6752C576.9 75.1752 576.6 74.4752 576.6 73.7752C576.6 73.0752 576.9 72.3752 577.4 71.8752C577.9 71.3752 578.6 71.0752 579.3 71.0752C580 71.0752 580.7 71.3752 581.2 71.8752C581.7 72.3752 582 73.0752 582 73.7752C582 74.4752 581.7 75.1752 581.2 75.6752C580.6 76.1752 580 76.4752 579.3 76.4752ZM578 72.5752C577.7 72.8752 577.5 73.3752 577.5 73.8752C577.5 74.3752 577.7 74.7752 578 75.1752C578.7 75.8752 579.8 75.8752 580.5 75.1752C580.8 74.8752 581 74.3752 581 73.8752C581 73.3752 580.8 72.9752 580.5 72.5752C580.2 72.2752 579.7 72.0752 579.2 72.0752C578.8 71.9752 578.3 72.1752 578 72.5752Z"
                        fill="#0100FF" />
                    <path
                        d="M546.6 136.175C545.9 136.175 545.3 135.875 544.8 135.475C544.3 134.975 544.1 134.375 544.1 133.675C544.1 132.975 544.4 132.375 544.8 131.875C545.8 130.875 547.4 130.875 548.4 131.875C548.9 132.375 549.1 132.975 549.1 133.675C549.1 134.375 548.8 134.975 548.4 135.475C547.9 135.875 547.2 136.175 546.6 136.175ZM545.2 132.275C544.8 132.675 544.6 133.075 544.6 133.575C544.6 134.075 544.8 134.575 545.2 134.875C545.6 135.275 546 135.475 546.5 135.475C547 135.475 547.5 135.275 547.8 134.875C548.2 134.475 548.4 134.075 548.4 133.575C548.4 133.075 548.2 132.575 547.8 132.275C547.4 131.875 547 131.675 546.5 131.675C546.1 131.775 545.6 131.975 545.2 132.275Z"
                        fill="#0100FF" />
                    <path
                        d="M522.1 130.775C521.2 131.675 519.8 131.675 519 130.775C518.1 129.875 518.1 128.475 519 127.675C519.9 126.775 521.3 126.775 522.1 127.675C523 128.575 523 129.975 522.1 130.775Z"
                        fill="#0100FF" />
                    <path
                        d="M487 107.275C486.1 108.175 484.7 108.175 483.9 107.275C483 106.375 483 104.975 483.9 104.175C484.8 103.275 486.2 103.275 487 104.175C487.9 105.075 487.9 106.475 487 107.275Z"
                        fill="#0100FF" />
                    <path
                        d="M517.4 107.275C516.5 108.175 515.1 108.175 514.3 107.275C513.4 106.375 513.4 104.975 514.3 104.175C515.2 103.275 516.6 103.275 517.4 104.175C518.2 105.075 518.2 106.475 517.4 107.275Z"
                        fill="#0100FF" />
                    <path
                        d="M527 85.4752C526.1 86.3752 524.7 86.3752 523.9 85.4752C523.1 84.5752 523 83.1752 523.9 82.3752C524.8 81.4752 526.2 81.4752 527 82.3752C527.9 83.1752 527.9 84.5752 527 85.4752Z"
                        fill="#0100FF" />
                    <path
                        d="M534.5 139.975C533.8 139.975 533.2 139.675 532.7 139.275C532.2 138.775 532 138.175 532 137.475C532 136.775 532.3 136.175 532.7 135.675C533.7 134.675 535.3 134.675 536.3 135.675C536.8 136.175 537 136.775 537 137.475C537 138.175 536.7 138.775 536.3 139.275C535.8 139.675 535.1 139.975 534.5 139.975ZM533.1 136.075C532.7 136.475 532.5 136.875 532.5 137.375C532.5 137.875 532.7 138.375 533.1 138.675C533.5 139.075 533.9 139.275 534.4 139.275C534.9 139.275 535.4 139.075 535.7 138.675C536.1 138.275 536.3 137.875 536.3 137.375C536.3 136.875 536.1 136.375 535.7 136.075C535.3 135.675 534.9 135.475 534.4 135.475C534 135.475 533.5 135.675 533.1 136.075Z"
                        fill="#0100FF" />
                    <path
                        d="M529.2 159.175C528.3 160.075 526.9 160.075 526.1 159.175C525.2 158.275 525.2 156.875 526.1 156.075C527 155.175 528.4 155.175 529.2 156.075C530.1 156.975 530.1 158.375 529.2 159.175Z"
                        fill="#0100FF" />
                    <path
                        d="M488.8 176.775C487.9 177.675 486.5 177.675 485.7 176.775C484.8 175.875 484.8 174.475 485.7 173.675C486.6 172.775 488 172.775 488.8 173.675C489.7 174.475 489.7 175.875 488.8 176.775Z"
                        fill="#0100FF" />
                    <path
                        d="M544.8 120.275C544.3 119.775 544.1 119.175 544.1 118.475C544.1 117.775 544.4 117.175 544.8 116.675C545.3 116.175 545.9 115.975 546.6 115.975C547.3 115.975 547.9 116.275 548.4 116.675C548.9 117.175 549.1 117.775 549.1 118.475C549.1 119.175 548.8 119.775 548.4 120.275C547.9 120.775 547.3 120.975 546.6 120.975C545.9 121.075 545.3 120.775 544.8 120.275ZM545.2 117.175C544.8 117.575 544.6 117.975 544.6 118.475C544.6 118.975 544.8 119.475 545.2 119.775C545.6 120.175 546 120.375 546.5 120.375C547 120.375 547.5 120.175 547.8 119.775C548.2 119.375 548.4 118.975 548.4 118.475C548.4 117.975 548.2 117.475 547.8 117.175C547.4 116.775 547 116.575 546.5 116.575C546.1 116.575 545.6 116.775 545.2 117.175Z"
                        fill="#0100FF" />
                    <path
                        d="M530.2 103.375C529.7 102.875 529.5 102.275 529.5 101.575C529.5 100.875 529.8 100.275 530.2 99.7752C530.7 99.2752 531.3 99.0752 532 99.0752C532.7 99.0752 533.3 99.3752 533.8 99.7752C534.3 100.275 534.5 100.875 534.5 101.575C534.5 102.275 534.2 102.875 533.8 103.375C533.3 103.875 532.7 104.075 532 104.075C531.3 104.175 530.6 103.875 530.2 103.375ZM530.6 100.275C530.2 100.675 530 101.075 530 101.575C530 102.075 530.2 102.575 530.6 102.875C531 103.275 531.4 103.475 531.9 103.475C532.4 103.475 532.9 103.275 533.2 102.875C533.6 102.475 533.8 102.075 533.8 101.575C533.8 101.075 533.6 100.575 533.2 100.275C532.8 99.8752 532.4 99.6752 531.9 99.6752C531.4 99.6752 531 99.8752 530.6 100.275Z"
                        fill="#0100FF" />
                    <path
                        d="M562.2 112.475C561.3 113.375 559.9 113.375 559.1 112.475C558.2 111.575 558.2 110.175 559.1 109.375C560 108.475 561.4 108.475 562.2 109.375C563.1 110.175 563.1 111.575 562.2 112.475Z"
                        fill="#0100FF" />
                    <path
                        d="M547 95.4752C546.1 96.3752 544.7 96.3752 543.9 95.4752C543 94.5752 543 93.1752 543.9 92.3752C544.8 91.4752 546.2 91.4752 547 92.3752C547.9 93.1752 547.9 94.6752 547 95.4752Z"
                        fill="#0100FF" />
                    <path
                        d="M572.7 112.475C571.8 113.375 570.4 113.375 569.6 112.475C568.7 111.575 568.7 110.175 569.6 109.375C570.5 108.475 571.9 108.475 572.7 109.375C573.6 110.175 573.6 111.575 572.7 112.475Z"
                        fill="#0100FF" />
                    <path
                        d="M570.2 97.6749C569.3 98.5749 567.9 98.5749 567.1 97.6749C566.2 96.7749 566.2 95.3749 567.1 94.5749C568 93.6749 569.4 93.6749 570.2 94.5749C571.1 95.4749 571.1 96.8749 570.2 97.6749Z"
                        fill="#0100FF" />
                    <path
                        d="M606.6 115.275C605.6 114.275 605.6 112.675 606.6 111.675C607.6 110.675 609.2 110.675 610.2 111.675C611.2 112.675 611.2 114.275 610.2 115.275C609.7 115.775 609.1 115.975 608.4 115.975C607.8 116.075 607.1 115.775 606.6 115.275ZM607.1 112.175C606.4 112.875 606.4 114.075 607.1 114.875C607.8 115.575 609 115.575 609.8 114.875C610.5 114.175 610.5 112.975 609.8 112.175C609.4 111.775 609 111.575 608.5 111.575C607.9 111.675 607.4 111.875 607.1 112.175Z"
                        fill="#0100FF" />
                    <path
                        d="M599 83.1752C598 82.1752 598 80.5752 599 79.5752C600 78.5752 601.6 78.5752 602.6 79.5752C603.6 80.5752 603.6 82.1752 602.6 83.1752C602.1 83.6752 601.5 83.8752 600.8 83.8752C600.2 83.8752 599.5 83.6752 599 83.1752ZM599.5 80.0752C598.8 80.7752 598.8 81.9752 599.5 82.7752C600.2 83.4752 601.4 83.4752 602.2 82.7752C602.9 82.0752 602.9 80.8752 602.2 80.0752C601.8 79.6752 601.4 79.4752 600.9 79.4752C600.3 79.4752 599.8 79.6752 599.5 80.0752Z"
                        fill="#0100FF" />
                    <path
                        d="M641.3 126.375C640.4 127.275 639 127.275 638.2 126.375C637.3 125.475 637.3 124.075 638.2 123.275C639.1 122.375 640.5 122.375 641.3 123.275C642.2 124.175 642.2 125.575 641.3 126.375Z"
                        fill="#0100FF" />
                    <path
                        d="M645.8 140.875C644.9 141.775 643.5 141.775 642.7 140.875C641.8 139.975 641.8 138.575 642.7 137.775C643.6 136.875 645 136.875 645.8 137.775C646.6 138.675 646.6 140.075 645.8 140.875Z"
                        fill="#0100FF" />
                    <path
                        d="M650.2 117.675C649.3 118.575 647.9 118.575 647.1 117.675C646.2 116.775 646.2 115.375 647.1 114.575C648 113.675 649.4 113.675 650.2 114.575C651.1 115.375 651.1 116.775 650.2 117.675Z"
                        fill="#0100FF" />
                    <path
                        d="M643.2 66.9752C642.3 67.8752 640.9 67.8752 640.1 66.9752C639.2 66.0752 639.2 64.6752 640.1 63.8752C641 62.9752 642.4 62.9752 643.2 63.8752C644.1 64.6752 644.1 66.0752 643.2 66.9752Z"
                        fill="#0100FF" />
                    <path opacity="0.63"
                        d="M959.6 199.275C958.7 200.175 957.3 200.175 956.5 199.275C955.6 198.375 955.6 196.975 956.5 196.175C957.4 195.275 958.8 195.275 959.6 196.175C960.5 197.075 960.5 198.475 959.6 199.275Z"
                        fill="#0100FF" />
                    <path opacity="0.63"
                        d="M973.6 185.675C972.7 186.575 971.3 186.575 970.5 185.675C969.6 184.775 969.6 183.375 970.5 182.575C971.4 181.675 972.8 181.675 973.6 182.575C974.5 183.475 974.5 184.875 973.6 185.675Z"
                        fill="#0100FF" />
                    <path
                        d="M972.2 223.575C971.2 222.575 971.2 220.975 972.2 219.975C973.2 218.975 974.8 218.975 975.8 219.975C976.3 220.475 976.5 221.075 976.5 221.775C976.5 222.475 976.2 223.075 975.8 223.575C975.3 224.075 974.7 224.275 974 224.275C973.3 224.275 972.7 224.075 972.2 223.575ZM972.6 220.475C971.9 221.175 971.9 222.375 972.6 223.175C973.3 223.875 974.5 223.875 975.3 223.175C975.7 222.775 975.9 222.375 975.9 221.875C975.9 221.375 975.7 220.875 975.3 220.575C974.9 220.175 974.4 219.975 974 219.975C973.5 219.875 973 220.075 972.6 220.475Z"
                        fill="#0100FF" />
                    <path
                        d="M903.7 175.275C902.8 176.175 901.4 176.175 900.6 175.275C899.7 174.375 899.7 172.975 900.6 172.175C901.5 171.275 902.9 171.275 903.7 172.175C904.6 172.975 904.6 174.375 903.7 175.275Z"
                        fill="#0100FF" />
                    <path
                        d="M1073.4 279.775C1072.5 280.675 1071.1 280.675 1070.3 279.775C1069.4 278.875 1069.4 277.475 1070.3 276.675C1071.2 275.875 1072.6 275.775 1073.4 276.675C1074.3 277.475 1074.3 278.875 1073.4 279.775Z"
                        fill="#0100FF" />
                    <path
                        d="M923.9 168.875C922.9 167.875 922.9 166.275 923.9 165.275C924.9 164.275 926.5 164.275 927.5 165.275C928 165.775 928.2 166.375 928.2 167.075C928.2 167.775 927.9 168.375 927.5 168.875C927 169.375 926.4 169.575 925.7 169.575C925 169.575 924.4 169.375 923.9 168.875ZM924.3 165.675C923.6 166.375 923.6 167.575 924.3 168.375C925 169.075 926.2 169.075 927 168.375C927.4 167.975 927.6 167.575 927.6 167.075C927.6 166.575 927.4 166.075 927 165.775C926.6 165.375 926.1 165.175 925.7 165.175C925.2 165.175 924.7 165.375 924.3 165.675Z"
                        fill="#0100FF" />
                    <path
                        d="M950 138.275C949 137.275 949 135.675 950 134.675C951 133.675 952.6 133.675 953.6 134.675C954.1 135.175 954.3 135.775 954.3 136.475C954.3 137.175 954 137.775 953.6 138.275C953.1 138.775 952.5 138.975 951.8 138.975C951.2 138.975 950.5 138.775 950 138.275ZM950.5 135.175C949.8 135.875 949.8 137.075 950.5 137.875C951.2 138.575 952.4 138.575 953.2 137.875C953.6 137.475 953.8 137.075 953.8 136.575C953.8 136.075 953.6 135.575 953.2 135.275C952.8 134.875 952.3 134.675 951.9 134.675C951.3 134.575 950.8 134.775 950.5 135.175Z"
                        fill="#0100FF" />
                    <path
                        d="M884.3 158.775C883.4 159.675 882 159.675 881.2 158.775C880.3 157.875 880.3 156.475 881.2 155.675C882.1 154.775 883.5 154.775 884.3 155.675C885.1 156.575 885.1 157.975 884.3 158.775Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M869.8 154.775C868.9 155.675 867.5 155.675 866.7 154.775C865.8 153.875 865.8 152.475 866.7 151.675C867.6 150.775 869 150.775 869.8 151.675C870.7 152.475 870.7 153.875 869.8 154.775Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M853.5 106.175C852.6 107.075 851.2 107.075 850.4 106.175C849.5 105.275 849.5 103.875 850.4 103.075C851.3 102.175 852.7 102.175 853.5 103.075C854.4 103.875 854.4 105.275 853.5 106.175Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M825.4 53.3751C824.5 54.2751 823.1 54.2751 822.3 53.3751C821.4 52.4751 821.4 51.0751 822.3 50.2751C823.2 49.3751 824.6 49.3751 825.4 50.2751C826.3 51.0751 826.3 52.4751 825.4 53.3751Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M753.6 36.1749C752.7 37.0749 751.3 37.0749 750.5 36.1749C749.6 35.2749 749.6 33.8749 750.5 33.0749C751.4 32.1749 752.8 32.1749 753.6 33.0749C754.5 33.8749 754.5 35.2749 753.6 36.1749Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M838.3 82.6749C837.4 83.5749 836 83.5749 835.2 82.6749C834.3 81.7749 834.3 80.3749 835.2 79.5749C836.1 78.6749 837.5 78.6749 838.3 79.5749C839.2 80.3749 839.2 81.7749 838.3 82.6749Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M851.3 66.9752C850.4 67.8752 849 67.8752 848.2 66.9752C847.3 66.0752 847.3 64.6752 848.2 63.8752C849.1 62.9752 850.5 62.9752 851.3 63.8752C852.1 64.7752 852.2 66.0752 851.3 66.9752Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M794.8 51.1749C793.9 52.0749 792.5 52.0749 791.7 51.1749C790.8 50.2749 790.8 48.8749 791.7 48.0749C792.6 47.1749 794 47.1749 794.8 48.0749C795.6 48.8749 795.6 50.2749 794.8 51.1749Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M792.5 24.1749C791.6 25.0749 790.2 25.0749 789.4 24.1749C788.5 23.2749 788.5 21.8749 789.4 21.0749C790.3 20.1749 791.7 20.1749 792.5 21.0749C793.4 21.9749 793.4 23.3749 792.5 24.1749Z"
                        fill="#0100FF" />
                    <path
                        d="M700.5 34.475C699.5 33.475 699.5 31.875 700.5 30.875C701.5 29.875 703.1 29.875 704.1 30.875C705.1 31.875 705.1 33.475 704.1 34.475C703.6 34.975 703 35.175 702.3 35.175C701.6 35.175 701 34.975 700.5 34.475ZM701 31.375C700.3 32.075 700.3 33.275 701 34.075C701.7 34.775 702.9 34.775 703.7 34.075C704.4 33.375 704.4 32.175 703.7 31.375C703.3 30.975 702.9 30.775 702.4 30.775C701.8 30.775 701.3 30.975 701 31.375Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M687.6 48.9752C686.7 49.8752 685.3 49.8752 684.5 48.9752C683.6 48.0752 683.6 46.6752 684.5 45.8752C685.4 44.9752 686.8 44.9752 687.6 45.8752C688.5 46.6752 688.5 48.0752 687.6 48.9752Z"
                        fill="#0100FF" />
                    <path opacity="0.9"
                        d="M685.4 9.775C684.5 10.675 683.1 10.675 682.3 9.775C681.4 8.875 681.4 7.475 682.3 6.675C683.2 5.775 684.6 5.775 685.4 6.675C686.2 7.575 686.2 8.875 685.4 9.775Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M892.5 166.275C892 165.775 891.8 165.175 891.8 164.475C891.8 163.775 892.1 163.175 892.5 162.675C893 162.175 893.6 161.975 894.3 161.975C895 161.975 895.6 162.275 896.1 162.675C896.6 163.175 896.8 163.775 896.8 164.475C896.8 165.175 896.5 165.775 896.1 166.275C895.6 166.775 895 166.975 894.3 166.975C893.6 167.075 893 166.775 892.5 166.275ZM892.9 163.175C892.5 163.575 892.3 163.975 892.3 164.475C892.3 164.975 892.5 165.475 892.9 165.775C893.6 166.475 894.8 166.475 895.6 165.775C896 165.375 896.2 164.975 896.2 164.475C896.2 163.975 896 163.475 895.6 163.175C895.2 162.775 894.8 162.575 894.3 162.575C893.7 162.675 893.3 162.875 892.9 163.175Z"
                        fill="#0100FF" />
                    <path
                        d="M802.5 107.975C801.8 107.975 801.1 107.675 800.6 107.175C799.6 106.175 799.6 104.475 800.6 103.475C801.1 102.975 801.8 102.675 802.5 102.675C803.2 102.675 803.9 102.975 804.4 103.475C804.9 103.975 805.2 104.675 805.2 105.375C805.2 106.075 804.9 106.775 804.4 107.275C803.9 107.775 803.2 107.975 802.5 107.975ZM801.3 104.075C800.6 104.775 800.6 105.875 801.3 106.575C802 107.275 803.1 107.275 803.8 106.575C804.1 106.275 804.3 105.775 804.3 105.275C804.3 104.775 804.1 104.375 803.8 103.975C803.4 103.575 803 103.475 802.5 103.475C802.1 103.575 801.6 103.775 801.3 104.075Z"
                        fill="#0100FF" />
                    <path
                        d="M817.7 98.1751C817.2 97.6751 817 97.0751 817 96.3751C817 95.6751 817.3 95.0751 817.7 94.5751C818.2 94.0751 818.8 93.7751 819.5 93.8751C820.2 93.8751 820.8 94.1751 821.3 94.5751C821.8 95.0751 822 95.6751 822 96.3751C822 97.0751 821.7 97.6751 821.3 98.1751C820.8 98.6751 820.2 98.8751 819.5 98.8751C818.8 98.9751 818.2 98.6751 817.7 98.1751ZM818.1 95.0751C817.7 95.4751 817.5 95.8751 817.5 96.3751C817.5 96.8751 817.7 97.3751 818.1 97.6751C818.5 98.0751 818.9 98.2751 819.4 98.2751C819.9 98.2751 820.4 98.0751 820.7 97.6751C821.1 97.2751 821.3 96.8751 821.3 96.3751C821.3 95.8751 821.1 95.3751 820.7 95.0751C820.3 94.6751 819.9 94.4751 819.4 94.4751C818.9 94.5751 818.5 94.7751 818.1 95.0751Z"
                        fill="#0100FF" />
                    <path
                        d="M961.8 221.875C960.9 222.775 959.5 222.775 958.7 221.875C957.8 220.975 957.8 219.575 958.7 218.775C959.6 217.875 961 217.875 961.8 218.775C962.7 219.575 962.7 220.975 961.8 221.875Z"
                        fill="#0100FF" />
                    <path
                        d="M980 201.175C979.1 202.075 977.7 202.075 976.9 201.175C976.1 200.275 976 198.875 976.9 198.075C977.8 197.275 979.2 197.175 980 198.075C980.8 198.975 980.8 200.375 980 201.175Z"
                        fill="#0100FF" />
                    <path
                        d="M997.4 190.175C996.5 191.075 995.1 191.075 994.3 190.175C993.4 189.275 993.4 187.875 994.3 187.075C995.2 186.175 996.6 186.175 997.4 187.075C998.3 187.875 998.3 189.275 997.4 190.175Z"
                        fill="#0100FF" />
                    <path
                        d="M1019.1 175.575C1018.2 176.475 1016.8 176.475 1016 175.575C1015.1 174.675 1015.1 173.275 1016 172.475C1016.9 171.575 1018.3 171.575 1019.1 172.475C1019.9 173.275 1019.9 174.675 1019.1 175.575Z"
                        fill="#0100FF" />
                    <path
                        d="M922.3 177.475C921.4 178.375 920 178.375 919.2 177.475C918.3 176.575 918.3 175.175 919.2 174.375C920.1 173.475 921.5 173.475 922.3 174.375C923.2 175.175 923.2 176.575 922.3 177.475Z"
                        fill="#0100FF" />
                    <path
                        d="M911.6 185.675C910.7 186.575 909.3 186.575 908.5 185.675C907.6 184.775 907.6 183.375 908.5 182.575C909.4 181.675 910.8 181.675 911.6 182.575C912.5 183.475 912.5 184.875 911.6 185.675Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M927.6 217.375C926.9 217.375 926.3 217.075 925.8 216.675C925.3 216.175 925.1 215.575 925.1 214.875C925.1 214.175 925.4 213.575 925.8 213.075C926.8 212.075 928.4 212.075 929.4 213.075C929.9 213.575 930.1 214.175 930.1 214.875C930.1 215.575 929.8 216.175 929.4 216.675C928.9 217.075 928.2 217.375 927.6 217.375ZM926.2 213.475C925.8 213.875 925.6 214.275 925.6 214.775C925.6 215.275 925.8 215.775 926.2 216.075C926.6 216.475 927 216.675 927.5 216.675C928 216.675 928.5 216.475 928.8 216.075C929.2 215.675 929.4 215.275 929.4 214.775C929.4 214.275 929.2 213.775 928.8 213.475C928.4 213.075 928 212.875 927.5 212.875C927.1 212.875 926.6 213.075 926.2 213.475Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M917.9 199.275C917 200.175 915.6 200.175 914.8 199.275C913.9 198.375 913.9 196.975 914.8 196.175C915.7 195.275 917.1 195.275 917.9 196.175C918.8 197.075 918.8 198.475 917.9 199.275Z"
                        fill="#0100FF" />
                    <path
                        d="M903.7 158.775C902.8 159.675 901.4 159.675 900.6 158.775C899.7 157.875 899.7 156.475 900.6 155.675C901.5 154.775 902.9 154.775 903.7 155.675C904.6 156.575 904.6 157.975 903.7 158.775Z"
                        fill="#0100FF" />
                    <path
                        d="M957.4 159.175C956.5 160.075 955.1 160.075 954.3 159.175C953.4 158.275 953.4 156.875 954.3 156.075C955.2 155.175 956.6 155.175 957.4 156.075C958.3 156.975 958.3 158.375 957.4 159.175Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M902.2 146.775C901.2 145.775 901.2 144.175 902.2 143.175C903.2 142.175 904.8 142.175 905.8 143.175C906.8 144.175 906.8 145.775 905.8 146.775C905.3 147.275 904.7 147.475 904 147.475C903.4 147.475 902.7 147.275 902.2 146.775ZM905.4 146.375C906.1 145.675 906.1 144.475 905.4 143.675C904.7 142.975 903.5 142.975 902.7 143.675C902.3 144.075 902.1 144.475 902.1 144.975C902.1 145.475 902.3 145.975 902.7 146.275C903.4 147.075 904.6 147.075 905.4 146.375Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M913.9 170.875C913 171.775 911.6 171.775 910.8 170.875C909.9 169.975 909.9 168.575 910.8 167.775C911.7 166.875 913.1 166.875 913.9 167.775C914.7 168.575 914.7 169.975 913.9 170.875Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M1081.3 367.275C1080.6 367.275 1079.9 366.975 1079.4 366.475C1078.9 365.975 1078.6 365.275 1078.6 364.575C1078.6 363.875 1078.9 363.175 1079.4 362.675C1079.9 362.175 1080.5 361.875 1081.3 361.875C1082 361.875 1082.7 362.175 1083.2 362.675C1083.7 363.175 1084 363.875 1084 364.575C1084 365.275 1083.7 365.975 1083.2 366.475C1082.7 366.975 1082 367.275 1081.3 367.275ZM1080.1 363.375C1079.8 363.675 1079.6 364.175 1079.6 364.675C1079.6 365.175 1079.8 365.575 1080.1 365.975C1080.4 366.275 1080.9 366.475 1081.4 366.475C1081.9 366.475 1082.3 366.275 1082.7 365.975C1083 365.675 1083.2 365.175 1083.2 364.675C1083.2 364.175 1083 363.775 1082.7 363.375C1082.4 363.075 1081.9 362.875 1081.4 362.875C1080.8 362.875 1080.4 363.075 1080.1 363.375Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M1072.3 351.475C1071.3 350.475 1071.3 348.875 1072.3 347.875C1073.3 346.875 1074.9 346.875 1075.9 347.875C1076.9 348.875 1076.9 350.475 1075.9 351.475C1075.4 351.975 1074.8 352.175 1074.1 352.175C1073.4 352.275 1072.8 351.975 1072.3 351.475ZM1075.4 351.075C1076.1 350.375 1076.1 349.175 1075.4 348.375C1074.7 347.675 1073.5 347.675 1072.7 348.375C1072.3 348.775 1072.1 349.175 1072.1 349.675C1072.1 350.175 1072.3 350.675 1072.7 350.975C1073.4 351.875 1074.7 351.875 1075.4 351.075Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M1067.8 368.275C1067.3 367.775 1067.1 367.175 1067.1 366.475C1067.1 365.775 1067.4 365.175 1067.8 364.675C1068.3 364.175 1068.9 363.975 1069.6 363.975C1070.3 363.975 1070.9 364.275 1071.4 364.675C1072.4 365.675 1072.4 367.275 1071.4 368.275C1070.9 368.775 1070.3 368.975 1069.6 368.975C1069 369.075 1068.3 368.775 1067.8 368.275ZM1071 367.875C1071.4 367.475 1071.6 367.075 1071.6 366.575C1071.6 366.075 1071.4 365.575 1071 365.275C1070.6 364.875 1070.2 364.675 1069.7 364.675C1069.2 364.675 1068.7 364.875 1068.4 365.275C1068 365.675 1067.8 366.075 1067.8 366.575C1067.8 367.075 1068 367.575 1068.4 367.875C1069 368.675 1070.2 368.675 1071 367.875Z"
                        fill="#0100FF" />
                    <path opacity="0.2"
                        d="M1060 354.075C1059 353.075 1059 351.475 1060 350.475C1061 349.475 1062.6 349.475 1063.6 350.475C1064.6 351.475 1064.6 353.075 1063.6 354.075C1063.1 354.575 1062.5 354.775 1061.8 354.775C1061.1 354.775 1060.5 354.575 1060 354.075ZM1060.4 350.875C1059.7 351.575 1059.7 352.775 1060.4 353.575C1061.1 354.275 1062.3 354.275 1063.1 353.575C1063.8 352.875 1063.8 351.675 1063.1 350.875C1062.7 350.475 1062.3 350.275 1061.8 350.275C1061.2 350.375 1060.8 350.575 1060.4 350.875Z"
                        fill="#0100FF" />
                    <path
                        d="M920.1 158.775C919.2 159.675 917.8 159.675 917 158.775C916.1 157.875 916.1 156.475 917 155.675C917.9 154.775 919.3 154.775 920.1 155.675C921 156.575 921 157.975 920.1 158.775Z"
                        fill="#0100FF" />
                    <path opacity="0.63"
                        d="M874.5 148.575C874 148.075 873.7 147.375 873.7 146.675C873.7 145.975 874 145.275 874.5 144.775C875.5 143.775 877.2 143.775 878.2 144.775C878.7 145.275 879 145.975 879 146.675C879 147.375 878.7 148.075 878.2 148.575C877.7 149.075 877 149.375 876.3 149.375C875.6 149.275 875 149.075 874.5 148.575ZM877.6 147.975C878.3 147.275 878.3 146.175 877.6 145.475C876.9 144.775 875.8 144.775 875.1 145.475C874.4 146.175 874.4 147.275 875.1 147.975C875.7 148.675 876.9 148.675 877.6 147.975Z"
                        fill="#0100FF" />
                    <path
                        d="M854.6 151.975C853.9 151.975 853.2 151.675 852.7 151.175C852.2 150.675 851.9 149.975 851.9 149.275C851.9 148.575 852.2 147.875 852.7 147.375C853.7 146.375 855.4 146.375 856.4 147.375C856.9 147.875 857.2 148.575 857.2 149.275C857.2 149.975 856.9 150.675 856.4 151.175C856 151.675 855.3 151.975 854.6 151.975ZM853.3 148.075C853 148.375 852.8 148.875 852.8 149.375C852.8 149.875 853 150.275 853.3 150.675C853.6 150.975 854.1 151.175 854.6 151.175C855.1 151.175 855.5 150.975 855.9 150.675C856.6 149.975 856.6 148.875 855.9 148.175C855.5 147.775 855.1 147.675 854.6 147.675C854.2 147.475 853.7 147.675 853.3 148.075Z"
                        fill="#0100FF" />
                    <path
                        d="M967 209.775C966.3 209.775 965.6 209.475 965.1 208.975C964.6 208.475 964.3 207.775 964.3 207.075C964.3 206.375 964.6 205.675 965.1 205.175C966.1 204.175 967.8 204.175 968.8 205.175C969.3 205.675 969.6 206.375 969.6 207.075C969.6 207.775 969.3 208.475 968.8 208.975C968.4 209.475 967.7 209.775 967 209.775ZM965.7 205.875C965.4 206.175 965.2 206.675 965.2 207.175C965.2 207.675 965.4 208.075 965.7 208.475C966 208.775 966.5 208.975 967 208.975C967.5 208.975 967.9 208.775 968.3 208.475C969 207.775 969 206.675 968.3 205.975C967.9 205.575 967.5 205.475 967 205.475C966.5 205.375 966.1 205.475 965.7 205.875Z"
                        fill="#0100FF" />
                    <path
                        d="M787.5 97.9752C786.6 98.8752 785.2 98.8752 784.4 97.9752C783.5 97.0752 783.5 95.6752 784.4 94.8752C785.3 93.9752 786.7 93.9752 787.5 94.8752C788.4 95.7752 788.4 97.1752 787.5 97.9752Z"
                        fill="#0100FF" />
                    <path
                        d="M799.7 92.9752C798.8 93.8752 797.4 93.8752 796.6 92.9752C795.7 92.0752 795.7 90.6752 796.6 89.8752C797.5 88.9752 798.9 88.9752 799.7 89.8752C800.5 90.6752 800.5 92.0752 799.7 92.9752Z"
                        fill="#0100FF" />
                </g>
            </g>
        </svg>
    </div>
    <?php if( have_rows('talk_to_expert') ): ?>
        <?php while( have_rows('talk_to_expert') ): the_row(); ?>
            <div class="wrapper">
                <?php $talktoimage = get_sub_field('section_icon');
                    if( !empty( $talktoimage ) ): ?>
                    <img src="<?php echo esc_url($talktoimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($talktoimage['alt']); ?>" />
                <?php endif; ?>
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <p class="font24 colorG"><?php echo get_sub_field('section_description'); ?></p>
                <a href="" class="cta1 sparkleBtn" data-toggle="modal" data-target="#expert"><?php echo get_sub_field('cta_text'); ?></a>
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

<?php if( have_rows('enterprises_section') ): ?>
    <?php while( have_rows('enterprises_section') ): the_row(); ?>
        <section class="enterprisesSection CLOUDenterprisesSection" style="background: url(<?php echo get_sub_field('background_image'); ?>);background-repeat: no-repeat;background-position: center;">
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
        scrollTop: $("#cloudsection").offset().top - 50}
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
    if ($('#cloudsection').isInViewport()){
        $('.ai-ml-solution').addClass('active');
        $('.ml-solutionInnerAfter').addClass('active');
    }
    if ($('#talkToExpertCloudSection').isInViewport()) {
        if ($("#cloud-talk-Anim").length != 0) {
            cloudTalkAnim = new Vivus('cloud-talk-Anim', {
                type: 'delayed',
                duration: 50,
                start: 'manual'
            });
            cloudTalkAnim.play();
        }
    } else {
        cloudTalkAnim.stop();
    }
});


if ($("#cloud-banner").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('cloud-banner'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/cloud-banner.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "cloud-banner", // Name for future reference. Optional.
  });
}
if ($("#cloud-banner-mob").length) {
  var robotAnim = lottie.loadAnimation({
    container: document.getElementById('cloud-banner-mob'), // Required
    path: site_url + '/wp-content/themes/affine/js/json/cloud-banner-mob.json', // Required
    renderer: 'svg', // Required
    loop: false, // Optional
    autoplay: true, // Optional
    name: "cloud-banner-mob", // Name for future reference. Optional.
  });
}
</script>