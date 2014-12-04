<?php

class WP_Fix_Feed_Not_Well_Formed_Markup {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Fix_Feed_Not_Well_Formed_Markup
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_Fix_Feed_Not_Well_Formed_Markup Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Version
    ---------------------------------------------- */

    /**
     * Version, used for cache-busting of style and script file references.
     *
     * @var string
     */
    protected $version = '1.0.0';

    /**
     * Getter method for version.
     *
     * @return string Plugin version.
     */
    public function get_version() {

        return $this->version;

    }

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_filter( 'the_content_feed', array( $this, 'fix_feed_content' ) );

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    function fix_feed_content( $content ) {

        return str_replace( '&lt;/', '&lt;&#47;', $content );

    }
}
