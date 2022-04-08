<?php get_header(); ?>

<?php
global $wpdb;
$post_id=get_the_ID();
//echo $post_id;
?>


<section class="caseBanner">
    <?php if( have_rows('modal_pop_up_content') ): ?>
        <?php while( have_rows('modal_pop_up_content') ): the_row(); ?>
            <div class="caseInner">
                <?php $bannerdesktop = get_sub_field('modal_banner_image');
                    if( !empty( $bannerdesktop ) ): ?>
                    <img src="<?php echo esc_url($bannerdesktop['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerdesktop['alt']); ?>" class="caseBannerImg" />
                <?php endif; ?>
                <?php $bannermobile = get_sub_field('modal_banner_image_mobile');
                    if( !empty( $bannermobile ) ): ?>
                    <img src="<?php echo esc_url($bannermobile['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannermobile['alt']); ?>" class="caseBannerImgMobile" />
                <?php endif; ?>
                <div class="contactBannerOverlayTwo"></div>
                <div class="contactBannerOverlayThree"></div>
                <div class="contactBannerOverlayFour"></div>
                <div class="contactBannerOverlayFive"></div>
                <div class="caseBannerTextHolder">
                    <div class="wrapper">
                        <div class="caseBannerText">
                            <h4 class="font40 colorG commonsLight"><?php echo get_sub_field('category_name'); ?></h4>
                            <h1 class="font60 caslonGraphiqueEF"><?php the_title(); ?></h1>
                            <h3 class="font24 colorG"><?php the_content(); ?></h3>
                        </div>
                        <div class="caseForm caseStudiesFormDiv">
                            <div class="caseFormHead">
                                <h3 class="font48 commonsMedium"><?php echo get_sub_field('form_heading'); ?></h3>
                            </div>
                            <?php echo get_sub_field('form_short_code'); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="challengesSection">
    <?php if( have_rows('modal_pop_up_content') ): ?>
        <?php while( have_rows('modal_pop_up_content') ): the_row(); ?>
            <div class="wrapper">
                <div class="challengesHolder">
                    <div class="challengesHeading">
                        <h2 class="font60 caslonGraphiqueEF"><?php echo get_sub_field('challenge_heading'); ?></h2>
                        <h3 class="font16 colorG"><?php echo get_sub_field('challenge_description'); ?></h3>
                    </div>
                    <?php $outcome_heading = get_sub_field('outcome_heading');
                        if( !empty( $outcome_heading ) ): ?>
                        <div class="outcomeHolder">
                            <h2 class="font60 caslonGraphiqueEF"><?php echo $outcome_heading ?></h2>
                            <div class="outcomeInnerHolder">
                                <?php if( have_rows('revenue_content') ): ?>
                                    <?php while( have_rows('revenue_content') ): the_row(); ?>
                                        <div class="outcomeCard">
                                            <div>
                                                <h2 class="font60 commonsMedium"><?php echo get_sub_field('revenue_number'); ?></h2>
                                                <h3 class="font24 commonsMedium"><?php echo get_sub_field('revenue_heading'); ?></h3>
                                            </div>
                                            <h4 class="font16 colorG commonsLight"><?php echo get_sub_field('revenue_text'); ?></h4>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php
query_posts(array(
    'numberposts' => -1,
    'post_type' => 'casestudies-post',
    'order' => 'ASC',
    // Getting all posts, limitless
    'posts_per_page' => -1,
));

// Loop throught them
if(have_posts()){
    the_post();
   $custom_link = get_field('case_studies_link',$post_id);
    //   echo $custom_link;
}
?>

<section class="exploreSection">
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

<div id="myModal" class="modal thankyouModal excellenceModal">
  <div class="modal-content">
    <span class="close"><img src="<?php bloginfo('template_directory');?>/images/close-icon.png" alt=""></span>
        <div class="modalBodyInner">
            <h2 class="font60 caslonGraphiqueEF">Thank You !!!</h2>
            <p class="font16">We have sent the full case study on you mailbox,<br>Check it out :)  </p>
            <a href="<?php echo get_site_url(); ?>/case-studies" class="cta1">Explore out thoughtbox</a>
        </div> 
	</div>
</div>

<style>

/* The Modal (background) */
.thankyouModal.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1050; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
}

/* Modal Content */
.thankyouModal .modal-content {
  margin: auto;
  padding: 50px 20px;
  width: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

/* The Close Button */
.thankyouModal .close {
    position:absolute;
    right: 20px;
    top: 20px;
}
.thankyouModal .close:hover,
.thankyouModal .close:focus {opacity: 1;}
</style>


<?php get_footer(); ?>

<script type="text/javascript">
    var link='<?php echo $custom_link; ?>';
    var link1=  $('#link').val(link);
    var button = document.getElementById('download');
  
    button.onclick = function (event) {
        var fname = document.getElementById("fname").value;
        var emailid = document.getElementById("fname").value;
        var cname = document.getElementById("cname").value;
        if ((fname != '') && (emailid != '') && (cname != '')) {
            var modal = document.getElementById("myModal");
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            setTimeout(() => {
                modal.style.display = "block";
            }, 1000);
            $('.single-casestudies-post').css('overflow','hidden')
            span.onclick = function() {
            modal.style.display = "none";
            $('.single-casestudies-post').css('overflow','auto')
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }	   
        }
        else {
            // alert("First  Fill All  Fields");
        }
    };

</script>