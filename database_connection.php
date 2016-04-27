<?php

$connection = mysqli_connect("localhost","root","","student") or die("could not connent to the server");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{

echo "connect to DB";

  }


// mysqli_select_db("student",$connection) or die("could not connent to the server");;

if ($_POST['login']) {
	
	echo "True";
}


?>

<div>

<form action="submit">

<input name="id" type="text"  placeholder="type your id">
</br>

<input name="name" type="text"  placeholder="type your  name">
</br>

<input name="password" type="password"  placeholder="type your password">
</br>

<button name="login"type="submit">Submit</button>

</form>

</div>