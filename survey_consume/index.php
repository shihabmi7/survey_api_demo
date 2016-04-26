<!DOCTYPE html>
<html>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js">
</script>

<head>
	<title>Online Library</title>
</head>

<body ng-app="myApp" ng-controller="myCtrl">
<h1>Welcome to My Library</h1>

<?php


if (!empty($_GET['name']) ){

$name = $_GET['name'];
//$name = $_POST['name'];

$url ="http://localhost/survey/$name";

$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);

$response= curl_exec($client);

$result = json_decode($response);

//echo $result->data;

}

?>

<div>
<form action="submit">

<input name="name" type="text"  placeholder="type your book name">
<button type="submit">Submit</button>

<h1>Result :  <?php  echo $result->data ?> </h1>

</form>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
   

$scope.button_click = function(){

alert($scope.book_name);

};

});
</script>

</body>


</html>

