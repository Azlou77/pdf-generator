<?php
require_once (__DIR__ . './connect.php');

$sql = 'SELECT * FROM `users`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$users = $query->fetchAll(PDO::FETCH_ASSOC);


?>
           
<!-- Display data on tab -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Files</th>
 
      </tr>
    </thead>
    <tbody>
      
        <!-- Loop through the users -->
        <?php foreach ($users as $user)?> {
             <tr>
              <td><?= $user['name']; ?></td>
              <td><?= $user['email']; ?></td>

              <td><img src="uploads/<?php echo $user['files']; ?>"/></td>
              </tr>
        }
    </tbody>
  </table>
</div>

</body>
</html>
