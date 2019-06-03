<?php
function my_register_additional_customizer_settings( $wp_customize ) {
	// Address
  $wp_customize->add_setting(
    'cdh_address',
    array('default' => '')
  );

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'cdh_address',
    array(
      'label'      => __( 'Adresse', 'cercle-des-heros' ),
      'settings'   => 'cdh_address',
      'priority'   => 10,
      'section'    => 'title_tagline',
      'type'       => 'textarea',
    )
  ));

	// Email
	$wp_customize->add_setting(
    'cdh_email',
    array('default' => '')
  );

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'cdh_email',
    array(
      'label'      => __( 'E-mail', 'cercle-des-heros' ),
      'settings'   => 'cdh_email',
      'priority'   => 10,
      'section'    => 'title_tagline',
      'type'       => 'text',
    )
  ));

	// Telephone
	$wp_customize->add_setting(
    'cdh_telephone',
    array('default' => '')
  );

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'cdh_telephone',
    array(
      'label'      => __( 'Téléphone', 'cercle-des-heros' ),
      'settings'   => 'cdh_telephone',
      'priority'   => 10,
      'section'    => 'title_tagline',
      'type'       => 'text',
    )
  ));
}

add_action( 'customize_register', 'my_register_additional_customizer_settings' );

function cdh_customize_register( $wp_customize ) {
  $wp_customize->add_section( 'social_icons_section' , array(
    'title'      => __( 'Réseaux sociaux', 'mytheme' ),
    'priority'   => 30,
  ));

  $icons = array(
    array('label' => 'LinkedIn', 'field' => 'linkedin'),
    array('label' => 'Twitter', 'field' => 'twitter'),
    array('label' => 'Vimeo', 'field' => 'vimeo'),
    array('label' => 'Google+', 'field' => 'googleplus'),
    array('label' => 'Youtube', 'field' => 'youtube'),
    array('label' => 'Instagram', 'field' => 'instagram'),
    array('label' => 'Facebook', 'field' => 'facebook'),
  );

  foreach ($icons as $icon) {
    $wp_customize->add_setting(
      $icon['field'],
      array('default' => '')
    );

    $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      $icon['field'],
      array(
        'label'      => __($icon['label'], 'cercle-des-heros'),
        'settings'   => $icon['field'],
        'priority'   => 10,
        'section'    => 'social_icons_section',
        'type'       => 'text',
      )
    ));
  }
}
add_action('customize_register', 'cdh_customize_register');
