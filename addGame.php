<?php 
require_once 'config.php';

if(isset($_POST["submit"])) {
    // echo "<script>alert('submitted')</script>";
    $gn = $_POST["gameName"];
    $gen = $_POST["genres"];
    $des = $_POST["description"];

    //image Upload
    $upload_dir = "uploads/";
    $image = $upload_dir.$_FILES["imageUpload"]["name"];
    $upload_dir.$_FILES["imageUpload"]["name"];
    $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
    $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));//detect image format
    $check = $_FILES["imageUpload"]["size"];//detect the size of the image
    $upload_ok = 0;
    
    if(file_exists($upload_file)){
        echo "<script>alert('the file already exists')</script>";
        $upload_ok = 0;
    }else{
        $upload_ok = 1;
        if($check !== false){
            $upload_ok = 1;
                    if($imageType == 'jpg' ||$imageType == 'jpeg'||$imageType == 'png'||$imageType == 'gif'){
                            $upload_ok = 1;
                    }else{
                        echo "<script>alert('Please change the image format')</script>"; 
                    }
                   
        }else{
            echo "<script>alert('The photo size is 0 please change the photo')</script>";
            $upload_ok = 0;
        }
    }
    if($upload_ok == 0){
        echo "<script>alert('Sorry your file is cant't be uploaded. Please try again')</script>";
    }else{
        if($gn !="" && $des !=""){
            move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

            $sql = "INSERT INTO games(name, genres , description, image) VALUES ('$gn.','$gen','$des','$image')";

            if($conn->query($sql)==TRUE){
                echo "<script>alert('successfully uploaded')</script>";

            }

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addGame.css">
    <link rel="stylesheet" href="Hstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
        <a href="#" class="logo">Gammers</a>
        <ul class="nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">games</a></li>
        </ul>
        <div class="action">
        </div>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
    </header>
    <section id="upload_container">
        <form action="addGame.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="gameName" id="gameName" placeholder="Game  Name" required>
            <input type="text" name="genres" id="genres" placeholder="genres" required>
            <input type="text" name="description" id="description" placeholder="Description" required>
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">choose image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>
    <script>
        var gameName = document.getElementById("gameName");
        var genres = document.getElementById("genres");
        var description = document.getElementById("description");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
        }
        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(productname.value==""){
                productname.value = file.name;
            }
            choose.innerHTML = "you can change("+file.name+") picture";
        })
    </script>
</body>
</html>