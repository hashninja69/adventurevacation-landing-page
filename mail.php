<?php 

//print_r($_REQUEST);

if(isset($_REQUEST['contact_submit'])){

 $maillayout=" <b> Booking Detail From Website</b> <br />
 Name :  ".$_REQUEST['name']."  <br />
 E-Mail :  ".$_REQUEST['email']."  <br />
 Mobile No. :  ".$_REQUEST['phone']."  <br />
 City :  ".$_REQUEST['city']."  <br />
 Destination : ".$_REQUEST['destination']."
   ";

$to="info@adventurevacation.co.in";

$subject = "".$_REQUEST['name']." Fill Booking Form On Website";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:     My India Vacations
<info@adventurevacation.co.in>' . "\r\n";

$mail = mail($to,$subject,$maillayout,$headers);




if($mail){
    
    
    $maillayout1=" Dear ".$_REQUEST['name'].", Thanks for sending your query. One of our representatives will soon be in touch with you for further details and proceedings.<br />
    Thanks and Regards <br />
    My India Vacations
    ";
    
    $to1 = "".$_REQUEST['email']."";
    $subject1 = "Thank You ".$_REQUEST['name']."";
    
    
    $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:    My India Vacations
<info@adventurevacation.co.in>' . "\r\n";

$mail1 = mail($to1,$subject1,$maillayout1,$headers);
    
    
    
 
  header('location:thanks.html');
}
 
   

} 

?>