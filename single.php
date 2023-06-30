<?php
  $post = $wp_query->post;
  if ( in_category('cast') ) {
	  include(TEMPLATEPATH.'/single-cast.php');
  } elseif ( in_category('discography') ) {
	  include(TEMPLATEPATH.'/single-discography.php');
  } else {
	  include(TEMPLATEPATH.'/single-default.php');
  }
?>