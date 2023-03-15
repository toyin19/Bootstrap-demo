<?php
session_start();
include 'db.php';
$bdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST['login'])) {
	if (!empty($_POST['nom_prenom']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['password_confirmed']) ) {

		$nom_prenom = htmlspecialchars($_POST['nom_prenom']);
		$email = htmlspecialchars($_POST['email']);
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$password_confirmed = password_hash($_POST['password_confirmed'], PASSWORD_DEFAULT);
		$date = date('d/m/Y');

		if ($_POST['password'] == $_POST['password_confirmed']) {
			$checkIfUserAlreadyExists = $bdo->prepare('SELECT email FROM users WHERE email = ?');
	        $checkIfUserAlreadyExists->execute(array($email));

	        if($checkIfUserAlreadyExists->rowCount() == 0){
	            
	            //Insérer l'utilisateur dans la bdd
	            $insertUserOnWebsite = $bdo->prepare('INSERT INTO users(nom_prenom, email, password_hash, date_inscription)VALUES(?, ?, ?, ?)');
	            $insertUserOnWebsite->execute(array($nom_prenom, $email, $password, $date));

					            //Rediriger l'utilisateur vers la page d'accueil
								header('Location: accueil.php');

	            // //Récupérer les informations de l'utilisateur
	            // $getInfosOfThisUserReq = $bdo->prepare('SELECT id, nom_prenom, email FROM users WHERE nom_prenom = ? AND email = ? ');
	            // $getInfosOfThisUserReq->execute(array($nom_prenom, $email));

	            // $usersInfos = $getInfosOfThisUserReq->fetch();



	            // //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
	            // $_SESSION['auth'] = true;
	            // $_SESSION['id'] = $usersInfos['id'];
	            // $_SESSION['nom_prenom'] = $usersInfos['nom_prenom'];
	            // $_SESSION['email'] = $usersInfos['email'];

	             

       				//  die("inscription terminé <a  href='login.php'>connectez vous</a>");
				  
             
	        }else {
	            $error = "L'utilisateur existe déjà sur le site";
	        }
		}else {
			$error = "Vos mots de passe ne sont identiques";
		}

	}else {
		$error = "Veuillez remplir tous les champs";
	}
}
// if(isset($error)){
// 	echo $error;
// }

?>



