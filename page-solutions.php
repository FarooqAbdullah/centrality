<?php
/**
 * The Employment-Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Solutions-main-page */
get_header();the_post();
?>
    <div class="content-wrapper solutions-page-heading">
	<?php $pfx="solutions_"; ?>

<h2><?php echo get_post_meta( get_the_ID(), $pfx.'Heading', true );  ?> <small><?php echo get_post_meta( get_the_ID(), $pfx.'slogan', true );  ?> </small></h2>

</div>
<div class="content-wrapper">
  <?php echo do_shortcode('[_centrality_service]'); ?>
  
</div>
<div class="content-wrapper">
<?php $hd_img=get_post_meta( get_the_ID(), $pfx.'cab_heading', true );
$hd_slogan=get_post_meta( get_the_ID(), $pfx.'cab_text', true );
$btntxt=get_post_meta( get_the_ID(), $pfx.'btn', true );
$btnurl=get_post_meta( get_the_ID(), $pfx.'btnUrl', true );

 echo do_shortcode('[_employment_header class="employment-header" heading="'.$hd_img.'" slogan="'.$hd_slogan.'" button_text="'.$btntxt.'" button_url="'.btnurl.'"]'); ?>



    








<?php echo do_shortcode('[_trusted_companies]'); ?>

<?php get_footer(); ?>