<?php 
require_once (__DIR__ . './connect.php');
require_once (__DIR__ . './upload.php');

//Define variables and initialize with empty values
$id = $_POST['id'];

//Select data to delete
$sql = 'SELECT * FROM `users` WHERE `id` = :id;';

//Prepare the query
$query = $db->prepare($sql);

//Bind the parameters
$query->bindParam(':id', $id, PDO::PARAM_STR);

//Execute the query
$query->execute(); 

//Get the user
$users = $query->fetch();

 //Check if the user exists
 if(!$users){
    $_SESSION['erreur'] = "Cet id n'existe pas";
    //Redirect to default page
    header('Location: index.php');
    die();
}

//Delete the file
$sql = 'DELETE FROM `users` WHERE `id` = :id;';

//Prepare the query
$query = $db->prepare($sql);

//Attach the parameters (id)
$query->bindValue(':id', $id, PDO::PARAM_INT);

//Execute the query
$query->execute();
$_SESSION['message'] = "Utilisateur supprimé";
//Redirect to default page
header('Location: index.php');
?>

