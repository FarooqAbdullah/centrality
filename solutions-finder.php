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
		<li role="presentation" class="disable"><a href="#step0" aria-controls="profile" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step2" aria-controls="messages" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation" class="disable"><a href="#step0" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step3" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation" class="disable"><a href="#step0" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation" class="disable"><a href="#step0" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
		<li role="presentation"><a href="#step3" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;</a></li>
	</ul>
  </div>
		</div>
		
		<div class="containerX">
			<div class="solutions-finder-content">
			 <?php $scode= do_shortcode('[contact-form-7 id="281" title="Contact form 1"]'); echo $scode; ?>
			</div>		
		</div>
		
	
		
    </div>
<?php get_footer(); ?>
