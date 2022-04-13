<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package affine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
        integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.min.css">

    <script type="text/javascript">
    var site_url = "<?php echo get_site_url(); ?>";
    </script>

    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/whitepaper.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<input type="hidden" value="<?php echo admin_url('admin-ajax.php'); ?>" id="getURL">
    <?php wp_body_open(); ?>
    <?php if(is_front_page()){?>
    <div class="loaderScreen">
        <div id="loaderAnim"></div>
    </div>
    <div class="bodyHolder homePageHolder">
        <?php } else { ?>
        <?php } ?>

        <header class="header" id="header">
            <div class="logoMenuHolder">
<!--                 <a href="<?php echo get_site_url(); ?>" class="logo">
                    <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="">
                </a> -->
				<?php the_custom_logo();?>
                <?php if (is_page('about-us')||is_page('partnership')||is_page('academia')) : ?>
                <div class="aboutUsMenu">
					<?php
            				wp_nav_menu([
	              				'menu' => 'affinopedia',
	          					'theme_location' => 'affinopedia-menu',
	              				'menu_id' => false,
	              				'menu_class' => 'tabs',
            				]);
            			?>
                </div>
                <?php elseif (is_page('case-studies')||is_page('webinars')||is_page('whitepaper')||is_page('videos')||is_page('blogs-articles')) : ?>
                <div class="aboutUsMenu thoughtBoxMenu">
					<?php
            				wp_nav_menu([
	              				'menu' => 'thoughts-unboxed',
	          					'theme_location' => 'thoughts-unboxed-menu',
	              				'menu_id' => false,
	              				'menu_class' => 'tabs',
            				]);
            			?>
                </div>
                <?php elseif (is_page('we-are-affine')||is_page('why-join-us')||is_page('opportunity')) : ?>
                <div class="aboutUsMenu">
					<?php
            				wp_nav_menu([
	              				'menu' => 'livewire-action',
	          					'theme_location' => 'livewire-action-menu',
	              				'menu_id' => false,
	              				'menu_class' => 'tabs',
            				]);
            			?>
                </div>
                <?php endif; ?>
            </div>
            <?php if( have_rows('custom_header_menu','option') ): ?>
        <?php while( have_rows('custom_header_menu','option') ): the_row(); ?>
            <div class="menuHolder">
            <?php if( have_rows('we_are_hiring','option') ): ?>
            <?php while( have_rows('we_are_hiring','option') ): the_row(); ?>
                <a href="<?php echo get_sub_field('hiring_cta_link','option'); ?>" class="contactUsCta sparkleBtn"><?php echo get_sub_field('hiring_cta_text','option'); ?></a>
            <?php endwhile; ?>
            <?php endif; ?>
                <div class="hamburgerHolder">
                    <div class="menu btn2" data-menu="2">
                        <div class="icon"></div>
                    </div>
                </div>
            </div>
            <div id="menu" class="">
                <div class="main-nav">
                    <div class="fixedMenu">
                        <ul class="tabs">
                            <li class="tablinks active" onclick="openTab(event, 'tab1')">
                                <?php if( have_rows('innovation_factory','option') ): ?>
                                <?php while( have_rows('innovation_factory','option') ): the_row(); ?>
                                    <span><?php echo get_sub_field('number','option'); ?></span>
                                    <h3 class="menuText"><?php echo get_sub_field('tab_heading','option'); ?></h3>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </li>
                            <li class="tablinks" onclick="openTab(event, 'tab2')">
                                <?php if( have_rows('industry_dominance','option') ): ?>
                                <?php while( have_rows('industry_dominance','option') ): the_row(); ?>
                                    <span><?php echo get_sub_field('number','option'); ?></span>
                                    <h3 class="menuText"><?php echo get_sub_field('tab_heading','option'); ?></h3>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </li>
                            <li class="tablinks" onclick="openTab(event, 'tab3')">
                                <?php if( have_rows('thoughts_unboxed','option') ): ?>
                                <?php while( have_rows('thoughts_unboxed','option') ): the_row(); ?>
                                    <span><?php echo get_sub_field('number','option'); ?></span>
                                    <h3 class="menuText"><?php echo get_sub_field('tab_heading','option'); ?></h3>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </li>
                            <li class="tablinks" onclick="openTab(event, 'tab4')">
                                <?php if( have_rows('livewire_action','option') ): ?>
                                <?php while( have_rows('livewire_action','option') ): the_row(); ?>
                                    <span><?php echo get_sub_field('number','option'); ?></span>
                                    <h3 class="menuText"><?php echo get_sub_field('tab_heading','option'); ?></h3>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </li>
                            <li class="tablinks" onclick="openTab(event, 'tab5')">
                                <?php if( have_rows('affinopedia','option') ): ?>
                                <?php while( have_rows('affinopedia','option') ): the_row(); ?>
                                    <span><?php echo get_sub_field('number','option'); ?></span>
                                    <h3 class="menuText"><?php echo get_sub_field('tab_heading','option'); ?></h3>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </li>
                            <li class="tablinks">
                                <?php if( have_rows('contact_us','option') ): ?>
                                <?php while( have_rows('contact_us','option') ): the_row(); ?>
                                    <span><?php echo get_sub_field('number','option'); ?></span>
                                    <a href="<?php echo get_sub_field('cta_link','option'); ?>" class=""><?php echo get_sub_field('cta_text','option'); ?></a>  
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="fixedSubMenu">
                        <div class="tab_container">
                            <div id="tab1" class="tabcontent" style="display: block;">
                                <?php if( have_rows('innovation_factory','option') ): ?>
                                <?php while( have_rows('innovation_factory','option') ): the_row(); ?>  
                                    <div class="headerMenuSvg">
                                        <?php echo get_sub_field('background_svg_image','option'); ?>
                                    </div>
                                    <ul>
                                        <?php if( have_rows('menu_content','option') ): ?>
                                        <?php while( have_rows('menu_content','option') ): the_row(); ?>
                                            <li>
                                                <?php $menuicon = get_sub_field('icon','option');
                                                if( !empty( $menuicon ) ): ?>
                                                    <img src="<?php echo esc_url($menuicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($menuicon['alt']); ?>" class="menuIcon" />
                                                <?php endif; ?>
                                                <a href="<?php echo get_sub_field('menu_link','option'); ?>" class="menuItem"><?php echo get_sub_field('menu_text','option'); ?></a>
                                            </li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div id="tab2" class="tabcontent">
                                <?php if( have_rows('industry_dominance','option') ): ?>
                                <?php while( have_rows('industry_dominance','option') ): the_row(); ?>
                                    <div class="headerMenuSvg">
                                        <?php echo get_sub_field('background_svg_image','option'); ?>
                                    </div>
                                    <ul>

                                        <?php if( have_rows('menu_content','option') ): ?>
                                        <?php while( have_rows('menu_content','option') ): the_row(); ?>                    
                                            <li>
                                                <?php $menuicon = get_sub_field('icon','option');
                                                if( !empty( $menuicon ) ): ?>
                                                    <img src="<?php echo esc_url($menuicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($menuicon['alt']); ?>" class="menuIcon" />
                                                <?php endif; ?>
                                                <a href="<?php echo get_sub_field('menu_link','option'); ?>" class="menuItem"><?php echo get_sub_field('menu_text','option'); ?></a>
                                            </li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div id="tab3" class="tabcontent">
                                <?php if( have_rows('thoughts_unboxed','option') ): ?>
                                <?php while( have_rows('thoughts_unboxed','option') ): the_row(); ?>
                                    <div class="headerMenuSvg">
                                        <?php echo get_sub_field('background_svg_image','option'); ?>
                                    </div>
                                    <ul>
                                        <?php if( have_rows('menu_content','option') ): ?>
                                        <?php while( have_rows('menu_content','option') ): the_row(); ?>
                                            <li>
                                                <?php $menuicon = get_sub_field('icon','option');
                                                if( !empty( $menuicon ) ): ?>
                                                    <img src="<?php echo esc_url($menuicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($menuicon['alt']); ?>" class="menuIcon" />
                                                <?php endif; ?>
                                                <a href="<?php echo get_sub_field('menu_link','option'); ?>" class="menuItem"><?php echo get_sub_field('menu_text','option'); ?></a>
                                            </li>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div id="tab4" class="tabcontent">
                                <?php if( have_rows('livewire_action','option') ): ?>
                                <?php while( have_rows('livewire_action','option') ): the_row(); ?>
                                    <div class="headerMenuSvg">
                                            <?php echo get_sub_field('background_svg_image','option'); ?>
                                    </div>
                                    <div class="innerMenu">
                                        <h4><?php echo get_sub_field('description','option'); ?></h4>
                                        <a href="<?php echo get_sub_field('cta_link','option'); ?>"><?php echo get_sub_field('cta_text','option'); ?></a>
                                    </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div id="tab5" class="tabcontent">
                                <?php if( have_rows('affinopedia','option') ): ?>
                                <?php while( have_rows('affinopedia','option') ): the_row(); ?>
                                    <div class="headerMenuSvg">
                                            <?php echo get_sub_field('background_svg_image','option'); ?>
                                    </div>
                                    <div class="innerMenu">
                                        <p><?php echo get_sub_field('sub_text','option'); ?></p>
                                        <h4><?php echo get_sub_field('description','option'); ?></h4>
                                        <a href="<?php echo get_sub_field('cta_link','option'); ?>"><?php echo get_sub_field('cta_text','option'); ?></a>
                                    </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-footer">
                    <div class="navInnerFooter">
                        <?php if( have_rows('newsroom_social','option') ): ?>
                        <?php while( have_rows('newsroom_social','option') ): the_row(); ?>
                            <a href="<?php echo get_sub_field('heading_cta_link','option'); ?>" class="font24 commonsMedium"><?php echo get_sub_field('heading','option'); ?></a>
                            <div class="">
                                <ul>
                                    <?php if( have_rows('social_content','option') ): ?>
                                    <?php while( have_rows('social_content','option') ): the_row(); ?>
                                        <li>
                                            <a href="<?php echo get_sub_field('cta_link','option'); ?>" target="_blank">
                                            <?php echo get_sub_field('icon_svg','option'); ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mobileMenu">
                    <div class="wrapper">
                        <div class="mobileInnerMenu">
                            <?php if( have_rows('innovation_factory','option') ): ?>
                            <?php while( have_rows('innovation_factory','option') ): the_row(); ?>
                                <h3 class="mobileMenuText togglerIcon"><?php echo get_sub_field('tab_heading','option'); ?><span class='toggle'></span></h3>
                                <ul class="mobileInnerSubMenu">
                                    <?php if( have_rows('menu_content','option') ): ?>
                                    <?php while( have_rows('menu_content','option') ): the_row(); ?>
                                        <li>
                                            <?php $menuicon = get_sub_field('icon','option');
                                            if( !empty( $menuicon ) ): ?>
                                                <img src="<?php echo esc_url($menuicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($menuicon['alt']); ?>" />
                                            <?php endif; ?>
                                            <a href="<?php echo get_sub_field('menu_link','option'); ?>" class="mobileMenuItem"><?php echo get_sub_field('menu_text','option'); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="mobileInnerMenu">
                            <?php if( have_rows('industry_dominance','option') ): ?>
                            <?php while( have_rows('industry_dominance','option') ): the_row(); ?>
                                <h3 class="mobileMenuText togglerIcon"><?php echo get_sub_field('tab_heading','option'); ?><span class='toggle'></span></h3>
                                <ul class="mobileInnerSubMenu">
                                    <?php if( have_rows('menu_content','option') ): ?>
                                    <?php while( have_rows('menu_content','option') ): the_row(); ?>
                                        <li>
                                            <?php $menuicon = get_sub_field('icon','option');
                                            if( !empty( $menuicon ) ): ?>
                                                <img src="<?php echo esc_url($menuicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($menuicon['alt']); ?>" />
                                            <?php endif; ?>
                                            <a href="<?php echo get_sub_field('menu_link','option'); ?>" class="mobileMenuItem"><?php echo get_sub_field('menu_text','option'); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="mobileInnerMenu">
                            <?php if( have_rows('thoughts_unboxed','option') ): ?>
                            <?php while( have_rows('thoughts_unboxed','option') ): the_row(); ?>
                                <h3 class="mobileMenuText togglerIcon"><?php echo get_sub_field('tab_heading','option'); ?><span class='toggle'></span></h3>
                                <ul class="mobileInnerSubMenu">
                                    <?php if( have_rows('menu_content','option') ): ?>
                                    <?php while( have_rows('menu_content','option') ): the_row(); ?>
                                        <li>
                                            <?php $menuicon = get_sub_field('icon','option');
                                            if( !empty( $menuicon ) ): ?>
                                                <img src="<?php echo esc_url($menuicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($menuicon['alt']); ?>" />
                                            <?php endif; ?>
                                            <a href="<?php echo get_sub_field('menu_link','option'); ?>" class="mobileMenuItem"><?php echo get_sub_field('menu_text','option'); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="mobileInnerMenu">
                            <?php if( have_rows('livewire_action','option') ): ?>
                            <?php while( have_rows('livewire_action','option') ): the_row(); ?>
                                <h3 class="mobileMenuText togglerIcon"><?php echo get_sub_field('tab_heading','option'); ?><span class='toggle'></span></h3>
                                <div class="innerMobileMenuText mobileInnerSubMenu">
                                    <h4><?php echo get_sub_field('description','option'); ?></h4>
                                    <a href="<?php echo get_sub_field('cta_link','option'); ?>"><?php echo get_sub_field('cta_text','option'); ?></a>
                                </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="mobileInnerMenu">
                            <?php if( have_rows('affinopedia','option') ): ?>
                            <?php while( have_rows('affinopedia','option') ): the_row(); ?>
                                <h3 class="mobileMenuText togglerIcon"><?php echo get_sub_field('tab_heading','option'); ?><span class='toggle'></span></h3>
                                <div class="innerMobileMenuText mobileInnerSubMenu">
                                    <p><?php echo get_sub_field('sub_text','option'); ?></p>
                                    <h4><?php echo get_sub_field('description','option'); ?></h4>
                                    <a href="<?php echo get_sub_field('cta_link','option'); ?>"><?php echo get_sub_field('cta_text','option'); ?></a>
                                </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="mobileInnerMenu">
                            <?php if( have_rows('contact_us','option') ): ?>
                            <?php while( have_rows('contact_us','option') ): the_row(); ?>
                                <a class="mobileMenuText" href="<?php echo get_sub_field('cta_link','option'); ?>" class=""><?php echo get_sub_field('cta_text','option'); ?></a>  
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </header>