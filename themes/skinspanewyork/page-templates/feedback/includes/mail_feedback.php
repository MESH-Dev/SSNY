<?php

$score = mysql_escape_string($_POST['score']);
$location = mysql_escape_string($_POST['location']);
$treatment = mysql_escape_string($_POST['treatment']);
$technician = mysql_escape_string($_POST['technician']);
$date = mysql_escape_string($_POST['date']);
$review = mysql_escape_string($_POST['review']);
$email = mysql_escape_string($_POST['email']);

$body = "Feedback Form Submission: \n\r
------------------------- \n\r
Location: $location  \n\r
Treatment: $treatment  \n\r
Technician: $technician \n\r
Treatment Date: $date  \n\r
Review: $review \n\r
Email: $email
";


mail('services@altumdesign.com',"Feedback - $score Stars", $body);

?>