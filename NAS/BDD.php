
<?php      
   /* $host = "localhost:3306";  
    $user = "root";  
    $password = '';  
    $db_name = "nas";  
        
    $con = mysqli_connect($host,$user,$password,$db_name);  


*/
	
	session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
	include('connexionbdd.php');
    echo $_POST['login'];
	if(empty($_POST['login'])) {
		//echo "Le champ login est vide.";
		//echo "<br/>";
		echo " Login";
	} 
	else {
		// on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
		if(empty($_POST['password'])) {
			//echo "Le champ Mot de passe est vide.";
			//echo "<br/>";
			echo " MDP";
		} 
		else {
			// les champs sont bien posté et pas vide, on sécurise les données entrées par le membre:
			$login = htmlentities($_POST['login'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
			$password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
			
			//on vérifie que la connexion s'effectue correctement:
			if(!$bdd){
				echo '<p style="color:red"><strong>Erreur de connexion à la base de données.</strong></p>';
				
			} 
			else {
				// on fait maintenant la requête dans la base de données pour rechercher si ces données existe et correspondent:
				$Requete = $bdd->query("SELECT * FROM users WHERE username = '".$login."' AND password = '".$password."'");
				// si il y a un résultat, mysqli_num_rows() nous donnera alors 1
				// si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
				if($Requete->rowCount() == 0) {
					echo "<p style='color:red'><strong>Le login ou le mot de passe est incorrect, ou alors le compte n'a pas été trouvé.</strong></p>";
				
				} 
				else {
					

				
          
              $Requete = $bdd->query("SELECT * FROM users WHERE username = '".$login."' AND password = '".$password."'");
              while ($donneesReq = $Requete->fetch())
              {
                  // on ouvre la session avec $_SESSION:
                  $_SESSION['login'] = $donneesReq['username'];
                  $_SESSION['perm'] = $donneesReq['permission'];
                  $_SESSION['id'] = $donneesReq['id']; 
                  $_SESSION['count_ticket'] = $donneesReq['count_ticket'];

                  
                  
              }					
              // condition redirection permission
              if ($_SESSION['perm'] == 1) {
              	header("Location: index-user.php");
              } elseif ($_SESSION['perm'] == 2){
              	header("Location: index-admin.php");
              }
              else {

              	header("Location: deco.php");
              }
              
			
			
				}
			}
		}
	}

?>



