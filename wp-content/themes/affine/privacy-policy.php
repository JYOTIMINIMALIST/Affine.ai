<?php get_header(); /*Template Name: Privacy-policy*/ ?>


<style>
    .privacy {
        padding: 200px 0px 200px 150px;
    }

    .privacyContent {
        width: 80%;
    }

    .privacy .privacyContent h2 {

        font-size: 40px;
        font-weight: 500 !important;
        color: #FFFFFF;
        font-family: 'caslongraphiqueefregular';

    }

    .privacy .privacyContent h3 {

        font-size: 30px;
        font-weight: 500;
        color: #FFFFFF;
        font-family: 'TT Commons Regular';

    }

    .privacy .privacyContent h4 {

        font-size: 25px;
        font-weight: 500;
        color: #FFFFFF;
        font-family: 'TT Commons Regular';

    }

    .privacy .privacyContent p {
        margin: 15px 0px;
        font-size: 18px;
        font-weight: 300;
        color: #EAEAEA;
        font-family: 'TT Commons Regular';

    }

    @media all and (max-width: 1600px) {
        .privacy {
            padding: 150px 0px 150px 150px;
        }

        .privacy .privacyContent h2 {
            font-size: 30px;
        }

        .privacy .privacyContent h3 {
            font-size: 25px;
        }

        .privacy .privacyContent h4 {
            font-size: 22px;
        }
    }

    @media all and (max-width: 900px) {
        .privacyContent {
            width: 100%;
        }

        .privacy .privacyContent h2 {
            font-size: 25px;
        }

        .privacy .privacyContent h3 {
            font-size: 22px;
        }

        .privacy .privacyContent h4 {
            font-size: 20px;
        }
        .privacy {
            padding: 50px 0px;
        }
    }

    
</style>

<section class="privacy">
    <div class="wrapper">
        <div class="privacyContent">
            <h1 class="font60 caslonGraphiqueEF"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>