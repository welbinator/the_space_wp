<?php


class Custom_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
       
        $this->hero_section( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    


    private function hero_section( $wp_customize ) {

        $wp_customize->add_section('hero-section', array(
            'title' => 'Hero',
            'priority' => 1,
            'description' => __('Hero section text and CTA', 'doesthismatter'),
        ));

        // hero section 1 
        
        

        
        
		$wp_customize->add_setting('hero-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
    
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'hero-image-control', array(
            'label' => 'Image',
            'section' => 'hero-section',
            'settings' => 'hero-image',
            'width' => 1280,
            'height' => 720,
            'flex-height' => true,
	    'flex-width'  => true,
        )));
        

       



}}