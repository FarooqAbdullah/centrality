	<?php
	/**
	 * The IT Consulting Page Template
	 *
	 * @package Objects
	 * @subpackage Centrality
	 */

	/* Template Name: IT Consulting Page */
	get_header();the_post();
	?>
		<div class="content-wrapper it-consulting-page-heading">
		<div class="container">
		<div class="row-minus">
		<div class="breadcrumbs">  Solutions / IT Management - IT Consulting</div>
		<?php $pfx="solutions_"; ?>

	<h2><?php echo the_title();  ?> </h2>
	</div>
	</div>
	</div>

	<div class="content-wrapper centralityServices">
	<div class="container">
		<div class="row-minus"> 
		<div class="row-minus">
			<div class="col-lg-3 col-md-3 col-xs-3 sidebar-menu-it-consulting">
			<h2>IT Management</h2>
			<ul class="sidemenu">
			  <li> IT Consulting </li>
			  <li> Managed Services  </li>
			  <li> Helpdesk </li>
			  <li> Office 365 </li>
			  <li> Share Point </li>
			</ul>
			
			</div>
			<div class="col-lg-9 col-md-9 col-xs-9 srv-page-intro-box">
				<div class="top-block-well">
				 <h2> Worry Free Support </h2>
				 <h3>IT Consulting </h3>
				
				</div>
				<div class="blue-well">
						<div class="col-lg-4 firstCol"> <div>CUSTOM-DESIGNED NETWORK </div> </div>
						<div class="col-lg-2 secondCol"> <div> DEDICATED IT TEAM </div> </div>
						<div class="col-lg-4 thirdCol"> <div> DATA LOSSPREVENTION </div> </div>
				</div>	
		<div class="lineVertical"></div>
			<div class="blue-border-box">
				<h2>WE’RE HERE TO HELP</h2>
				<p>Centrality provides IT consulting services that partners you with a dedicated team. We start by understanding your network, your business goals, and your objectives. This allows us to develop a custom-designed network for your business.
</p> <p>
From experience, we know every business relies heavily on technology in order to run efficiently and effectively in today's economy. It's also proven that every business is unique when it comes to the way they use technology
</p>
			
			</div>	
				
			</div>
		</div>
	</div>
	</div>
		
	</div>
	
	<div class="content-wrapper leadGen">
	  <div class="container">
			<div class="col-md-7 col-sm-7">
				<h2>Want to save up to <b>30% annually</b>
					on your company’s technology spend?</h2>
					<form action="#" method="post">
                            <div class="form-group">
                                <label for="newsLetter">Sign up for our FREE onsite technology analysis </label>
                                <input type="email" name="newsLetter" class="form-control" id="newsLetter" placeholder="Enter Your email address to find out how to save">
                                <button type="submit" class="btn btn-default"><img src="http://localhost:8080/centrality/wp-content/themes/centrality/images/right-arrow.png" alt=""></button>
                            </div>
                        </form>
			</div>
			<div class="col-md-5 col-sm-5 leadImage"> 
			<div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/30offer.png" />
			</div>
			</div>
	  
	  </div>	  
	</div>
	
	<?php echo do_shortcode('[_business_technology heading="Our People  makes Us teh Business Technology leader in Kentuckiana" content1="hours of certified IT training, including dual certifications in Microsoft and Sisco." content2="business technology advisors & consultants" content1_num="350" content2_num="20" button_text="Meet The Team" button_url="#" ]'); ?>

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
			 <div class="col-lg-3">
				<div class="featuredServiceBox">
				<img src="<?php echo get_template_directory_uri() ?>/images/cloudicon.jpg" /> 
				<h2>Managed Cloud Services</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
				<a href="#" class="btn-square blue-border">LEARN MORE</a>
				<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture1.jpg" /> </div>
				</div>
			 </div>
			 <!--Col-->
			 
			 <div class="col-lg-3">
				<div class="featuredServiceBox">
				<img src="<?php echo get_template_directory_uri() ?>/images/bandaicon.jpg" /> 
				<h2>On Premise IT Support</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
				<a href="#" class="btn-square blue-border">LEARN MORE</a>
				<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture1.jpg" /> </div>
				</div>
			 </div>
			 <!--Col-->
			 
			 <div class="col-lg-3">
				<div class="featuredServiceBox">
				<img src="<?php echo get_template_directory_uri() ?>/images/phoneicon.jpg" /> 
				<h2>Voice Communications</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
				<a href="#" class="btn-square blue-border">LEARN MORE</a>
				<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture1.jpg" /> </div>
				</div>
			 </div>
			 <!--Col-->
			 
			 <div class="col-lg-3">
				<div class="featuredServiceBox last">
				<img src="<?php echo get_template_directory_uri() ?>/images/plusicon.jpg" /> 
				<h2>Business Continuity/ Disaster Recovery</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
				<a href="#" class="btn-square blue-border">LEARN MORE</a>
				<div class="clear-fix texture1 texture"><img src="<?php echo get_template_directory_uri() ?>/images/texture1.jpg" /> </div>
				</div>
			 </div>
			 <!--Col-->
		</div>
			 
			 <div class="clear-fix"></div>
		</div>
		</div>
	 </div>


		







	<div class="content-wrapper"><?php echo do_shortcode('[_trusted_companies]'); ?></div>
	<?php get_footer(); ?>