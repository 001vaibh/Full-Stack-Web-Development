<?php
   require_once('config.php');
   if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";

        if (!(mysqli_query($conn, $sql))) {
            echo "Invalid Query";
        }
   }
    
?>

<html>
    <head>
        <title>Adding in Db</title>
    </head>
    <body>
        <form method="POST" action="add.php">
            Username <input type="text" name="name" required><br>
            Email <input type="email" name="email" required><br>
            Gender <input type="radio" name="gender" value="Male" required/>Male
                <input type="radio" name="gender" value="Female" required/>Female
                <input type="radio" name="gender" value="Others" required/>Others<br>
            City 
            <select name="city" required>
                <option>New Delhi</option>
                <option>Banglore</option>
                <option>Hyderabad</option>
                <option>Mumbai</option>
            </select> <br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    </body>
</html>
