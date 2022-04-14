<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package affine
 */

get_header(); ?>

<style>
    .errorPage {
        padding: 150px 0px;
        text-align: center;
    }

    .errorPage img {
        display: block;
        margin-left: auto;
        margin-right: auto;
       
    }

    .errorPage h2 {
        margin: 20px 0px;
    }

    .errorPage p {
        margin-bottom: 20px;
        line-height: 25px;
    }

    .box {
        border: 0.5px solid #6DCCE3;
        box-shadow: 4px 4px 10px 1px rgba(4, 167, 201, 0.75);
        border-radius: 5px;
        background: linear-gradient(142.41deg, rgba(18, 31, 34, 0.45) 37.47%, rgba(118, 125, 127, 0.261) 85.69%, rgba(157, 162, 163, 0.186429) 92.85%, rgba(255, 255, 255, 0) 109.08%, rgba(18, 31, 34, 0) 109.08%);
        backdrop-filter: blur(100px);
        padding: 100px 150px;
		width:60%;
		margin: 0 auto;
    }

    @media all and (max-width: 1600px) {
		.errorPage {
        padding: 150px 0px;
		}

        .errorPage {
            text-align: center;
        }

		.box{
            padding: 80px 120px;
        }



    }

    @media all and (max-width: 900px) {
        .errorPage {
            padding: 50px 0px;
        }
		.box{
            padding: 40px 80px;
			width:100%
        }

    }
	@media all and (max-width: 900px){
		.box{
            padding: 30px;
        }
	}

   
</style>


<section class="errorPage">
    <div class="wrapper">
		<div class="box">
			<img src="<?php echo get_field('404_image','option'); ?>" alt="">
        	<h2 class="caslonGraphiqueEF font40"><?php echo get_field('404_heading','option'); ?></h2>
        	<p class="commonsRegular font18"><?php echo get_field('404_description','option'); ?></p>
        	<a href="<?php echo get_field('404_link','option'); ?>" class="cta1"><?php echo get_field('404_cta','option'); ?></a>
		</div>
        
    </div>

</section>

<?php get_footer(); ?>