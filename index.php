<?php

//$name = "Eric";
//
//echo "<p>My name is $name</p>";
//
//$string1 = "<p>This is the first part";
//$string2 = " of a sentence</p>";
//
//echo $string1.$string2;
//
//$myNumber = 45;
//
//$calculation = $myNumber *31 / 97 +4;
//
//echo "<p>The result of the calculation is " .$calculation;
//
//$myBool = true;
//
//echo "<p> This Statement is true ?" .$myBool."</p>";
//
//$variableName = "name";
//
//echo $$variableName;

$myArray = array("Eric", "Kirsten", "Tommy", "Ralphie");

$myArray[] = "katie";

print_r($myArray);

echo $myArray[1];

echo "<br><br>";

$anotherArray[0] = "pizza";

$anotherArray[1] = "yoghurt";

$anotherArray[5] = "coffe";

$anotherArray["MyFavouriteFood"] = "ice cream";

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array(
	"France" => "French", 
	"USA" => "English", 
	"Germany" => "German");

unset($thirdArray["France"]);

print_r($thirdArray);

echo sizeOf($thirdArray);


?>