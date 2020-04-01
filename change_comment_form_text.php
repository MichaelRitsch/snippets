<?php

add_filter('comment_form_defaults','my_comment_reform');

function my_comment_reform ($arg) {
  $arg['title_reply'] = __('Leave a Comment:');
  $arg['comment_notes_before']  = '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>';
  $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';
  
  return $arg;
}
