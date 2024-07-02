<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
  $uploadedFile = $_FILES["image"];
  
  // Get the file name without the path
  $fileName = pathinfo($uploadedFile["name"], PATHINFO_FILENAME);

  // Save only the name of the image without the extension
  $imageNameOnly = $fileName;

  $targetDirectory = "assets/images/"; // Directory to save uploaded images
  $targetFile = $targetDirectory . $uploadedFile["name"]; // Save with the original name and extension

  if (move_uploaded_file($uploadedFile["tmp_name"], $targetFile)) {
    echo "Image has been uploaded successfully ..!";
    
  } else {
    echo "Sorry, there was an error uploading your image.";
  }
}
?>

