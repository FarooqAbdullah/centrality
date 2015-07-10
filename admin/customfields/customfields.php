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
   

    // Add other metaboxes as needed

}