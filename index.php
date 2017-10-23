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

//$myArray = array("Eric", "Kirsten", "Tommy", "Ralphie");
//
//$myArray[] = "katie";
//
//print_r($myArray);
//
//echo $myArray[1];
//
//echo "<br><br>";
//
//$anotherArray[0] = "pizza";
//
//$anotherArray[1] = "yoghurt";
//
//$anotherArray[5] = "coffe";
//
//$anotherArray["MyFavouriteFood"] = "ice cream";
//
//print_r($anotherArray);
//
//echo "<br><br>";
//
//$thirdArray = array(
//	"France" => "French", 
//	"USA" => "English", 
//	"Germany" => "German");
//
//unset($thirdArray["France"]);
//
//print_r($thirdArray);
//
//echo sizeOf($thirdArray);

//$user = "eric";
//
//if ($user == "rob") {
//	echo "Hello Rob!";
//}else {
//	echo "I don't know you";
//}
//
//$age = 18;
//
//echo "<br><br>";
//
//if ($age >= 18 || $user == "rob") {
//	
//	echo "You are more than 18 years old";
//}else {
//	
//	echo "You are too young !";
//}

//$family = array("Rob", "Kirsten", "Tommy", "Ralphie");

//$numArray = ;
//echo $numArray;
//
//foreach ($family as $key => $value) {
//	
//	$family[$key] = $value." Percival";
//	echo "Array item ".$key." is ".$value."<br>";
//}
//
//
//for ($i = 0; $i < sizeOf($family); $i++) {
//	echo $family[$i]."<br>";
//}



//for ($i = 10; $i >= 0; $i--) {
//	echo $i."<br>";
//}

//	$i = 0;
//	
//	while ($i <= sizeOf($family)) {
//		
//		
//		echo $family[$i]."<br>";
//		$i++;
//			
//			
//	}

//print_r($_GET);

//
//
//if (is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0) ) {
//	$i = 2;
//	$isPrime = true;
//	
//	while ($i < $_GET['number']) {
//		
//		if ($_GET['number'] % $i ==0) {
////			Number is not prime
//			
//			$isPrime = false;
//		}
//		
//		
//		$i++;
//	}
//	
//	if ($isPrime) {
//		echo "<p>".$i."is a prime number! </p>";
//	}else {
//		echo "<p>".$i." is not prime.</p>";
//	}
//
//}else if ($_GET) {
////	User has submitted something wich is not a positive number
//	echo "<p> Please enter a positive number </p>";
//}
//print_r($_POST);
$arrayNames = ["Eric", "Aline", "Helena"];

if ($_POST) {
	$isKnown = false;
	foreach($arrayNames as $value) {
		if ($value == $_POST['name']) {
			$isKnown = true;
		}
	}
	
	if($isKnown) {
		echo "Hi there ".$_POST['name']."!";
	}else {
		echo "I dont't know you";
	}
	
}

	


?>


	<p>Hello What's your name?</p>
<form method="post">
	<input name="name" type="text">
	<input type="submit" value="Go!">
</form>