<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Booking</title>
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
                
                var today_date = new Date();
                
                var month = today_date.getMonth() + 1;
                var day = today_date.getDate();
                var year = today_date.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day = '0' + day.toString();
    
                var maxDate = year + '-' + month + '-' + day;
                $('#select_date').attr('min', maxDate);
            });
        </script> 
    </head>
    <body>
        <div id="header"></div>
        <?php
        session_start();
        if(isset($_POST['check'])){
            $date1 = date($_POST['select_date']);
            $_SESSION['dateck'] = $date1;
            header('location: availability.php');
        }
        ?>
        <div id="booking" class="section">
	<div class="section-center">
	<div class="container">
	<div class="row">
            <div class="booking-form">
            <form method="post">
                <div class="row no-margin">
                    <div class="col-md-4">
                    <div class="form-header">
                        <h2>Book Now</h2>
                    </div>
                    </div>
                    <div class="col-md-7">
                    <div class="row no-margin">
                    <div class="col-md-7">
                        <div class="form-group">
                            <span class="form-label">Check</span>
                            <input class="form-control" type="date" id="select_date" name="select_date">
                        </div>
	            </div>
                    <div class="col-md-4">
	            <div class="form-group">
                        <span class="form-label">Person</span>
                        <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        </select>
                        <span class="select-arrow"></span>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-2">
                    <div class="form-btn"> 
                        <input type="hidden" name="check" value="true">
                        <input type="submit" value="Check availability"
                          class="submit-btn">
                    </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <span class="form-label">Open at: Monday to Saturday.</span>
                            <span class="form-label">8.00a.m. to 6p.m.</span>
                        </div>
	            </div>
                </div>
            </form>
            </div>
	</div>
	</div>
	</div>
	</div>
    </body>
</html>
