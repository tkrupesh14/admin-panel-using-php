<!-- php code -->

<?php


$error="";
$success="";

    if(isset($_POST['s'])){
        $uname=$_POST['uname'];
$pass=$_POST['pass'];
    
        if($uname == "admin"){
            if($pass == "password"){
                header('Location: https://adminlogininphpbytk.herokuapp.com/Welcome.php');
            }
            else{
                $error="Invalid Password! ";
                $success=" ";
            }
        }else{
            $error="Invalid Username! ";
            $success=" ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Using PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="title">
        <h1>Sign In Form</h1>
    </div>
    <div class="container">
        <div class="left"></div>
        <div class="right">
            <div class="formbox">
                <form action="" method="POST">
                    <p>Username</p>
                    <input type="text" name="uname" value="" placeholder="Enter Your Username">
                    <p>Password</p>
                    <input type="password" name="pass" value="" placeholder="Enter Your Password">
                    <input type="submit" name="s" value="Sign In">
                    <a href="#">Forget Password?</a>
                    <p style="color:red;"><?php echo $error;?></p>
                    <p style="color:green;"><?php echo $success;?></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>