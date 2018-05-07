<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    
    <body> 

        <?php
       
        $username = $password= "";
        $usernameErr = $passwordErr = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
        $usernameErr = "Userame is required";
            }
            else {
        $username = test_input($_POST["username"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z]+\s+[a-zA-Z]+$/",$username)) {
        $usernameErr = "Must contain a first and last name"; 
        }
        if(empty($_POST["password"])) {
            $passwordErr = "Password is required";
        }         
            else {
    $password = test_input($_POST["password"]);
    // check if e-mail address is well-formed
    if (!preg_match('@[0-9]@', $password) {
      $emailErr = "Password must be at least 8 characters"; 
    }  
}
        
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

    </body>
</html>
