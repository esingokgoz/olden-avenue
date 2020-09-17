<?php
$errors = '';
$subject = "Olden Avenue Project Comment Form";
$to = 'eegokgoz@mccormicktaylor.com';

if(empty($_POST['comment'])  || empty($_POST['email']))
{
    $errors = "\n Error: all denoted fields are required";
}
if (isset($_POST["submit"])){

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$from = $_POST['email'];
$comment = $_POST['comment'];
$affiliation = $_POST['affiliation']
$headers = "From: ".$from;

$body = "Name: ".$_POST['name'].
        " \r\n Lastname: ".$_POST['lastname'].
        "\r\n Email: ".$_POST['email'].
        "\r\n Affiliation: ".$_POST['affiliation'].
        "\r\n Comment: ".$_POST['comment'].
    }
if( empty($errors)){
    mail($to, $subject, $body, $headers);
    header("Location: success.html");
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html lang="en">
<head>
<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

</body>
</html>

