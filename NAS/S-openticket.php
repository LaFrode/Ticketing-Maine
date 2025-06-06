<?php
// initialise la variable ticketopen a rien mdr
session_start();
$_SESSION['ticketopen'] = "";

// test si les variable récupere bien les valeur de $_POST
echo $_POST['titre'];
echo $_POST['description'];
echo $_POST['priorite'];

include('connexionbdd.php');
    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-d H:i:s');
// juste pour recup lheure dans une variable et ensuite la mettre dans la base de donner

//crée un ticket, si ticket crée, alors echo validé

try {
    $maj = $bdd->exec("INSERT INTO ticket (titre, description, id, demandeur, priorite,attribution, observateur, date, uid) VALUES ('".$_POST['titre']."', '".$_POST['description']."', NULL, '".$_SESSION['login']."', '".$_POST['priorite']."', '', '', '$date','".$_SESSION['id']."')");
    $_SESSION['ticketopen'] = "Merci d'avoir ouvert un ticket";
    header('location: index-openticket.php');
}   catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
    
}

// if (isset($_SESSION['ticketopen'])) {echo ($_SESSION['ticketopen'])};
// if ($_SESSION['ticketopen'] == "Merci d'avoir ouvert un ticket") {echo ($_SESSION['ticketopen'])};


echo "Votre ticket à bien été envoyé au service informatique.";
//$_SESSION['count_ticket'] = $_SESSION['count_ticket'] + 1;
//$maj = $bdd->exec("UPDATE users SET count_ticket = '".intval($count_ticket)."' WHERE username LIKE '$_SESSION['login']'")





?>