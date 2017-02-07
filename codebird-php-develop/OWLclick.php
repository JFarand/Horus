<?php
function tweet($message,$image) {

// add the codebird library
require_once('codebird.php');

// note: consumerKey, consumerSecret, accessToken, and accessTokenSecret all come from your twitter app at https://apps.twitter.com/
\Codebird\Codebird::setConsumerKey("kqdjgCXvqjOnuXSDaPOhisZXa", "GW4VpcgwkJkvfgyZ4kKGoSjxqdiJn1nw70fWVC9CYOQd3ptvLC");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("97780931-LpwtmtN9An8rLViHeKYoSE2EFkuhUUv3dRFm4dqvc", "gJ3B2otEljc0ZYcgKslgPjdy8AL5Y34nzVyZkQpvFFRXD");

//build an array of images to send to twitter
$reply = $cb->media_upload(array(
'media' => $image
));
echo $reply->httpstatus;

//upload the file to your twitter account
$mediaID = $reply->media_id_string;

//build the data needed to send to twitter, including the tweet and the image id
$params = array(
'status' => $message,
'media_ids' => $mediaID
);
//post the tweet with codebird
$reply = $cb->statuses_update($params);
echo $reply->httpstatus;
}

$link= "ad_shirt_122216.png";
tweet("I only got XLs left and not many of them. Just DM me best way to make an exchange.",$link);