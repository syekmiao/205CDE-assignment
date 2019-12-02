<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <head>
        <title>Availability</title>
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
        if(!empty($_SESSION['dateck'])){
            echo $_SESSION['dateck'];
        }
        else {
            header('location: index.php');
        }
        $dbc = mysqli_connect('localhost', 'root', '');
        if($dbc){
            mysqli_select_db($dbc, 'booking');

            if(isset($_POST['sub'])){
                if(empty($_SESSION['username'])){
                    echo '<br><b style="color:red">Please login first.</b>';
                    header('Refresh:5;URL=login.php');
                }
                else {
                    $user = $_SESSION['username'];
                    $book_date = $_SESSION['dateck'];
                    $book_time = $_POST['sub']; 

                    $query = "SELECT * FROM book WHERE book_date = '$book_date' AND book_time = '$book_time' ";
                    $result = mysqli_query($dbc, $query);
                    if(mysqli_num_rows($result) == 0){
                        $query2 = "INSERT INTO book(book_user,book_date,book_time) VALUES ('$user','$book_date','$book_time')";
                        if(mysqli_query($dbc, $query2)){
                            echo "<br><b style='color:blue'> Successfully Registered</b><br>";
                            echo "Please state your username or your booking ID at the counter.<br>";
                            echo "Check your booking ID at booktime page. Transfering to booktime page in 30 seconds.<br>";
                            echo "Or click <a href='booktime.php'>HERE</a> to transfer now.";
                            header('Refresh:30;URL=booktime.php');
                        }
                        else{
                            echo "<p style='color:red;'>Error in:".$query2."</p><br>";
                        }
                    }
                    else{
                        echo '<br><b style="color:red">Sorry this slot is unavailable.</b>';
                    }
                }
            } 
        }
        else{
            echo "<p style='color:red;'>Error in:". mysqli_connect_error($dbc)."</p><br>";
        }  
        mysqli_close($dbc);
        
        ?>
        <div class="container">
        <div class="component">
        <div class="table-responsive">
            <table>
                <form method="post" enctype="multipart/form-data">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">08.00a.m.</th>
                            <th scope="col">09.00a.m.</th>
                            <th scope="col">10.00a.m.</th>
                            <th scope="col">11.00a.m.</th>
                            <th scope="col">12.00p.m.</th>
                            <th scope="col">01.00p.m.</th>
                            <th scope="col">02.00p.m.</th>
                            <th scope="col">03.00p.m.</th>
                            <th scope="col">04.00p.m.</th>
                            <th scope="col">05.00p.m.</th>
                            <th scope="col">06.00p.m.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Room 1</th>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_8" value="1_8" >book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_9" value="1_9">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_10" value="1_10">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_11" value="1_11">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_12" value="1_12">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_13" value="1_13">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_14" value="1_14">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_15" value="1_15">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_16" value="1_16">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_17" value="1_17">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="1_18" value="1_18">book</button></td>
                        </tr>
                        <tr>
                            <th scope="row">Room 2</th>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_8" value="2_8">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_9" value="2_9">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_10" value="2_10">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_11" value="2_11">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_12" value="2_12">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_13" value="2_13">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_14" value="2_14">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_15" value="2_15">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_16" value="2_16">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_17" value="2_17">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="2_18" value="2_18">book</button></td>
                        </tr>
                        <tr>
                            <th scope="row">Room 3</th>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_8" value="3_8">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_9" value="3_9">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_10" value="3_10">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_11" value="3_11">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_12" value="3_12">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_13" value="3_13">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_14" value="3_14">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_15" value="3_15">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_16" value="3_16">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_17" value="3_17">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="3_18" value="3_18">book</button></td>
                        </tr>
                        <tr>
                            <th scope="row">Room 4</th>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_8" value="4_8">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_9" value="4_9">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_10" value="4_10">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_11" value="4_11">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_12" value="4_12">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_13" value="4_13">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_14" value="4_14">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_15" value="4_15">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_16" value="4_16">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_17" value="4_17">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="4_18" value="4_18">book</button></td>
                        </tr>
                        <tr>
                            <th scope="row">Room 5</th>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_8" value="5_8">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_9" value="5_9">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_10" value="5_10">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_11" value="5_11">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_12" value="5_12">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_13" value="5_13">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_14" value="5_14">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_15" value="5_15">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_16" value="5_16">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_17" value="5_17">book</button></td>
                            <td><button type="submit" class="btn btn-success btn-xs" 
                                        name="sub" id="5_18" value="5_18">book</button></td>
                        </tr>
                    </tbody>
                </form>
            </table>
        </div>
        </div>
        </div>
    </body>
</html>
