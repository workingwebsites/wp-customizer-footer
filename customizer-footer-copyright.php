
function wws_get_footer_copyright(){
//Returns copyright if exist
	$mod_copyright = get_theme_mod('footer-copyright-setting', '');

	if(empty($mod_copyright)){
		return NULL;
	}else{
		return $mod_copyright;
	}

}


function wws_customize_register( $wp_customize ) {
  /***** COPYRIGHT LINE *****/
  /* Adds new panel to customizer.  Allows users to edit the 'powered by ' line on bottom of site */
  //See: http://hsrtech.com/wordpress/theme-customizer-api-cheatsheet/

  $wp_customize->add_section('footer-copyright-section',array(
    'title' => 'Footer Copyright',
    'priority' => 150,
  ));


  $wp_customize->add_setting('footer-copyright-setting',array(
    'type' => 'theme_mod',
    'default' => '&copy; '.date ( 'Y' ).' '.get_bloginfo( 'name' ).' All rights reserved.'
  ));


  $wp_customize->add_control('contrl_demo',array(
    'label' => 'Copyright Line:',
    'type' => 'text',
    'section' => 'footer-copyright-section',
    'settings' => 'footer-copyright-setting',
  ));
}

add_action( 'customize_register', 'wws_customize_register' );
