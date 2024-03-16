<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Hstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Games</title>
</head>
<body>
<header>
        <a href="#" class="logo">Gammers</a>
        <ul class="nav">
            <li><a href="home.php">Home</a></li>
        </ul>
        <div class="action">
        </div>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
    </header><br><br><br><br>
    <div class="container py=5">
        <div class="row mt-4">
        <?php 
            require_once 'config.php';

        ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="" class="card-img-top" alt="games images">
                        <h2 class="card-title">Dummy</h2>
                        <h6 class="card-title">gen</h6>
                        <p class="card-text">Dummy Data</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>