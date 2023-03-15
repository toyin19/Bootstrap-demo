<?php
/*$pomme=3;

switch($pomme){
    case 1:
        echo"la pomme coute chère";
    break;
    case 2:
    echo"c'est pas mal";
    break;
    case 3:
        echo"c'est bien";


}*/


function addition($a,$b){
    return $a + $b;
}
$pomme =14;
$tomate=25;
echo"cela coute:".addition($pomme,$tomate);

?>
if(isset($_POST['login'])){
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);
    $email=htmlspecialchars($_POST['email']);

    $req=$pdo->prepare("INSERT INTO users 
SET user=?, name=?, password=?, created_at =NOW(), updated_at=NOW");
$req->execute(['$username,$password,$email']);

}

$pdo =new PDO('mysql:dbname=compte;host=localhost','root','');
// $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_OBJ);

$users =$pdo->query("SELECT * FROM users");

?>
<?php while($post= $users->fetch()): ?>


<h1><?= $post['email']  ?></h1>
<p><?= $post['username']  ?></p>
<?php endwhile;?>

<table>
  <caption>Etudiants</caption>
  <thead>
    <tr>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Sexe</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Numero</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
  	<?php 
   while($info = $getAllStudent->fetch()){
   ?>
               
     
    <tr>
      <td ><?= $info['matricule'] ?></td>
      <td ><?= $info['nom'] ?></td>
      <td ><?= $info['prenom'] ?></td>
      <td ><?= $info['sexe'] ?></td>
      <td ><?= $info['date_naissance'] ?></td>
      <td ><?= $info['numero'] ?></td>
      
      <td >
      <a href="modifierETU.php?id=<?= $info['id']?>"><div>Modifier</div></a> 
      <a href="supprimerEtu.php?id=<?= $info['id']?>"  onclick="return confirm('Voulez vous vraiment supprimer cet étudiant?');" ><div>Supprimer</div></a>

      </td>
      
     </tr>
     <?php
      }
      ?>
   
  </tbody>
</table>

