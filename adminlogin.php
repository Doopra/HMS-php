<?php
        session_start();
        include("include/header.php");
        include("connnection.php");

        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $error = array();
            if(empty($username)){
                $error['admin'] = "Enter Username";

            } else if(empty($password)){
                $error['admin'] = "Enter Password";
            }
            if(count($error)==0){
                $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
                $result = mysqli_query($connect,$query);
                
                if(mysqli_num_rows($result) ==1){
                    echo "<script>alert('you have logged in as an admin')</script>";
                    $_SESSION['admin'] = $username;
                    header("location:admin/index.php");
                    exit();
                }else{
                    echo "<script>alert('invalid Username or Password')</script>";
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

    
    <title>Admin Login </title>
</head>
<body style="background-color:gray";>
    
<div style="margin-top:50px"></div>
 
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                    <img src="image/login.jfif" class="col-md-12" style="height:100px; width:100px; margin-left:40%">
                    <form method="post" class="my-2">

                        <div >

                            <?php
                                if(isset($error['admin'])){
                                    $sh = $error['admin'];
                                    $show = "<h4 class='alert alert-danger'>$sh</h4>";
                                
                                } else{
                                    $show = "";
                                } 
                                echo $show;
                            ?>
                        </div>
                        <div class="form-group">
                            <label> Username</label>
                            <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Enter Username"> 
                        </div>

                        <div class="form-group">
                            <label> Password</label>
                            <input type="text" name="password" class="form-control" placeholder="password"> 
                        </div>
                        <input type="submit" name="login" class="btn btn-success" value="Login"> 
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    
</body>
</html>