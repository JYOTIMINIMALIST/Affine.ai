<?php get_header(); /*Template Name: Opportunity*/ ?>

<section class="opportunityBanner">
    <div class="contactBannerOverlay"></div>
    <div class="contactBannerOverlayTwo"></div>
    <div class="contactBannerOverlayThree"></div>
    <div class="contactBannerOverlayFour"></div>
    <div class="contactBannerOverlayFive"></div>
    <?php if( have_rows('naukri_api_section') ): ?>
        <?php while( have_rows('naukri_api_section') ): the_row(); ?>
            <div class="wrapper">
                <h1 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h1>
            </div>
            <div class="wrapper">
                <?php echo get_sub_field('naukri_iframe_code'); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="deliverSection opportunity" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <?php if( have_rows('future_opportunity') ): ?>
        <?php while( have_rows('future_opportunity') ): the_row(); ?>
            <div class="wrapper">
                <div class="opportunityHolder">
                    <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                    <a href="" class="cta1 sparkleBtn opp-btn" data-toggle="modal" data-target="#job"><?php echo get_sub_field('cta_text'); ?></a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<div class="modal fade excellenceModal contactUsModal" id="job" tabindex="-1" role="dialog" aria-labelledby="jobTitle"
    aria-hidden="true">
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
                            <h3 class="font48 commonsMedium"><?php echo get_field('future_opening_heading'); ?></h3>
                        </div>
                    </div>
                    <?php echo get_field('future_opening_form'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="videoSection buzzing">
    <?php if( have_rows('affine_hiring_video_section') ): ?>
        <?php while( have_rows('affine_hiring_video_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="videos">
                    <h2 class="font60 caslonGraphiqueEF colorG video-h2"><?php echo get_sub_field('section_heading'); ?></h2>
                </div>
                <div class="thumbnailDiv">
                    <?php $hiringvideothumb = get_sub_field('video_thumbnail');
                        if( !empty( $hiringvideothumb ) ): ?>
                        <img src="<?php echo esc_url($hiringvideothumb['url']); ?>" loading="lazy" alt="<?php echo esc_attr($hiringvideothumb['alt']); ?>" class="thumbnailImg" />
                    <?php endif; ?>
                    <a data-fancybox class="videoPlayBtn" href="<?php echo get_sub_field('video_link'); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" alt="">
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="Affineishiring">
    <?php if( have_rows('affine_is_hiring_section') ): ?>
        <?php while( have_rows('affine_is_hiring_section') ): the_row(); ?>
            <div class="wrapper">
                <div class="opp-section">
                    <div class="opp-para">
                        <h1 class="caslonGraphiqueEF colorG font60"><?php echo get_sub_field('section_heading'); ?></h1>
                        <h4 class="font24 commonsRegular colorG"><?php echo get_sub_field('section_description'); ?></h4>
                    </div>
                    <?php if( have_rows('image_gallery') ): ?>
                        <?php while( have_rows('image_gallery') ): the_row(); ?>
                            <div class="opp-img-sec">
                                <div class="opp-img1">
                                    <?php $imagegalleryone = get_sub_field('image_one');
                                        if( !empty( $imagegalleryone ) ): ?>
                                        <img src="<?php echo esc_url($imagegalleryone['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagegalleryone['alt']); ?>" class="thumbnailImg" />
                                    <?php endif; ?>
                                </div>
                                <div class="opp-img2-sec">
                                    <div class="opp-img2">
                                        <?php $imagegallerytwo = get_sub_field('image_two');
                                            if( !empty( $imagegallerytwo ) ): ?>
                                            <img src="<?php echo esc_url($imagegallerytwo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagegallerytwo['alt']); ?>" class="thumbnailImg" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="opp-img2">
                                        <?php $imagegallerythree = get_sub_field('image_three');
                                            if( !empty( $imagegallerythree ) ): ?>
                                            <img src="<?php echo esc_url($imagegallerythree['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagegallerythree['alt']); ?>" class="thumbnailImg" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="shiringSlider">
                                <div class="shiringInnerSlider">
                                    <div class="opp-img1">
                                        <?php $imagegalleryone = get_sub_field('image_one');
                                            if( !empty( $imagegalleryone ) ): ?>
                                            <img src="<?php echo esc_url($imagegalleryone['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagegalleryone['alt']); ?>" class="thumbnailImg" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="shiringInnerSlider">
                                    <div class="opp-img1">
                                        <?php $imagegallerytwo = get_sub_field('image_two');
                                            if( !empty( $imagegallerytwo ) ): ?>
                                            <img src="<?php echo esc_url($imagegallerytwo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagegallerytwo['alt']); ?>" class="thumbnailImg" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="shiringInnerSlider">
                                    <div class="opp-img1">
                                        <?php $imagegallerythree = get_sub_field('image_three');
                                            if( !empty( $imagegallerythree ) ): ?>
                                            <img src="<?php echo esc_url($imagegallerythree['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagegallerythree['alt']); ?>" class="thumbnailImg" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="deliverSection opp-queries" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <?php if( have_rows('any_queries') ): ?>
        <?php while( have_rows('any_queries') ): the_row(); ?>
            <div class="wrapper">
                <h2 class="font60 caslonGraphiqueEF colorG"><?php echo get_sub_field('section_heading'); ?></h2>
                <a href="" class="cta1 sparkleBtn opp-btn" data-toggle="modal" data-target="#alert-query"><?php echo get_sub_field('cta_text'); ?></a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<div class="modal fade excellenceModal contactUsModal" id="alert-query" tabindex="-1" role="dialog"
    aria-labelledby="jobTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <?php if( have_rows('any_queries') ): ?>
        <?php while( have_rows('any_queries') ): the_row(); ?>
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
                                <h3 class="font48 commonsMedium"><?php echo get_sub_field('popup_form_heading'); ?></h3>
                            </div>
                        </div>
                        <?php echo get_sub_field('popup_form_shortcode'); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>

<div class="modal fade excellenceModal contactUsModal" id="create-alert" tabindex="-1" role="dialog"
    aria-labelledby="jobTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php bloginfo('template_directory'); ?>/images/close-icon.png" alt="">
                </button>
            </div>
            <div class="modal-body">
                <div class="modalBodyInner">
                    <div class="flipModalHeader">
                        <div class="alert-para">
                            <h3 class="font48 commonsMedium">Never miss your chance</h3>
                        </div>
                        <p class="font16">You will get notification mail on new openings</p>
                    </div>
                    <form>
                        <div class="alert-dropdown">
                            <div class="alert-cat">
                                <select name="position" id="alert-position">
                                    <option selected="">All Category</option>
                                    <option>This month</option>
                                    <option>This year</option>
                                </select>
                            </div>
                            <div class="alert-input">
                                <input type="text" placeholder="Job Roles/Titles">
                            </div>

                        </div>
                        <div class="alert-dropdown">
                            <div class="alert-cat">
                                <select name="position" id="alert-position">
                                    <option selected="">All Position</option>
                                    <option>This month</option>
                                    <option>This year</option>
                                </select>
                            </div>
                            <div class="alert-cat">
                                <select name="position" id="alert-position">
                                    <option selected="">Experience</option>
                                    <option>This month</option>
                                    <option>This year</option>
                                </select>
                            </div>
                            <div class="alert-cat">
                                <select name="position" id="alert-position">
                                    <option selected="">Location</option>
                                    <option>This month</option>
                                    <option>This year</option>
                                </select>
                            </div>
                        </div>
                        <div class="toggle-btn">
                            <p class="font24">Or Alert all new openings</p>
                            <input type="checkbox" id="switch" class="checkbox" />
                            <label for="switch" class="toggle">
                        </div>
                        <div class="inputElement alert-email">
                            <label>Email Id</label>
                            <input type="text" placeholder="JohnDoe@gmail.com">
                        </div>
                        <div class="uplod-file-p">
                            <button class="submitBtn2 opp-btn">Alert me</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>