<?php
if ($_POST) {
if   (!empty($_FILES['files']['name']))
{
//Define files's location to be uploaded
$target_dir = "uploads/";
//Define files's format
$target_file = $target_dir . basename($_FILES["files"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["files"]["tmp_name"]);
    //Response true or false
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  } 

  // Check file size
if ($_FILES["files"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  } 
  // Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


//Move file to a specific location
  echo '<pre>';
if (move_uploaded_file($_FILES['files']['name'], $target_file)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}
}
//  Helps to debug
echo 'Voici quelques informations de débogage :';
print_r($_FILES); 

echo '</pre>';
}
?>
