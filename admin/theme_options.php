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
            'id'   => 'centrality-conatct-email',
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