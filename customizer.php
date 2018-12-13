<?php

function RentIt_Autocomplete_Disabler_customizer($wp_customize){
	
    /*******************************************************************
     * Autocomplete Disabler
     *******************************************************************/
	$tmp_sectionname = "autocomplete_disabler";


  /**************************autocomplete_disabler*****************************/

    $wp_customize->add_section($tmp_sectionname . '_section', array(
        'title' => esc_html__('Autocomplete Disabler', 'rentit'),
        'priority' => 10,
        'description' => esc_html__('Activate autocomplete to prevent previous suggestion by browsers!', 'rentit'),
	));

/**********************/

	$tmp_settingname = $tmp_sectionname . '_status';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Disable autocomplete', 'rentit'),
        'section' => $tmp_sectionname . "_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

}
add_action('customize_register', 'RentIt_Autocomplete_Disabler_customizer');