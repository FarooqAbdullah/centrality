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

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Beneficial Relationships Heading', 'cmb2' ),
        'desc'       => __( 'Stats Box Heading', 'cmb2' ),
        'id'         => $prefix . 'relation_ship_heading',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value        
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
	
	$cmb->add_field( array(
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
	

}