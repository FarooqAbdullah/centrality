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
	<div style="height:656px;">
	</div>
	
	<div class="content-wrapper whiteBg it-testimonials">
		<div class="container">
			<h2>What Our Customers Are Saying</h2>
			<p class="testi-content"> "I just wanted to say thank you so much for always being there for me. You always step up to the plate when I am having network and phone issues. You take such good care of me. {Centrality} is my safety net, the backbone of my network!"</p>
			<p class="testi-meta"> <b>-- Deborah Wolph,</b> CIO, Caudill Seed Company  </p>
			<a href="#" class="btn-square btn-testi">SEE OUR CUSTOMER STORIES</a>
		
		</div>
	</div>
	
	<div class="content-wrapper blueribbon supportPhone">
		<div class="container">
			<p>Get Centrality support today. <b>CALL 502.267.2552</b> or <a href="#" class="btn-contactus">Contact Us Online</a> </p>
		</div>
	</div>
	

	

	 





	<div class="content-wrapper"><?php echo do_shortcode('[_trusted_companies]'); ?></div>
	<?php get_footer(); ?>