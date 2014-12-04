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

        $less_than_encode = '&lt;';
        $less_than_numeric_encode = '&#60;';
        $slash_encode = '&#47;';

        $feed_content = str_replace( $less_than_encode . '/', $less_than_encode . $slash_encode, $content );
        $feed_content = str_replace( $less_than_numeric_encode . '/', $less_than_numeric_encode . $slash_encode, $feed_content );

        return $feed_content;

    }
}
