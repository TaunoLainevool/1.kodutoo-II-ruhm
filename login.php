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

<h2>Lehek�lg</h2>


<h2> Login </h2>
<form action="login.php" method="POST">
<input type="email" placeholder="E-post"><?php echo  $email_error; ?>  <br><br>
<input type="password" placeholder="Parool"><?php echo $parool_error; ?> <br><br>
<input type="submit" value="Logi sisse" > <br><br>
</form>
 

<?php
    // *********************
    // **** LOGI SISSE *****
    // *********************
		if(isset($_POST["login"])){

			if ( empty($_POST["email"]) ) {
				$email_error = "See v�li on kohustuslik";
			}else{
        // puhastame muutuja v�imalikest �leliigsetest s�mbolitest
				$email = cleanInput($_POST["email"]);
			}

			if ( empty($_POST["password"]) ) {
				$password_error = "See v�li on kohustuslik";
			}else{
				$password = cleanInput($_POST["password"]);
			}

      // Kui oleme siia j�udnud, v�ime kasutaja sisse logida
			if($password_error == "" && $email_error == ""){
				echo "V�ib sisse logida! Kasutajanimi on ".$email." ja parool on ".$password;
			}
			$password_hash=hash("sha512",$password);
			$stmt-> prerpare ("select id, email, from user_sample where email=? and password=?")
			$stmt -> bind_param("ss",$email,$password_hash);
			//paneme vastuse muutujasse
			$stmt->bind_result($id_from_db, $emial_from_db);
			$stmt -> execute();
			if ($stmt -> fetch()){
				//leidis
				echo "kasutaja id=". $id_from_db;
			}else{
				//t�hi, ei leidnud, midagi on valesti
				echo"wrong password or email";
			}
		} // login if end
?>


<h2> Create User </h2>
 
<input text="Name" placeholder ="Name">
<input text ="Lastname" placeholder="Lastname"><br><br>
<input text="User" placeholder="User"><br><br>
<input text="Password" placeholder="Password"><br><br>
<input text="Email" placeholder="Email"><br><br>
<input text="submit" value="Submit"><br><br>
 Idee kirjeldus. Lisan lehele Logimis ja registeerimis vormid, peale mida lisan lehti juurde ja m�ned pildid etc.


</body>
</html>