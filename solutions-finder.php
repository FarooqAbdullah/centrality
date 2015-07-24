<?php
/**
 * The Solutions Finder Page
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Solutions finder */
get_header();the_post();
?>

    <div class="content-wrapper">
        <div class="header-solutions-finder">
		  <h2>Let us craft a custom IT <br/> solution for your business.</h2>
		  <p> All we need is a few minutes of your timeto answer a couple  <br/>
of questions regarding your IT business solution needs. </p> 
	<div class="tabs-wrapper">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#step1" aria-controls="home" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step0" aria-controls="profile" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step2" aria-controls="messages" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step0" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step3" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step0" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step0" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step3" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
	</ul>
  </div>
		</div>
		
		<div class="container">
			<div class="solutions-finder-content">
			 <?php echo do_shortcode('[contact-form-7 id="281" title="Contact form 1"]'); ?>
			</div>		
		</div>
		
		<!----Raw COde-->
		<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="step1">
					<div class="solutions-label-wrapper">
						<div class="left_down_arrow"></div>
						<div class="form_top_label">SELECT ONE</div>
						<div class="right_down_arrow"></div>						
					</div>
					<div class="radio-fields-wrapper">
					[radio i-m-in-field id:i_m_field class:i_m_field use_label_element "I'm in IT" "I'm not in IT"]
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="step2">
				  <div class="step_2_wrapper">
				        <div class="col-md-4 col-sm-4"> 
						   <div class=" box_choice expand">
						     <div class="expandicon"> </div>
							 <h2> EXPAND </h2>
							 <p>Adjusting to growing and changing business needs.</p>
						   </div>
						</div>
						
						 <div class="col-md-4 col-sm-4"> 
						   <div class=" box_choice modernize selected">
						   <div class="modernizeicon"> </div>
							 <h2> MODERNIZE </h2>
							 <p>Building the right system to move your business forward.</p>
						   </div>
						</div>
						
						 <div class="col-md-4 col-sm-4"> 
						   <div class=" box_choice integrate">
						   <div class="integrateicon"> </div>						   
							 <h2> INTEGRATE </h2>
							 <p>Combining voice and technology into a single efficient system.</p>
						   </div>
						</div>
						
				  </div>				
				</div>
				<div role="tabpanel" class="tab-pane" id="step3">
				      <div class="step_3_wrapper">
					  <h2> Please fill out the form below and we will be in touch soon..</h2> 
					  <div class="col-md-6 col-sm-6"></div>
					  <div class="col-md-6 col-sm-6"></div>
					  <div class="clearfix"></div>
					  <div class="col-md-6 col-sm-6"></div>
					  <div class="col-md-6 col-sm-6"></div>
					  <div class="clearfix"></div>
					  <div class="col-md-6 col-sm-6"></div>
					  
					  <p>All information submitted to Centrality is kept completely private.</p>
					  

					  </div>
				</div>    
		</div>
		
		<!-- Raw Code-->
		
    </div>
<?php get_footer(); ?>
