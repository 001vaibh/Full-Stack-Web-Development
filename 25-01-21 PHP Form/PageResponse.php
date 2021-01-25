<html>

<head>
    <title>PHP TABLE</title>
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
        Reading<input type="checkbox" name="interest[]" value="Coding">
        Gaming<input type="checkbox" name="interest[]" value="Gaming">
        Swimming<input type="checkbox" name="interest[]" value="Reading">
        Cooking<input type="checkbox" name="interest[]" value="Cooking">
        Coding<input type="checkbox" name="interest[]" value="Teaching"> <br>
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
    if (empty($_POST['name'])) {
        echo "Empty 'Name' is not allowed.";
    } else if (empty($_POST['email'])) {
        echo "Empty 'Email' is not allowed.";
    } else if (empty($_POST['contact'])) {
        echo "Empty 'Contact' is not allowed.";
    } else if (empty($_POST['course'])) {
        echo "Empty 'Course' is not allowed.";
    } else if (sizeof($interest) < 3) {
        echo "At least select any 3 Interests.";
    } else {
        echo "Name : $name <br/>";
        echo "email : $email <br/>";
        echo "contact : $contact <br/>";
        echo "course : $course <br/>";
        echo "Interest : [";
        $first = true;
        foreach ($interest as $int) {
            if ($first) {
                $first = false;
            } else {
                echo ", ";
            }
            echo $int;
        }
        echo "]";
    }
}

?>