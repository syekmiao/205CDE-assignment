<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, 
              shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/jquery.slim.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script> 
            $(function(){
                $("#header").load("header.php"); 
            });
        </script> 
    </head>
    <body>
        <div id="header"></div>
        
        <?php
            session_start();
            if(isset($_POST['submited'])){
                $dbc = mysqli_connect('localhost', 'root', '');
                if($dbc){
                    mysqli_select_db($dbc, 'booking');
                    
                    $prob = false;
                    $username = trim($_POST['username']);
                    $password = trim($_POST['password']);
                    
                    if(empty($username)){
                        echo "Please enter your username<br>";
                        $prob = true;
                    }
                    if(empty($password)){
                        echo "Please enter your username<br>";
                        $prob = true;
                    }
                    
                    if($prob == false){
                        $query = "SELECT * FROM booking_user WHERE booking_username = '$username' AND booking_password = '$password'";
                        $result = mysqli_query($dbc, $query);
                        if(mysqli_num_rows($result) == 1){
                            $_SESSION['username'] = $username;
                            header('location: index.php');
                        }
                        else {
                            echo "<b style='color:red'>Incorrect username or password.</b>";
                        }
                    }
                }
                else {
                    echo "<p style='color:red;'>Error in:". mysqli_connect_error($dbc)."</p><br>";
                }
                mysqli_close($dbc);
            }
        ?>
        
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" 
            class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div><br><br>
                </div>

                <div class="panel-body" >
                    <div id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form" 
                          enctype="multipart/form-data" method="post">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" 
                                    class="form-control" name="username" 
                                    value="" placeholder="username" required>                                        
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" 
                                   class="form-control" name="password" 
                                   placeholder="password" required>
                        </div>
                        
                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-12 controls">
                                <input type="hidden" name="submited" value="true">
                                <input id="btn-login" type="submit" class="btn btn-info">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Don't have an account! 
                                <a href="register.php">Sign Up Here</a>
                                </div>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
