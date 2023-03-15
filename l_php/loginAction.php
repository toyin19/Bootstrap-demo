<?php
session_start();
require('db.php');

//Validation du formulaire
if(isset($_POST['login'])){

    //Vérifier si le user a bien complété tous les champs
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $user_pseudo = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);

        //Vérifier si l'utilisateur existe (si l'email est correct)
        $checkIfUserExists = $bdo->prepare('SELECT * FROM users WHERE email = ?');
        $checkIfUserExists->execute(array($user_pseudo));

        if($checkIfUserExists->rowCount() > 0){
            
            //Récupérer les données de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();

            //Vérifier si le mot de passe est correct
            if(password_verify($user_password, $usersInfos['password_hash'])){
                $_SESSION['mail']=$_POST['email'];
            
                // //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
                // $_SESSION['auth'] = true;
                // $_SESSION['id'] = $usersInfos['id'];
                // $_SESSION['nom_prenom'] = $usersInfos['nom_prenom'];
                // $_SESSION['email'] = $usersInfos['email'];

                //Rediriger l'utilisateur vers la page d'accueil
                header('Location:accueil.php');
    
            }else{
                $error = "Votre mot de passe est incorrect...";
            }

        }else{
            $error = "Votre email est incorrect...";
        }

    }else{
        $error = "Veuillez compléter tous les champs...";
    }

}
