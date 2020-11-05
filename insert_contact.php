<?php  
ini_set('display_errors', 'off');

include 'dbconn.php';

 
        $name = str_replace("'", "\'", $_POST['txtname']);
        $email = str_replace("'", "\'", $_POST['txtemail']);
        $phone = str_replace("'", "\'", $_POST['txtphone']);
        $c_name = str_replace("'", "\'", $_POST['c_name']);
        $txtmessage = str_replace("'", "\'", $_POST['txtmessage']);
             
                $sql = "INSERT INTO queries (name, email, phone, c_name, txtmessage) VALUES ('".$name."', '".$email."', '".$phone."', '".$c_name."', '".$txtmessage."')";  
                $done = mysqli_query($conn, $sql);  
            
      if($done){
          
          // Subject
    $subject = 'We got a new Lead';
    
$to="subham@webingo.in, info@webingo.in";

    // Message
    $message = '<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<table><tr><td>Name:</td> <td>'.$name.'</td></tr><tr> <td>Email: </td> <td>'.$email.'</td></tr><tr> <td>Phone Number:</td> <td> '.$phone.'</td> </tr><tr> <td colspan="2"> '.$txtmessage.' </td></tr></table><br><br><b>Thanks & Regards <br> WEBINGO</b>
</body>
</html>';

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // Additional headers
    $headers[] = 'From: WEBINGO ADMIN <rishav@webingo.in>';
    // Mail it
    $mail = mail($to, $subject, $message, implode("\r\n", $headers));
    
       
                }
 ?>