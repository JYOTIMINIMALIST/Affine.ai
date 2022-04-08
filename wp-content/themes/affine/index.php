<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package affine
 */

get_header();
?>

<section class="homeBanner">
    <div class="homeSlider-for">
        <div class="homeSliderForInner">
            <img src="<?php bloginfo('template_directory');?>/images/slider-1.png" alt="">
            <div class="homeBannerOverlay"></div>
            <div class="homeBannerOverlayTwo"></div>
            <div class="homeBannerOverlayThree"></div>
            <div class="homeBannerOverlayFour"></div>
            <div class="bannerText">
                <p class="bannerTags font24 commonsRegular">TELESCOPE</p>
                <h1 class="font120 caslonGraphiqueEF">Precision at every dimension</h1>
                <h3 class="font24 commonsRegular colorG">AI-powered Satellite Image Segmentation solution to identify
                    geographical structures like building, land, water at the highest accuracy level.</h3>
                <a href="#" class="cta1 sparkleBtn">Read more</a>
            </div>
        </div>
        <div class="homeSliderForInner">
            <img src="<?php bloginfo('template_directory');?>/images/slider-2.jpg" alt="">
            <div class="homeBannerOverlay"></div>
            <div class="homeBannerOverlayTwo"></div>
            <div class="homeBannerOverlayThree"></div>
            <div class="homeBannerOverlayFour"></div>
            <div class="bannerText">
                <p class="bannerTags font24 commonsRegular">TELESCOPE</p>
                <h1 class="font120 caslonGraphiqueEF">Precision at every dimension</h1>
                <h3 class="font24 commonsRegular colorG">AI-powered Satellite Image Segmentation solution to identify
                    geographical structures like building, land, water at the highest accuracy level.</h3>
                <a href="#" class="cta1 sparkleBtn">Read more</a>
            </div>
        </div>
        <div class="homeSliderForInner">
            <img src="<?php bloginfo('template_directory');?>/images/slider-3.jpg" alt="">
            <div class="homeBannerOverlay"></div>
            <div class="homeBannerOverlayTwo"></div>
            <div class="homeBannerOverlayThree"></div>
            <div class="homeBannerOverlayFour"></div>
            <div class="bannerText">
                <p class="bannerTags font24 commonsRegular">TELESCOPE</p>
                <h1 class="font120 caslonGraphiqueEF">Precision at every dimension</h1>
                <h3 class="font24 commonsRegular colorG">AI-powered Satellite Image Segmentation solution to identify
                    geographical structures like building, land, water at the highest accuracy level.</h3>
                <a href="#" class="cta1 sparkleBtn">Read more</a>
            </div>
        </div>
        <div class="homeSliderForInner">
            <img src="<?php bloginfo('template_directory');?>/images/slider-4.png" alt="">
            <div class="homeBannerOverlay"></div>
            <div class="homeBannerOverlayTwo"></div>
            <div class="homeBannerOverlayThree"></div>
            <div class="homeBannerOverlayFour"></div>
            <div class="bannerText">
                <p class="bannerTags font24 commonsRegular">TELESCOPE</p>
                <h1 class="font120 caslonGraphiqueEF">Precision at every dimension</h1>
                <h3 class="font24 commonsRegular colorG">AI-powered Satellite Image Segmentation solution to identify
                    geographical structures like building, land, water at the highest accuracy level.</h3>
                <a href="#" class="cta1 sparkleBtn">Read more</a>
            </div>
        </div>
    </div>
    <div class="homeSliderNavHolder">
        <div class="homeSlider-nav">
            <div class="homeSliderNavInner">
                <div class="imageNavDiv">
                    <img src="<?php bloginfo('template_directory');?>/images/slider-nav-1.png" alt="">
                    <div class="textNav">
                        <p>Gaming</p>
                    </div>
                </div>
            </div>
            <div class="homeSliderNavInner">
                <div class="imageNavDiv">
                    <img src="<?php bloginfo('template_directory');?>/images/slider-nav-2.png" alt="">
                    <div class="textNav">
                        <p>Press Release</p>
                    </div>
                </div>
            </div>
            <div class="homeSliderNavInner">
                <div class="imageNavDiv">
                    <img src="<?php bloginfo('template_directory');?>/images/slider-nav-3.png" alt="">
                    <div class="textNav">
                        <p>Events</p>
                    </div>
                </div>
            </div>
            <div class="homeSliderNavInner">
                <div class="imageNavDiv">
                    <img src="<?php bloginfo('template_directory');?>/images/slider-nav-4.png" alt="">
                    <div class="textNav">
                        <p>Careers</p>
                    </div>
                </div>
            </div>        
        </div>
    <div class="navSliderArrow">
        <img src="<?php bloginfo('template_directory');?>/images/right-arrow.svg" alt="">
    </div>
    </div>
    <a href="#businessesSection" class="scrollDown">
        <span class="font16">Scroll</span>
        <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="">
    </a>
</section>

<section class="businessesSection" id="businessesSection">
    <div class="wrapper">
        <div class="businessesInner">
            <div class="sectionHeading">
                <h2 class="font60 caslonGraphiqueEF colorG">We Transform Global Businesses</h2>
                <p class="font24 colorG">We are a catalyst for Digital Transformation by innovating at the cusp of
                    Cloud, <br>Analytics Engineering, and Artificial Intelligence.</p>
            </div>
            <div class="businessSlider">
                <div class="businessSliderCard">
                    <div class="businessSliderCardInner">
                        <div class="businessCardImg">
                            <img src="<?php bloginfo('template_directory');?>/images/business-img-1.png" alt="">
                        </div>
                        <div class="businessCardText">
                            <p class="colorG">Proud partner of</p>
                            <h4 class="colorG">Microsoft AI Inner Circle</h4>
                        </div>
                    </div>
                </div>
                <div class="businessSliderCard">
                    <div class="businessSliderCardInner">
                        <div class="businessCardImg">
                            <img src="<?php bloginfo('template_directory');?>/images/business-img-2.png" alt="">
                        </div>
                        <div class="businessCardText">
                            <p class="colorG">Among the top</p>
                            <h4 class="colorG">Global Startups by <br>Vedanta Spark</h4>
                        </div>
                    </div>
                </div>
                <div class="businessSliderCard">
                    <div class="businessSliderCardInner">
                        <div class="businessCardImg">
                            <img src="<?php bloginfo('template_directory');?>/images/business-img-3.png" alt="">
                        </div>
                        <div class="businessCardText">
                            <p class="colorG">Assist over</p>
                            <h4 class="colorG">Fortune- 500<br>global enterprises</h4>
                        </div>
                    </div>
                </div>
                <div class="businessSliderCard">
                    <div class="businessSliderCardInner">
                        <div class="businessCardImg">
                            <img src="<?php bloginfo('template_directory');?>/images/business-img-4.png" alt="">
                        </div>
                        <div class="businessCardText">
                            <p class="colorG">Proud partner of</p>
                            <h4 class="colorG">Microsoft AI Inner Circle</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="industrySection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <div class="wrapper">
        <div class="sectionHeading">
            <h2 class="font60 caslonGraphiqueEF colorG">Every Industry Has Unique Challenges</h2>
            <p class="font24 colorG">Leverage data-driven, algorithmic solutions to drive contextual insights
                and<br>accelerate decision-making ability with precision. </p>
        </div>
        <div class="industryInner">
            <div class="industryCard">
                <a href="">
                    <div class="industryCardBody">
                        <img src="<?php bloginfo('template_directory');?>/images/industry-2.png" alt="">
                        <div class="industryOverlay"></div>
                    </div>
                    <div class="industryCardFooter">
                        <div class="industryCardFooterInner">
                            <div class="industryIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-gaming.png" alt="">
                            </div>
                            <div class="industryFooterText">
                                <h5 class="font24 commonsMedium">Gaming</h5>

                            </div>
                            <div class="industryArrow">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-arrow.png" alt="">
                            </div>
                        </div>
                        <p class="font16">Redefining the Gaming Experience</p>
                    </div>
                </a>
            </div>
            <div class="industryCard">
                <a href="">
                    <div class="industryCardBody">
                        <img src="<?php bloginfo('template_directory');?>/images/industry-4.png" alt="">
                        <div class="industryOverlay"></div>
                    </div>
                    <div class="industryCardFooter">
                        <div class="industryCardFooterInner">
                            <div class="industryIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-manufacturing.png"
                                    alt="">
                            </div>
                            <div class="industryFooterText">
                                <h5 class="font24 commonsMedium">Manufacturing</h5>
                            </div>
                            <div class="industryArrow">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-arrow.png" alt="">
                            </div>
                        </div>
                        <p class="font16">Talk to machines effectively</p>
                    </div>
                </a>
            </div>
            <div class="industryCard">
                <a href="">
                    <div class="industryCardBody">
                        <img src="<?php bloginfo('template_directory');?>/images/industry-1.png" alt="">
                        <div class="industryOverlay"></div>
                    </div>
                    <div class="industryCardFooter">
                        <div class="industryCardFooterInner">
                            <div class="industryIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-cpg.png" alt="">
                            </div>
                            <div class="industryFooterText">
                                <h5 class="font24 commonsMedium">Consumer Packaged Goods</h5>

                            </div>
                            <div class="industryArrow">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-arrow.png" alt="">
                            </div>
                        </div>
                        <p class="font16">Attract, Retain & Delight customers</p>
                    </div>
                </a>
            </div>
            <div class="industryCard">
                <a href="">
                    <div class="industryCardBody">
                        <img src="<?php bloginfo('template_directory');?>/images/industry-3.png" alt="">
                        <div class="industryOverlay"></div>
                    </div>
                    <div class="industryCardFooter">
                        <div class="industryCardFooterInner">
                            <div class="industryIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-hi-tech.png" alt="">
                            </div>
                            <div class="industryFooterText">
                                <h5 class="font24 commonsMedium">Advanced Technology</h5>
                            </div>
                            <div class="industryArrow">
                                <img src="<?php bloginfo('template_directory');?>/images/industry-arrow.png" alt="">
                            </div>
                        </div>
                        <p class="font16">Predict, Analyze & Accomplish</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="excellenceSection">
    <div class="wrapper">
        <div class="sectionHeading">
            <h2 class="font60 caslonGraphiqueEF colorG">Innovation Factory</h2>
        </div>
        <div class="excellenceInner">
            <div class="filterHolder">
                <div class="mobileExcellenceFilter">
                    <img src="<?php bloginfo('template_directory');?>/images/all-colored-ex-topic.png" alt=""
                        class="coloredIcon allTopicImage">
                    <p class="allTopicText">ALL TOPICS</p>
                    <img src="<?php bloginfo('template_directory');?>/images/down-arrow.svg" alt="" class="downArrow">
                </div>
                <div class="filterHolderInner">
                    <div class="button-group js-radio-button-group" data-filter-group="size">
                        <button class="font20 commonsExtraLight filter button is-checked menuClassDown" data-filter="">
                            <div class="filterIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/all-colored-ex.png" alt=""
                                    class="coloredIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/all-ex.png" alt=""
                                    class="blackIcon">
                            </div>
                            All
                        </button>
                        <button class="font20 commonsExtraLight filter button menuClassDown"
                            data-filter=".Artificial-Intelligence">
                            <div class="filterIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/intelligence-colored-ex.png"
                                    alt="" class="coloredIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/intelligence-ex.png" alt=""
                                    class="blackIcon">
                            </div>
                            Artificial Intelligence
                        </button>
                        <button class="font20 commonsExtraLight filter button menuClassDown"
                            data-filter=".Analytics-Engineering">
                            <div class="filterIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/analytics-colored-ex.png"
                                    alt="" class="coloredIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/analytics-ex.png" alt=""
                                    class="blackIcon">
                            </div>
                            Analytics Engineering
                        </button>
                        <button class="font20 commonsExtraLight filter button menuClassDown"
                            data-filter=".Cloud-Analytics">
                            <div class="filterIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/cloud-colored-ex.png" alt=""
                                    class="coloredIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/cloud-ex.png" alt=""
                                    class="blackIcon">
                            </div>
                            Cloud
                        </button>
                        <button class="font20 commonsExtraLight filter button menuClassDown" data-filter=".Gaming">
                            <div class="filterIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/gaming-colored-ex.png" alt=""
                                    class="coloredIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/gaming-ex.png" alt=""
                                    class="blackIcon">
                            </div>
                            Gaming
                        </button>
                        <button class="font20 commonsExtraLight filter button menuClassDown"
                            data-filter=".Manufacturing">
                            <div class="filterIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/manufacturing-colored-ex.png"
                                    alt="" class="coloredIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/manufacturing-ex.png" alt=""
                                    class="blackIcon">
                            </div>
                            Manufacturing
                        </button>
                        <button class="font20 commonsExtraLight filter button menuClassDown"
                            data-filter=".Editors-Choice">
                            <div class="filterIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/editor-colored-ex.png" alt=""
                                    class="coloredIcon">
                                <img src="<?php bloginfo('template_directory');?>/images/editor-ex.png" alt=""
                                    class="blackIcon">
                            </div>
                            Editor’s Choice
                        </button>
                    </div>
                </div>
            </div>
            <div class="excellenceHolder">
                <div class="excellenceHeading">
                    <h4 class="filterTextVal">ALL</h4>
                    <!-- <div class="dashedDiv"></div> -->
                    <div class="button-group js-radio-button-group" data-filter-group="color">
                        <!-- <label class="portfolioContainer">SGAN Investments
                            <input class="filter" id="sgan-input" type="radio" value="sgan" name="checks"
                                data-filter=".SGAN">
                            <span class="checkmark"></span>
                        </label> -->
                        <label class="switch">
                            <input type="checkbox" class="filter" data-filter=".VideoOnly">
                            <span class="slider"></span>
                        </label> Show videos only
                    </div>
                </div>
                <div class="excellenceSlider grid">
                    <div class="excellenceSliderInner Artificial-Intelligence">
                        <div class="excellenceCard">
                            <div class="excellenceCardImg">
                                <img src="<?php bloginfo('template_directory');?>/images/excellence-new-1.png" alt="">
                            </div>
                            <div class="excellenceCardOverlayTwo"></div>
                            <div class="excellenceCardOverlay"></div>
                            <div class="excellenceCardText">
                                <h3 class="font24 commonsSemiBold">NLI Task Demonstration</h3>
                                <h4 class="font16 commonsThin">Learn how to make machines smart enough to understand the
                                    natural
                                    language Using Kaggle Dataset.</h4>
                                <a href="" data-toggle="modal" data-target="#TestModalOne" class="font16 commonsMedium">
                                    <img src="<?php bloginfo('template_directory');?>/images/news-arrow.png" alt="">
                                </a>
                            </div>
                            <div class="filterTag" style="background-color: #19ABFE;">
                                <p>Artificial Intelligence</p>
                            </div>
                            <!-- <div class="statusTag">
                                <img src="<?php bloginfo('template_directory');?>/images/eye-icon.png" alt="">
                                <p class="font16">Most viewed</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="excellenceSliderInner Analytics-Engineering">
                        <div class="excellenceCard">
                            <div class="excellenceCardImg">
                                <img src="<?php bloginfo('template_directory');?>/images/excellence-new-2.png" alt="">
                            </div>
                            <div class="excellenceCardOverlayTwo"></div>
                            <div class="excellenceCardOverlay"></div>
                            <div class="excellenceCardText">
                                <h3 class="font24 commonsSemiBold">Creating New Game Characters Without Using
                                    Paintbrush</h3>
                            </div>
                            <div class="filterTag" style="background-color: #7F3EB5;">
                                <p>Gaming</p>
                            </div>
                            <!-- <div class="statusTag">
                                <img src="<?php bloginfo('template_directory');?>/images/eye-icon.png" alt="">
                                <p class="font16">Trending today</p>
                            </div> -->
                            <a data-fancybox class="videoPlayBtn"
                                href="https://www.youtube.com/watch?v=KbFWhffLM-A"><img
                                    src="<?php bloginfo('template_directory');?>/images/play-btn.png" alt=""></a>
                        </div>
                    </div>
                    <div class="excellenceSliderInner Cloud-Analytics">
                        <div class="excellenceCard">
                            <div class="excellenceCardImg">
                                <img src="<?php bloginfo('template_directory');?>/images/excellence-new-3.png" alt="">
                            </div>
                            <div class="excellenceCardOverlayTwo"></div>
                            <div class="excellenceCardOverlay"></div>
                            <div class="excellenceCardText">
                                <h3 class="font24 commonsSemiBold">Consumer and Retail Promotions Optimization PoC
                                </h3>
                                <h4 class="font16 commonsThin">Learn how to make machines smart enough to understand the
                                    natural
                                    language Using Kaggle Dataset.</h4>
                                <a href="" data-toggle="modal" data-target="#TestModalTwo" class="font16 commonsMedium">
                                    <img src="<?php bloginfo('template_directory');?>/images/news-arrow.png" alt="">
                                </a>
                            </div>
                            <div class="filterTag" style="background-color: #F3515B;">
                                <p>Cloud</p>
                            </div>
                            <!-- <div class="statusTag">
                                <p class="font16">Trending today</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="excellenceSliderInner Analytics-Engineering">
                        <div class="excellenceCard">
                            <div class="excellenceCardImg">
                                <img src="<?php bloginfo('template_directory');?>/images/excellence-new-4.png" alt="">
                            </div>
                            <div class="excellenceCardOverlayTwo"></div>
                            <div class="excellenceCardOverlay"></div>
                            <div class="excellenceCardText">
                                <h3 class="font24 commonsSemiBold">Creating New Game Characters Without Using
                                    Paintbrush</h3>
                            </div>
                            <div class="filterTag" style="background-color: #7F3EB5;">
                                <p>Gaming</p>
                            </div>
                            <!-- <div class="statusTag">
                                <img src="<?php bloginfo('template_directory');?>/images/eye-icon.png" alt="">
                                <p class="font16">Trending today</p>
                            </div> -->
                            <a data-fancybox class="videoPlayBtn"
                                href="https://www.youtube.com/watch?v=KbFWhffLM-A"><img
                                    src="<?php bloginfo('template_directory');?>/images/play-btn.png" alt=""></a>
                        </div>
                    </div>
                    <div class="excellenceSliderInner Analytics-Engineering">
                        <div class="excellenceCard">
                            <div class="excellenceCardImg">
                                <img src="<?php bloginfo('template_directory');?>/images/excellence-new-5.png" alt="">
                            </div>
                            <div class="excellenceCardOverlayTwo"></div>
                            <div class="excellenceCardOverlay"></div>
                            <div class="excellenceCardText">
                                <h3 class="font24 commonsSemiBold">Creating New Game Characters Without Using
                                    Paintbrush</h3>
                                <h4 class="font16 commonsThin">Learn how to make machines smart enough to understand the
                                    natural
                                    language Using Kaggle Dataset.</h4>
                                <a href="" class="font16 commonsMedium">
                                    <img src="<?php bloginfo('template_directory');?>/images/news-arrow.png" alt="">
                                </a>
                            </div>
                            <div class="filterTag" style="background-color: #7F3EB5;">
                                <p>Gaming</p>
                            </div>
                            <!-- <div class="statusTag">
                                <img src="<?php bloginfo('template_directory');?>/images/eye-icon.png" alt="">
                                <p class="font16">Trending today</p>
                            </div> -->
                        </div>
                    </div>

                </div>
                <!-- Test Modal One-->
                <div class="modal fade excellenceModal" id="TestModalOne" tabindex="-1" role="dialog"
                    aria-labelledby="TestModalOneTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header"
                                style="background-image: url('<?php bloginfo('template_directory');?>/images/modal-header-1.png');">
                                <div class="modalOneOverlay"></div>
                                <div class="modalOneOverlayTwo"></div>
                                <h6 class="font24">Artificial Intelligence</h6>
                                <h3 class="font48 commonsMedium">NLI Task Demonstration</h3>
                                <p class="font16 colorG">Learn how to make machines smart enough to understand the
                                    natural<br>language Using Kaggle Dataset.</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <img src="<?php bloginfo('template_directory');?>/images/close-icon.png" alt="">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modalBodyInner">
                                    <div class="challengesHolder">
                                        <div class="challengesHeading">
                                            <h4 class="font24 commonsSemiBold">Challenges</h4>
                                            <p class="font16 colorG">The basic challenge faced in the retail market is
                                                provide the
                                                optimal discount(s) as giving high discounts on products may
                                                help clear inventory but may not generate as much revenue
                                            </p>
                                            <p class="font16 colorG">i.e. revenue obtained from selling all the products
                                                at
                                                higher
                                                discount would be less than selling half the products at a
                                                lower discount hence it becomes essential for retailers to
                                                optimize the prices.
                                            </p>
                                        </div>
                                        <div class="revenueHolder">
                                            <div class="revenueCard">
                                                <div class="revenueCardHead">
                                                    <h2 class="font40 caslonGraphiqueEF"><img
                                                            src="<?php bloginfo('template_directory');?>/images/wave.png"
                                                            alt=""> 3.25%</h2>
                                                    <h3 class="font24 commonsSemiBold">Incremental revenue</h3>
                                                </div>
                                                <p class="font16 colorG">An Incremental revenue was achieved with lesser
                                                    budget in sales & marketing initiatives. </p>
                                            </div>
                                            <div class="revenueCard">
                                                <div class="revenueCardHead">
                                                    <h2 class="font40 caslonGraphiqueEF"><img
                                                            src="<?php bloginfo('template_directory');?>/images/wave.png"
                                                            alt=""> 3.25%</h2>
                                                    <h3 class="font24 commonsSemiBold">Incremental revenue</h3>
                                                </div>
                                                <p class="font16 colorG">An Incremental revenue was achieved with lesser
                                                    budget in sales & marketing initiatives. </p>
                                            </div>
                                            <div class="revenueCard">
                                                <div class="revenueCardHead">
                                                    <h2 class="font40 caslonGraphiqueEF"><img
                                                            src="<?php bloginfo('template_directory');?>/images/wave.png"
                                                            alt=""> 3.25%</h2>
                                                    <h3 class="font24 commonsSemiBold">Incremental revenue</h3>
                                                </div>
                                                <p class="font16 colorG">An Incremental revenue was achieved with lesser
                                                    budget in sales & marketing initiatives. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="downloadHolder">
                                        <h4 class="font24 commonsSemiBold">Download case study</h4>
                                        <form>
                                            <div class="inputElement">
                                                <label>Full Name</label>
                                                <input type="text">
                                            </div>
                                            <div class="inputElement">
                                                <label>Business Email Id</label>
                                                <input type="text">
                                            </div>
                                            <button class="submitBtn1">Download</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="nextCaseDiv">
                                    <p class="font16">Next case study</p>
                                    <img src="<?php bloginfo('template_directory');?>/images/modal-arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Test Modal Two-->
                <div class="modal fade excellenceModal" id="TestModalTwo" tabindex="-1" role="dialog"
                    aria-labelledby="TestModalTwoTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="<?php bloginfo('template_directory');?>/images/modal-header-2.png" alt="">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <img src="<?php bloginfo('template_directory');?>/images/close-icon.png" alt="">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modalBodyInner">
                                    <div class="challengesHolder">
                                        <div class="modalBodyHeader">
                                            <h6 class="font24">Artificial Intelligence</h6>
                                            <h3 class="font48 commonsMedium">NLI Task Demonstration</h3>
                                            <p class="font16 colorG">Learn how to make machines smart enough to
                                                understand
                                                the
                                                natural<br>language Using Kaggle Dataset.</p>
                                        </div>
                                        <div class="challengesHeading">
                                            <h4 class="font24 commonsSemiBold">Challenges</h4>
                                            <p class="font16 colorG">The basic challenge faced in the retail market is
                                                provide the
                                                optimal discount(s) as giving high discounts on products may
                                                help clear inventory but may not generate as much revenue
                                            </p>
                                            <p class="font16 colorG">i.e. revenue obtained from selling all the products
                                                at
                                                higher
                                                discount would be less than selling half the products at a
                                                lower discount hence it becomes essential for retailers to
                                                optimize the prices.
                                            </p>
                                        </div>
                                        <div class="revenueHolder">
                                            <div class="revenueCard">
                                                <div class="revenueCardHead">
                                                    <h2 class="font40 caslonGraphiqueEF"><img
                                                            src="<?php bloginfo('template_directory');?>/images/wave.png"
                                                            alt=""> 3.25%</h2>
                                                    <h3 class="font24 commonsSemiBold">Incremental revenue</h3>
                                                </div>
                                                <p class="font16 colorG">An Incremental revenue was achieved with lesser
                                                    budget in sales & marketing initiatives. </p>
                                            </div>
                                            <div class="revenueCard">
                                                <div class="revenueCardHead">
                                                    <h2 class="font40 caslonGraphiqueEF"><img
                                                            src="<?php bloginfo('template_directory');?>/images/wave.png"
                                                            alt=""> 3.25%</h2>
                                                    <h3 class="font24 commonsSemiBold">Incremental revenue</h3>
                                                </div>
                                                <p class="font16 colorG">An Incremental revenue was achieved with lesser
                                                    budget in sales & marketing initiatives. </p>
                                            </div>
                                            <div class="revenueCard">
                                                <div class="revenueCardHead">
                                                    <h2 class="font40 caslonGraphiqueEF"><img
                                                            src="<?php bloginfo('template_directory');?>/images/wave.png"
                                                            alt=""> 3.25%</h2>
                                                    <h3 class="font24 commonsSemiBold">Incremental revenue</h3>
                                                </div>
                                                <p class="font16 colorG">An Incremental revenue was achieved with lesser
                                                    budget in sales & marketing initiatives. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="downloadHolder">
                                        <h4 class="font24 commonsSemiBold">Download case study</h4>
                                        <form>
                                            <div class="inputElement">
                                                <label>Full Name</label>
                                                <input type="text">
                                            </div>
                                            <div class="inputElement">
                                                <label>Business Email Id</label>
                                                <input type="text">
                                            </div>
                                            <button class="submitBtn1">Download</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="nextCaseDiv">
                                    <p class="font16">Next case study</p>
                                    <img src="<?php bloginfo('template_directory');?>/images/modal-arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="horizontalSection">
    <div class="section section--vertical" id="second">
        <div class="block-list">
            <div class="block-list__item firstHorizontalDiv">
                <div class="block-list__item-inner">
                    <div class="innovationHolder">
                        <h2 class="font48 caslonGraphiqueEF">Making Innovation Happen is Team Work</h2>
                        <p class="font24 colorG">Next-gen technologies require a spark of the young and deep focus of
                            the experienced. Bring in your hunger to create unique solutions to real-world challenges.</p>
                    </div>
                    <div class="innovationSlider">
                        <div class="innovationCard">
                            <div class="innovationCardInner">
                                <h4 class="font24 commonsMedium">Data Engineer</h4>
                                <div class="jobInfoDiv">
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/schedule.png" alt="">
                                        <p class="commonsThin">Full Time</p>
                                    </div>
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/shop.png" alt="">
                                        <p class="commonsThin">5-7 Yrs experience</p>
                                    </div>
                                </div>
                                <div class="jobInfoDiv">
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/pin_drop.png" alt="">
                                        <p class="commonsThin">Hyderabad/Secunderabad,<br>Bangalore/Bengaluru</p>
                                    </div>
                                </div>
                                <a href="" class="jobCta">Apply here</a>
                            </div>
                        </div>
                        <div class="innovationCard">
                            <div class="innovationCardInner">
                                <h4 class="font24 commonsMedium">Sr. Associate</h4>
                                <div class="jobInfoDiv">
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/schedule.png" alt="">
                                        <p class="commonsThin">Full Time</p>
                                    </div>
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/shop.png" alt="">
                                        <p class="commonsThin">2-7 Yrs experience</p>
                                    </div>
                                </div>
                                <div class="jobInfoDiv">
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/pin_drop.png" alt="">
                                        <p class="commonsThin">Hyderabad/Secunderabad,<br>Bangalore/Bengaluru</p>
                                    </div>
                                </div>
                                <a href="" class="jobCta">Apply here</a>
                            </div>
                        </div>
                        <div class="innovationCard">
                            <div class="innovationCardInner">
                                <h4 class="font24 commonsMedium">Data Analyst</h4>
                                <div class="jobInfoDiv">
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/schedule.png" alt="">
                                        <p class="commonsThin">Full Time</p>
                                    </div>
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/shop.png" alt="">
                                        <p class="commonsThin">5-7 Yrs experience</p>
                                    </div>
                                </div>
                                <div class="jobInfoDiv">
                                    <div class="jobInfoDivInner">
                                        <img src="<?php bloginfo('template_directory');?>/images/pin_drop.png" alt="">
                                        <p class="commonsThin">Hyderabad/Secunderabad,<br>Bangalore/Bengaluru</p>
                                    </div>
                                </div>
                                <a href="" class="jobCta">Apply here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-list__item secondHorizontalDiv">
                <div class="block-list__item-inner">
                    <div class="trendsHolder">
                        <h2 class="font48 caslonGraphiqueEF">Trends from our lens</h2>
                        <div class="trendsInnerHolder">
                            <div class="trendsSliderHolder">
                                <div class="trendsSlider">
                                    <div class="trendsInnerSlider">
                                        <div class="trendsImg">
                                            <img src="<?php bloginfo('template_directory');?>/images/trends-img.png"
                                                alt="">
                                        </div>
                                        <div class="trendsOverlay"></div>
                                        <div class="trendsText">
                                            <h3 class="font40 commonsSemiBold">How CPG brands can retain consumer
                                                loyalty
                                                through data analytics?</h3>
                                            <a href="" class="cta2 sparkleBtn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trendsNewsHolder">
                                <div class="trendsNewsCard">
                                    <a href="">
                                        <div class="trendsNewsImg">
                                            <img src="<?php bloginfo('template_directory');?>/images/news-img-1.png"
                                                alt="">
                                        </div>
                                        <div class="trendsOverlay"></div>
                                        <div class="trendsNewsText">
                                            <div class="trendsNewsTextInner">
                                                <p class="font16">Whitepaper</p>
                                                <h4 class="font20 commonsMedium">Instagram is now your go-to page get
                                                    our
                                                    Instant updates.</h4>
                                            </div>
                                            <img src="<?php bloginfo('template_directory');?>/images/news-arrow.png"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="trendsNewsCard">
                                    <a href="">
                                        <div class="trendsNewsImg">
                                            <img src="<?php bloginfo('template_directory');?>/images/news-img-2.png"
                                                alt="">
                                        </div>
                                        <div class="trendsOverlay"></div>
                                        <div class="trendsNewsText">
                                            <div class="trendsNewsTextInner">
                                                <p class="font16">Video</p>
                                                <h4 class="font20 commonsMedium">Glimpse of Vaccination drive at Affine
                                                    HQ – Bengaluru.</h4>
                                            </div>
                                            <img src="<?php bloginfo('template_directory');?>/images/news-play.png"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-list__item thirdHorizontalDiv">
                <div class="block-list__item-inner">
                    <div class="feedsOuterHolder">
                        <div class="feedsInnerHolder">
                            <div class="feedTitle">
                                <img src="<?php bloginfo('template_directory');?>/images/linkedin.png" alt="">
                                <h2 class="font48 caslonGraphiqueEF">Live Feeds</h2>
                            </div>
                            <div class="feedsHolder">
                                <div class="feedCard">
                                    <a href="" class="shareFeedIcon"><img
                                            src="<?php bloginfo('template_directory');?>/images/small-linkedin.png"
                                            alt=""></a>
                                    <div class="feedCardHeader">
                                        <div class="feedAuthorInfo">
                                            <div class="authorImg">
                                                <img src="<?php bloginfo('template_directory');?>/images/feed-dp.png"
                                                    alt="">
                                            </div>
                                            <div class="authorName">
                                                <div class="authorNameInner">
                                                    <h4 class="font20 commonsSemiBold">Steve Wolf</h4>
                                                    <h5>Data scientists</h5>
                                                </div>
                                                <p>20 min read</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedCardBody">
                                        <h3 class="font16">A team dedicated to make a significant impact. And We’re
                                            always looking for people to join the</h3>
                                    </div>
                                    <div class="feedCardFooter">
                                        <p>A day ago</p>
                                        <a href="">
                                            <img src="<?php bloginfo('template_directory');?>/images/share.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="feedCard">
                                    <a href="" class="shareFeedIcon"><img
                                            src="<?php bloginfo('template_directory');?>/images/small-linkedin.png"
                                            alt=""></a>
                                    <div class="feedCardHeader">
                                        <div class="feedAuthorInfo">
                                            <div class="authorImg">
                                                <img src="<?php bloginfo('template_directory');?>/images/feed-dp.png"
                                                    alt="">
                                            </div>
                                            <div class="authorName">
                                                <div class="authorNameInner">
                                                    <h4 class="font20 commonsSemiBold">Steve Wolf</h4>
                                                    <h5>Data scientists</h5>
                                                </div>
                                                <p>20 min read</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedCardBody">
                                        <img src="<?php bloginfo('template_directory');?>/images/feed-img.png" alt="">
                                        <h3 class="font16">A team dedicated to make a significant impact. And We’re
                                            always looking for people to join the</h3>
                                    </div>
                                    <div class="feedCardFooter">
                                        <p>A day ago</p>
                                        <a href="">
                                            <img src="<?php bloginfo('template_directory');?>/images/share.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="feedCard">
                                    <a href="" class="shareFeedIcon"><img
                                            src="<?php bloginfo('template_directory');?>/images/small-linkedin.png"
                                            alt=""></a>
                                    <div class="feedCardHeader">
                                        <div class="feedAuthorInfo">
                                            <div class="authorImg">
                                                <img src="<?php bloginfo('template_directory');?>/images/feed-dp.png"
                                                    alt="">
                                            </div>
                                            <div class="authorName">
                                                <div class="authorNameInner">
                                                    <h4 class="font20 commonsSemiBold">Steve Wolf</h4>
                                                    <h5>Data scientists</h5>
                                                </div>
                                                <p>20 min read</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedCardBody">
                                        <h3 class="font16">A team dedicated to make a significant impact. And We’re
                                            always looking for people to join the</h3>
                                    </div>
                                    <div class="feedCardFooter">
                                        <p>A day ago</p>
                                        <a href="">
                                            <img src="<?php bloginfo('template_directory');?>/images/share.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feedsInnerHolder instaFeedHolder">
                            <div class="feedTitle">
                                <img src="<?php bloginfo('template_directory');?>/images/instagram.png" alt="">
                                <h2 class="font48 caslonGraphiqueEF">Live Feeds</h2>
                            </div>
                            <div class="feedsHolder">
                                <div class="feedCard">
                                    <a href="" class="shareFeedIcon"><img
                                            src="<?php bloginfo('template_directory');?>/images/small-instagram.png"
                                            alt=""></a>
                                    <div class="feedCardHeader">
                                        <div class="feedAuthorInfo">
                                            <div class="authorImg">
                                                <img src="<?php bloginfo('template_directory');?>/images/feed-dp.png"
                                                    alt="">
                                            </div>
                                            <div class="authorName">
                                                <div class="authorNameInner">
                                                    <h4 class="font20 commonsSemiBold">Steve Wolf</h4>
                                                    <h5>Data scientists</h5>
                                                </div>
                                                <p>20 min read</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedCardBody">
                                        <img src="<?php bloginfo('template_directory');?>/images/insta-feed img.png" alt="">
                                        <h3 class="font16">A team dedicated to make a significant impact. And We’re
                                            always looking for people to join the</h3>
                                    </div>
                                    <div class="feedCardFooter">
                                        <p>A day ago</p>
                                        <a href="">
                                            <img src="<?php bloginfo('template_directory');?>/images/share.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="feedCard">
                                    <a href="" class="shareFeedIcon"><img
                                            src="<?php bloginfo('template_directory');?>/images/small-instagram.png"
                                            alt=""></a>
                                    <div class="feedCardHeader">
                                        <div class="feedAuthorInfo">
                                            <div class="authorImg">
                                                <img src="<?php bloginfo('template_directory');?>/images/feed-dp.png"
                                                    alt="">
                                            </div>
                                            <div class="authorName">
                                                <div class="authorNameInner">
                                                    <h4 class="font20 commonsSemiBold">Steve Wolf</h4>
                                                    <h5>Data scientists</h5>
                                                </div>
                                                <p>20 min read</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedCardBody">
                                        <img src="<?php bloginfo('template_directory');?>/images/insta-feed img.png" alt="">
                                        <h3 class="font16">A team dedicated to make a significant impact. And We’re
                                            always looking for people to join the</h3>
                                    </div>
                                    <div class="feedCardFooter">
                                        <p>A day ago</p>
                                        <a href="">
                                            <img src="<?php bloginfo('template_directory');?>/images/share.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="feedCard">
                                    <a href="" class="shareFeedIcon"><img
                                            src="<?php bloginfo('template_directory');?>/images/small-instagram.png"
                                            alt=""></a>
                                    <div class="feedCardHeader">
                                        <div class="feedAuthorInfo">
                                            <div class="authorImg">
                                                <img src="<?php bloginfo('template_directory');?>/images/feed-dp.png"
                                                    alt="">
                                            </div>
                                            <div class="authorName">
                                                <div class="authorNameInner">
                                                    <h4 class="font20 commonsSemiBold">Steve Wolf</h4>
                                                    <h5>Data scientists</h5>
                                                </div>
                                                <p>20 min read</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedCardBody">
                                        <img src="<?php bloginfo('template_directory');?>/images/insta-feed img.png" alt="">
                                        <h3 class="font16">A team dedicated to make a significant impact. And We’re
                                            always looking for people to join the</h3>
                                    </div>
                                    <div class="feedCardFooter">
                                        <p>A day ago</p>
                                        <a href="">
                                            <img src="<?php bloginfo('template_directory');?>/images/share.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lifeSection">
    <div class="lifeHolder">
        <h2 class="font48 caslonGraphiqueEF">Life at Affine</h2>
        <div class="lifeSliderWrapper">
            <div class="lifeSlider">
                <div class="lifeCard">
                    <div class="lifeCardInner">
                        <img src="<?php bloginfo('template_directory');?>/images/life-2.png" alt="">
                        <div class="lifeCardOverText">
                            <p class="font16">A team dedicated to make a significant impact. And We’re always looking
                                for people to
                                join the team who are as excited as we are to help build Lorem Ipsum is simply dummy
                                text..</p>
                            <h3 class="caslonGraphiqueEF font16">Steve Wolf</h3>
                            <h4 class="commonsThin">Data scientists</h4>
                        </div>
                    </div>
                </div>
                <div class="lifeCard">
                    <div class="lifeCardInner">
                        <img src="<?php bloginfo('template_directory');?>/images/life-1.png" alt="">
                        <div class="lifeOverlay"></div>
                        <a href="" class="lifeSvgIcon">
                            <svg width="15" height="30" viewBox="0 0 15 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 0.334824V4.97822C15 4.97822 9.74579 4.20443 9.74579 7.64379V11.0832H14.4915L13.8985 16.3283H9.74579V30H4.49158V16.3283L0 16.2422V11.0832H4.40678V7.12783C4.40678 7.12783 4.11597 1.24379 9.8306 0.163044C12.2036 -0.285964 15 0.334824 15 0.334824V0.334824Z"
                                    fill="#878787" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="lifeCard lifCardTextOnly">
                    <div class="lifeCardInnerTwo">
                        <div class="lifeTextCard">
                            <img src="<?php bloginfo('template_directory');?>/images/quote.png" alt="">
                            <p>A team dedicated to make a significant impact. And We’re always looking for people to
                                join the team who are as excited as we are to help build Lorem Ipsum is simply dummy
                                text..</p>
                            <h3 class="caslonGraphiqueEF">Steve Wolf</h3>
                            <h4 class="commonsThin">Data scientists</h4>
                        </div>
                    </div>
                </div>
                <div class="lifeCard">
                    <div class="lifeCardInner">
                        <img src="<?php bloginfo('template_directory');?>/images/life-1.png" alt="">
                        <div class="lifeOverlay"></div>
                    </div>
                </div>
                <div class="lifeCard">
                    <div class="lifeCardInner">
                        <img src="<?php bloginfo('template_directory');?>/images/life-2.png" alt="">
                        <div class="lifeOverlay"></div>
                        <a href="" class="lifeSvgIcon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14.9999" cy="15.0003" r="4.56522" fill="#878787" />
                                <circle cx="14.9999" cy="15.0003" r="4.56522" fill="#878787" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.9972 0.0144594C14.5016 0.0144444 14.008 0.0108832 13.5182 0.007349C7.93668 -0.0329206 2.84193 -0.0696785 0.793593 5.18308C-0.0197506 7.26861 -0.0100652 9.9046 0.00321112 13.5179C0.0049602 13.994 0.00677161 14.487 0.00677161 14.9979C0.00677161 15.4129 0.00533723 15.8253 0.00391676 16.2336C-0.00784452 19.6147 -0.018652 22.7217 0.793593 24.811C2.83706 30.0664 7.97068 30.0289 13.5225 29.9885C14.0114 29.9849 14.5035 29.9813 14.997 29.9813C15.5122 29.9813 16.0288 29.986 16.5442 29.9907C21.9136 30.0395 27.144 30.087 29.2021 24.811C30.0158 22.7073 30.0061 20.1086 29.9926 16.4967C29.9908 16.0155 29.9889 15.5163 29.9889 14.9979C29.9889 14.4375 29.9919 13.8961 29.9947 13.3727V13.3724C30.0218 8.42944 30.04 5.09401 27.4711 2.5286C24.8921 -0.0483312 21.4984 -0.0254371 16.7084 0.00687697C16.1568 0.0105979 15.5867 0.0144438 14.9972 0.0144594ZM22.1739 15.0001C22.1739 18.9621 18.962 22.174 15 22.174C11.0379 22.174 7.82605 18.9621 7.82605 15.0001C7.82605 11.038 11.0379 7.82617 15 7.82617C18.962 7.82617 22.1739 11.038 22.1739 15.0001ZM22.826 9.13033C23.9066 9.13033 24.7826 8.25436 24.7826 7.17381C24.7826 6.09325 23.9066 5.21729 22.826 5.21729C21.7455 5.21729 20.8695 6.09325 20.8695 7.17381C20.8695 8.25436 21.7455 9.13033 22.826 9.13033Z"
                                    fill="#878787" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            <div class="sliderArrow">
                <button class="back lifeSliderBack">
                    <img src="<?php bloginfo('template_directory');?>/images/life-left-slider.svg" alt="">
                </button>
                <button class="forward lifeSliderForward">
                    <img src="<?php bloginfo('template_directory');?>/images/life-right-slider.svg" alt="">
                </button>
            </div>
        </div>
    </div>
</section>

<section class="deliverSection" data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <div class="wrapper">
        <h2 class="font60 caslonGraphiqueEF colorG">Make Data Deliver Precise Outcomes</h2>
        <p class="font24 colorG">Bet on technologies that align to business context and solve your critical challenges.
            Our<br>experts blend tech expertise and domain experience to make you Command the New.</p>
        <a href="<?php echo get_site_url(); ?>/contact-us" class="cta1 sparkleBtn">Begin Here</a>
    </div>
</section>

<?php
get_footer();
?>