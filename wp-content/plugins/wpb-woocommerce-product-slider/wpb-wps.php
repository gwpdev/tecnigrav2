<?php//--------------- Adding modernizr ------------//function wpb_modernizr() {	if (!is_admin()) {		wp_deregister_script('modernizr'); // deregister		wp_enqueue_script('wp_enqueue_scripts', plugins_url('/js/modernizr.custom.js', __FILE__), false, '2.7.0', false);	}	}add_action('wp_enqueue_scripts', 'wpb_modernizr');	//--------------- Adding Latest jQuery------------//function wpb_wps_jquery() {	wp_enqueue_script('jquery');}add_action('init', 'wpb_wps_jquery');//-------------- include js files---------------//function wpb_wps_adding_scripts() {	if (!is_admin()) {			wp_register_script('toucheffects', plugins_url('js/toucheffects.js', __FILE__),'','1.0', true);		wp_register_script('carousel', plugins_url('js/owl.carousel.js', __FILE__),array('jquery'),'1.3.2', true);		wp_register_script('plugin-main', plugins_url('js/plugin-main.js', __FILE__),array('jquery'),'1.0', true);		wp_enqueue_script('toucheffects');		wp_enqueue_script('carousel');		wp_enqueue_script('plugin-main');	}}add_action( 'wp_enqueue_scripts', 'wpb_wps_adding_scripts' ); //------------ include css files-----------------//function wpb_wps_adding_style() {	if (!is_admin()) {		wp_register_style('wpb_wps_default', plugins_url('css/default.css', __FILE__),'','1.0', false);		wp_register_style('wpb_wps_component', plugins_url('css/component.css', __FILE__),'','1.0', false);		wp_register_style('wpb_wps_owl_carousel', plugins_url('css/owl.carousel.css', __FILE__),'','1.0', false);		wp_register_style('wpb_wps_owl_theme', plugins_url('css/owl.theme.css', __FILE__),'','1.0', false);		wp_register_style('wpb_wps_font_awesome', plugins_url('css/font-awesome.min.css', __FILE__),'','1.0', false);		wp_register_style('wpb_wps_main_style', plugins_url('css/main.css', __FILE__),'','1.0', false);		wp_enqueue_style('wpb_wps_default');		wp_enqueue_style('wpb_wps_component');		wp_enqueue_style('wpb_wps_owl_carousel');		wp_enqueue_style('wpb_wps_owl_theme');		wp_enqueue_style('wpb_wps_font_awesome');		wp_enqueue_style('wpb_wps_main_style');	}}add_action( 'init', 'wpb_wps_adding_style' );