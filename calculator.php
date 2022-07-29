<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form>
        <input type="text" name="number1" placeholder="First Number">
        <input type="text" name="number2" placeholder="Second Number">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>

        </select>
        <br><br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>Answer is:</P>
<?php
if(isset($_GET['submit'])){
    $result1 = $_GET['number1'];
    $result2 = $_GET['number2'];
    $operator = $_GET['operator'];
    switch($operator){
        case "None":
            echo "Select a method!";
            break;
            case "Add":
            echo $result1 + $result2 ;
            break;
            case "Subtract":
            echo $result1 - $result2 ;
            break;
            case "Multiply":
            echo $result1 * $result2 ;                    break;
            case "Divide":
            echo $result1 / $result2 ;
            break;

    }
}


?>



    
</body>
</html>