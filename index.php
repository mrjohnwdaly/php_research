<html>
    <head>
        <title>PHP Research</title>        
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            
            // Create Connection
            $conn = new mysqli($servername, $username, $password);
        
            // Check Connection
            if ($conn -> connect_error) {
                die("Connection failed: " . $conn -> connect_error);
            }
            
            echo "Connected Successfully";
        ?>
    </body>
</html>