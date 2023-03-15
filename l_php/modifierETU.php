<?php 
  require 'listeEtu.php';
	require 'modifEtuAction.php';
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


	<form action="" id="survey-form" method="POST">
        <h2>Modifier les données de <?=$nom ?>  <?=$prenom ?> </h2>
    <?php 
    if (isset($error)) {      
     ?>
     <div style="color: white;, text-align: center; background-color: red ; padding: 15px;"> <?=$error ?></div>

     <?php 
    }
      ?>

      <?php 
    if (isset($success)) {      
     ?>
     <div style="color: white;, text-align: center; background-color: green ; padding: 15px;"> <?=$success ?></div>

     <?php 
    }
      ?>
      <label for="mat" id="name-label">Matricule</label>
      <input type="text" name="mat" id="mat" placeholder="Votre Matricule" value="<?=$mat ?>">

      <label for="nom" id="email-label">Nom</label>
      <input type="text" name="nom" id="nom" placeholder="Votre nom" value="<?=$nom ?>">

       <label for="prenom" id="email-label">Prénom</label>
      <input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" value="<?=$prenom ?>">

       <label for="sexe" id="email-label">Sexe</label>
      <select name="sexe" id="sexe">
        <option value="Masculin">Masculin</option>
        <option value="Féminin">Féminin</option>
        
      </select>

       <label for="date" id="email-label">Date de naissance</label>
      <input type="date" name="date" id="date" placeholder="Votre date de naissance" >

         <label for="num" id="email-label">Téléphone</label>
      <input type="number" name="num" id="num" placeholder="Votre numéro de telephone" value="<?=$numero ?>">

      <button id="submit" name="validate" class="btn-submit" type="submit">Modifier</button>
    </form>


</body>
</html>