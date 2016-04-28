<?php

$connection = mysqli_connect("localhost","root","","student") or die("could not connent to the server");

try {
	
	$id= $_POST['id'];
$id=mysqli_real_escape_string($connection, $id);


$course_name = $_POST['course_name'];
$course_name=mysqli_real_escape_string($connection, $course_name);

$hour = $_POST['hour'] ;
$hour=mysqli_real_escape_string($connection, $hour);


if (isset($id) && 
	isset($course_name)
	 &&  isset($hour) ) {
	
	echo "True";

// Check connection
 if (mysqli_connect_errno())
  {

  echo "\n Failed to connect to Database" . mysqli_connect_errno();

  }

 else{

		echo "\n connected with Database\n" ;


$sql =  "INSERT INTO course (course_id, course_name, course_hour)
VALUES ('$id' , '$course_name', '$hour')";


	// $sql = 'INSERT INTO `course` (`course_id`, `course_name`, `course_hour`) VALUES ('101', 'Data Mining', '100')';

		// $retval = mysql_query( $sql, $connection );

		$retval = mysqli_query($connection, $sql);

		if ($retval) {

      
      echo "Data saved successfully.." ;


		}else {

			die('Could not enter data: ' . mysqli_connect_error());

		}

  }

}else{
	echo "false";
}

} catch (Exception $e) {
	
}









// mysqli_select_db("student",$connection) or die("could not connent to the server");;



?>
