<?php

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page( [
                'page_title' 	=> 'Nastavenia stránky',
                'menu_title'	=> 'Nastavenia stránky',
                'menu_slug' 	=> 'theme-general-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ] );
    }

    /* Settings */
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
                                      'key' => 'group_5e98da3b5de15',
                                      'title' => 'Nastavenia',
                                      'fields' => array(
                                          array(
                                              'key' => 'field_5e98da42f9297',
                                              'label' => 'Verzia',
                                              'name' => '',
                                              'type' => 'tab',
                                              'instructions' => '',
                                              'required' => 0,
                                              'conditional_logic' => 0,
                                              'wrapper' => array(
                                                  'width' => '',
                                                  'class' => '',
                                                  'id' => '',
                                              ),
                                              'placement' => 'top',
                                              'endpoint' => 0,
                                          ),
                                          array(
                                              'key' => 'field_5e98da5df9298',
                                              'label' => 'Zapnúť zobrazovanie verzie',
                                              'name' => 'version_display',
                                              'type' => 'true_false',
                                              'instructions' => '',
                                              'required' => 0,
                                              'conditional_logic' => 0,
                                              'wrapper' => array(
                                                  'width' => '33',
                                                  'class' => '',
                                                  'id' => '',
                                              ),
                                              'message' => '',
                                              'default_value' => 1,
                                              'ui' => 1,
                                              'ui_on_text' => 'Zobraziť',
                                              'ui_off_text' => 'Schovať',
                                          ),
                                          array(
                                              'key' => 'field_5e98daa0f9299',
                                              'label' => 'Fáza verzie',
                                              'name' => 'version_phase',
                                              'type' => 'text',
                                              'instructions' => '',
                                              'required' => 0,
                                              'conditional_logic' => 0,
                                              'wrapper' => array(
                                                  'width' => '33',
                                                  'class' => '',
                                                  'id' => '',
                                              ),
                                              'default_value' => '',
                                              'placeholder' => '',
                                              'prepend' => '',
                                              'append' => '',
                                              'maxlength' => '',
                                          ),
                                          array(
                                              'key' => 'field_5e98db0ef929a',
                                              'label' => 'Info text verzie',
                                              'name' => 'version_info',
                                              'type' => 'text',
                                              'instructions' => 'Je možné pridať link do textu. Dátum sa zobrazí automaticky, podľa aktuálne poslednej úpravy ktorejkoľvek stránky.',
                                              'required' => 0,
                                              'conditional_logic' => 0,
                                              'wrapper' => array(
                                                  'width' => '',
                                                  'class' => '',
                                                  'id' => '',
                                              ),
                                              'default_value' => 'Toto je pracovná verzia, pracujeme na jej zdokonaľovaní. Naposledy aktualizované:',
                                              'placeholder' => '',
                                              'prepend' => '',
                                              'append' => '',
                                              'maxlength' => '',
                                          ),
                                      ),
                                      'location' => array(
                                          array(
                                              array(
                                                  'param' => 'options_page',
                                                  'operator' => '==',
                                                  'value' => 'theme-general-settings',
                                              ),
                                          ),
                                      ),
                                      'menu_order' => 0,
                                      'position' => 'normal',
                                      'style' => 'default',
                                      'label_placement' => 'top',
                                      'instruction_placement' => 'label',
                                      'hide_on_screen' => '',
                                      'active' => true,
                                      'description' => '',
                                  ));

    endif;
