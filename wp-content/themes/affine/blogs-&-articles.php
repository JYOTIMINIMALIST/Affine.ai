<?php get_header(); /*Template Name: Blogs Articles */ ?>

<section class="partnershipBanner">
    <div class="caseStudiesSlider">
        <?php
            $args = array('post_type' => 'post','posts_per_page' => 3,'order' => 'DESC', 'meta_key'  => 'banner_blogs', 'meta_value'  => 'yes');
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <div class="caseStudiesInnerSlider">
                <div class="partnershipBgImg">
                    <img src="<?php echo get_field('banner_image'); ?>" alt="">
                    <div class="contactBannerOverlayTwo"></div>
                    <div class="contactBannerOverlayThree"></div>
                    <div class="contactBannerOverlayFour"></div>
                    <div class="contactBannerOverlayFive"></div>
                    <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText whitepaperBannerText">
                        <div class="wrapper">
                            <h1 class="font80 caslonGraphiqueEF"><?php the_title(); ?></h1>
                            <p class="font24 colorG"><?php $content = wp_strip_all_tags(get_the_content()); echo substr($content, 0, 100). '...'; ?></p>
                            <div class="main-div">
                                <div class="div-parts part1">
                                    <div>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/banner-img1.png" alt="">
                                    </div>
                                    <div class="parts-text">
                                        <h3 class="font24 commonsSemiBold colorG"><?php echo get_field('blog_publish_date'); ?></h3>
                                    </div>
                                </div>
                                <div class="div-parts part2">
                                    <?php if( have_rows('author_details') ): ?>
                                        <?php while( have_rows('author_details') ): the_row(); ?>
                                            <div class="authorImgListing">
                                                <?php $authorimage = get_sub_field('author_image');
                                                    if (!empty($authorimage)) : ?>
                                                    <img src="<?php echo esc_url($authorimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorimage['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="parts-text">
                                                <h3 class="font24 commonsSemiBold colorG"><?php echo get_sub_field('author_name'); ?></h3>
                                                <h4 class="font20 colorLG"><?php echo get_sub_field('author_designation'); ?></h4>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <a href="<?php the_permalink();?>" class="cta1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <a href="#chooseTopicSection" class="scrollDown">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.svg" alt="">
    </a>
</section>



<section class="exploreSection recommendedBlogSection" id="chooseTopicSection">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_field('recommended_heading'); ?></h2>
        <div class="exploreHolder">
            <div class="exploreSlider">
                <?php
                    $args = array('post_type' => 'post','posts_per_page' => -1,'order' => 'DESC', 'meta_key'  => 'recomended_blogs', 'meta_value'  => 'yes');
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                    <div class="exploreInnerSlider">
                        <a href="<?php the_permalink();?>">
                        <div class="exploreContent recommendedContent">
                            <div class="whitepaperTopicImg">

                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                                <p class="font16"><?php echo get_field('blog_publish_date'); ?></p>
                                <img src="<?php bloginfo('template_directory'); ?>/images/news-arrow.png" alt="" class="choseTopicArrow">
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
                <?php endwhile; wp_reset_postdata(); ?>
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


<section class="chooseTopicSection">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG">Choose your topic</h2>
        <div class="mobilechooseTopicFilter">
            <div class="showFilterMob">
                <img src="<?php bloginfo('template_directory');?>/images/all-topic.png" alt="">ALL
            </div>
            <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="" class="downArrow">
        </div>
        <ul id="filterOptions">
            <li class="active"><a class="all"><img src="<?php bloginfo('template_directory');?>/images/all-topic.png" alt=""> All</a></li>
            <?php
                $terms = get_terms("category");
                $count = count($terms);
                echo '';
                if ( $count > 0 ){
                    foreach ( $terms as $term ) {
                        
                        $termname = $term->name;
                        $termslug = strtolower($term->slug);
                        $icon = get_field('category_image', $term->taxonomy . '_' . $term->term_id);
                        echo '<li><a class="'.$termslug.'"><img src="'.$icon.'" alt="">'.$termname.'</a></li>';
                    }
                }
                
            ?>
        </ul>

        <div class="choseTopicHolder" id="ourHolder">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('post_type' => 'post','posts_per_page' => 6, 'paged' => $paged,'order' => 'DESC');
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) : $the_query->the_post();

                $terms = get_the_terms( $post->ID, 'category' );
                if ( $terms && ! is_wp_error( $terms ) ) : 

                $links = array();

                foreach ( $terms as $term ) {
                $links[] = $term->slug;
                }
                $tax_links = join( " ", str_replace(' ', '-', $links));          
                $tax = strtolower($tax_links);
                else :    
                $tax = '';                    
                endif; 
            ?>
                     <div class="choseTopicWhitepaperContent item <?php echo $tax ?>">
                <a href="<?php the_permalink();?>">
                <div class="whitepaperTopicImg">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="">
                    <p class="font16"><?php echo get_field('blog_publish_date'); ?></p>
                    <img src="<?php bloginfo('template_directory'); ?>/images/news-arrow.png" alt="" class="choseTopicArrow">
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
            </a>
            </div>
                <?php endwhile; ?>
                <p class="has-no-post" style="display:none;">Data Not Found ! </p>

        </div>
    </div>

      <div class='page-nav-container'>
                <?php wp_pagenavi(array('query' => $the_query)); ?>
            </div>
            <?php wp_reset_postdata(); ?>
</section>






<section class="deliverSection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <?php if( have_rows('discover_truth') ): ?>
        <?php while( have_rows('discover_truth') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('discover_truth_heading'); ?></h2>
                <p class="font24 colorG"><?php echo get_sub_field('discover_truth_description'); ?>
                </p>
                <a href="<?php echo get_sub_field('discover_cta_link'); ?>" class="cta1 sparkleBtn"><?php echo get_sub_field('discover_cta'); ?></a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<script type='text/javascript'>
jQuery('#filterOptions li a').click(function() {
jQuery(function() {
    var count=0;
    var numItems = $('.item').length;
    jQuery(".item").each(function() {
        if(jQuery(this).css("display")=='none'){
            count++;}
        });
     //alert("total display none items :"+count);
    if(count<numItems){
        $('.has-no-post').css('display', 'none');
      //  $('#librarCardHolder').css('margin-bottom', '0px');
    } else {
        $('.has-no-post').css('display', 'block');
        //$('#librarCardHolder').css('margin-bottom', '100px');
    }
    });
});
</script>
<?php get_footer(); ?>
<script>
$(".scrollDown").click(function() {
    $('html,body').animate({
        scrollTop: $("#chooseTopicSection").offset().top - 50}
    );
});
</script>