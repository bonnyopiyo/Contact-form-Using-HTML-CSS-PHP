<?php
/**
 * Created by PhpStorm.
 * User: osindi
 * Date: 6/10/19
 * Time: 3:17 PM
 */

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

$email_from = 'osindi@mail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                  "User Email: $email.\n".
                    "User Message: $textarea.\n";

$to  = 'bonfaceosindi@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply to: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("index.html");

?>