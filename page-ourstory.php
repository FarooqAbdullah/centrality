<?php
/**
 * The Our Story Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Our Story Template */
get_header();the_post();
?>
    <div class="content-wrapper">

<?php 	$heading=get_post_meta( get_the_ID(), 'ourStroy_pageTitle1', true );
		$slogan=get_post_meta( get_the_ID(), 'ourStroy_pageSlogan', true );
		$btnText=get_post_meta( get_the_ID(), 'btnText', true );
		$btnUrl=get_post_meta( get_the_ID(), 'btnUrl', true );
		$greenBox=get_post_meta( get_the_ID(), 'greenBox', true );
 echo do_shortcode('[_employment_header class="employment-header" heading="'.$heading.'" slogan="'.$slogan.'" button_text="'.$btnText.'" button_url="'.$btnUrl.'"]'); ?>

<?php
$heading = get_post_meta( get_the_ID(), 'block1_heading', true );
$text = get_post_meta( get_the_ID(), 'block1_text', true );
?>
    <div class="row our-story-box">
        <div class="container text-center">
            <div class="col-lg-7 col-sm-12 col-md-7 centerText">
                <h2><?php echo $heading; ?></h2>
                <p><?php echo $text; ?> </p>               
            </div>
        </div>
    </div>


	
	
<div class="content-wrapper centralityServices">
  <?php 
$vision=get_post_meta( get_the_ID(), 'ourvision', true );
$mission=get_post_meta( get_the_ID(), 'ourmission', true );
  echo do_shortcode('[_centrality_service]'); ?>
</div>
   
        
		<?php $heading = get_post_meta( get_the_ID(), '_feature_heading', true );
		$test= get_post_meta( get_the_ID(), 'commitmentText', true );
//$b1=get_post_meta( get_the_ID(), 'why_centrality_qualifiedText1', true );
//$b2=get_post_meta( get_the_ID(), 'why_centrality_qualifiedText2', true );  ?>
   
        <?php echo do_shortcode('[_feature_template heading="'.$heading.'"]'); ?>
		
		
		
 <?php $pfx="our-story";
            $bus_heading  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-heading', true);
            $bus_content1  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-first-content', true);
            $bus_content2  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-second-content', true);
            $bus_content1_num  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-first-content-num', true);
            $bus_content2_num  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-right-second-content-num', true);
            $bus_img  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-image', true);
            $bus_button_text  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-button-text', true);
            $bus_button_url  = get_post_meta(get_the_ID(),$pfx.'business-tecnolgy-button-url', true);
        ?>
        <?php echo do_shortcode('[_business_technology left_img="'.$bus_img.'" heading="'.$bus_heading.'" content1="'.$bus_content1.'" content2="'.$bus_content2.'" content1_num="'.$bus_content1_num.'" content2_num="'.$bus_content2_num.'" button_text="'.$bus_button_text.'" button_url="'.$bus_button_url.'" ]'); ?>



<?php echo do_shortcode('[_trusted_companies]'); ?>
</div>

<?php get_footer(); ?>