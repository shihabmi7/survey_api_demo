<?php


// echo "My first PHP script!";

header("Content-Type:application/json");

if (!empty($_GET['name'])) {
$name = $_GET['name'];
$price = getPrice($name);

if (empty($price)) {

// echo "book not found!";
	deliver_response(200,"book not found", NULL);

}else{

// echo "book found!";

deliver_response(200,"book found", $price);

}

}else{

	deliver_response(400,"Invalid Request", NULL);
}


function getPrice($find){

 $books = array('java' => 299, 'c' => 348,'php' => 267);


foreach ($books as $book => $price) {
	
	if ($book == $find) {
		
		return $price;
		break;
	}
}

}

function deliver_response($status,$status_message,$data){

header("HTTP/1.1 $status $status_message ");

$response ['status'] = $status;
$response['status_message'] =$status_message;
$response['data'] = $data; 

$json_response = json_encode($response);
echo $json_response;
 }

?>