<?php
//Add data to the database
$sql = "INSERT INTO `users` (`name`, `email`, `files`) VALUES (:name, :email, :files)";
$query = $db->prepare($sql);
$query->bindParam(':name', $name, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':files', $files, PDO::PARAM_STR);
$query->execute();
