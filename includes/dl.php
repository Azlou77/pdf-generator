<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Upload file</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- Form to upload a file -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
    
</body>
</html>
<?php
//Check if the form is submitted
if (isset($_POST['submit']))
{   
    //Check if the file do not exceed 50Mo
    $maxSize = 50000;
    if($_FILES['file']['error'] > 0 )
    {
      echo  "Une erreur est survenu lors du transfert";
      die;
    }
    //Check if the file  exceed 50Mo
    $filesize = $_FILES['file']['size'];
    if($filesize > $maxSize)
    {
      echo "Le fichier est trop volumineux";
      die;
    }
    echo $filesize;
    
    //Check if the file is a pdf
    $fileName = $_FILES['file']['name'];
    $filExt = explode('.', $_FILES['file']['name']);
    if(!in_array($fileExt, $validExt))
    {
      echo "Le fichier n'est pas un pdf";
      die;
    }

    //Check if the file already exist
    $tmpName = $_FILES['file']['tmp_name'];
    $uniqueName = md5(uniqid(rand(), true));
    //Destination of the file
    $fileDestination = 'uploads/'.$fileName;
    $resultat = move_uploaded_file($tmpName, $fileDestination);

    // Check the uploading results
    if ($resultat)
    {
      echo "Le fichier a bien été uploadé";
    }
    else
    {
      echo "Une erreur est survenue lors de l'upload";
    }

}