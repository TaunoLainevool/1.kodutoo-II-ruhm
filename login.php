<?php

//echo $_POST["email"];


$email_error="";
$parool_error="";
$first_name_error="";
$last_name_error="";
$user_error="";
$password_error="";
$email_error=";
//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"]=="POST"){

echo "jah";

if(empty($_POST["email"])){
$email_error = "See v�li on kohustuslik";
}


if(empty($_POST["Parool"])){
$parool_error = "See v�li on kohustuslik";
}

if(empty($_POST["first_name"])){
$first_name_error = "See v�li on kohustuslik";
}

if(empty($_POST ["last_name"])){
	$last_name_error="See v�li on kohustuslik";
	
}


}
?>


<html>

<head>
<title>Login Page </title>
</head>
<body>

<h2>Lehek�lg</h2>


<h2> Login </h2>
<form action="login.php" method="POST">
<input type="email" placeholder="E-post"><?php echo  $email_error; ?>  <br><br>
<input type="password" placeholder="Parool"><?php echo $parool_error; ?> <br><br>
<input type="submit" value="Logi sisse" > <br><br>
</form>

<h2> Create User </h2>


<input name="first_name" type="text" placeholder ="Name"><?php echo $first_name_error; ?><br><br>
<input name ="Lastname" type="text " placeholder="Lastname"><?php echo $last_name_error; ?><br><br>
<input name="User" type="text" placeholder="User"><?php echo $user_error;?><br><br>
<input name="Password" type="text" placeholder="Password"><?php echo $password_error?><br><br>
<input name="Email" type="text" placeholder="Email"><?php echo $email_error?><br><br>
<input type="submit" value="Submit"><br><br>
 Idee kirjeldus. Lisan lehele Logimis ja registeerimis vormid, peale mida lisan lehti juurde ja m�ned pildid etc.




</body>
</html>