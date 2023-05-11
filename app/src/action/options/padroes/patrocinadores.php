<?php
    if( function_exists('acf_add_local_field_group') ){
        acf_add_local_field_group(array (
            'key' => 'group_5b5b53f1b84dc',
            'title' => 'Patrocinadores',
            'fields' => array (
                array (
                    'key' => 'field_5b5b54huasd00d8dcb',
                    'label' => 'Patrocinadores',
                    'name' => 'patrocinadores',
                    'type' => 'repeater',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
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
                            'key' => 'field_5b5b5461d8dcc',
                            'label' => 'Label do Módulo',
                            'name' => 'label',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array (
                            'key' => 'field_5b5b1235461d8dcc',
                            'label' => 'Titulo do Módulo',
                            'name' => 'titulo',
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
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array (
                            'key' => 'field_5b5b548ad8dcd',
                            'label' => 'Tamanho do logo',
                            'name' => 'tamanho',
                            'type' => 'select',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array (
                                'pequeno' => 'Pequeno',
                                'medio' => 'Médio',
                                'grande' => 'Grande',
                            ),
                            'default_value' => array (
                                0 => 'pequeno',
                            ),
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 0,
                            'ajax' => 0,
                            'return_format' => 'value',
                            'placeholder' => '',
                        ),
                        array (
                            'key' => 'field_5bae851231928952',
                            'label' => 'Colunas do bloco',
                            'name' => 'colunas_do_bloco',
                            'type' => 'radio',
                            'value' => NULL,
                            'instructions' => 'Tamanho da coluna, pode agrupar até 3 em uma linha.',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array (
                                '100%' => '100%',
                                '50%' => '50%',
                                '33%' => '33%',
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => '',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
                        ),
                        array (
                            'key' => 'field_5bae12312369928953',
                            'label' => 'Posição do box',
                            'name' => 'posicao_do_box',
                            'type' => 'radio',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array (
                                'Central' => 'Central',
                                'Esquerda' => 'Esquerda',
                                'Direita' => 'Direita',
                            ),
                            'allow_null' => 0,
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => '',
                            'layout' => 'horizontal',
                            'return_format' => 'value',
                        ),
                        array (
                            'key' => 'field_5b5b55e9fa5e6',
                            'label' => 'Logos',
                            'name' => 'logos',
                            'type' => 'repeater',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'collapsed' => '',
                            'min' => 0,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => '',
                            'sub_fields' => array (
                                array (
                                    'key' => 'field_5b5b5606fa5e7',
                                    'label' => 'Foto',
                                    'name' => 'foto',
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
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 0,
                                    'max_height' => 0,
                                    'max_size' => 0,
                                    'mime_types' => '',
                                ),
                                array (
                                    'key' => 'field_5b5b561dfa5e8',
                                    'label' => 'Nome da patrocinadora',
                                    'name' => 'fotoTitle',
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
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                                array (
                                    'key' => 'field_5b5b5641fa5e9',
                                    'label' => 'Link',
                                    'name' => 'url',
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
                                    'prepend' => '',
                                    'append' => '',
                                    'maxlength' => '',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-patrocinadores',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));  
    }
?>