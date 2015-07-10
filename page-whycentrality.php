<?php
/**
 * The Employment-Page Template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Why-Centrality-Page */
    get_header();the_post();
?>

<?php echo do_shortcode('[_employment_header class="employment-header" heading="Why trust Centrality?" slogan="We make IT simple for businesses." button_text="Request Services" button_url="#"]'); ?>


<div class="row">
   <div class="container text-center we-strive">
   <div class="col-lg-7 col-sm-7 col-md-7 centerText">
   <h2>We Strive to Provide Long Term, Mutually <br/> Beneficial Relationships</h2>
   <div class="row-minus">
   <div class="col-lg-4 col-md-4 col-sm-4 number-box"> <h3>120</h3> <h4> Satisfied <br/> Clients </h4> </div>
   <div class="col-lg-4 col-md-4 col-sm-4 number-box"> <h3>20</h3> <h4> Years of <br/> Experience </h4> </div>
   <div class="col-lg-4 col-md-4 col-sm-4 number-box"> <h3>24 </h3> <h4> Dedicated <br/> Engineers </h4> </div>
   
   </div>
   </div>
   </div>
</div>

<div class="row trust-us">
   <div class="container text-center">
   <div class="col-lg-7 col-sm-7 col-md-7 centerText">
   <h2>Trust us, we’re the experts.</h2>
   <p>In the Louisville area, you won't find another company as uniquely qualified to serve your business with a personal, professional touch. We are locally owned, locally managed, and have been serving Louisville's evolving IT needs since 1996. All staff are employed by Absolute; we don't send subcontractors into your business. We also have an 'A+' rating with the Better Business Bureau. </p>
   <a href="#" class="btn-square">GET STARTED TODAY</a>
   </div>
   </div>
</div>


<div class="row our-team">
<h2> Meet Our Team</h2>

<?php
// Grab the metadata from the database
$teamMembers = get_post_meta( get_the_ID(), 'teamMembers', true );
//print_r($teamMembers);
 $i=0; foreach($teamMembers as $teamMember) { //echo $i; ?>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 team-mate"> 
   <img src="<?php echo $teamMember['headshot']; ?>"/>
   <div class="labelBox">  <div class="plus"></div>  <h3 class="title"><?php echo $teamMember['name']; ?></h3> <h4 class="position"><?php echo $teamMember['position']; ?></h4>
   <div class="info"><?php echo $teamMember['introduction']; ?>.</div>
   </div>
   </div>
   <!--//First Team Box-->  
   
<?php //$i++;
 } ?>
   
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 claimBox"> 
   
   <div class="claimBoxText">Centrality maintains dual certifications in Microsoft and Cisco. </div>
   </div>
   
   
  <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 team-mate"> 
   <img src="<?php echo get_template_directory_uri(); ?>/images/headshot.jpg"/>
   <div class="labelBox">  <div class="plus"></div>  <h3 class="title">Noah Priddy</h3> <h4 class="position">President</h4>
   <div class="info">vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magn.</div>
   </div>
   </div>-->
   <!--//First Team Box-->
</div>



<div class="content-wrapper inner-page-content <?php global $post; echo $post->post_name; ?>">

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