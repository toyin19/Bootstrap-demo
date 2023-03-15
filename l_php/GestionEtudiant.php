<?php 
	require 'listeEtu.php';
	require 'supprimerEtu.php';
  session_start();
  if (!isset($_SESSION['mail'])) {
    header("Location: login.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'require/head.php'; ?>
</head>
<body>
	<?php include 'require/nav.php'; ?>

  <div class="container text-center">
  <div class="card-header">
  <div class="row">
  <div class="col">Matricule</div>

 <div class="col">Nom</div>

  <div class="col">Prenom</div>

  <div class="col">sexe</div>

  <div class="col">date_naissance</div>

  <div class="col">Numero</div>

  <div class="col">Action </div>
  </div>
  </div>

<div class="card-body">
<?php 
   while($info = $getAllStudent->fetch()){
   ?>
<div class="row">
  <div class="col"><?= $info['matricule'] ?></div>

 <div class="col">><?= $info['nom'] ?></div>

  <div class="col"><?= $info['prenom'] ?></div>

  <div class="col"><td ><?= $info['sexe'] ?></div>

  <div class="col"><?= $info['date_naissance'] ?> </div>

  <div class="col"><?= $info['numero'] ?></div>
  
  <div class="col">
  <a href="modifierETU.php?id=<?= $info['id']?>"><div>Modifier</div></a> 
  <a href="supprimerEtu.php?id=<?= $info['id']?>"  onclick="return confirm('Voulez vous vraiment supprimer cet étudiant?');" ><div>Supprimer</div></a>

  </div>
   
  </div>
</div>
  <?php
      }
      ?>
  </div>

	

</body>
</html>
<?php require 'require/footer.php' ?>
