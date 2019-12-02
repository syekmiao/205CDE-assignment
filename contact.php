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
        <?php
            session_start();
        ?>
        <div class="col col13">
	<h2>Contact</h2>
        <p>Please make calls during working hours or sent email off working hours.<br> 
		Thank you for your cooperation.</p> 
        <div class="col col13">
            <h4>Address</h4>
        	<h6><strong>Study Room</strong></h6>
            800-220 Lorong 34,<br>
			Taman Temilang,<br>
            Bayan Lepas, 11100<br>
            Pulau Pinang, Malaysia.<br><br>
            
			<strong>Phone:</strong> 04-8666637<br>
            <strong>Email:</strong> <a href="floral01@gmail.com">
				syekmiao05@gmail.com</a><br>
            
            <div class="cleaner h20"></div>
            
	</div>
        </div>
    </body>
</html>