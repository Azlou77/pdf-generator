<?php 
require_once (__DIR__ . './connect.php');
require_once (__DIR__ . './upload.php');

//Define variables and initialize with empty values
$name = $_POST['name'];
$email = $_POST['email'];
$files = $_POST['files'];

//Select data to update
$sql = 'UPDATE `users` SET    `name` = :name `email` = :email `files` = :files WHERE `id`=:id;';

//Prepare the query
$query = $db->prepare($sql);

//Bind the parameters
$query->bindParam(':id', $id, PDO::PARAM_STR);
$query->bindParam(':name', $name, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':files', $files, PDO::PARAM_STR);

//Execute the query
$query->execute();
$_SESSION['message'] = "Utilisateur modifié";

//Redirect to default page
header('Location: index.php');
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Modifier un produit</h1>
    <!--Form update users-->
    <form action="" method="post">
        <!-- Name field -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $users['name']?> ">
        </div>
        <!-- Email field-->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email"  value="<?= $users['name']?>">
        </div>
        <!-- Files field-->
        <div class="form-group">
            <label for="files">Files</label>
            <input type="file" class="form-control" name="files" id="files" value="<?= $users['files']?>">
            
        <!-- Button submit -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>



