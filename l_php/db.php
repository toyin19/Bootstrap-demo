<?php
try{
    $bdo = new PDO('mysql:host=localhost;dbname=compte;charset=utf8;', 'root', '');
    $bdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}

//     $bdd = new PDO('mysql:host=localhost;dbname=compte;charset=utf8;', 'root', '');
//     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(Exception $e){
//     die('Une erreur a été trouvée : ' . $e->getMessage());
// }

// $host ="localhost";
// $dbname ="compte";
// $username ="root";
// $password ="";

// $mysqli =new mysqli($host,$username,$password,$dbname);
// if($mysqli->connect_errno){
//     die("connection error:". $mysqli);

// }
// return $mysqli;






