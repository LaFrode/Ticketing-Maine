<?php
session_start();
$_SESSION['ticketopen'] = "";

// deco si admin va sur page user
if ($_SESSION['perm']!= 1) {
    header("Location: deco.php");



    $requete = SELECT *, COUNT

}



//pour log
    //$maj = $bdd->exec("INSERT INTO historique (date,commentaire) VALUES ('".$date."','Ajout chouquette Quentin') ");
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link rel="stylesheet" href="CSS-USER.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
      
</head>
<body>
    <header>
        <h1>Projet Ticketing</h1>
        <h3>Utilisateur</h3>
   


        <style>
            .dashboard {
              background-color: #ffffff;
              padding: 40px 60px;
              border-radius: 8px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
              text-align: center;
            }

            .title {
              font-size: 20px;
              color: #333;
              margin-bottom: 10px;
            }

            .counter {
              font-size: 48px;
              font-weight: bold;
              color: #007bff;
            }
        </style>
    </head>
<body>
  <div class="dashboard">
    <div class="title">Nombre de tickets ouverts</div>
    <div class="counter"><?php $_POST['NombreTO'] ?></div>
  </div>






    
    <div class="sidenav">
      <a href="index-user.php" >Accueil</a>
      <a href="index-myticket.php"> Mes Tickets</a>
      <a href="index-openticket.php"> Ouvrir un Ticket</a>
      <a href="deco.php" style='color:red'>Déconnexion</a>
    </div>

    <footer>
        <p>&copy; 2025 JOMA. Tous droits réservés.</p>
        <p>Site de Ticketing par Joris COUTELIER et Matthieu BENITO.</p>
    </footer>
</body>
</html>