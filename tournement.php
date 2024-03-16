
<!-- <?php include('includes/links.php')?> -->
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("failed");
}else{
    echo 'ok';
}

$flag = '';
if(isset($_post['submit'])){
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Tournamen = $_POST['tournament'];
    $conn = mysqli_connect('localhost','root','','cafe');
    $query = mysqli_query($conn,'INSERT INTO `tmt`(`id`, `name`, `phone`, `email`, `tournament`) 
    VALUES ('.$Id.','.$Name.','.$Phone.','.$Email.','.$Tournamen.')');
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . $conn->error;
      }
      
$conn->close();
    // if($query){
    //     $flag = '1';
    // }else{
    //     $flag = '0';
    // }


    
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tournement</title>
    
    <style>
        body{
            /* background: #050e2d; */
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
             background-image: url("bt.jpg");
            background-repeat: no-repeat;
            
            height: 500px; /* You must set a specified height */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
            padding: 20px 100px; 
    
        }
        form{
            align-items: left;
            background: #050e2d;
            height: 400px;
            width: 400px;
            border: 1px solid grey;
            border-radius: 10px;
            text-align: center;
        }
        input,select{
            height: 30px;
            width: 90%;
            border:1px solid grey;
            border-radius: 10px;
            margin-top: 10px;

        }
        button{
            height: 30px;
            width: 200px;
            /* background: green;
            border:1px solid grey; */
            border-radius: 10px;
            margin-top: 10px;
            background: #1aeeef;
             border: none;
            color: #050e2d;
            box-shadow: 0 0 10px #1aeeef;
        }
        button:hover{
            cursor: pointer;
        }
        h2{
            
            color: #fff;
            
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>FILL UP THE FORM</h2>
        <input type="text" name="id" placeholder="Enter id"><br>
        <input type="text" name="name" placeholder="Enter name"><br>
        <input type="number" name="phone" placeholder="Enter phone number"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        <select name="tournament" id="tournament"><br>
            <option value="" hidden>select tournement</option>
            <option value="select tournement 01"> tournement 01</option>
            <option value="select tournement 02"> tournement 02</option>
            <option value="select tournement 03"> tournement 03</option>
        </select><br>
       <button type="submit" name="submit">submit</button>
       <?php 
       if($flag == '1'){
        ?>
        <p style="color:white;"><strong>Sucessfull</strong> Detail has been submitted</p>
        <?php
       }
       if($flag == '0'){
        ?>
        <p style="color:white;"><strong>Failed</strong> Detail can't submitted</p>
        <?php
       }
       ?>
    </form>
   
</body>
</html>