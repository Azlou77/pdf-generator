<!DOCTYPE html>
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
