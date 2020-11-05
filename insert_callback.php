<?php  
ini_set('display_errors', 'off');

include 'dbconn.php';

 
        $name = str_replace("'", "\'", $_POST['first_name'])." ".str_replace("'", "\'", $_POST['last_name']);
        $email = str_replace("'", "\'", $_POST['form_email']);
        $phone = str_replace("'", "\'", $_POST['mobile_number']);
        $c_name = str_replace("'", "\'", $_POST['interested']);
        $txtmessage = str_replace("'", "\'", $_POST['txtmessage']);
             
                $sql = "INSERT INTO `callback` (`name`, `email`, `phone`, `interest`, `txtmessage`) VALUES ('".$name."', '".$email."', '".$phone."', '".$c_name."', '".$txtmessage."')";  
                $done = mysqli_query($conn, $sql);  
            
      if($done==true){
          
     include 'erp/smsconfig.php';
     
//Your message to send, Add URL encoding here.
$message = "Thanks for contacting WebInGo. One of our experts will get back to you shortly. Have a good day (:";

//Define route 
$route = "2";
$unicode = "2";
//Prepare you post parameters
$postData = array(
    'authentic-key' => $authKey,
    'number' => $phone,
    'message' => $message,
    'senderid' => $senderId,
    'unicode' => $unicode,
    'route' => $route
);

//API URL
$url="http://smspanel.webingo.in/http-tokenkeyapi.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);
          
          // Subject
    $subject = 'New Claaback Query';
//  $to="pritammahapatra2050@gmail.com";  
$to="subham@webingo.in, info@webingo.in";

    // Message
    $message = 'Name: '.$name.'<br>Email: '.$email.'<br>Phone Number: '.$phone.'<br> Message: '.$txtmessage.' <br><br><b>Thanks & Regards <br> WEBINGO</b>';

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