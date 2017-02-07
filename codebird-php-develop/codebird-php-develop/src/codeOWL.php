<?php
// require codebird
require_once('codebird.php');

\Codebird\Codebird::setConsumerKey("kqdjgCXvqjOnuXSDaPOhisZXa", "GW4VpcgwkJkvfgyZ4kKGoSjxqdiJn1nw70fWVC9CYOQd3ptvLC");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("	97780931-LpwtmtN9An8rLViHeKYoSE2EFkuhUUv3dRFm4dqvc", "gJ3B2otEljc0ZYcgKslgPjdy8AL5Y34nzVyZkQpvFFRXD");

$params = array(
'status' => 'Auto Post on Twitter with PHP http://goo.gl/OZHaQD #php #twitter'
);
$reply = $cb->statuses_update($params);