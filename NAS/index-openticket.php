<?php
session_start();


// deco si admin va sur page user
if ($_SESSION['perm']!= 1) {
    header("Location: deco.php");

}



//pour log
    //$maj = $bdd->exec("INSERT INTO historique (date,commentaire) VALUES ('".$date."','Ajout chouquette Enzo') ");
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link rel="stylesheet" href="CSS-openticket.css">
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




    <div id="formulaire">
       
    <form method="POST" action="S-openticket.php" action="index-openticket.php">
        <div class="center-container">
            <div class="form-container">

                <h3><?php if (isset($_SESSION['ticketopen'])) {echo ($_SESSION['ticketopen']);} ?></h3>
                <h3>Votre ID: <?php echo ($_SESSION['id']); ?></h3>
                <h3>Nom: <?php echo ($_SESSION['login']); ?></h3>

                <input type="text" class="champ" name="titre" placeholder="Titre du ticket" required>
                <textarea class="champ" name="description" placeholder="Description du ticket" required></textarea>

                <label>Obervateur :</label>

                <select name="observateur" id="obs-select">
                  <option value="test"><?php echo "" ?></option>
                </select>

                <br>
                <br>

                <label>Priorité :</label>

                <select name="priorite" id="prio-select" >
                  <option value="bas"><?php echo "Bas" ?></option>
                  <option value="moyen"><?php echo "Moyen" ?></option>
                  <option value="haut"><?php echo "Haut" ?></option>
                </select>

                <br>
                <br>

                <input    class="btn  btn-outline-primary champ" type="submit" value="Ouvrir" >
            </div>
        </div>
    </form>
    <footer>
        <p>&copy; 2025 JOMA. Tous droits réservés.</p>
        <p>Site de Ticketing par Joris COUTELIER et Matthieu BENITO.</p>
    </footer>
</body>
</html>