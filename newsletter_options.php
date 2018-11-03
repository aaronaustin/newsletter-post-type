<?php

    
    // Hook into the admin menu
    add_action( 'admin_menu', 'create_plugin_settings_page' );
    // Add Settings and Fields
    add_action( 'admin_init', 'setup_sections' );
    add_action( 'admin_init', 'setup_fields' );
        
    function create_plugin_settings_page() {
    	// Add the menu item and page
    	$page_title = 'Newsletter Options';
    	$menu_title = 'Newsletter';
    	$capability = 'manage_options';
    	$slug = 'newsletter_fields';
    	$callback = 'plugin_settings_page_content';
    	$icon = 'dashicons-admin-plugins';
        $position = 100;
        add_submenu_page( 'options-general.php', $page_title, $menu_title, $capability, $slug, $callback );
    	// add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
    }
    function plugin_settings_page_content() {?>
    	<div class="wrap">
    		<h2>My Awesome Settings Page</h2><?php
            if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
                  $this->admin_notice();
            } ?>
    		<form method="POST" action="options.php">
                <?php
                    settings_fields( 'newsletter_fields' );
                    do_settings_sections( 'newsletter_fields' );
                    submit_button();
                ?>
    		</form>
    	</div> <?php
    }
    
    function admin_notice() { ?>
        <div class="notice notice-success is-dismissible">
            <p>Your settings have been updated!</p>
        </div><?php
    }
    function setup_sections() {
        add_settings_section( 'our_first_section', 'Set Newsletter Options Here', 'section_callback', 'newsletter_fields' );
    }
    function section_callback( $arguments ) {
    	switch( $arguments['id'] ){
    		case 'our_first_section':
    			echo 'Generate your API key and find your List ID in your Mailchimp Account.';
    			break;
    		case 'our_second_section':
    			echo 'This one is number two';
    			break;
    		case 'our_third_section':
    			echo 'Third time is the charm!';
    			break;
    	}
    }
    function setup_fields() {
        $fields = array(
        	array(
        		'uid' => 'mailchimp_api_key',
        		'label' => 'Mailchimp API Key',
        		'section' => 'our_first_section',
        		'type' => 'text',
        		'placeholder' => 'xxxxxxxxxxxxxxxxxxxxx'
        	),
        	array(
        		'uid' => 'mailchimp_list_id',
        		'label' => 'Mailchimp List ID',
        		'section' => 'our_first_section',
                'type' => 'text',
                'placeholder' => 'xxxxxxxxxxxxxxxxxxxxx'
        	),
        	// array(
        	// 	'uid' => 'image_upload',
        	// 	'label' => 'Image Upload',
        	// 	'section' => 'our_first_section',
            //     'type' => 'file'
        	// ),
        	// array(
        	// 	'uid' => 'awesome_number_field',
        	// 	'label' => 'Sample Number Field',
        	// 	'section' => 'our_first_section',
        	// 	'type' => 'number',
        	// ),
        	// array(
        	// 	'uid' => 'awesome_textarea',
        	// 	'label' => 'Sample Text Area',
        	// 	'section' => 'our_first_section',
        	// 	'type' => 'textarea',
        	// ),
        	// array(
        	// 	'uid' => 'awesome_select',
        	// 	'label' => 'Sample Select Dropdown',
        	// 	'section' => 'our_first_section',
        	// 	'type' => 'select',
        	// 	'options' => array(
        	// 		'option1' => 'Option 1',
        	// 		'option2' => 'Option 2',
        	// 		'option3' => 'Option 3',
        	// 		'option4' => 'Option 4',
        	// 		'option5' => 'Option 5',
        	// 	),
            //     'default' => array()
        	// ),
        	// array(
        	// 	'uid' => 'awesome_multiselect',
        	// 	'label' => 'Sample Multi Select',
        	// 	'section' => 'our_first_section',
        	// 	'type' => 'multiselect',
        	// 	'options' => array(
        	// 		'option1' => 'Option 1',
        	// 		'option2' => 'Option 2',
        	// 		'option3' => 'Option 3',
        	// 		'option4' => 'Option 4',
        	// 		'option5' => 'Option 5',
        	// 	),
            //     'default' => array()
        	// ),
        	// array(
        	// 	'uid' => 'awesome_radio',
        	// 	'label' => 'Sample Radio Buttons',
        	// 	'section' => 'our_first_section',
        	// 	'type' => 'radio',
        	// 	'options' => array(
        	// 		'option1' => 'Option 1',
        	// 		'option2' => 'Option 2',
        	// 		'option3' => 'Option 3',
        	// 		'option4' => 'Option 4',
        	// 		'option5' => 'Option 5',
        	// 	),
            //     'default' => array()
        	// ),
        	// array(
        	// 	'uid' => 'awesome_checkboxes',
        	// 	'label' => 'Sample Checkboxes',
        	// 	'section' => 'our_first_section',
        	// 	'type' => 'checkbox',
        	// 	'options' => array(
        	// 		'option1' => 'Option 1',
        	// 		'option2' => 'Option 2',
        	// 		'option3' => 'Option 3',
        	// 		'option4' => 'Option 4',
        	// 		'option5' => 'Option 5',
        	// 	),
            //     'default' => array()
        	// )
        );
    	foreach( $fields as $field ){
        	add_settings_field( $field['uid'], $field['label'], 'field_callback', 'newsletter_fields', $field['section'], $field );
            register_setting( 'newsletter_fields', $field['uid'] );
    	}
    }
    function field_callback( $arguments ) {
        $value = get_option( $arguments['uid'] );
        if( ! $value ) {
            $value = $arguments['default'];
        }
        switch( $arguments['type'] ){
            case 'text':
            case 'password':
            case 'number':
                printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />', $arguments['uid'], $arguments['type'], $arguments['placeholder'], $value );
                break;
            case 'textarea':
                printf( '<textarea name="%1$s" id="%1$s" placeholder="%2$s" rows="5" cols="50">%3$s</textarea>', $arguments['uid'], $arguments['placeholder'], $value );
                break;
            case 'select':
            case 'multiselect':
                if( ! empty ( $arguments['options'] ) && is_array( $arguments['options'] ) ){
                    $attributes = '';
                    $options_markup = '';
                    foreach( $arguments['options'] as $key => $label ){
                        $options_markup .= sprintf( '<option value="%s" %s>%s</option>', $key, selected( $value[ array_search( $key, $value, true ) ], $key, false ), $label );
                    }
                    if( $arguments['type'] === 'multiselect' ){
                        $attributes = ' multiple="multiple" ';
                    }
                    printf( '<select name="%1$s[]" id="%1$s" %2$s>%3$s</select>', $arguments['uid'], $attributes, $options_markup );
                }
                break;
            case 'radio':
            case 'checkbox':
                if( ! empty ( $arguments['options'] ) && is_array( $arguments['options'] ) ){
                    $options_markup = '';
                    $iterator = 0;
                    foreach( $arguments['options'] as $key => $label ){
                        $iterator++;
                        $options_markup .= sprintf( '<label for="%1$s_%6$s"><input id="%1$s_%6$s" name="%1$s[]" type="%2$s" value="%3$s" %4$s /> %5$s</label><br/>', $arguments['uid'], $arguments['type'], $key, checked( $value[ array_search( $key, $value, true ) ], $key, false ), $label, $iterator );
                    }
                    printf( '<fieldset>%s</fieldset>', $options_markup );
                }
                break;

        }
        if( $helper = $arguments['helper'] ){
            printf( '<span class="helper"> %s</span>', $helper );
        }
        if( $supplimental = $arguments['supplimental'] ){
            printf( '<p class="description">%s</p>', $supplimental );
        }
    }



?>