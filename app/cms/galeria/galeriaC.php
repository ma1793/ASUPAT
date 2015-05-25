<?php include 'conectarDB.php';
$CurNom = $_POST["nombreIm"];
//$CurCod = $_POST["urlIm"];
$catIm = $_POST["catIm"];
//$idIm = $_POST["idIm"];
$modoIm = $_POST["modoIm"];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$CurCod = $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


//modo a = insertar, b = actualizar, c = eliminar
if ($modoIm == "a"){
    $queryInsert = "INSERT INTO imagen(nombre, imgURL, catGaleriaid, eliminado) VALUES ('$CurNom', '$CurCod', '$catIm', 0)";
}elseif ($modoIm == "b") {
    $queryInsert = "UPDATE imagen SET nombre='$CurNom', imgURL='$CurCod', catGaleriaid='$catIm' WHERE idimagen='$idIm'";    
}  else {
    $queryInsert = "UPDATE imagen SET eliminado=1 WHERE idimagen='$idIm'";
}

if (mysqli_query($conn, $queryInsert)) {
    echo $mysqli_insert_id;
} else {
    echo "Error";
}
?>