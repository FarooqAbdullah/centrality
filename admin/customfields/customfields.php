<?php add_action( 'cmb2_init', 'WhyCentrality_metaBox' );
/**
 * Define the metabox and field configurations.
 */
function WhyCentrality_metaBox() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = 'why_centrality_';

    /**
     * Initiate the metabox
     */
	 
	 $cmb = new_cmb2_box( array(
        'id'            => 'page_elements',
        'title'         => __( 'Page Elements', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-whycentrality.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $featured_obj = new_cmb2_box( array(
        'id'            => 'featued_element',
        'title'         => __( 'Featured Element', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-template', 'value' => array('page-whycentrality.php','page-featuredsolution.php') ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $statistics = new_cmb2_box( array(
        'id'            => 'statistics_element',
        'title'         => __( 'Statistics Element', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-template', 'value' => array('page-featuredsolution.php') ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Beneficial Relationships Heading', 'cmb2' ),
        'desc'       => __( 'Stats Box Heading', 'cmb2' ),
        'id'         => $prefix . 'relation_ship_heading',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );

    // Regular text field
    $featured_obj->add_field( array(
        'name'       => __( 'Feature Heading', 'cmb2' ),
        'desc'       => __( 'Feature Heading', 'cmb2' ),
        'id'         => '_feature_heading',
        'type'       => 'text'
    ) );

    // Regular text field
    $statistics->add_field( array(
        'name'       => __( 'Statistics Heading', 'cmb2' ),
        'desc'       => __( 'Statistics Heading', 'cmb2' ),
        'id'         => '_statistics_heading',
        'type'       => 'textarea'
    ) );

    // Regular text field
    $statistics->add_field( array(
        'name'       => __( 'Statistics1', 'cmb2' ),
        'desc'       => __( 'Statistics1', 'cmb2' ),
        'id'         => '_statistics1',
        'type'       => 'text'
    ) );

    // Regular text field
    $statistics->add_field( array(
        'name'       => __( 'Statistics2', 'cmb2' ),
        'desc'       => __( 'Statistics2', 'cmb2' ),
        'id'         => '_statistics2',
        'type'       => 'text'
    ) );

    // Regular text field
    $statistics->add_field( array(
        'name'       => __( 'Statistics3', 'cmb2' ),
        'desc'       => __( 'Statistics3', 'cmb2' ),
        'id'         => '_statistics3',
        'type'       => 'text'
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'No Of Clients', 'cmb2' ),
        'desc'       => __( 'No Of Clients', 'cmb2' ),
        'id'         => $prefix . 'client',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Years of Experience', 'cmb2' ),
        'desc'       => __( 'Years of Experience', 'cmb2' ),
        'id'         => $prefix . 'experience',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'No of Engineers', 'cmb2' ),
        'desc'       => __( 'No of Engineers', 'cmb2' ),
        'id'         => $prefix . 'engineers',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Trust Us Block Heading', 'cmb2' ),
        'desc'       => __( 'Trust Us Block Heading', 'cmb2' ),
        'id'         => $prefix . 'trustUsHeading',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Trust Us Block Text', 'cmb2' ),
        'desc'       => __( 'Trust Us Block Text', 'cmb2' ),
        'id'         => $prefix . 'trustUsText',
        'type'       => 'wysiwyg',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Trust Us Block Button URL', 'cmb2' ),
        'desc'       => __( 'Trust Us Block Button URL', 'cmb2' ),
        'id'         => $prefix . 'btnUrl',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Trust Us Block Button Text', 'cmb2' ),
        'desc'       => __( 'Trust Us Block Button Text', 'cmb2' ),
        'id'         => $prefix . 'btnText',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Uniquely Qualified Block Heading', 'cmb2' ),
        'desc'       => __( 'Uniquely Qualified Block Heading', 'cmb2' ),
        'id'         => $prefix . 'qualificationHeading',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	/*$cmb->add_field( array(
        'name'       => __( 'Uniquely Qualified Block 1 Text', 'cmb2' ),
        'desc'       => __( 'Uniquely Qualified Block 1 Text', 'cmb2' ),
        'id'         => $prefix . 'qualifiedText1',
        'type'       => 'wysiwyg',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Uniquely Qualified Block 2 Text', 'cmb2' ),
        'desc'       => __( 'Uniquely Qualified Block 2 Text', 'cmb2' ),
        'id'         => $prefix . 'qualifiedText2',
        'type'       => 'wysiwyg',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );*/
    $featured = $featured_obj->add_field( array(
        'id'          => 'featured-template',
        'type'        => 'group',
        'description' => __( 'Add Multiple Feature', 'cmb' ),
        'options'     => array(
            'group_title'   => __( 'Feature {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Feature', 'cmb' ),
            'remove_button' => __( 'Remove Feature', 'cmb' ),
            'sortable'      => true, // beta
        ),
    ) );
    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $featured_obj->add_group_field( $featured, array(
        'name' => 'Feature Value',
        'id'   => '_feature',
        'type' => 'text',
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => array('page-whycentrality.php','page-featuredsolution.php' ))
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );


    $cmb->add_field( array(
        'name'       => __( 'Proven Process Box Heading', 'cmb2' ),
        'desc'       => __( 'Proven Process Box Heading', 'cmb2' ),
        'id'         => $prefix . 'provenTextHeading',
        'type'       => 'textarea_small',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 1 Title', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 1 Title', 'cmb2' ),
        'id'         => $prefix . 'prBox1',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 1 Text', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 1 Text', 'cmb2' ),
        'id'         => $prefix . 'prBox1_title',
        'type'       => 'wysiwyg',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 2 Title', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 2 Title', 'cmb2' ),
        'id'         => $prefix . 'prBox2',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 2 Text', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 2 Text', 'cmb2' ),
        'id'         => $prefix . 'prBox2_title',
        'type'       => 'wysiwyg',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 3 Title', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 3 Title', 'cmb2' ),
        'id'         => $prefix . 'prBox3',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 3 Text', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 3 Text', 'cmb2' ),
        'id'         => $prefix . 'prBox3_title',
        'type'       => 'wysiwyg',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 4 Title', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 4 Title', 'cmb2' ),
        'id'         => $prefix . 'prBox4',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box 4 Text', 'cmb2' ),
        'desc'       => __( 'Proven Process Box 4 Text', 'cmb2' ),
        'id'         => $prefix . 'prBox4_title',
        'type'       => 'wysiwyg',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box Button Text', 'cmb2' ),
        'desc'       => __( 'Proven Process Box Button Text', 'cmb2' ),
        'id'         => $prefix . 'discoverbtn',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	
	
	$cmb->add_field( array(
        'name'       => __( 'Proven Process Box Button URL', 'cmb2' ),
        'desc'       => __( 'Proven Process Box Button URL', 'cmb2' ),
        'id'         => $prefix . 'discoverbtnurl',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	
	
	/*team*/
    $cmb = new_cmb2_box( array(
        'id'            => 'team_metabox',
        'title'         => __( 'Team Members', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-whycentrality.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

	$group_field_id = $cmb->add_field( array(
    'id'          => 'teamMembers',
    'type'        => 'group',
    'description' => __( 'Add Multiple Team Members', 'cmb' ),
    'options'     => array(
        'group_title'   => __( 'Team Member {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'    => __( 'Add Another Team Member', 'cmb' ),
        'remove_button' => __( 'Remove Team Member', 'cmb' ),
        'sortable'      => true, // beta
    ),
) );

// Id's for group's fields only need to be unique for the group. Prefix is not needed.
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Team Member Name',
    'id'   => 'name',
    'type' => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Team Member Position',
    'id'   => 'position',
    'type' => 'text',
    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
) );

$cmb->add_group_field( $group_field_id, array(
    'name' => 'Team Member introduction',
    'description' => 'Write a short introduction',
    'id'   => 'introduction',
    'type' => 'textarea_small',
) );

$cmb->add_group_field($group_field_id, array(
    'name'    => 'Headshot Image',
    'desc'    => 'Team Member headshot.',
    'id'      => 'headshot',
    'type'    => 'file',
    // Optionally hide the text input for the url:
    'options' => array(
        'url' => false,
    ),
) );
    // Regular text field

    // Meta Fields for Featured Solution Page.

    $bx_featured_sol = new_cmb2_box( array(
        'id'            => 'header_featured_solution',
        'title'         => __( 'Header', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-featuredsolution.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
         'closed'     => true, // Keep the metabox closed by default
    ) );

    $bx_featured_sol->add_field( array(
        'name' => __( 'Header Image', '_centrality' ),
        'desc' => __( 'Upload Your Header Heading Image', '_centrality' ),
        'id'   => 'centrality-featured-heading-img',
        'type' => 'file',
        'default' => '',
    ) );

    $bx_featured_sol->add_field( array(
        'name' => __( 'Header Main Text', '_centrality' ),
        'desc' => __( 'Write your header main heading', '_centrality' ),
        'id'   => 'centrality-featured-heading-text',
        'type' => 'text',
        'default' => 'Manage Cloud Services For Your Business.',
    ) );

    $bx_featured_sol->add_field( array(
        'name' => __( 'Header Button Text', '_centrality' ),
        'desc' => __( 'Write your header Button heading', '_centrality' ),
        'id'   => 'centrality-featured-heading-button-text',
        'type' => 'text',
        'default' => 'SIGN UP TODAY',
    ) );

    $bx_featured_sol->add_field( array(
        'name' => __( 'Header Button URL', '_centrality' ),
        'desc' => __( 'Write your header Button URL', '_centrality' ),
        'id'   => 'centrality-featured-heading-button-url',
        'type' => 'text',
        'default' => '#',
    ) );

    $cloud_service_solution = new_cmb2_box( array(
        'id'            => 'cloud-service-solution',
        'title'         => __( 'Cloud Service Solution', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-featuredsolution.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ) );

    $cloud_service_solution->add_field( array(
        'name' => __( 'Cloud Solution Heading', '_centrality' ),
        'desc' => __( 'Write your Cloud Service Heading', '_centrality' ),
        'id'   => 'centrality-cloud-service-heading',
        'type' => 'text',
        'default' => 'Better Cloud Service Solutions',
    ) );

    $cloud_service_solution->add_field( array(
        'name' => __( 'Cloud Solution Content', '_centrality' ),
        'desc' => __( 'Write your Cloud Service Content', '_centrality' ),
        'id'   => 'centrality-cloud-service-content',
        'type' => 'textarea',
        'default' => 'In the Louisville area, you won\'t find another company as uniquely qualified to serve your business with a personal, professional touch.
                      We are locally owned, locally managed, and have been serving Louisville\'s evolving IT needs since 1996. All staff are employed by Absolute;
                      we don\'t send subcontractors into your business. We also have an \'A+\' rating with the Better Business Bureau.',
    ) );

    $cloud_service_solution->add_field( array(
        'name' => __( 'Cloud Solution Button Text', '_centrality' ),
        'desc' => __( 'Write your Cloud Service Button Text', '_centrality' ),
        'id'   => 'centrality-cloud-service-button-text',
        'type' => 'text',
        'default' => 'Get Started Today',
    ) );

    $cloud_service_solution->add_field( array(
        'name' => __( 'Cloud Solution Button URL', '_centrality' ),
        'desc' => __( 'Write your Cloud Service Button URL', '_centrality' ),
        'id'   => 'centrality-cloud-service-button-url',
        'type' => 'text',
        'default' => '#',
    ) );

    $cloud_service_solution->add_field( array(
        'name' => __( 'Upload Cloud Solution Right Image', '_centrality' ),
        'desc' => __( 'Upload your Cloud Service Right Image', '_centrality' ),
        'id'   => 'centrality-cloud-service-right-image',
        'type' => 'file'
    ) );

    $business_technology = new_cmb2_box( array(
        'id'            => '_business_technology',
        'title'         => __( 'Business Technology', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-featuredsolution.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ) );

    $business_technology->add_field( array(
        'name' => __( 'Upload Business Technology Left Image', '_centrality' ),
        'desc' => __( 'Upload Business Technology Left Image', '_centrality' ),
        'id'   => 'centrality-business-technology-left-image',
        'type' => 'file'
    ) );
    $business_technology->add_field( array(
        'name' => __( 'Business Technology Heading', '_centrality' ),
        'desc' => __( 'Write Business Technology Heading', '_centrality' ),
        'id'   => 'centrality-business-technology-heading',
        'type' => 'textarea',
        'default' => 'Our People  makes Us teh Business Technology leader in Kentuckiana',
    ) );
    $business_technology->add_field( array(
        'name' => __( 'Business Technology First Content Num', '_centrality' ),
        'desc' => __( 'Write Business Technology First Content Num', '_centrality' ),
        'id'   => 'centrality-business-technology-first-content-num',
        'type' => 'text',
        'default' => '350',
    ) );
    $business_technology->add_field( array(
        'name' => __( 'Business Technology First Content', '_centrality' ),
        'desc' => __( 'Write Business Technology First Content', '_centrality' ),
        'id'   => 'centrality-business-technology-first-content',
        'type' => 'text',
        'default' => 'hours of certified IT training, including dual certifications in Microsoft and Sisco.',
    ) );
    $business_technology->add_field( array(
        'name' => __( 'Business Technology Second Content Num', '_centrality' ),
        'desc' => __( 'Write Business Technology Second Content Num', '_centrality' ),
        'id'   => 'centrality-business-technology-second-content-num',
        'type' => 'text',
        'default' => '20',
    ) );
    $business_technology->add_field( array(
        'name' => __( 'Business Technology Second Content', '_centrality' ),
        'desc' => __( 'Write Business Technology Second Content', '_centrality' ),
        'id'   => 'centrality-business-technology-second-content',
        'type' => 'text',
        'default' => 'business technology advisors & consultants',
    ) );
    $business_technology->add_field( array(
        'name' => __( 'Business Technology Button Text', '_centrality' ),
        'desc' => __( 'Write Business Technology Button Text', '_centrality' ),
        'id'   => 'centrality-business-technology-button-text',
        'type' => 'text',
        'default' => 'Meet The Team',
    ) );
    $business_technology->add_field( array(
        'name' => __( 'Business Technology Button URL', '_centrality' ),
        'desc' => __( 'Write Business Technology Button URL', '_centrality' ),
        'id'   => 'centrality-business-technology-button-url',
        'type' => 'text',
        'default' => '#',
    ) );


    /***************Solutions Page*****************/
	$pfx="solutions_";
	$bx_sol = new_cmb2_box( array(
        'id'            => 'box_solutions',
        'title'         => __( 'Page Elements', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-solutions.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
	
	$bx_sol->add_field( array(
        'name'       => __( 'Solutions Page Heading', 'cmb2' ),
        'desc'       => __( 'Solutions Page Heading', 'cmb2' ),
		'default' => 'Smart IT Solutions',
        'id'         => $pfx . 'Heading',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$bx_sol->add_field( array(
        'name'       => __( 'Solutions Page Slogan', 'cmb2' ),
        'desc'       => __( 'Text below Solutions Page Heading', 'cmb2' ),
		'default' => 'WE DELIVER THE BEST SOLUTIONS EVER IN THE WORLD',
        'id'         => $pfx . 'slogan',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$bx_sol->add_field( array(
        'name'       => __( 'Cabling Solutions Block Heading', 'cmb2' ),
        'desc'       => __( 'Cabling Solutions Block Heading', 'cmb2' ),
		'default' => 'Cabling Solutions',
        'id'         => $pfx . 'cab_heading',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$bx_sol->add_field( array(
        'name'       => __( 'Cabling Solutions Block Text', 'cmb2' ),
        'desc'       => __( 'Cabling Solutions Block Text', 'cmb2' ),
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. ',
        'id'         => $pfx . 'cab_text',
        'type'       => 'textarea_small',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$bx_sol->add_field( array(
        'name'       => __( 'Cabling Solutions Block Icon Image', 'cmb2' ),
        'desc'       => __( 'Cabling Solutions Block Icon Image', 'cmb2' ),		
        'id'         => $pfx . 'cab_icon',
        'type'       => 'file',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$bx_sol->add_field( array(
        'name'       => __( 'Learn More Button Text', 'cmb2' ),
        'desc'       => __( 'Cabling Solutions Block Learn More button text', 'cmb2' ),
		'default' => 'LEARN MORE ',
        'id'         => $pfx . 'btn',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$bx_sol->add_field( array(
        'name'       => __( 'Learn More Button URL', 'cmb2' ),
        'desc'       => __( 'Cabling Solutions Block Learn More button URL', 'cmb2' ),
		'default' => '#',
        'id'         => $pfx . 'btnUrl',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
    ) );
	
	$bx_sol_feat = new_cmb2_box( array(
        'id'            => 'box_featured_solutions',
        'title'         => __( 'Featured Solutions', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-solutions.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
	
	$feat_sol = $bx_sol_feat->add_field( array(
    'id'          => 'Featured Solutions',
    'type'        => 'group',
    'description' => __( 'Add Multiple Featured Solutions', 'cmb' ),
    'options'     => array(
        'group_title'   => __( 'Featured Solutions {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
        'add_button'    => __( 'Add Another featured solution', 'cmb' ),
        'remove_button' => __( 'Remove Featured Solution', 'cmb' ),
        'sortable'      => true, // beta
        ),
    ) );

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$bx_sol_feat->add_group_field( $feat_sol, array(
		'name' => 'Featured Solution Title',
		'default'=>'Managed Cloud Services',
		'id'   => $pfx.'ftitle',
		'type' => 'text',
		
	) );
	
	$bx_sol_feat->add_group_field( $feat_sol, array(
		'name' => 'Featured Solution Icon',
		'id'   => $pfx.'ficon',
		'type' => 'file',
		
	) );
	$bx_sol_feat->add_group_field( $feat_sol, array(
		'name' => 'Featured Solution Text',
		'default'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
		'id'   => $pfx.'ftext',
		'type' => 'textarea_small',
		
	) );
	
	$bx_sol_feat->add_group_field( $feat_sol, array(
		'name' => 'Featured Solution Button Text',
		'default'=>'LEARN MORE',
		'id'   => $pfx.'fbtn',
		'type' => 'text',
		
	) );
	
	$bx_sol_feat->add_group_field( $feat_sol, array(
		'name' => 'Featured Solution Button URL',
		'default'=>'#',
		'id'   => $pfx.'furl',
		'type' => 'text',
		
	) );

    $insight_promotion = new_cmb2_box( array(
        'id'            => 'promotion-heading',
        'title'         => __( 'Promotion', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'home.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ) );

    $insight_promotion->add_field( array(
        'name'       => __( 'Heading', 'cmb2' ),
        'desc'       => __( 'Industry , Insights & Promotion Heading', 'cmb2' ),
        'id'         => 'industry_insight_promotion_heading',
        'type'       => 'text',
        'default'    =>  'Industry Insights & Promotions',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $centrality_service_main = new_cmb2_box( array(
        'id'            => 'centrality-service-heading',
        'title'         => __( 'Centrality Service', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'home.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ) );

    $centrality_service_main->add_field( array(
        'name'       => __( 'Heading', 'cmb2' ),
        'desc'       => __( 'Centrality Service Heading', 'cmb2' ),
        'id'         => 'centrality-service-heading',
        'type'       => 'text',
        'default'    =>  'Centrality Service',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );


    $in_it = new_cmb2_box( array(
        'id'            => 'centrality-in-it',
        'title'         => __( 'in IT', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'home.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ) );

    $in_it->add_field( array(
        'name'       => __( 'in IT Heading', 'cmb2' ),
        'desc'       => __( 'Write in IT Heading Here', 'cmb2' ),
        'id'         => 'centrality-in-it-heading',
        'type'       => 'text',
        'default'    =>  'Finally, IT is easy with Centrality',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'in IT Heading Slogan', 'cmb2' ),
        'desc'       => __( 'Write in IT Heading Slogan Here', 'cmb2' ),
        'id'         => 'centrality-in-it-heading-slogan',
        'type'       => 'text',
        'default'    =>  'Whether you are a tech enthusiast or looking to fake it, we are here to help you.',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'in IT Button Text', 'cmb2' ),
        'desc'       => __( 'Write in IT Button Text Here', 'cmb2' ),
        'id'         => 'centrality-in-it-button-text',
        'type'       => 'text',
        'default'    =>  'I\'m in IT.',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'not in IT Button Text', 'cmb2' ),
        'desc'       => __( 'Write not in IT Button Text Here', 'cmb2' ),
        'id'         => 'centrality-not-in-it-button-text',
        'type'       => 'text',
        'default'    =>  'I\'m not in IT.',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'in IT Body Upper Text', 'cmb2' ),
        'desc'       => __( 'Write in IT body upper text here', 'cmb2' ),
        'id'         => 'centrality-in-it-body-upper-text',
        'type'       => 'text',
        'default'    =>  'We understand your business is unique, so we craft custom IT Solutions to fit your needs.',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'Get Started Text', 'cmb2' ),
        'desc'       => __( 'Write get started text here', 'cmb2' ),
        'id'         => 'centrality-get-started-text',
        'type'       => 'text',
        'default'    =>  'Let\'s get started',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'Select Comapny Text or Slogan of Get Started Text', 'cmb2' ),
        'desc'       => __( 'Write slogan of get started text here', 'cmb2' ),
        'id'         => 'centrality-slogan-get-started-text',
        'type'       => 'text',
        'default'    =>  'Select the size of your company',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'in IT Body Left Image', 'cmb2' ),
        'desc'       => __( 'Upload in IT body left image here', 'cmb2' ),
        'id'         => 'centrality-in-it-body-left-image',
        'type'       => 'file',
        'default'    =>  get_template_directory_uri().'/images/cable-left.png',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $in_it->add_field( array(
        'name'       => __( 'in IT Body Right Image', 'cmb2' ),
        'desc'       => __( 'Upload in IT body right image here', 'cmb2' ),
        'id'         => 'centrality-in-it-body-right-image',
        'type'       => 'file',
        'default'    =>  get_template_directory_uri().'/images/cable-right.png',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $mastery_knowledge_experience = new_cmb2_box( array(
        'id'            => 'mastery_knowledge_experience',
        'title'         => __( 'Mastery, Knowledge, Experience', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'home.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ) );

    $mastery_knowledge_experience->add_field( array(
        'name'       => __( 'Mastery Knowledge Experience Heading', 'cmb2' ),
        'desc'       => __( 'Write Mastery Knowledge Experience Heading Here', 'cmb2' ),
        'id'         => 'mastery-knowledge-experience-heading',
        'type'       => 'text',
        'default'    =>  'Mastery Thourgh Knowledge, Trust From Experience',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $years_mastery = $mastery_knowledge_experience->add_field( array(
        'id'          => 'mke-years-mastery',
        'type'        => 'group',
        'description' => __( 'Add Experience Here', 'cmb' ),
        'options'     => array(
            'group_title'   => __( 'Experience {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add another experience here', 'cmb' ),
            'remove_button' => __( 'Remove Experience', 'cmb' ),
            'sortable'      => true, // beta
        ),
    ) );

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $mastery_knowledge_experience->add_group_field( $years_mastery, array(
        'name' => 'Year',
        'id'   => 'sub-year',
        'type' => 'text',

    ) );

    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $mastery_knowledge_experience->add_group_field( $years_mastery, array(
        'name' => 'Descriprion',
        'id'   => 'sub-year-description',
        'type' => 'text',

    ) );

    $mastery_knowledge_experience->add_field( array(
        'name'       => __( 'Mastery Knowledge Experience Year\'s image', 'cmb2' ),
        'desc'       => __( 'Upload Mastery Knowledge Experience Year\'s image Here', 'cmb2' ),
        'id'         => 'mastery-knowledge-experience-year-image',
        'type'       => 'file',
        'default'    =>  get_template_directory_uri().'/images/number-circle-2.png',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $mastery_knowledge_experience->add_field( array(
        'name'       => __( 'Mastery Knowledge Experience Button Text', 'cmb2' ),
        'desc'       => __( 'Write Mastery Knowledge Experience Button Text Here', 'cmb2' ),
        'id'         => 'mastery-knowledge-experience-button-text',
        'type'       => 'text',
        'default'    =>  'Learn More',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $mastery_knowledge_experience->add_field( array(
        'name'       => __( 'Mastery Knowledge Experience Button URL', 'cmb2' ),
        'desc'       => __( 'Write Mastery Knowledge Experience Button URL Here', 'cmb2' ),
        'id'         => 'mastery-knowledge-experience-button-url',
        'type'       => 'text',
        'default'    =>  '#',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $blog_main_page = new_cmb2_box( array(
        'id'            => 'centrality-blog-main-page',
        'title'         => __( 'Blog Main Page', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => 'page-blog.php' ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed'     => true, // Keep the metabox closed by default
    ) );

    $blog_main_page->add_field( array(
        'name'       => __( 'Blog Main Heading', 'cmb2' ),
        'desc'       => __( 'Write Blog Main Heading here', 'cmb2' ),
        'id'         => 'blog-main-heading',
        'type'       => 'text',
        'default'    =>  'The Centrality Source',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );

    $blog_main_page->add_field( array(
        'name'       => __( 'Blog Main Heading Slogan', 'cmb2' ),
        'desc'       => __( 'Write Blog Main Heading Slogan here', 'cmb2' ),
        'id'         => 'blog-main-heading-slogan',
        'type'       => 'text',
        'default'    =>  'What Information Technology Means to you',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    ) );


}