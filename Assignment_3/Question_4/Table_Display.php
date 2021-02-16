<?php 
    include('config.php');
?>
<?php
     $sql = "SELECT * FROM `users`";
     $result = mysqli_query($conn, $sql);
    if($result->num_rows == 0){
        echo "Empty Database";
    }
?>
<html>
    <head>
        <title>Users Table</title>
    </head>
    <body>
        <?php if($result->num_rows > 0){ ?>
            <table border=1px>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>City</th>
                    </tr>
                <thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['city'] ?></td>    
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </body>
</html>

                