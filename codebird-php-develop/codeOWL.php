<?php
$topic = array(
    "US Black Art & Myth Of Race Based Fictive Kinship Obligation http://www.owlasylum.net/black-media-trust/3663/",
    "President Barry Obeezy: Gramsci's Afrikan-Amerikkkan http://www.owlasylum.net/the-black-state/president-barry-obeezy-gramscis-afrikan-amerikkkan/",
    "OWL's Asylum http://www.owlasylum.net",
    "Erica Caines's \"All In Love Is Fair\" http://www.owlasylum.net/we-write-webs/inspiration/erica-cainess-all-in-love-is-fair-a-critique-of-sortsprettiirickii/",
    "A Poet's Toolkit: POETIC FORMS from A-Z By B. Sharise http://www.owlasylum.net/we-write-webs/a-poets-toolkit-poetic-forms-from-a-z-by-b-sharise/",
    "I Refuse To Vote For Another US Black Leader http://www.owlasylum.net/the-black-state/i-refuse-to-vote-for-another-us-black-leader/",
    "Black Media Trust :: [Introductions] Self Trust As Critical Foundations http://www.owlasylum.net/black-media-trust/3647/",
    "And Why Should We Be Alarmed At Lil’ Wayne’s Sacrilege? http://www.owlasylum.net/the-black-state/and-why-should-we-be-alarmed-at-lil-waynes-sacrilege/",
    "Black Mother By Alprentice Bunchy Carter||	http://www.owlasylum.net/we-write-webs/inspiration/black-mother-by-alprentice-bunchy-carter/",
    "Trust, Sex, Black Media, And Black African American Women http://www.owlasylum.net/the-green-djhty/trust-sex-black-media-and-black-african-american-women/",
    "Black Media :: What Does Black Trust Look Like Online???	http://www.owlasylum.net/the-green-djhty/black-media-what-does-black-trust-look-like-online/",
    "Friend OWL's Asylum On Facebook: https://www.facebook.com/owlsasylum/"
);

// require codebird
require_once('codebird.php');

\Codebird\Codebird::setConsumerKey("kqdjgCXvqjOnuXSDaPOhisZXa", "GW4VpcgwkJkvfgyZ4kKGoSjxqdiJn1nw70fWVC9CYOQd3ptvLC");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("97780931-LpwtmtN9An8rLViHeKYoSE2EFkuhUUv3dRFm4dqvc", "gJ3B2otEljc0ZYcgKslgPjdy8AL5Y34nzVyZkQpvFFRXD");
/*
$params = array(
'status' => 'God, Spirituality, #NShit… http://www.owlasylum.net/we-write-webs/inspiration/god-spirituality-nshit/'
);
$reply = $cb->statuses_update($params);
*/



    $max = count($topic) - 1;
    $random = rand(0, $max);
    $params = array(
        'status' => $topic[$random]." ".$random.rand(0,9).$random
    );

    $reply = $cb->statuses_update($params);

    require_once 'PHPMailerAutoload.php';


//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "business@jayfarand.com";
$mail->FromName = "jayfar3";

//To address and name
$name =  "It Me";
$mail->addAddress("owlasylum@gmail.com", $name);
$mail->addAddress("owlasylum@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("no-reply@jayfarand.com", "Reply");

//CC and BCC
/*$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");*/

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Twitter AutoPost ";
$mail->Body = "<p>This was posted to Twitter: ".$topic[$random]."</p>";

$mail->AltBody = "This is the plain text version of the email content";

if (!$mail->send()) {
    echo "<div id='submitMessage'><span>Mailer Error: " . $mail->ErrorInfo."</span><span id='messageClose'>X</span></div>";
} else {
    echo "<div id='submitMessage'><span>Message has been sent successfully</span><span id='messageClose'>X</span></div>";

}//close mail processing

