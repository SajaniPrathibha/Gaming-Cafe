<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Lstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form>
            <a href="home.php"><i class='bx bx-window-close' ></i></a>
            <h2>Sign in</h2>
            <div class="inputbox">
                <input type="text" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="fPassword.php">Forgot Password</a>
                <a href="signUp.php">SignUp</a>
               
            </div>
            <input type="submit" value="Login">
            
        </form>
    </div>
</body>
</html>