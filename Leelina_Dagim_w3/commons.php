<?php
include("Emoji.html");
?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z]+\s+[a-zA-Z]+$/",$name)) {
       $nameErr = "Must enter first and last name";
     }
   }

        
        
$usernameErr = $password = "";
$username = $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["username"])) {
     $usernameErr = "Userame is required";
   } else {
     $username = test_input($_POST["username"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z]+\s+[a-zA-Z]+$/",$username)) {
       $usernameErr = "Must contain a first and last name"; 
     }
   }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>