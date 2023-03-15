<?php

require('db.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfStudent = $_GET['id'];

    $checkIfQuestionExists = $bdo->prepare('SELECT * FROM etudiants WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfStudent));

    if($checkIfQuestionExists->rowCount() > 0){


        $delete = $bdo->prepare('DELETE FROM etudiants WHERE id = ?');
        $delete->execute(array($idOfStudent));

        header('Location:GestionEtudiant.php');



    }else{
        $error = "Aucune question n'a été trouvée";
    }

}else{
    $error = "Aucune question n'a été trouvée";
}