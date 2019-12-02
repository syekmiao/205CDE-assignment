<!DOCTYPE html>
<html>
    <head>
        <title>booking info</title>
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
        <b style="color:blue">Please state your username or your Booking ID at the counter.</b>
        <br><br>
        <table>
            <form method="post" enctype="multipart/form-data">
            <thead>
                <tr>
                    <th scope="col">Booking ID</th>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Booking Room No.</th>
                    <th scope="col">Booking Time</th>
                </tr>
            </thead>
        <?php 
        session_start();
        
        $dbc = mysqli_connect('localhost', 'root', '');
        if($dbc){
            mysqli_select_db($dbc, 'booking');
            if(empty($_SESSION['username'])){
                    echo '<br><b style="color:red">Please login first.</b>';
                    header('Refresh:5;URL=login.php');
            }
            else {
                if(isset($_POST['delete'])){
                    $delete_id = $_POST['delete'];
                    $query4 = "DELETE FROM book WHERE book_id = '$delete_id' ";
                    if(mysqli_query($dbc, $query4)){
                        echo "<b style='color:blue'>Delete Successfully.</b><br><br>";
                    }
                    else {
                        echo "<p style='color:red;'>Error in:".$query4."</p><br>";
                    }
                }
                $user = $_SESSION['username'];
                    
                $query = "SELECT * FROM book WHERE book_user = '$user' ";
                $result = mysqli_query($dbc, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row = $result-> fetch_assoc()){
                        $time = $row['book_time'];
                        $book_id = $row['book_id'];
                        echo "<tbody><tr><td>BID". $book_id."</td><td>".$row['book_date'].
                                "</td>";
                        switch($time){
                            case "1_8":
                                $room = 1;
                                $hour = "8.00a.m.";break;
                            case "1_9":
                                $room = 1;
                                $hour = "9.00a.m.";break;
                            case "1_10":
                                $room = 1;
                                $hour = "10.00a.m.";break;
                            case "1_11":
                                $room = 1;
                                $hour = "11.00a.m.";break;
                            case "1_12":
                                $room = 1;
                                $hour = "12.00p.m.";break;
                            case "1_13":
                                $room = 1;
                                $hour = "1.00p.m.";break;
                            case "1_14":
                                $room = 1;
                                $hour = "2.00p.m.";break;
                            case "1_15":
                                $room = 1;
                                $hour = "3.00p.m.";break;
                            case "1_16":
                                $room = 1;
                                $hour = "4.00p.m.";break;
                            case "1_17":
                                $room = 1;
                                $hour = "5.00p.m.";break;
                            case "1_18":
                                $room = 1;
                                $hour = "6.00p.m.";break;
                            case "2_8":
                                $room = 2;
                                $hour = "8.00a.m.";break;
                            case "2_9":
                                $room = 2;
                                $hour = "9.00a.m.";break;
                            case "2_10":
                                $room = 2;
                                $hour = "10.00a.m.";break;
                            case "2_11":
                                $room = 2;
                                $hour = "11.00a.m.";break;
                            case "2_12":
                                $room = 2;
                                $hour = "12.00p.m.";break;
                            case "2_13":
                                $room = 2;
                                $hour = "1.00p.m.";break;
                            case "2_14":
                                $room = 2;
                                $hour = "2.00p.m.";break;
                            case "2_15":
                                $room = 2;
                                $hour = "3.00p.m.";break;
                            case "2_16":
                                $room = 2;
                                $hour = "4.00p.m.";break;
                            case "2_17":
                                $room = 2;
                                $hour = "5.00p.m.";break;
                            case "2_18":
                                $room = 2;
                                $hour = "6.00p.m.";break;
                            case "3_8":
                                $room = 3;
                                $hour = "8.00a.m.";break;
                            case "3_9":
                                $room = 3;
                                $hour = "9.00a.m.";break;
                            case "3_10":
                                $room = 3;
                                $hour = "10.00a.m.";break;
                            case "3_11":
                                $room = 3;
                                $hour = "11.00a.m.";break;
                            case "3_12":
                                $room = 3;
                                $hour = "12.00p.m.";break;
                            case "3_13":
                                $room = 3;
                                $hour = "1.00p.m.";break;
                            case "3_14":
                                $room = 3;
                                $hour = "2.00p.m.";break;
                            case "3_15":
                                $room = 3;
                                $hour = "3.00p.m.";break;
                            case "3_16":
                                $room = 3;
                                $hour = "4.00p.m.";break;
                            case "3_17":
                                $room = 3;
                                $hour = "5.00p.m.";break;
                            case "3_18":
                                $room = 3;
                                $hour = "6.00p.m.";break;
                            case "4_8":
                                $room = 4;
                                $hour = "8.00a.m.";break;
                            case "4_9":
                                $room = 4;
                                $hour = "9.00a.m.";break;
                            case "4_10":
                                $room = 4;
                                $hour = "10.00a.m.";break;
                            case "4_11":
                                $room = 4;
                                $hour = "11.00a.m.";break;
                            case "4_12":
                                $room = 4;
                                $hour = "12.00p.m.";break;
                            case "4_13":
                                $room = 4;
                                $hour = "1.00p.m.";break;
                            case "4_14":
                                $room = 4;
                                $hour = "2.00p.m.";break;
                            case "4_15":
                                $room = 4;
                                $hour = "3.00p.m.";break;
                            case "4_16":
                                $room = 4;
                                $hour = "4.00p.m.";break;
                            case "4_17":
                                $room = 4;
                                $hour = "5.00p.m.";break;
                            case "4_18":
                                $room = 4;
                                $hour = "6.00p.m.";break;
                            case "5_8":
                                $room = 5;
                                $hour = "8.00a.m.";break;
                            case "5_9":
                                $room = 5;
                                $hour = "9.00a.m.";break;
                            case "5_10":
                                $room = 5;
                                $hour = "10.00a.m.";break;
                            case "5_11":
                                $room = 5;
                                $hour = "11.00a.m.";break;
                            case "5_12":
                                $room = 5;
                                $hour = "12.00p.m.";break;
                            case "5_13":
                                $room = 5;
                                $hour = "1.00p.m.";break;
                            case "5_14":
                                $room = 5;
                                $hour = "2.00p.m.";break;
                            case "5_15":
                                $room = 5;
                                $hour = "3.00p.m.";break;
                            case "5_16":
                                $room = 5;
                                $hour = "4.00p.m.";break;
                            case "5_17":
                                $room = 5;
                                $hour = "5.00p.m.";break;
                            case "5_18":
                                $room = 5;
                                $hour = "6.00p.m.";break;
                            default :
                                echo "Someting is wrong.";
                                
                        }
                        echo "<td>". $room."</td><td>".$hour."</td>"
                                . "<td><button type='submit' "
                                . "value=".$book_id." "
                                . "name='delete'>Delete</button></td>"
                                . "</tr></tbody>";
                    }
                    echo "</table></form>";
                }
                else {
                    echo "There's no records of booking.";
                }
            }
        }
        mysqli_close($dbc);
        ?>
    </body>
</html>