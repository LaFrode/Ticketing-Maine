<?php
session_start();
$_SESSION['ticketopen'] = "";

// deco si admin va sur page user
if ($_SESSION['perm']!= 1) {
    header("Location: deco.php");

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
    <link rel="stylesheet" href="CSS-MYTICKET.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
      
</head>
<body>
    <header>
        <h1>Projet Ticketing</h1>
        <h3>Utilisateur</h3>
    </header>
    
    <div class="sidenav">
      <a href="index-user.php" >Accueil</a>
      <a href="index-myticket.php"> Mes Tickets</a>
      <a href="index-openticket.php"> Ouvrir un Ticket</a>
      <a href="deco.php" style='color:red'>Déconnexion</a>
    </div>

    <tbody>
    <table>
         <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Priorité</th>
            <th>Demandeur</th>
            <th>Observateur</th>
            <th>Attribution</th>
        </tr>
    </thead>
        
    </table>
</tbody>


    <footer>
        <p>&copy; 2025 JOMA. Tous droits réservés.</p>
        <p>Site de Ticketing par Joris COUTELIER et Matthieu BENITO.</p>
    </footer>
</body>
</html>