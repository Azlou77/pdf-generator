<?php 
require (__DIR__ . './connect.php');

//Add data to the database
$sql = "INSERT INTO `users` (`name`, `email`, `files`) VALUES (:name, :email)";

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
<body>

<!--Methode post to upload file -->
<form action="tab.php" method="post" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" name="name">
  <br>
  <label for="email">Email:</label>
  <input type="text" name="email">
  <br>
  <label for="file">Filename:</label>

  <br>
  <label>Select image to upload:</label>
  <input type="file" name="files" id="files">
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>

  
</body>
</html>










