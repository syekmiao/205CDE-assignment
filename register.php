<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, 
              shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="register_valid.js" type="text/javascript"></script>
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
        
        <div class="container">    
        <div id="registerbox" style="margin-top:50px;" 
            class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Register</div><br>
                </div>

                <?php
                if(isset($_POST['register'])){
                    $dbc = mysqli_connect('localhost', 'root', '');
                    if($dbc){
                        mysqli_select_db($dbc, 'booking');
                        $prob = FALSE;
                        
                            $booking_email = trim($_POST['email']);
                            $booking_username = trim($_POST['name']);
                            $booking_password = trim($_POST['passwd']);
                            $booking_tel = trim($_POST['tel']);
                            
                            $query = "INSERT INTO booking_user(booking_email,booking_username,booking_password,booking_tel) "
                                    . "VALUES ('$booking_email','$booking_username', '$booking_password', '$booking_tel')";
                            if(mysqli_query($dbc, $query)){
                                echo "<br><b style='color:blue'>Successfully Registered</b>";
                                header('Refresh:5;URL=login.php');
                            }
                            else{
                                echo "<p style='color:red;'>Error in:".$query."</p><br>";
                            }
                    }
                    else {
                        echo "<p style='color:red;'>Error in:". mysqli_connect_error($dbc)."</p><br>";
                    }
                    mysqli_close($dbc);
                } 
                ?>
                <div class="panel-body" >
                    <div id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="registerform" class="form-horizontal" enctype="multipart/form-data"
                          onsubmit="return validateReg()" method="post">
                        <div class="form-group">
                            <label for="email_reg" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" 
                                           id="email_reg" placeholder="Email Address" required>
                                </div>
                        </div>
                                    
                        <div class="form-group">
                            <label for="name_reg" class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                     <input type="text" class="form-control" name="name" 
                                            id="name_reg" placeholder="Name" required>
                                </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="passwd_reg" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="passwd" 
                                           id="passwd_reg" placeholder="Password" required>
                                </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password_conf" class="col-md-3 control-label">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="passwd" 
                                           id="password_conf" placeholder="Confimation Password" required>
                                </div>
                        </div>
                        
                        <div class="form-group">
                             <label for="tel_no" class="col-md-3 control-label">Telephone No</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="tel" 
                                           id="tel_no" placeholder="Telephone/Handphone No" required>
                                </div>
                        </div>

                        <div class="form-group">                                       
                            <div class="col-md-offset-3 col-md-9">
                                <input type="hidden" name="register" value="true">
                                <input id="btn-signup" type="submit" class="btn btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
