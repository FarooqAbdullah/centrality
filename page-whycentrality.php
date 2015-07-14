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
    <div class="content-wrapper">

<?php echo do_shortcode('[_employment_header class="employment-header" heading="Why trust Centrality?" slogan="We make IT simple for businesses." button_text="Request Services" button_url="#"]'); ?>

<?php
$benficialH = get_post_meta( get_the_ID(), 'why_centrality_relation_ship_heading', true );
$clients = get_post_meta( get_the_ID(), 'why_centrality_client', true );
$experience = get_post_meta( get_the_ID(), 'why_centrality_experience', true );
$engineers = get_post_meta( get_the_ID(), 'why_centrality_engineers', true );
//print_r($benficialH);
echo do_shortcode('[_statistics heading="'.$benficialH.'" statistics1_year="'.$clients.'" statistics2_year="'.$experience.'" statistics3_year="'.$engineers.'" statistics1="Satisfied Clients" statistics2="Year of Experience" statistics3="Dedicated Engineers"]');

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
        foreach($teamMembers as $teamMember) { ?>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 team-mate">
                <img src="<?php echo $teamMember['headshot']; ?>"/>
                <div class="labelBox">  <div class="plus"></div>  <h3 class="title"><?php echo $teamMember['name']; ?></h3> <h4 class="position"><?php echo $teamMember['position']; ?></h4>
                    <div class="info"><?php echo $teamMember['introduction']; ?>.</div>
                </div>
            </div>
            <!--//First Team Box-->

            <?php
        } ?>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 claimBox">

            <div class="claimBoxText">Centrality maintains dual certifications in Microsoft and Cisco. </div>
        </div>


    </div>

<?php $heading = get_post_meta( get_the_ID(), 'why_centrality_qualificationHeading', true );
$b1=get_post_meta( get_the_ID(), 'why_centrality_qualifiedText1', true );
$b2=get_post_meta( get_the_ID(), 'why_centrality_qualifiedText2', true );  ?>
    <!--<div class="row uniquely-qualified">
        <div class="container">
            <h2><?php /*echo $heading; */?></h2>
            <div class="col-lg-6 block1"><div class="ribbon"></div>
                <?php /*echo $b1; */?>
            </div>
            <div class="col-lg-6 block2"><div class="ribbon"></div>
                <?php /*echo $b2; */?>
            </div>
        </div>
    </div>-->
        <?php echo do_shortcode('[_feature_template heading="'.$heading.'"]'); ?>
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

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="number circle"> 1 <span class="steps-line line-right"></span> </div>
                <h3><?php echo $box1Heading; ?></h3>
                <p><?php echo $box1Text; ?></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="number circle"> <span class="steps-line line-left"></span> 2 <span class="steps-line line-right"></span> </div>
                <h3><?php echo $box2Heading; ?></h3>
                <p><?php echo $box2Text; ?></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="number circle"><span class="steps-line line-left"></span> 3<span class="steps-line line-right"></span> </div>
                <h3><?php echo $box3Heading; ?></h3>
                <p><?php echo $box3Text; ?></p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
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