<?php get_header();

global $wpdb;
$post_id=get_the_ID();  // 6575
$imgurl = get_field('whitepaper_pdf',$post_id);

  //$strPdfPath=str_replace('http://localhost/affine/wp-content/uploads/','',$imgurl);
   
  $img_splitname = explode('/',$imgurl); 
  $pagepdf_name=$img_splitname[count($img_splitname)-1]


?>

<section class="caseBanner whitepaperPostBanner">
    <div class="caseInner">
        <?php $bannerdesktop = get_field('top_banner_image');
            if( !empty( $bannerdesktop ) ): ?>
            <img src="<?php echo esc_url($bannerdesktop['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerdesktop['alt']); ?>" class="desktopBanner" />
        <?php endif; ?>
        <?php $bannermobile = get_field('mobile_banner_image');
            if( !empty( $bannermobile ) ): ?>
            <img src="<?php echo esc_url($bannermobile['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannermobile['alt']); ?>" class="mobileBanner" />
        <?php endif; ?>
        <div class="contactBannerOverlayTwo"></div>
        <div class="contactBannerOverlayThree"></div>
        <div class="contactBannerOverlayFour"></div>
        <div class="contactBannerOverlayFive"></div>
        <?php if( have_rows('modal_pop_up_content') ): ?>
            <?php while( have_rows('modal_pop_up_content') ): the_row(); ?>
                <div class="caseBannerTextHolder">
                    <div class="wrapper">
                        <div class="caseBannerText">
                            <h4 class="font40 colorG commonsLight"><?php echo get_sub_field('category_name'); ?></h4>
                            <h1 class="font60 caslonGraphiqueEF"><?php the_title(); ?></h1>
                            <h3 class="font24 colorG"><?php the_content(); ?></h3>
                        </div>
                        <div class="caseForm">
                            <div class="caseFormHead">
                                <h3 class="font48 commonsMedium"><?php echo get_sub_field('form_heading'); ?></h3>
                            </div>
                            <?php echo get_sub_field('form_short_code'); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php if( have_rows('modal_pop_up_content') ): ?>
        <?php while( have_rows('modal_pop_up_content') ): the_row(); ?>
            <?php $challenge_heading = get_sub_field('challenge_heading');
                if( !empty( $challenge_heading ) ): ?>
                <section class="challengesSection whitepaperChallengesSection">
                    <div class="wrapper">
                        <div class="challengesHolder">
                            <div class="challengesHeading">
                                <h2 class="font60 caslonGraphiqueEF"><?php echo $challenge_heading ?></h2>
                                <h3 class="font16 colorG"><?php echo get_sub_field('challenge_description'); ?></h3>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('author_details') ): ?>
    <?php while( have_rows('author_details') ): the_row(); ?>
        <section class="whitepaperAuthorSection">
            <div class="wrapper">
                <div class="authorSlider">
                    <div class="author">
                        <div class="details-author">
                            <?php $authorimage = get_sub_field('author_image');
                                if (!empty($authorimage)) : ?>
                                <img src="<?php echo esc_url($authorimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($authorimage['alt']); ?>" />
                            <?php endif; ?>
                            <div class="AuthorInfo">
                                <h6 class="author-h6">About Author</h6>
                                <h2 class="font30 colorG author-h2 "><?php echo get_sub_field('author_description'); ?></h2>
                                <p class="font24 colorG author-p commonsBold"><?php echo get_sub_field('author_name'); ?></p>
                            </div>
                        </div>
                        <div class="social-icon-nw">
                            <?php if( have_rows('social_icons') ): ?>
                            <?php while( have_rows('social_icons') ): the_row(); ?>
                                <a href="<?php echo get_sub_field('cta_link'); ?>">
                                    <img src="<?php echo get_sub_field('icons'); ?>" alt="">
                                </a>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>    

<section class="exploreSection whitepaperExploreSection">
    <div class="wrapper">
        <div class="exploreHolder">
            <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_field('related_section_heading'); ?></h2>
            <div class="exploreSlider">
                <?php
                    $related_post = get_field('related_post');
                    if ($related_post) : ?>
                    <?php foreach ($related_post as $post) : setup_postdata($post); ?>
                        <div class="exploreInnerSlider">
                            <div class="exploreContent">
                                <div class="exploreImg">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="">
                                </div>
                                <div class="exploreText">
                                    <h4 class="font24 commonsSemiBold"><?php the_title(); ?></h4>
                                    <a href="<?php the_permalink();?>" class="font16 commonsMedium">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
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


<?php get_footer(); ?>

<script type="text/javascript">

    var url='<?php echo $imgurl; ?>';
    var pdffile_name='<?php echo $pagepdf_name?$pagepdf_name:"note.pdf" ?>';
   
	
    
$('#download').click(function()
{
  var fname = document.getElementById("fname").value;
   var emailid = document.getElementById("fname").value;
	var cname = document.getElementById("cname").value;
	
	//	console.log(fname);
      if ((fname != '') && (emailid != '') && (cname != '')) {

		const a = document.createElement('a');
		a.style.display = 'none';
		a.href = url;
		// the filename you want
		a.download = pdffile_name;
		document.body.appendChild(a);
		a.click();
		window.URL.revokeObjectURL(url);
	}
	else{
		alert("first  fill all  fields");
	}
 
}); 
	 
   
    

</script>
