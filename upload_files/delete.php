<?php 
require_once (__DIR__ . './connect.php');
require_once (__DIR__ . './upload.php');

$id = $_POST['id'];

//Select data to delete
$sql = 'SELECT * FROM `users` WHERE `id` = :id;';
//Prepare the query
$query = $db->prepare($sql);
//Bind the parameters
$query->bindParam(':id', $id, PDO::PARAM_STR);
//Execute the query
$query->execute(); 

//On récupère l'utilisateur
$users = $query->fetch();
 // On vérifie si l'utilisateur existe
 if(!$users){
    $_SESSION['erreur'] = "Cet id n'existe pas";
    header('Location: index.php');
    die();
}
// On supprime le fichier
$sql = 'DELETE FROM `users` WHERE `id` = :id;';
// On prépare la requête
$query = $db->prepare($sql);
// On "accroche" les paramètre (id)
$query->bindValue(':id', $id, PDO::PARAM_INT);

// On exécute la requête
$query->execute();
$_SESSION['message'] = "Utilisateur supprimé";
header('Location: index.php');


?>

