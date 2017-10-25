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
//$arrayNames = ["Eric", "Aline", "Helena"];
//
//if ($_POST) {
//	$isKnown = false;
//	foreach($arrayNames as $value) {
//		if ($value == $_POST['name']) {
//			$isKnown = true;
//		}
//	}
//	
//	if($isKnown) {
//		echo "Hi there ".$_POST['name']."!";
//	}else {
//		echo "I dont't know you";
//	}
//	
//}

//$emailTo = "dericsp@gmail.com";
//
//$subject = "I hope this works!";
//
//$body = "I think you're great!";
//
//$headers = "from: dericsp@gmail.com";
//
//if (mail($emailTo, $subject, $body, $headers)) {
//	echo "The email was sent sucessfuly";
//}else {
//	echo "The email could not be sent";
//	
//}
//	$error = "";
//	$sucessMessage = "";
//
//    if ($_POST) {
//	
//	   if(!$_POST["email"]) {
//		$error .= "An email address is requeired<br>";
//	   }
//	
//	   if(!$_POST["content"]) {
//		$error .= "A content is requeired<br>";
//	   }
//	
//	   if(!$_POST["subject"]) {
//		$error .= "A subject  is requeired<br>";
//	   }
//	
//	
//        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
//	
//		$error .= "The email address is invalid<br>";
//        }
//    
//	   if ($error != "") {
//		  $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form</strong></p>'.$error.' </div>';
//	   } else {
//		
//		$emailTo = "dericsp@gmail.com";
//		
//		$subject = $_POST['subject'];
//		
//		$content = $_POST['content'];
//		
//		$headers = "from ".$_POST['email'];
//			
//			if (mail($emailTo, $subject, $content, $headers)) {
//	
//				$sucessMessage = '<div class="alert alert-success" role="alert"><p><strong>Your message was sent.</strong></p>';
//            }else {
//                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later.</strong></p>';	
//            }
//       }
//    }

include("included.php");

//echo file_get_contents("https://www.bubalao.com.br");

?>

	<!--
	<!DOCTYPE html>
	<html lang="en">

	<head>
-->
	<!-- Required meta tags -->
	<!--
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
-->

	<!-- Bootstrap CSS -->
	<!--
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			<h1>Get in Touch!</h1>

			<div id="error">
				<? echo $error.$sucessMessage; ?>
			</div>

			<form method="post">
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Your email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" id="subject" name="subject">
				</div>
				<div class="form-group">
					<label for="exampleTextarea">What you like to ask us?</label>
					<textarea class="form-control" id="content" name="content" rows="3"></textarea>
				</div>
				<button type="submit"  id="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
-->




	<!-- jQuery first, then Tether, then Bootstrap JS. -->
	<!--
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$("form").submit(function(e) {

				var error = "";

				if ($("#email").val() == "") {
					error += "The email field is required<br>";
				}

				if ($("#subject").val() == "") {
					error += "The subject field is required<br>";
				}

//				$("#error").html(error);

				if ($("#content").val() == "") {
					error += "The content field is required";
				}

				if (error != "") {

					$("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form</strong></p>' + error + ' </div>');
                    
                    return false;

				} else {
					return true;
				}
			});

		</script>
	</body>

	</html>
-->

<?php 
	if ($_GET['city']) {
		$forecastPage = file_get_contents("http://www.weather-forecast.com/locations/London/forecasts/latest");
		
		$pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
		
		$secondPageArray = explode('</span></span></span>', $pageArray[1]);
		echo $secondPageArray[0];
	}
?>
	<!doctype html>
	<html lang="en">

	<head>
		<title>Weather Scraper</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>

	<body>

		<style type="text/css">
			html {
				background: url(background.jpeg) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}

			body {
				background: none;
			}

			.container {
				text-align: center;
				margin-top: 200px;
				width: 450px;
			}
			
			input {
				margin: 20px 0;
			}

		</style>
		<div class="container">
			<h1>What's the Weather ?</h1>
			

			<form >
				<div class="form-group">
					<label for="city">Enter the name of a city.</label>
					<input type="text" class="form-control" id="city" name="city" placeholder="Ex. London, Tokyo">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>

	</html>
