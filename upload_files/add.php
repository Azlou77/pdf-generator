<?php 
require_once (__DIR__ . './connect.php');
require_once (__DIR__ . './upload.php');


$name = $_POST['name'];
$email = $_POST['email'];
$files = $_POST['files'];

//Add data to the database
$sql = "INSERT INTO `users` (`name`, `email`, `files`) VALUES (:name, :email, :files)";
//Prepare the query
$query = $db->prepare($sql);
//Bind the parameters
$query->bindParam(':name', $name, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':files', $files, PDO::PARAM_STR);
//Execute the query
$query->execute(); 
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
    <body>
<!--Form to add data to the database -->
<form action="" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="files">Files</label>
        <input type="file" class="form-control" name="files" id="files">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


    </body>
</html>
