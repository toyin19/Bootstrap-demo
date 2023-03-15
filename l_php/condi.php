<?php
//condition if, Elseif, else


/*$age=12;
if($age<18){
    echo "tu es trop jeune ";
}else{
    echo"tu es majeure";
}*/

/*$bool =true;
if($bool!=1){
    echo"vrai";

}else{
    echo"faux";
}*/
 //die('bienvenu');
if(isset($_POST['submit']))
{
    $err =[];
    if(empty($_POST['username'])){
        $err['name_vide']="le champ nom est vide";
    }
    if(strlen($_POST['username'])>16){
        $err['name_str']="le  nom est trop longue";

    }
    if(isset($_POST['email']) AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $err['email_validate']="l'email est incorrect";
    }

   
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>tester condition</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body>
    <?php if(!empty($err)): ?>

        <div class="alert alert-danger" role="alert">
           <ul>
            <?php foreach($err as $error):?>
                <li><?= $error;?></li>
                <?php endforeach;?>
           </ul>
        </div>

        <?php endif; ?>



    <h1>test</h1>
    <form action="" method="post">
        <div>
            <label for=""> Username</label>
            <input type="text" name="username" value=" <?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" class="form-control"  />
        </div>

        <div>
            <label for=""> Email</label>
            <input type="test" name="email" value=" <?php if(isset($_POST['username'])){echo $_POST['username'];}?> "class="form-control"  />
        </div>

        <button type="Submit"  name= "submit" class="btn btn-primary">Sign up</button>


    </form>


</body>

</html>


<?php while($post= $posts->fetch()): ?>

<h1><?= $post['name']  ?></h1>
<p><?= $post['name']  ?></p>
<?php endwhile;?>

//inserer des donnees dans la basede donnée

$req=$pdo->prepare("INSERT INTO users 
SET user=?, name=?, password=?, created_at =NOW(), updated_at=NOW");
$req->execute(["","",""]);

//mettre à jour les donnée
if(isset($_GET['id'])){
    $id=htmlspecialchars($_GET['id']);
    
}



//supprimer les données
<?php

require('database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfStudent = $_GET['id'];

    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM etudiant WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfStudent));

    if($checkIfQuestionExists->rowCount() > 0){


        $delete = $bdd->prepare('DELETE FROM etudiant WHERE id = ?');
        $delete->execute(array($idOfStudent));

        header('Location: ../gestion_etudiant.php');



    }else{
        $error = "Aucune question n'a été trouvée";
    }


}
?>







//avoir liste des utilisateur

<?php 
	require('database.php');


	$getAllStudent = $bdd->query('SELECT * FROM etudiant');


 ?>



//afficher les articles

$post=$pdo->query("SELECT * FROM users ORDER BY updated_at DESC");
