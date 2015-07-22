<?php
/**
 * The Our team template
 *
 * @package Objects
 * @subpackage Centrality
 */

/* Template Name: Our Team */
get_header();the_post();
?>
    <div class="content-wrapper">

<?php 	$heading=get_post_meta( get_the_ID(), 'ourTeam_pageTitle1', true );
		$slogan=get_post_meta( get_the_ID(), 'ourTeam_pageSlogan', true );
		$btnText=get_post_meta( get_the_ID(), 'btnText', true );
		$btnUrl=get_post_meta( get_the_ID(), 'btnUrl', true );
		$greenBox=get_post_meta( get_the_ID(), 'greenBox', true );
 echo do_shortcode('[_employment_header class="employment-header" heading="'.$heading.'" slogan="'.$slogan.'" button_text="'.$btnText.'" button_url="'.$btnUrl.'"]'); ?>




    <div class="row our-team">
        <h2><?php echo get_post_meta( get_the_ID(), 'ourTeam_pageTitle', true ); ?></h2>
		<p class="ourTeam_intro"><?php echo get_post_meta( get_the_ID(), 'ourTeam_intro', true ); ?> </p>

        <?php
        // Grab the metadata from the database
        $teamMembers = get_post_meta( get_the_ID(), 'teamMembers', true );
        //print_r($teamMembers);
		$i=0;
        foreach($teamMembers as $teamMember) { ?>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 team-mate">
                <img src="<?php echo $teamMember['headshot']; ?>"/>
                <div class="labelBox">  <div class="plus"></div>  <h3 class="title"><?php echo $teamMember['name']; ?></h3> <h4 class="position"><?php echo $teamMember['position']; ?></h4>
                    <div class="info"><?php echo $teamMember['introduction']; ?>.</div>
                </div>
            </div>
			
          

            <?php if($i==6 && !empty($greenBox) ) { ?>
       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 claimBox">
            <div class="claimBoxText"><?php echo $greenBox; ?></div>
        </div>

			<?php }
			$i++;
        } ?>

        


    </div>

 <div class="row applyNow">
 <h2> <?php echo get_post_meta( get_the_ID(), 'ctaText', true ) ?> </h2>
 <a href="<?php echo get_post_meta( get_the_ID(), 'ctaUrl', true ) ?> " class="btn-square" ><?php echo get_post_meta( get_the_ID(), 'ctaBtn', true ) ?> </a>
 
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
    <div class="row proven-process">
        <div class="container">
            <h2> <?php echo $heading; ?> </h2>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cSection">
                <div class="number circle"> 1 <span class="steps-line line-right"></span> </div>
                <h3><?php echo $box1Heading; ?></h3>
                <p><?php echo $box1Text; ?></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cSection">
                <div class="number circle"> <span class="steps-line line-left"></span> 2 <span class="steps-line line-right"></span> </div>
                <h3><?php echo $box2Heading; ?></h3>
                <p><?php echo $box2Text; ?></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cSection">
                <div class="number circle"><span class="steps-line line-left"></span> 3<span class="steps-line line-right"></span> </div>
                <h3><?php echo $box3Heading; ?></h3>
                <p><?php echo $box3Text; ?></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 cSection">
                <div class="number circle"><span class="steps-line line-left"></span> 4 </div>
                <h3><?php echo $box4Heading; ?></h3>
                <p><?php echo $box4Text; ?></p>
            </div>

            <div class="clearfix"></div>
            <a href="<?php echo $btnTextUrl; ?>" class="discover-more"><?php echo $btnText; ?></a>

        </div>
    </div>

<?php echo do_shortcode('[_trusted_companies]'); ?>
</div>

<?php get_footer(); ?>