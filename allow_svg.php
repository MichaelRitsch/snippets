<?php

add_filter( 'upload_mimes', 'my_own_mime_types' );

/* allow svg upload */
function my_own_mime_types( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
