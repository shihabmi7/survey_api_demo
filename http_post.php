<?php

	$name   = $_POST['name'];
   	// $name   = urldecode($_POST['name']);
    $email  = urldecode($_POST['email']);
    $phone   = urldecode($_POST['phone']);
        

deliver_response($name ,$email ,$phone,200,"success");

function deliver_response($name ,$email ,	$phone,	$status,$status_message){

header("HTTP/1.1 $status $status_message");

$response ['name'] = $name;
$response['email'] =$email;
$response['phone'] = $phone; 

$json_response = json_encode($response);
echo $json_response;

 }

?>