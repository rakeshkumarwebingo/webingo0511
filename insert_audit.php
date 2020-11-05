<?php  
ini_set('display_errors', 'off');

include 'dbconn.php';

 
        $name = str_replace("'", "\'", $_POST['txtname']);
        $email = str_replace("'", "\'", $_POST['txtemail']);
        $phone = str_replace("'", "\'", $_POST['txtphone']);
        $c_name = str_replace("'", "\'", $_POST['keyword']);
             
                $sql = "INSERT INTO queries (`site`, `comp_site`, `email`, `keyword`) VALUES ('".$name."', '".$phone."', '".$email."', '".$c_name."')";  
                $done = mysqli_query($conn, $sql);  
            
      if($done){
          
          // Subject
    $subject = 'New Audit Request';
    
$to="subham@webingo.in, info@webingo.in";

    // Message
    $message = 'Domain Name: '.$name.'<br>Email: '.$email.'<br>Keyword: '.$c_name.' <br><br><b>Thanks & Regards <br> WEBINGO</b>';

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // Additional headers
    $headers[] = 'From: WEBINGO ADMIN <rishav@webingo.in>';
    // Mail it
    $mail = mail($to, $subject, $message, implode("\r\n", $headers));
    
        if ($mail) {
        $messegealert = "THANK YOU FOR SHOWING YOUR INTEREST. WE WILL CONTACT YOU SOON, STAY CONNECTED...";
      include("contact.php");
      echo "<meta http-equiv='refresh' content='1;url=contact.php'>";
      exit; 
                    }
                }
 ?>