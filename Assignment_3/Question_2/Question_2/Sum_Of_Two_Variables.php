<html>
    <head>
        <title>Sum Of two variables</title>
    </head>
    <body>
        <form method='post' action='Sum_Of_Two_Variables.php'>
        1st Number: <input type="number" name="num1"><br>
        2nd Number: <input type="number" name="num2"><br>
        <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['num1']) || empty($_POST['num2'])){
            echo "No Values in input Fields....Enter Values";
        }
        else{
            $sum = $_POST['num1'] + $_POST['num2'];
            echo "Sum of numbers = $sum";
        }
    }
?>