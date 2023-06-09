<?php
    if( function_exists('acf_add_local_field_group') ){

        acf_add_local_field_group(array (
            'key' => 'group_5ca75ee0a36c1',
            'title' => 'Slider de Informações',
            'fields' => array (
                array (
                    'key' => 'field_5ca75f0cb430a',
                    'label' => 'Ativar módulo',
                    'name' => 'ativarSliderInfos',
                    'type' => 'true_false',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array (
                    'key' => 'field_5ca75f5ddas8b430d',
                    'label' => 'Background Desk',
                    'name' => 'background_slider_infos_desk',
                    'type' => 'image',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5ca75f0cb430a',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array (
                    'key' => 'field_5ca75f5ddadfasfasdfasds8b430d',
                    'label' => 'Background Mobile',
                    'name' => 'background_slider_infos_mobile',
                    'type' => 'image',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5ca75f0cb430a',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array (
                    'key' => 'field_5ca75f5ddadfasaeqeds8b430d',
                    'label' => 'Imagem Setas',
                    'name' => 'imgSetas',
                    'type' => 'image',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5ca75f0cb430a',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array (
                    'key' => 'field_5ca75efab4309',
                    'label' => 'Titulo do módulo',
                    'name' => 'tituloSliderInfo',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5ca75f0cb430a',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_5ca75f2eb430b',
                    'label' => 'Infos',
                    'name' => 'infosSlider',
                    'type' => 'repeater',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5ca75f0cb430a',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'row',
                    'button_label' => '',
                    'sub_fields' => array (
                        array (
                            'key' => 'field_5ca75f58b430d',
                            'label' => 'Background',
                            'name' => 'background',
                            'type' => 'image',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'url',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                        array (
                            'key' => 'field_5ca75f97b4sd3h30e',
                            'label' => 'Título',
                            'name' => 'tituloIcons',
                            'type' => 'text',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => '',
                        ),
                        array (
                            'key' => 'field_5ca75f97b430e',
                            'label' => 'Texto',
                            'name' => 'texto',
                            'type' => 'textarea',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => '',
                        ),
                    ),
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'default',
                    ),
                ),
            ),
            'menu_order' => 4,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => array (
                0 => 'the_content',
            ),
            'active' => 1,
            'description' => '',
        ));
    }
?>