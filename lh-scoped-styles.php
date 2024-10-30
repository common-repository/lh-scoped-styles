<?php
/**
 * Plugin Name: LH Scoped Styles
 * Description: Aollows you to conditionally scope styles within wordpress content.
 * Author: Peter Shaw
 * Author URI: https://shawfactor.com
 * Plugin URI: https://lhero.org/portfolio/lh-scoped-styles/
 * Version: 1.00
 */
 
 
 if (!class_exists('LH_Scoped_styles_plugin')) {

class  LH_Scoped_styles_plugin {
    

    
    private static $instance;
    
static function return_plugin_namespace(){

return 'lh_scoped_styles';

}


public function scoped_element_output( $atts, $content = null ) {
    
        // define attributes and their defaults
    extract( shortcode_atts( array (
        'wrapper' => 'div',
        'style' => false
    ), $atts ) );


$return_string = '<'.$wrapper.'>';
$return_string .= '<style scoped="scoped">';
$return_string .= $style;
$return_string .= '</style>';
$return_string .= $content;
$return_string .= '</'.$wrapper.'>';

    
return $return_string;
    
    

    
}

    
public function register_shortcodes(){
    
add_shortcode(self::return_plugin_namespace().'-scoped_element', array($this,'scoped_element_output'));
    
    
}
    
     /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
 
        return self::$instance;
    }

public	function __construct() {
    
//register some shortcodes for adding data in the front end
add_action('init', array($this,"register_shortcodes"));
    
    
    
}
    
    
}

$lh_scoped_styles_instance = LH_Scoped_styles_plugin::get_instance();

}

?>