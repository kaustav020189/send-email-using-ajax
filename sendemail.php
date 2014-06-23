<?php

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];


//Sending mail
$from = 'abc@something.com'; // enter your (sender) mail id here
$to = $email;
$subject = 'Demo Mail from A 100 Web Solutions';
$body = '<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div style="font-family: Helvetica;">
            <div style="width: 525px;height: 70px;margin: 0">
                <img src="http://www.projects.a100websolutions.in/images/banner.jpg" width="800" height="320"/>
            </div>
            <div style="width: 800px;height: auto;overflow: auto;font-size: 22px;color: #666;margin: 0;line-height: 25px;
                        padding: 10px;padding-top: 25px;border: 1px solid #e5e5e5">
            This is a message featuring the demo of 
            <span style="color: #2882d7">Sending Emails with AJAX and JQuery</span>  
            <br /><br />The message from the sender is as follows -
            <p>'
            .$message.   
            '</p>
            </div>
        </div>
    </body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: '.$from. "\r\n" .
   'Reply-To: '.$from. "\r\n";

if(mail($to, $subject, $body, $headers)){

    echo 'Mail sent successfully';
}
?>
