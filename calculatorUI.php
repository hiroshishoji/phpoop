<?php
require_once "Calculator.php";

$total = new Calculate; 

if(isset($_POST['submit'])){
    $num = $_POST['num'];
    $cal = $_POST['cal'];
    $num2 = $_POST['num2'];

    $total->setValue($num,$cal,$num2);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num"><br>
        <select name="cal" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <input type="number" name="num2"><br>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <hr>
    <h2>Output</h2>
    <p><?php echo $total->getNum();  ?> 
    <?php echo $total->getCal();  ?> 
    <?php echo $total->getNum2();  ?> 
    <?php echo "= ".$total->getTotal();   ?>  </p>

    
</body>
</html>