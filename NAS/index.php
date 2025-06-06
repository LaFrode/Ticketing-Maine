<?php
session_start();
$_SESSION['ticketopen'] = "";
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS.css">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
	   
    
</head>
    
<body>  
    <div id="title"> 
        <h1 id="t">JOMA</h1>
        <br>
    </div>

    <div id="ffco" > 
		<form  action="BDD.php" method="POST">
            <input class="champ"  type="ffco" placeholder="Username" name="login" required>
            <br>
            <br>
                <input class="champ" id="password" type="password" name="password" placeholder="Mot de passe" required>
                <br>
                <br>
                <input   class="btn btn-outline-primary champ" type="submit" value="Valider" >
		</form>
    </div>
  

    

</body>
</html>