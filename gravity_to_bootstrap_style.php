<?php

/* Bootstrap Buttons to gravity */
add_filter( 'gform_submit_button', 'fe_gravity_forms_btn_classes', 10, 2 );
add_filter( 'gform_next_button', 'fe_gravity_forms_btn_classes_next', 10, 2 );
add_filter( 'gform_previous_button', 'fe_gravity_forms_btn_classes_prev', 10, 2 );

/**
 * Replace Gravity Forms button classes with Bootstrap button classes.
 */
function fe_gravity_forms_btn_classes( $button, $form ) {
    return str_replace( 'gform_button button', 'btn btn-primary', $button );
}

function fe_gravity_forms_btn_classes_next( $button, $form ) {
    return str_replace( 'gform_next_button button', 'btn btn-primary', $button );
}

function fe_gravity_forms_btn_classes_prev( $button, $form ) {
    return str_replace( 'gform_previous_button button', 'btn btn-primary', $button );
}

// Gravityforms Error Message auf Bootstrap Alerts
add_filter( 'gform_validation_message', 'wps_gform_change_message', 10, 2 );
function wps_gform_change_message( $message, $form ) {
	return '<div class="alert alert-warning" role="alert"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> '.strip_tags($message).'</div>';
}
