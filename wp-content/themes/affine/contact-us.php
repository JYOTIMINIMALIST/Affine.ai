<?php get_header(); /*Template Name: Contact Us */ ?>

<section class="contactUsBanner">
    <div class="contactUsInner">
		<?php if( have_rows('contact_banner') ): ?>
        	<?php while( have_rows('contact_banner') ): the_row();?>
                <?php $bannerimage = get_sub_field('banner_image');
                    if( !empty( $bannerimage ) ): ?>
                    <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
                <?php endif; ?>
    			<div class="contactBannerOverlay"></div>
    			<div class="contactBannerOverlayTwo"></div>
    			<div class="contactBannerOverlayThree"></div>
    			<div class="contactBannerOverlayFour"></div>
    			<div class="contactBannerOverlayFive"></div>
    			<div class="bannerText">
    				<h1 class="font120 caslonGraphiqueEF"><?php the_sub_field('banner_heading'); ?></h1>
    			</div>
    		<?php endwhile; ?>
		<?php endif; ?>
    </div>
</section>

<section class="flipSection">
    <div class="wrapper">
        <?php if( have_rows('appropriate_category_section') ): ?>
        	<?php while( have_rows('appropriate_category_section') ): the_row();?>
                <div class="flipHeading">
                    <h2 class="font60 caslonGraphiqueEF"><?php the_sub_field('section_heading'); ?></h2>
                    <p class="font24 commonsMedium"><?php the_sub_field('section_sub_heading'); ?></p>
                </div>
                <div class="flipHolder">
                    <?php if( have_rows('appropriate_category_list') ): ?>
                        <?php $counter=1; while( have_rows('appropriate_category_list') ): the_row();?>
                            <div class="flipInnerHolder">
                                <img src="<?php the_sub_field('appropriate_category_image'); ?>" alt="">
                                <h3 class="font30 commonsMedium"><?php the_sub_field('appropriate_category_heading'); ?></h3>
                                <p class="font24"><?php the_sub_field('appropriate_category_content'); ?></p>
                                <a href="" data-toggle="modal" data-target="#allContact<?php echo $counter; ?>" class="cta2 sparkleBtn"><?php the_sub_field('cta_button_text'); ?></a>
                            </div>
                        <?php $counter=$counter+1; endwhile; ?>
        		    <?php endif; ?>
                </div>
            <?php endwhile; ?>
    	<?php endif; ?>
    </div>

    <?php if( have_rows('appropriate_category_section') ): ?>
    <?php while( have_rows('appropriate_category_section') ): the_row();?> 
    <!-- All Contact Modal-->
        <?php if( have_rows('appropriate_category_list') ): ?>
        <?php $counter=1; while( have_rows('appropriate_category_list') ): the_row();?>
            <div class="modal fade excellenceModal contactUsModal" id="allContact<?php echo $counter; ?>" tabindex="-1" role="dialog"
                aria-labelledby="allContactTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <img src="<?php bloginfo('template_directory');?>/images/close-icon.png" alt="">
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modalBodyInner">
                                <div class="flipModalHeader">
                                    <div class="formHeading">
                                        <img src="<?php the_sub_field('appropriate_category_image'); ?>" alt="">
                                        <h3 class="font48 commonsMedium"><?php the_sub_field('appropriate_category_heading'); ?></h3>
                                    </div>
                                    <p class="font24"><?php the_sub_field('appropriate_category_content'); ?></p>
                                </div>
                                <?php the_sub_field('form_shortcode'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $counter=$counter+1; endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="learnSection" id="learnSection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <div class="wrapper">
        <?php if( have_rows('about_intelligence_section') ): ?>
        	<?php while( have_rows('about_intelligence_section') ): the_row();?>
                <div class="AIimageHolder">
                    <?php the_sub_field('section_image'); ?>
                </div>
                <div class="learnTextholder">
                    <h2 class="font60 caslonGraphiqueEF"><?php the_sub_field('section_heading'); ?></h2>
                    <p class="font24 colorG"><?php the_sub_field('section_content'); ?></p>
                    <a href="" data-toggle="modal" data-target="#proposal" class="cta1 sparkleBtn"><?php the_sub_field('cta_button_text'); ?></a>
                </div>
            <?php endwhile; ?>
    	<?php endif; ?>
    </div>
    <!-- Request for proposal Modal-->
    <div class="modal fade excellenceModal contactUsModal" id="proposal" tabindex="-1" role="dialog" aria-labelledby="proposalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="<?php bloginfo('template_directory');?>/images/close-icon.png" alt="">
                    </button>
                </div>
                <?php if( have_rows('about_intelligence_section') ): ?>
                    <?php while( have_rows('about_intelligence_section') ): the_row();?>
                        <div class="modal-body">
                            <div class="modalBodyInner">
                                <div class="flipModalHeader">
                                    <div class="formHeading">
                                        <h3 class="font48 commonsMedium"><?php the_sub_field('cta_button_text'); ?></h3>
                                    </div>
                                </div>
                                <?php the_sub_field('form_shortcode'); ?>
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
                                            <img src="<?php bloginfo('template_directory');?>/images/file-upload.png" alt="">
                                            <p class="font24">Click to browse file Or drag and drop, copy and paste files</p>
                                        </span>
                                    </div>
                                    <p class="font16 colorG notePara">If you don't have RFP documents with you, download RFP
                                        template and uploaded it
                                        <a href="" class="font16">Download here</a>
                                    </p>
                                    <button class="submitBtn2">Submit</button>
                                </form> -->
                            </div>
                        </div>
                    <?php endwhile; ?>
    	        <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="globeSection">
    <?php if( have_rows('our_worldwide_presence') ): ?>
        <?php while( have_rows('our_worldwide_presence') ): the_row(); ?>
            <div class="globeHolder">
                <div class="globeTextHolder">
                    <div class="wrapper">
                        <h2 class="font60 caslonGraphiqueEF"><?php echo get_sub_field('section_heading'); ?></h2>
                        <div class="globePinPiontCta">
                            <?php if( have_rows('india_map_content') ): ?>
                                <?php while( have_rows('india_map_content') ): the_row(); ?>
                                    <div class="active addressDiv">
                                        <h3 class="font48 commonsMedium indiaAddress"><?php echo get_sub_field('country_heading'); ?> <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt=""></h3>
                                        <ul class="subAddress">
                                            <?php if( have_rows('country_content') ): ?>
                                                <?php while( have_rows('country_content') ): the_row(); ?>
                                                    <li class="open<?php echo get_sub_field('state_id'); ?>">
                                                        <img src="<?php echo get_sub_field('state_map_image_popup'); ?>" alt="" style="display:none;" class="stateMapImg">
                                                        <h4 class="font24 commonsSemiBold"><?php echo get_sub_field('state_heading'); ?></h4>
                                                        <p class="font16"><?php echo get_sub_field('state_address'); ?></p>
                                                        <a href="<?php echo get_sub_field('map_link'); ?>" class="viewLargerMap font16">View larger map</a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if( have_rows('usa_map_content') ): ?>
                                <?php while( have_rows('usa_map_content') ): the_row(); ?>
                                    <div class="addressDiv">
                                        <h3 class="font48 commonsMedium usaAddress"><?php echo get_sub_field('country_heading'); ?> <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt=""></h3>
                                        <ul class="subAddress">
                                            <?php if( have_rows('country_content') ): ?>
                                                <?php while( have_rows('country_content') ): the_row(); ?>
                                                    <li class="open<?php echo get_sub_field('state_id'); ?>">
                                                        <img src="<?php echo get_sub_field('state_map_image_popup'); ?>" alt="" style="display:none;" class="stateMapImg">
                                                        <h4 class="font24 commonsSemiBold"><?php echo get_sub_field('state_heading'); ?></h4>
                                                        <p class="font16"><?php echo get_sub_field('state_address'); ?></p>
                                                        <a href="<?php echo get_sub_field('map_link'); ?>" class="viewLargerMap font16">View larger map</a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if( have_rows('singapore_map_content') ): ?>
                                <?php while( have_rows('singapore_map_content') ): the_row(); ?>
                                    <div class="addressDiv">
                                        <h3 class="font48 commonsMedium singaporeAddress"><?php echo get_sub_field('country_heading'); ?> <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt=""></h3>
                                        <ul class="subAddress">
                                            <?php if( have_rows('country_content') ): ?>
                                                <?php while( have_rows('country_content') ): the_row(); ?>
                                                    <li class="open<?php echo get_sub_field('state_id'); ?>">
                                                        <img src="<?php echo get_sub_field('state_map_image_popup'); ?>" alt="" style="display:none;" class="stateMapImg">
                                                        <h4 class="font24 commonsSemiBold"><?php echo get_sub_field('state_heading'); ?></h4>
                                                        <p class="font16"><?php echo get_sub_field('state_address'); ?></p>
                                                        <a href="<?php echo get_sub_field('map_link'); ?>" class="viewLargerMap font16">View larger map</a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="mapImgHolder">
                    <div class="indiaMap mapDiv activateMap">
                        <?php if( have_rows('india_map_content') ): ?>
                            <?php while( have_rows('india_map_content') ): the_row(); ?>
                                <img src="<?php echo get_sub_field('country_map'); ?>" alt="" class="countryMap">
                                <img src="" alt="" class="stateMapImgNew">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="usaMap mapDiv">
                        <?php if( have_rows('usa_map_content') ): ?>
                            <?php while( have_rows('usa_map_content') ): the_row(); ?>
                                <img src="<?php echo get_sub_field('country_map'); ?>" alt="" class="countryMap">
                                <img src="" alt="" class="stateMapImgNew">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="singaporeMap mapDiv">
                        <?php if( have_rows('singapore_map_content') ): ?>
                            <?php while( have_rows('singapore_map_content') ): the_row(); ?>
                                <img src="<?php echo get_sub_field('country_map'); ?>" alt="" class="countryMap">
                                <img src="" alt="" class="stateMapImgNew">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>
<script type="text/javascript">

$( ".indiaAddress" ).click(function() {
  $(".indiaMap").addClass("activateMap")
  $(".usaMap").removeClass("activateMap")
  $(".singaporeMap").removeClass("activateMap")
  $('.countryMap').show();
  $('.stateMapImgNew').hide();
});

$( ".usaAddress" ).click(function() {
  $(".indiaMap").removeClass("activateMap")
  $(".usaMap").addClass("activateMap")
  $(".singaporeMap").removeClass("activateMap")
  $('.countryMap').show();
  $('.stateMapImgNew').hide();
});

$( ".singaporeAddress" ).click(function() {
  $(".indiaMap").removeClass("activateMap")
  $(".usaMap").removeClass("activateMap")
  $(".singaporeMap").addClass("activateMap")
  $('.countryMap').show();
  $('.stateMapImgNew').hide();
});

<?php if( have_rows('our_worldwide_presence') ): ?>
    <?php while( have_rows('our_worldwide_presence') ): the_row(); ?>
        <?php if( have_rows('india_map_content') ): ?>
            <?php while( have_rows('india_map_content') ): the_row(); ?>
                <?php if( have_rows('country_content') ): ?>
                    <?php while( have_rows('country_content') ): the_row(); ?>
                    $( ".open<?php echo get_sub_field('state_id'); ?>" ).click(function() {
                        var newImageUrl = $(this).find('.stateMapImg').attr('src');
                        $('.stateMapImgNew').attr('src',newImageUrl);
                        $('.stateMapImgNew').show();
                        $('.countryMap').hide();
                    });
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('usa_map_content') ): ?>
            <?php while( have_rows('usa_map_content') ): the_row(); ?>
                <?php if( have_rows('country_content') ): ?>
                    <?php while( have_rows('country_content') ): the_row(); ?>
                    $( ".open<?php echo get_sub_field('state_id'); ?>" ).click(function() {
                        var newImageUrl = $(this).find('.stateMapImg').attr('src');
                        $('.stateMapImgNew').attr('src',newImageUrl);
                        $('.stateMapImgNew').show();
                        $('.countryMap').hide();
                    });
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('singapore_map_content') ): ?>
            <?php while( have_rows('singapore_map_content') ): the_row(); ?>
                <?php if( have_rows('country_content') ): ?>
                    <?php while( have_rows('country_content') ): the_row(); ?>
                    $( ".open<?php echo get_sub_field('state_id'); ?>" ).click(function() {
                        var newImageUrl = $(this).find('.stateMapImg').attr('src');
                        $('.stateMapImgNew').attr('src',newImageUrl);
                        $('.stateMapImgNew').show();
                        $('.countryMap').hide();
                    });
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
</script>
