<?php
/**
 * The Employment-Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Employment-Page */
    get_header();the_post();
?>

<div class="header-wrapper employment-header">
<div class="container">
            <h1>Employment at Centrality</h1>
			<h2>Join our dedicated team of IT professionals.</h2>
			<a href="#" class="btn-square">View Positions</a>
        </div>
</div>
<div class="content-wrapper inner-page-content">

         <div class="container">
		  <div class="row">
		 <div class="col-lg-7 col-sm-7 col-md-7"><?php the_content(); ?></div>
		 <div class="col-lg-5 col-sm-5 sol-md-5 sidebar employment-page-sidebar" id="employment-page-sidebar">
<div class="sidebarInside">
		 <?php dynamic_sidebar( 'employment-sidebar' ); ?>
		 </div>
		 </div>

        </div>
    </div>



    </div>


<?php get_footer(); ?>