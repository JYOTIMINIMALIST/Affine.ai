<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package affine
 */

?>

<style type="text/css">
    .footerMenu ul li a {border-right: 2px solid #fff;padding-right: 8px;margin-right: 5px;}
    .footerMenu ul li:last-child a {border-right: 0px;padding-right: 0px;margin-right: 0px;}
</style>

<footer>
    <div class="mainFooter">
        <div class="footerLogo">
            <?php $footerlogo = get_field('footer_logo','option');
                if( !empty( $footerlogo ) ): ?>
            <img src="<?php echo esc_url($footerlogo['url']); ?>" loading="lazy"
                alt="<?php echo esc_attr($footerlogo['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="footerMenu">
            <ul>
                <?php if( have_rows('footer_links','option') ): ?>
                    <?php while( have_rows('footer_links','option') ): the_row(); ?>
                        <li><a href="<?php echo get_sub_field('link','option'); ?>"><?php echo get_sub_field('link_text','option'); ?></a></li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- <li><a href="">Terms of Use | </a></li>
                <li><a href="">Site Map</a></li> -->
            </ul>
        </div>
        <div class="footerSocial">
            <ul>
                <?php if( have_rows('social_media','option') ): ?>
                <?php while( have_rows('social_media','option') ): the_row(); ?>
                <li>
                    <a href="<?php echo get_sub_field('social_media_link','option'); ?>" target="_blank">
                        <?php echo get_sub_field('social_media_icon','option'); ?>
                    </a>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="copyrightFooter">
        <p><?php echo get_field('copyright_text','option'); ?></p>
    </div>
    <!-- <div class="chatBot">
        <img src="<?php bloginfo('template_directory');?>/images/bot.png" alt="">
    </div> -->
    <div class="findUs">
        <div class="findUsSocial">
            <a href="https://www.facebook.com/affineanalytics/" target="_blank">
                <svg width="15" height="30" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 0.334824V4.97822C15 4.97822 9.74579 4.20443 9.74579 7.64379V11.0832H14.4915L13.8985 16.3283H9.74579V30H4.49158V16.3283L0 16.2422V11.0832H4.40678V7.12783C4.40678 7.12783 4.11597 1.24379 9.8306 0.163044C12.2036 -0.285964 15 0.334824 15 0.334824Z"
                        fill="#878787" />
                </svg>
            </a>
            <a href="https://instagram.com/affine_ai?utm_medium=copy_link" target="_blank">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="14.9999" cy="14.9998" r="4.56522" fill="#878787" />
                    <circle cx="14.9999" cy="14.9998" r="4.56522" fill="#878787" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.9972 0.0144594C14.5016 0.0144444 14.008 0.0108832 13.5182 0.007349C7.93668 -0.0329206 2.84193 -0.0696785 0.793593 5.18308C-0.0197506 7.26861 -0.0100652 9.9046 0.00321112 13.5179C0.0049602 13.994 0.00677161 14.487 0.00677161 14.9979C0.00677161 15.4129 0.00533723 15.8253 0.00391676 16.2336C-0.00784452 19.6147 -0.018652 22.7217 0.793593 24.811C2.83706 30.0664 7.97068 30.0289 13.5225 29.9885C14.0114 29.9849 14.5035 29.9813 14.997 29.9813C15.5122 29.9813 16.0288 29.986 16.5442 29.9907C21.9136 30.0395 27.144 30.087 29.2021 24.811C30.0158 22.7073 30.0061 20.1086 29.9926 16.4967C29.9908 16.0155 29.9889 15.5163 29.9889 14.9979C29.9889 14.4375 29.9919 13.8961 29.9947 13.3727V13.3724C30.0218 8.42944 30.04 5.09401 27.4711 2.5286C24.8921 -0.0483312 21.4984 -0.0254371 16.7084 0.00687697C16.1568 0.0105979 15.5867 0.0144438 14.9972 0.0144594ZM22.1739 15.0001C22.1739 18.9621 18.962 22.174 15 22.174C11.0379 22.174 7.82605 18.9621 7.82605 15.0001C7.82605 11.038 11.0379 7.82617 15 7.82617C18.962 7.82617 22.1739 11.038 22.1739 15.0001ZM22.826 9.13033C23.9066 9.13033 24.7826 8.25436 24.7826 7.17381C24.7826 6.09325 23.9066 5.21729 22.826 5.21729C21.7455 5.21729 20.8695 6.09325 20.8695 7.17381C20.8695 8.25436 21.7455 9.13033 22.826 9.13033Z"
                        fill="#878787" />
                </svg>
            </a>
            <a href="https://twitter.com/Affine_ai" target="_blank">
                <svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30 2.88626C28.8965 3.37556 27.7095 3.70651 26.4647 3.85431C27.7357 3.09281 28.7111 1.88791 29.1715 0.44983C27.9822 1.15533 26.6644 1.66713 25.263 1.94299C24.1403 0.74727 22.5406 0 20.7693 0C17.3708 0 14.6144 2.75636 14.6144 6.15487C14.6144 6.63729 14.6691 7.10686 14.7746 7.5576C9.65941 7.30102 5.12393 4.85082 2.08804 1.12595C1.55834 2.03479 1.25448 3.09281 1.25448 4.2206C1.25448 6.35546 2.34187 8.24015 3.99247 9.34361C2.98403 9.31194 2.03433 9.03516 1.2049 8.57294C1.20444 8.5991 1.20444 8.62526 1.20444 8.65097C1.20444 11.6332 3.32691 14.1205 6.14202 14.6856C5.62609 14.827 5.08124 14.9018 4.52079 14.9018C4.12329 14.9018 3.73818 14.8637 3.36271 14.7921C4.14578 17.2368 6.41834 19.0163 9.11227 19.0664C7.00542 20.7174 4.35188 21.7011 1.46746 21.7011C0.971724 21.7011 0.480584 21.6722 0 21.6148C2.72239 23.3618 5.95841 24.3803 9.43404 24.3803C20.7551 24.3803 26.9462 15.0018 26.9462 6.86771C26.9462 6.60103 26.9402 6.33526 26.9283 6.07179C28.1318 5.20426 29.1752 4.12054 30 2.88626Z"
                        fill="#878787" />
                </svg>
            </a>
            <a href="https://www.youtube.com/channel/UCorW3qoB6Buu3OfmrZc_P0A" target="_blank">
                <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.7695 0H6.23054C2.78947 0 0 2.81404 0 6.28519V15.1298C0 18.6011 2.78957 21.415 6.23054 21.415H23.7695C27.2105 21.415 30 18.601 30 15.1298V6.28519C30 2.81404 27.2104 0 23.7695 0ZM19.5557 11.1378L11.3523 15.0846C11.1336 15.1898 10.881 15.0292 10.881 14.785V6.64453C10.881 6.39664 11.1403 6.23603 11.3592 6.34809L19.5625 10.5416C19.8068 10.6663 19.8024 11.0192 19.5557 11.1378Z"
                        fill="#878787" />
                </svg>
            </a>
            <a href="https://www.linkedin.com/company/affine" target="_blank">
                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30 17.5747V28.6676H23.5686V18.3181C23.5686 15.7194 22.6401 13.9448 20.3114 13.9448C18.5344 13.9448 17.4787 15.1396 17.0125 16.2964C16.8432 16.7099 16.7996 17.284 16.7996 17.8639V28.6671H10.3677C10.3677 28.6671 10.4541 11.1385 10.3677 9.32404H16.8001V12.0651C16.7871 12.0867 16.7689 12.1078 16.7574 12.1284H16.8001V12.0651C17.6548 10.75 19.179 8.86983 22.5964 8.86983C26.8277 8.86983 30 11.6344 30 17.5747ZM3.63944 0C1.43937 0 0 1.44417 0 3.34159C0 5.19873 1.39765 6.68463 3.55503 6.68463H3.59676C5.84 6.68463 7.23476 5.19873 7.23476 3.34159C7.19208 1.44417 5.83999 0 3.63944 0ZM0.382266 28.6676H6.81173V9.32404H0.382266V28.6676Z"
                        fill="#878787" />
                </svg>
            </a>
        </div>
        <div class="findUsText">
            <p>Find us</p>
        </div>
        
    </div>
</footer>

<?php if(is_front_page()){?>
</div>
<?php } else { ?>
<?php } ?>

<script type='text/javascript' src='<?php bloginfo('template_directory');?>/js/jquery-3.3.1.min.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/custom.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js.map"></script>

<?php wp_footer(); ?>
</body>

</html>