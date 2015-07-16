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
<div class="content-wrapper centralityServices">
  <?php echo do_shortcode('[_centrality_service]'); ?>
  
</div>
<div class="content-wrapper cabling-solutions">
<?php $hd_img=get_post_meta( get_the_ID(), $pfx.'cab_heading', true );
$hd_slogan=get_post_meta( get_the_ID(), $pfx.'cab_text', true );
$btntxt=get_post_meta( get_the_ID(), $pfx.'btn', true );
$btnurl=get_post_meta( get_the_ID(), $pfx.'btnUrl', true );
$cab_icon=get_post_meta( get_the_ID(), $pfx.'cab_icon', true );

 echo do_shortcode('[_employment_header class="employment-header" head_img="'.$cab_icon.'" heading="'.$hd_img.'" slogan="'.$hd_slogan.'" button_text="'.$btntxt.'" button_url="'.btnurl.'"]'); ?>
 </div>

 <div class="content-wrapper featured-sol greybgwrap">
    <div class="blueBgwrap">
	 <h2>Featured Solutions</h2>
	 <div class="container">
	 <div class="row-minus">

         <?php
         $featured_solution_request = get_post_meta(get_the_ID(),'choose-featured-posts',true);
?>
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox">
			<img src="<?php echo get_template_directory_uri() ?>/images/cloudicon.jpg" /> 
			<h2>Managed Cloud Services</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
			<a href="#" class="btn-square blue-border">LEARN MORE</a>
			<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture1.jpg" /> </div>
			</div>
		 </div>
		 <!--Col-->
		 
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox">
			<img src="<?php echo get_template_directory_uri() ?>/images/bandaicon.jpg" /> 
			<h2>On Premise IT Support</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
			<a href="#" class="btn-square blue-border">LEARN MORE</a>
			<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture2.jpg" /> </div>
			</div>
		 </div>
		 <!--Col-->
		 
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox">
			<img src="<?php echo get_template_directory_uri() ?>/images/phoneicon.jpg" /> 
			<h2>Voice Communications</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
			<a href="#" class="btn-square blue-border">LEARN MORE</a>
			<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture3.jpg" /> </div>
			</div>
		 </div>
		 <!--Col-->
		 
		 <div class="col-lg-3 col-md-3 col-sm-6">
			<div class="featuredServiceBox last">
			<img src="<?php echo get_template_directory_uri() ?>/images/plusicon.jpg" /> 
			<h2>Business Continuity/ Disaster Recovery</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
			<a href="#" class="btn-square blue-border">LEARN MORE</a>
			<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture4.jpg" /> </div>
			</div>
		 </div>
	</div>
		 
		 <div class="clear-fix"></div>
	</div>
	</div>
 </div>


    


<div class="content-wrapper"><?php echo do_shortcode('[_trusted_companies]'); ?></div>

<?php get_footer(); ?>