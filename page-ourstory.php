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
   
        
		
<?php $heading = get_post_meta( get_the_ID(), 'why_centrality_provenTextHeading', true );
$box1Heading = get_post_meta( get_the_ID(), 'why_centrality_prBox1', true );
$box2Heading = get_post_meta( get_the_ID(), 'why_centrality_prBox2', true );
$box3Heading = get_post_meta( get_the_ID(), 'why_centrality_prBox3', true );
$box4Heading = get_post_meta( get_the_ID(), 'why_centrality_prBox4', true );

$box1Text = get_post_meta( get_the_ID(), 'why_centrality_prBox1_title', true );
$box2Text = get_post_meta( get_the_ID(), 'why_centrality_prBox2_title', true );
$box3Text = get_post_meta( get_the_ID(), 'why_centrality_prBox3_title', true );
$box4Text = get_post_meta( get_the_ID(), 'why_centrality_prBox4_title', true );

$btnText = get_post_meta( get_the_ID(), 'why_centrality_discoverbtn', true );
$btnTextUrl = get_post_meta( get_the_ID(), 'why_centrality_discoverbtnurl', true );
?>

<?php echo do_shortcode('[_trusted_companies]'); ?>
</div>

<?php get_footer(); ?>