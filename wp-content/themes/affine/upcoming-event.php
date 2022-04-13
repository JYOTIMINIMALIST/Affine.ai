<?php get_header(); /*Template Name: Upcoming-Event*/ ?>

<style>
    

</style>

<section class="partnershipBanner">
    <div class="caseStudiesSlider">
        <div class="caseStudiesInnerSlider">
            <div class="partnershipBgImg">
                <img src="<?php bloginfo('template_directory'); ?>/images/upcoming-event-banner.png" alt="">
                <div class="contactBannerOverlayTwo"></div>
                <div class="contactBannerOverlayThree"></div>
                <div class="contactBannerOverlayFour"></div>
                <div class="contactBannerOverlayFive"></div>
                <div class="partnershipBannerText newsroomBannerText caseStudiesBannerText whitepaperBannerText">
                    <div class="wrapper">
                        <h1 class="font80 caslonGraphiqueEF">Standup Comedy</h1>
                        <p class="font24 colorG">Lorem ipsum dolor sit amet byoutdw, sectetur adipiscing elityur. Orciou Lorem ipsum dolor sit amet byoutdw, sectetur adipiscing</p>
                        <div class="main-div post-event-text">
                            <div class="div-parts part1 cal">
                                <div>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/banner-img1.png" alt="">
                                </div>
                                <div class="parts-text">
                                    <h3 class="font24 commonsSemiBold colorG">7th April 2021 </h3>
                                    <a href="#bookyourslot" class="cta1">Book your slot</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="details eventDetails">
    <div class="wrapper">
        <div class="details-text">
            <p class="font24  colorG details-p2">When I joined Affine, I never thought it would be such a long journey –
                this has truly been the best 4 years of my career.</p>

            <p class="font24  colorG details-p2">The learnings and guidance I received has made me a much better data
                science practitioner since the day I walked through the doors. Today, I can proudly say that my
                knowledge base includes Advanced Machine Learning, NLP, Deep Learning with domain knowledge in Retail,
                Automobile, Oil and Gas and the Manufacturing Industries – all thanks to Affine Analytics.</p>

            <p class="font24  colorG details-p2">In these 4 years, I’ve had the opportunity to work under the wings of
                some amazing mentors and collaborate with some talented colleagues, all the while, making quite a few
                friends for life. Sincere thanks to Manas Agrawal and Ashish Maheshwari for placing their trust in me
                and nurturing my capabilities.</p>

            <p class="font24  colorG details-p2">Cheers to the future and all that we do…</p>
        </div>
    </div>
</section>
<section class="bookyourslot" id="bookyourslot">
    <div class="wrapper">
        <div class="slotdetails">
            <h1 class="font48 commonsRegular">Book your Slot</h1>
        </div>
        <form class="form-details">
            <div class="inputElement event-name">
                <label>Full Name</label>
                <input type="text" placeholder="John Doe">
            </div>
            <div class="inputElement event-email">
                <label>Buisness Email Id</label>
                <input type="text" placeholder="JohnDoe@gmail.com">
            </div>
        </form>

        <div class="event-btn">
            <a href="#" target="_blank" class="cta1" data-toggle="modal" data-target="#allContact1">Book Now</a>
            <a href="#" target="_blank" class="cta2 linkdin-btn">Book with Linkedin</a>
        </div>
    </div>
</section>
<div class="modal fade excellenceModal contactUsModal" id="allContact1" tabindex="-1" role="dialog" aria-labelledby="allContactTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php bloginfo('template_directory'); ?>/images/close-icon.png" alt="">
                </button>
            </div>
            <div class="modal-body">
                <div class="modalBodyInner">
                    <h1 class="font60 caslonGraphiqueEF slot-booking">Your slot is booked <br>successfully</h1>
                    <div class="slot-details-p1">
                        <h2 class="font30 commonsRegular">Standup Comedy</h2>
                        <div class="details-date">
                            <img src="<?php bloginfo('template_directory'); ?>/images/slot-booking.png" alt="">
                            <p class="commonsRegular font24">10 May 2021 &nbsp;|&nbsp; 7PM</p>
                        </div>
                    </div>
                    <div class="slot-link">
                        <h2 class="commonsRegular font24">meet.google.com/yvs-offr-sjz</h2>
                        <a class="commonsRegular font16 colorG" href="#" target="_blank">Copy Joining Link</a>
                    </div>
                    <div class="slot-close">
                        <h3 class="commonsRegular font24 slot-mail">We have mailed the event details on your email id abc@gmail.com</h3>
                        <a href="#" target="_blank" class="cta1">Close</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>