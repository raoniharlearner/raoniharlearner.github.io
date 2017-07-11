<?php

if($_POST)
{

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
{	
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail("raonihar1997@gmail.com",$subject,$message);
echo"Successfully Sent!";
}
else
{

echo "all fields are necessary";

}
}


?>
