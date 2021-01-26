<html>
<head>
    <title>PHP TABLE</title>
    <style>
        td, tr, th{
            text-align: center;
            border: 1px dotted;
        }
      table {
        width: 100%;
        border: 1px solid;
      }   
    </style>
</head>

<body>
    <form method="POST" action="PageResponse.php">
        Name <input type="text" name="name" required><br>
        Email <input type="email" name="email" required><br>
        Contact<input type="number" name="contact" required><br>
        City <input type="text" name="city" required><br>
        Course
        <select name="course" required>
            <option>B.Tech</option>
            <option>BIo-Tech</option>
            <option>B.Sc</option>
        </select> <br>
        Interest:
        Reading<input type="checkbox" name="interest[]" value="Reading">
        Poetry<input type="checkbox" name="interest[]" value="Poetry">
        Swimming<input type="checkbox" name="interest[]" value="Swimming">
        Cooking<input type="checkbox" name="interest[]" value="Cooking">
        Coding<input type="checkbox" name="interest[]" value="Coding"> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $course = $_POST['course'];
        $interest = $_POST['interest']; 
        if (empty($interest) || sizeof($interest) < 3 || sizeof($interest) > 5) {
            echo "Select at least 3 interests and maximum 5 interests";
        } else {
            echo "<table>";
            echo "<tr>";
            echo "<th colspan=\"6\">OUTPUT</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "<th>Contact</th>";
            echo "<th>City</th>";
            echo "<th>Course</th>";
            echo "<th>Interest</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>$name</th>";
            echo "<th>$email</th>";
            echo "<th>$contact</th>";
            echo "<th>$city</th>";
            echo "<th>$course</th>";
            echo "<th>";
            echo "<ul>";
            foreach ($interest as $int) {
                echo "<li>$int</li>";
            }
            echo "</ul";
            echo "</th>";
            echo "</tr>";
            
            echo "</table>";
            
        }
    }
?>
