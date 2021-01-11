<!-- 
 * Project: Milestone 1
 * Module Name: User Registration
 * Author: Ricardo Monreal
 * Date: December 20, 2020
 * Synopsis: pagaHandler takes user data from register.html and creates a new user in the db with provided info.
 -->
<!DOCTYPE html>
<html>
  <head>
    <title>Blog Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
   
  </head>
  <body>
    <div class="main-block">
      <h1>Registration</h1>
           <?php
                $EMAIL = $_POST['EMAIL'];
                $USERNAME = $_POST['USERNAME'];
                $PASSWORD = $_POST['PASSWORD'];
                
                $link = mysqli_connect("localhost", "root", "root", "milestone1");
                if (mysqli_connect_errno()) {
                    die('Connection Error: ('.mysqli_connect_errno().') '.mysqli_connect_error());
                } else {
                    echo "E-MAIL: ".$_POST["EMAIL"]. "<br>" . "User Name: ".$_POST["USERNAME"]."<br>";
                }
           
                "<br>";
                $query = "INSERT INTO users (EMAIL, USERNAME, PASSWORD) VALUES ('$EMAIL', '$USERNAME', '$PASSWORD')";
                if (mysqli_query($link, $query)) {
                    echo "<br>"."New user has been registered!";
                } else {
                    echo "Error: ".$query."<br>".mysqli_errno($link);
                }
                
                mysqli_close($link);
                
                
            ?>
  
    </div>
  </body>
</html>



