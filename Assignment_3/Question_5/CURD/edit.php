<?php
    require_once('config.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE `id`=$id";
    $result = mysqli_query($conn , $sql); 
	$row = $result->fetch_assoc();
	$username = $row['username']; 
	$email = $row['email'];
	$gender = $row['gender']; 
	$city = $row['city']; 
?>
<?php
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender']; 
        $city = $_POST['city']; 
    
        $sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender',city='$city' WHERE id='$id'"; 	  
        if(mysqli_query($conn , $sql)){
            echo "Data updated successfully...";
        }
        else{
            echo "Updation failed..."; 
        }
    }
?>    
<html>
    <head>
        <title>Adding in Db</title>
    </head>
    <body>
        <form method="POST" action="edit.php?id=<?php echo "$id"?>">
            Username <input type="text" name="name" value=<?php echo "$username"?> required><br>
            Email <input type="email" name="email" value=<?php echo "$email" ?> required><br>
            Gender <input type="radio" name="gender" value="Male"  <?php if($gender == "Male"){echo "checked";}?> required/>Male
                <input type="radio" name="gender" value="Female"  <?php if($gender == "Female"){echo "checked";}?>required/>Female
                <input type="radio" name="gender" value="Others"  <?php if($gender == "Others"){echo "checked";}?> required/>Others<br>
            City 
            <select name="city" required>
                <option value="New Delhi"<?php if($city=="New Delhi"){ echo "selected";}?>>New Delhi</option>
                <option value="Banglore" <?php if($city=="Banglore"){echo "selected";}?>>Banglore</option>
                <option value="Hyderabad" <?php if($city=="Hyderabad"){echo "selected";}?>>Hyderabad</option>
                <option value="Bombay" <?php if($city=="Bombay"){echo "selected";}?>>Bombay</option>
            </select> <br>
            <input type="submit" name="update" value="UPDATE">
        </form>
    </body>
</html>
