<?php

//echo $_POST["email"];


$email_error="";
$parool_error="";
//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"]=="POST"){

echo "jah";

if(empty($_POST["email"])){
$email_error = "See v�li on kohustuslik";
}


if(empty($_POST["Parool"])){
$parool_error = "See v�li on kohustuslik";
}


}
?>


<html>

<head>
<title>Login Page </title>
</head>
<body>
<div style="background-color:blue; color:white; padding:20px;">
<h2>Lehek�lg</h2>
<p> Eeny, Meeny, Miny, Mo,
Catch a nigger by his toe,
If he won't work then let him go;
Skidum, skidee, skidoo.
 </p>
</div>

<h2> Login </h2>
<form action="login.php" method="POST">
<input type="email" placeholder="E-post"><?php echo  $email_error; ?>  <br><br>
<input type="password" placeholder="Parool"><?php echo $parool_error; ?> <br><br>
<input type="submit" value="Logi sisse" > <br><br>
</form>




<h2> Create User </h2>
 <h2><a href="http://www.tlu.ee">Already a Member?</a></h2>





</body>
</html>