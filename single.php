<?php
  $post = $wp_query->post;
  if ( in_category('cast') ) {
	  include(TEMPLATEPATH.'/single-cast.php');
//   } elseif ( in_category('xxx') ) {
// 	  include(TEMPLATEPATH.'/single2.php');
  } else {
	  include(TEMPLATEPATH.'/single-default.php');
  }
?>