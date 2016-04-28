<?php

echo "<h1> PHP class : OOP sample</h1>";
class Course {
      /* Member variables */
      private  $id;
      private  $name;
      private $hour;
      
      /* Member functions */

       function setId($par){
         $this->id = $par;
      }
      
      function getId(){
         return $this->id;
      }
      

      function setHour($par){
         $this->hour = $par;
      }
      
      function getHour(){
         return $this->hour;
      }
      
      function setName($par){
         $this->name = $par;
      }
      
      function getName(){
         echo $this->name  ;
      }
   }

$course = new Course;
$course->setName("Java");

echo  "".$course->getName("Java");


?>