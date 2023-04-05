<!DOCTYPE html>
<html>
<body>

<!--Methode post to upload file -->
<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="file">Filename:</label>
  <input type="text" name="filename">
  <br>
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
