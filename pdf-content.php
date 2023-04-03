<?php
//Connnexion to the database
require_once 'includes/connect.php';

//SQL requests
$sql = "SELECT * FROM users where username = 'admin' and password = 'admin' ";
$requete= $db -> query($sql);
$users = $requete -> fetchAll(PDO::FETCH_ASSOC); 


include 'includes/header.php';
include 'includes/footer.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PDF Content</title>

<!-- Bootstraps assets -->
<!-- Bootstraps styles -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- Bootstraps scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</head>
<body>
    <!--Tab users  -->
    <h1>Liste des utilisateurs</h1>
    <table>
        <thead>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
        </thead>
        <tbody>
            <!-- Loop through the users -->
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>     
    </table>


<?php
include 'includes/footer.php';
?>
</body>
</html>