<?php
//include wp-load for good traction
include('/home/jayfar3/owlasylum.net/wp-load.php');

//Update post selected
$my_post = array(
  'ID'         => 4183,
  'post_title' => 'Elaine Brown, Technopoly & Hueys Analysis Of Revolutionary Intercommunalism',
);

//Update post
//$tellMeWhenToGo = wp_update_post($my_post);
$tellMeWhenToGo = wp_insert_post($my_post);
