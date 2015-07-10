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

<?php
$benficialH = get_post_meta( get_the_ID(), 'why_centrality_relation_ship_heading', true );
$clients = get_post_meta( get_the_ID(), 'why_centrality_client', true );
$experience = get_post_meta( get_the_ID(), 'why_centrality_experience', true );
$engineers = get_post_meta( get_the_ID(), 'why_centrality_engineers', true );
//print_r($benficialH);

 ?>

<div class="row">
   <div class="container text-center we-strive">
   <div class="col-lg-7 col-sm-7 col-md-7 centerText">
   <h2><?php echo $benficialH; ?></h2>
   <div class="row-minus">
   <div class="col-lg-4 col-md-4 col-sm-4 number-box"> <h3><?php echo $clients; ?></h3> <h4> Satisfied <br/> Clients </h4> </div>
   <div class="col-lg-4 col-md-4 col-sm-4 number-box"> <h3><?php echo $experience; ?></h3> <h4> Years of <br/> Experience </h4> </div>
   <div class="col-lg-4 col-md-4 col-sm-4 number-box"> <h3><?php echo $engineers; ?> </h3> <h4> Dedicated <br/> Engineers </h4> </div>
   
   </div>
   </div>
   </div>
</div>

<?php
$heading = get_post_meta( get_the_ID(), 'why_centrality_trustUsHeading', true );
$text = get_post_meta( get_the_ID(), 'why_centrality_trustUsText', true );
$url = get_post_meta( get_the_ID(), 'why_centrality_btnUrl', true );
$btnText = get_post_meta( get_the_ID(), 'why_centrality_btnText', true );
 ?>
<div class="row trust-us">
   <div class="container text-center">
   <div class="col-lg-7 col-sm-7 col-md-7 centerText">
   <h2><?php echo $heading; ?></h2>
   <p><?php echo $text; ?> </p>
   <a href="<?php echo $url; ?>" class="btn-square"><?php echo $btnText; ?></a>
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
   

</div>

<?php $heading = get_post_meta( get_the_ID(), 'why_centrality_qualificationHeading', true );
$b1=get_post_meta( get_the_ID(), 'why_centrality_qualifiedText1', true ); 
$b2=get_post_meta( get_the_ID(), 'why_centrality_qualifiedText2', true );  ?>

<div class="row uniquely-qualified">
<div class="container">
<h2><?php echo $heading; ?></h2>
<div class="col-lg-6 block1"><div class="ribbon"></div>
<?php echo $b1; ?>
</div>
<div class="col-lg-6 block2"><div class="ribbon"></div>
<?php echo $b2; ?>
</div>
</div>
</div>
<?php $heading = get_post_meta( get_the_ID(), 'why_centrality_provenTextHeading', true ); 

?>
<div class="row proven-process">
	<div class="container">
		<h2> <?php echo $heading; ?> </h2>
	
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="number circle"> 1 </div>
				<h3>LISTEN</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="number circle"> 2 </div>
				<h3>LISTEN</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="number circle"> 3 </div>
				<h3>LISTEN</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<div class="number circle"> 4 </div>
				<h3>LISTEN</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
			</div>
			
			<div class="clearfix"></div>
			<a href="#" class="discover-more">Discover more</a>
	
	</div>
</div>


 <?php echo do_shortcode('[_trusted_companies]'); ?>


<?php get_footer(); ?>