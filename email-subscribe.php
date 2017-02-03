<?php
if(isset($_POST['emailSub'])){
    include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );
    $mydb = new wpdb('jayfar3', 'j7*6^F4l=M3', 'owlasylum_jfaremail', 'mysql.owlasylum.net');



    require_once('PHPMailerAutoload.php');
    //set up post variables
    $email = $_POST["emailSub"];


    $dateraw = new DateTime();
    $datego = $dateraw->format('Y-m-d H:i:s');
    $random_hash = md5(openssl_random_pseudo_bytes(32));

    $mydb->insert(
        'Email', array(
            'email_address' => $email,
            'date' => $datego
        )
    );

    //PHPMailer Object
    $mail = new PHPMailer;

    //From email address and name
    $mail->From = "subscription@owlasylum.net";
    $mail->FromName = "OWL";

    //To address and name
    //$name = $_POST["FirstName"]." ".$_POST["LastName"];
    //$mail->addAddress($_POST["Email"], $name);
    $mail->addAddress($_POST["emailSub"]); //Recipient name is optional

//Address to which recipient will reply
    $mail->addReplyTo("no-reply@owlasylum.net", "Reply");

//CC and BCC
    /*$mail->addCC("cc@example.com");
    $mail->addBCC("bcc@example.com");*/

//Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = "Confirm Subscription With OWL's Asylum";
    $mail->Body = '<table border="0" cellpadding="20" cellspacing="0" height="100%" width="100%" id="" style="background-color:#eee">';
    $mail->Body .= '<tbody><tr>';
    $mail->Body .= '<td align="center" valign="top">';
    $mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="600" id="" class="" style="border-radius:6px;background-color:none">';
    $mail->Body .= '<tbody><tr>';
    $mail->Body .= '<td align="center" valign="top">';
    $mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="600">';
    $mail->Body .= '<tbody><tr>';
    $mail->Body .= '<td><h1 style="font-size:28px;line-height:200%;margin-bottom:30px;margin-top:0;padding:0"></h1><h2 style="font-size:24px;line-height:28px;margin:0 0 12px 0"><span style="font-size:24px"><span style="font-family: \'Trebuchet MS\', \'Lucida Grande\', \'Lucida Sans Unicode\', \'Lucida Sans\', Tahoma, sans-serif;;color: #006341;">Thank You For Subscribing To OWL\'s Mighty Asylum</span></span></h2></td>';
    $mail->Body .= ' </tr></tbody></table></td></tr>';
    $mail->Body .= '<tr><td align="center" valign="top">';
    $mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="600" id="m_-5645988512544587180templateBody" class="m_-5645988512544587180rounded6" style="border-radius:6px;background-color:#ffffff">';
    $mail->Body .= '<tbody><tr>';
    $mail->Body .= '<td align="left" valign="top" style="line-height:150%;font-family:Helvetica;font-size:14px;color:#333333;padding:20px">';
    $mail->Body .= '<h2 style="font-size:22px;line-height:28px;margin:0 0 12px 0">Please Confirm Your Subscription(Make Sure I\'m Not Spamming You...).</h2>';
    $mail->Body .= '<a href="http://jayfarand.com/postoffice/ThankYouForSubscribing.php?verc='.$random_hash.'&em='.$email.'" style="color:#ffffff!important;display:inline-block;font-weight:500;font-size:16px;line-height:42px;font-family:\'Helvetica\',Arial,sans-serif;width:auto;white-space:nowrap;height:42px;margin:12px 5px 12px 0;padding:0 22px;text-decoration:none;text-align:center;border:0;border-radius:3px;vertical-align:top;background-color:#5d5d5d!important" target="_blank" data-saferedirecturl=""><span style="display:inline;font-family:\'Helvetica\',Arial,sans-serif;text-decoration:none;font-weight:500;font-style:normal;font-size:16px;line-height:42px;border:none;background-color:#5d5d5d!important;color:#ffffff!important">Yes, subscribe me to this list.</span></a><br>';
    $mail->Body .= '<div><p style="padding:0 0 10px 0">If you received this email by mistake, simply delete it. You won\'t be subscribed if you don\'t click the confirmation link above.</p>';
    $mail->Body .= '<p style="padding:0 0 10px 0">For questions about this list, please contact:<br><a href="mailto:owlasylum@gmail.com" style="color:#336699" target="_blank">owlasylum@gmail.com</a></p></div>';
    $mail->Body .= '<span><span content="We need to confirm your email address."></span><span><span></span></span></span></td></tr></tbody></table></td></tr>';
    $mail->Body .= '<tr><td align="center" valign="top">';
    $mail->Body .= '<table border="0" cellpadding="20" cellspacing="0" width="600">';
    $mail->Body .= '<tbody><tr><td align="center" valign="top">';
    $mail->Body .= '<div><span style="display:block"><a href="http://www.owlasylum.net" style="color:#336699" target="_blank" data-saferedirecturl=""><img src="http://www.owlasylum.net/wp-content/themes/horus/img/OWLSignature_5Gray.png" border="0" alt="Email Marketing Powered by Jay OWL Farand" title="OWL\'S Asylum Email" width="210" height="210" class="CToWUd"></a></span></div>';
    $mail->Body .= '</td></tr></tbody></table>';
    $mail->Body .= ' </td></tr></tbody></table>';
    $mail->Body .= '</td></tr></tbody></table>';
    $mail->AltBody = "This is the plain text version of the email content";

    if (!$mail->send()) {
        echo "<div id='submitMessage'><span>Mailer Error: " . $mail->ErrorInfo."</span></div>";
    } else {
        echo "<div id='submitMessage' style='margin: 0px auto; width: '><span>We Are Almost Done. Please Check Your Email To Complete Subscription.</span></div>";
    }
}//close mail processing

