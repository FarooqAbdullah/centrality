<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class Myprefix_Admin {

    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'myprefix_options';

    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id_general = 'myprefix_option_metabox_general';
    private $metabox_id_header = 'myprefix_option_metabox_header';
    private $metabox_id_footer = 'myprefix_option_metabox_footer';
    private $metabox_id_working_with_centrality = 'myprefix_option_metabox_working_with_centrality';
    private $metabox_id_working_with_centrality_simple = 'myprefix_option_metabox_working_with_centrality_simple';
    private $metabox_id_working_with_centrality_flexibility = 'myprefix_option_metabox_working_with_centrality_flexibility';
    private $metabox_id_working_with_centrality_smart = 'myprefix_option_metabox_working_with_centrality_smart';
    private $metabox_id_trusted_companies = 'myprefix_option_metabox_trusted_companies';

    /**
     * Options Page title
     * @var string
     */
    protected $title = '';

    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';

    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = __( 'Site Options', 'myprefix' );
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
        add_action( 'cmb2_init', array( $this, 'add_options_page_metabox' ) );
    }


    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( $this->key, $this->key );
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );

        // Include CMB CSS in the head to avoid FOUT
        add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
    }

    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display() {
        ?>
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                    <li role="presentation"><a href="#header" aria-controls="header" role="tab" data-toggle="tab">Header</a></li>
                    <li role="presentation"><a href="#footer" aria-controls="footer" role="tab" data-toggle="tab">Footer</a></li>
                    <li role="presentation"><a href="#working-with-centrality" aria-controls="footer" role="tab" data-toggle="tab">Working With Centrality</a></li>
                    <li role="presentation"><a href="#trusted-companies" aria-controls="footer" role="tab" data-toggle="tab">Trusted Companies</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="general">
                        <?php cmb2_metabox_form( $this->metabox_id_general, $this->key, array( 'cmb_styles' => false ) ); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="header">
                        <?php  cmb2_metabox_form( $this->metabox_id_header, $this->key, array( 'cmb_styles' => false ) ); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="footer">
                        <?php  cmb2_metabox_form( $this->metabox_id_footer, $this->key, array( 'cmb_styles' => false ) ); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="working-with-centrality">

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="genOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#gen" aria-expanded="true" aria-controls="gen">
                                            General
                                        </a>
                                    </h4>
                                </div>
                                <div id="gen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="genOne">
                                    <div class="panel-body">
                                        <?php  cmb2_metabox_form( $this->metabox_id_working_with_centrality, $this->key, array( 'cmb_styles' => false ) ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="simpleOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#simple" aria-expanded="false" aria-controls="simple">
                                            Simple
                                        </a>
                                    </h4>
                                </div>
                                <div id="simple" class="panel-collapse collapse" role="tabpanel" aria-labelledby="simpleOne">
                                    <div class="panel-body">
                                        <?php cmb2_metabox_form( $this->metabox_id_working_with_centrality_simple, $this->key, array( 'cmb_styles' => false ) ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="flexibleOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#flexible" aria-expanded="false" aria-controls="flexible">
                                            Flexible
                                        </a>
                                    </h4>
                                </div>
                                <div id="flexible" class="panel-collapse collapse" role="tabpanel" aria-labelledby="flexibleOne">
                                    <div class="panel-body">
                                        <?php cmb2_metabox_form( $this->metabox_id_working_with_centrality_flexibility, $this->key, array( 'cmb_styles' => false ) ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="smartOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#smart" aria-expanded="false" aria-controls="smart">
                                            Smart
                                        </a>
                                    </h4>
                                </div>
                                <div id="smart" class="panel-collapse collapse" role="tabpanel" aria-labelledby="smartOne">
                                    <div class="panel-body">
                                        <?php  cmb2_metabox_form( $this->metabox_id_working_with_centrality_smart, $this->key, array( 'cmb_styles' => false ) ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="trusted-companies">
                        <?php  cmb2_metabox_form( $this->metabox_id_trusted_companies, $this->key, array( 'cmb_styles' => false ) ); ?>
                    </div>
                </div>

            </div>
        </div>
    <?php
    }

    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_metabox() {

        $cmb_general = new_cmb2_box( array(
            'id'      => $this->metabox_id_general,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );
        $cmb_header = new_cmb2_box( array(
            'id'      => $this->metabox_id_header,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );
        $cmb_footer = new_cmb2_box( array(
            'id'      => $this->metabox_id_footer,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );
        $cmb_working_with_centrality = new_cmb2_box( array(
            'id'      => $this->metabox_id_working_with_centrality,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );

        $cmb_working_with_centrality_simple = new_cmb2_box( array(
            'id'      => $this->metabox_id_working_with_centrality_simple,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );

        $cmb_working_with_centrality_flexibility = new_cmb2_box( array(
            'id'      => $this->metabox_id_working_with_centrality_flexibility,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );

        $cmb_working_with_centrality_smart = new_cmb2_box( array(
            'id'      => $this->metabox_id_working_with_centrality_smart,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );
        $cmb_trusted_companies = new_cmb2_box( array(
            'id'      => $this->metabox_id_trusted_companies,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ) );

        // Set our CMB2 fields
        $cmb_general->add_field( array(
            'name' => __( 'Service Request Number', 'centrality' ),
            'desc' => __( 'write Your Service Resquest Number Here', 'centrality' ),
            'id'   => 'centrality-service-request',
            'type' => 'text',
            'default' => '',
        ) );
        $cmb_general->add_field( array(
            'name' => __( 'Site Address', 'centrality' ),
            'desc' => __( 'Write Your Address Here', 'centrality' ),
            'id'   => 'centrality-address',
            'type' => 'text',
            'default' => '',
        ) );
        $cmb_general->add_field( array(
            'name' => __( 'Phone Number', 'centrality' ),
            'desc' => __( 'Write Your Phone Number Here', 'centrality' ),
            'id'   => 'centrality-phone-number',
            'type' => 'text',
            'default' => '',
        ) );
        $cmb_general->add_field( array(
            'name' => __( 'Telephone Number', 'centrality' ),
            'desc' => __( 'Write Your TelePhone Number Here', 'centrality' ),
            'id'   => 'centrality-telephone-number',
            'type' => 'text',
            'default' => '',
        ) );
        $cmb_general->add_field( array(
            'name' => __( 'Service Request Email', 'centrality' ),
            'desc' => __( 'Write Your Service Request Here', 'centrality' ),
            'id'   => 'centrality-service-request-number',
            'type' => 'text',
            'default' => 'service@centrality.com',
        ) );

        // Set our CMB2 fields
        $cmb_header->add_field( array(
             'name' => __( 'Upload Logo', 'centrality' ),
             'desc' => __( 'Upload your site Header Logo', 'centrality' ),
             'id'   => 'centrality-header-logo',
             'type' => 'file',
             'default' => '',
         ) );
        $cmb_header->add_field( array(
             'name' => __( 'Slogan', 'centrality' ),
             'desc' => __( 'Write Your Slogan Here', 'centrality' ),
             'id'   => 'centrality-header-slogan',
             'type' => 'text',
             'default' => '',
         ) );
        $cmb_header->add_field( array(
             'name' => __( 'Upload Slogan Image', 'centrality' ),
             'desc' => __( 'Upload Your Slogan Image Here', 'centrality' ),
             'id'   => 'centrality-header-slogan-image',
             'type' => 'file',
             'default' => '',
         ) );

        // Set our CMB2 fields
        $cmb_footer->add_field( array(
            'name' => __( 'Upload Logo', 'centrality' ),
            'desc' => __( 'Upload your site Footer Logo', 'centrality' ),
            'id'   => 'centrality-footer-logo',
            'type' => 'file',
            'default' => '',
        ) );
        $cmb_footer->add_field( array(
            'name' => __( 'Contact Email', 'centrality' ),
            'desc' => __( 'Write Your Contact Email', 'centrality' ),
            'id'   => 'centrality-contact-email',
            'type' => 'text_email',
            'default' => '',
        ) );
        $cmb_footer->add_field( array(
            'name' => __( 'Copy Right Text', 'centrality' ),
            'desc' => __( 'Write Your Copy Right Text', 'centrality' ),
            'id'   => 'centrality-copyright-text',
            'type' => 'text',
            'default' => '',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality->add_field( array(
            'name' => __( 'Heading', 'centrality' ),
            'desc' => __( 'write Working With Centrality Heading Here', 'centrality' ),
            'id'   => 'working-with-centrality-heading',
            'type' => 'text',
            'default' => 'Why You\'re Going to Love Working with Centrality',
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, ))
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality->add_field( array(
            'name' => __( 'Button Text', 'centrality' ),
            'desc' => __( 'write Working With Centrality Button Text Here', 'centrality' ),
            'id'   => 'working-with-centrality-button-text',
            'type' => 'text',
            'default' => 'Learn More',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality->add_field( array(
            'name' => __( 'Button URL', 'centrality' ),
            'desc' => __( 'write Working With Centrality Button URL Here', 'centrality' ),
            'id'   => 'working-with-centrality-button-url',
            'type' => 'text',
            'default' => '#',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality->add_field( array(
            'name' => __( 'Button Image', 'centrality' ),
            'desc' => __( 'Upload Working With Centrality Button Image Here', 'centrality' ),
            'id'   => 'working-with-centrality-button-image',
            'type' => 'file',
            'default' => get_template_directory_uri().'/images/right-arrow.png',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_simple->add_field( array(
            'name' => __( 'Upload Simple Image', 'centrality' ),
            'desc' => __( 'Upload Simple Image Here', 'centrality' ),
            'id'   => 'working-with-centrality-simple-image',
            'type' => 'file',
            'default' => get_template_directory_uri().'/images/computer.png',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_simple->add_field( array(
            'name' => __( 'Simple Title', 'centrality' ),
            'desc' => __( 'Write Simple Title Here', 'centrality' ),
            'id'   => 'working-with-centrality-simple-title',
            'type' => 'text',
            'default' => 'Simple',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_simple->add_field( array(
            'name' => __( 'Simple Description', 'centrality' ),
            'desc' => __( 'Write Simple Description Here', 'centrality' ),
            'id'   => 'working-with-centrality-simple-description',
            'type' => 'text',
            'default' => 'Lorem Ipsum Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labour et dolore magna aliqua.',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_flexibility->add_field( array(
            'name' => __( 'Upload Flexible Image', 'centrality' ),
            'desc' => __( 'Upload Flexible Image Here', 'centrality' ),
            'id'   => 'working-with-centrality-flexible-image',
            'type' => 'file',
            'default' => get_template_directory_uri().'/images/bulb.png',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_flexibility->add_field( array(
            'name' => __( 'Flexible Title', 'centrality' ),
            'desc' => __( 'Write Flexible Title Here', 'centrality' ),
            'id'   => 'working-with-centrality-flexible-title',
            'type' => 'text',
            'default' => 'Flexible',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_flexibility->add_field( array(
            'name' => __( 'Flexible Description', 'centrality' ),
            'desc' => __( 'Write Flexible Description Here', 'centrality' ),
            'id'   => 'working-with-centrality-flexible-description',
            'type' => 'text',
            'default' => 'Lorem Ipsum Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labour et dolore magna aliqua.',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_smart->add_field( array(
            'name' => __( 'Upload Smart Image', 'centrality' ),
            'desc' => __( 'Upload Smart Image Here', 'centrality' ),
            'id'   => 'working-with-centrality-smart-image',
            'type' => 'file',
            'default' => get_template_directory_uri().'/images/cable.png',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_smart->add_field( array(
            'name' => __( 'Smart Title', 'centrality' ),
            'desc' => __( 'Write Smart Title Here', 'centrality' ),
            'id'   => 'working-with-centrality-smart-title',
            'type' => 'text',
            'default' => 'Smart',
        ) );

        // Set our CMB2 fields
        $cmb_working_with_centrality_smart->add_field( array(
            'name' => __( 'Smart Description', 'centrality' ),
            'desc' => __( 'Write Smart Description Here', 'centrality' ),
            'id'   => 'working-with-centrality-smart-description',
            'type' => 'text',
            'default' => 'Lorem Ipsum Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labour et dolore magna aliqua.',
        ) );

        // Set our CMB2 fields
        $cmb_trusted_companies->add_field( array(
            'name' => __( 'Heading Text', 'centrality' ),
            'desc' => __( 'write Trusted Companies Heading Text Here', 'centrality' ),
            'id'   => 'trusted-companies-heading-text',
            'type' => 'text',
            'default' => 'Centrality is Trusted by Companies Around the Country',
        ) );

        $trusted_com_img = $cmb_trusted_companies->add_field( array(
            'id'          => 'trusted-companies-img',
            'type'        => 'group',
            'description' => __( 'Upload Multiple Comapnies Image Here', 'cmb' ),
            'options'     => array(
                'group_title'   => __( 'Trusted Company {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
                'add_button'    => __( 'Upload Another Company Image', 'cmb' ),
                'remove_button' => __( 'Remove Company Image', 'cmb' ),
                'sortable'      => true, // beta
            ),
        ) );

        // Id's for group's fields only need to be unique for the group. Prefix is not needed.
        $cmb_trusted_companies->add_group_field( $trusted_com_img, array(
            'name' => 'Trusted Companies Images',
            'id'   => 'trusted-comapnies-single-image',
            'type' => 'file',

        ) );

    }

    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get( $field ) {
        // Allowed fields to retrieve
        if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
            return $this->{$field};
        }

        throw new Exception( 'Invalid property: ' . $field );
    }

}

/**
 * Helper function to get/return the Myprefix_Admin object
 * @since  0.1.0
 * @return Myprefix_Admin object
 */
function myprefix_admin() {
    static $object = null;
    if ( is_null( $object ) ) {
        $object = new Myprefix_Admin();
        $object->hooks();
    }

    return $object;
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function myprefix_get_option( $key = '' ) {
    return cmb2_get_option( myprefix_admin()->key, $key );
}

// Get it started
myprefix_admin();