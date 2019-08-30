<?php
require_once "Car.php";

// creat an object/instance of the class
$mercedes = new Car;
$bmw = new Car;
$audi = new Car;




$mercedes->color = "green";
echo "The color of mercedes is ". $mercedes->color;
echo "<br>";
$bmw->color = "red";
echo "The color of bmw is " . $bmw->color;
echo "<br>";
echo "The color of audi is " . $audi->color;
$audi->setColor("Yellow");

echo "<br>";
echo $audi->getColor();

echo "<br>";
echo $bmw->getColor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class=fluid>
        <form method="post">
            <label for="">Brand:</label>
            <input type="text" class="form-control" name="brand">
            <br>
            <label for="">Model:</label>
            <input type="text" class="form-control" name="model">
            <br>
            <label for="">Color:</label>
            <input type="text" class="form-control" name="color">
            <br>
            <input type="submit" value="submit" name="submit">


        </form>

        

        <?php
            $truck = new Truck;

            if(isset($_POST['submit'])){
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $color = $_POST['color'];
                $truck->setValues($brand, $model, $color);


                echo "This brand is " . $truck->getBrand();
                echo "<br>";
                echo "This model is " . $truck->getModel();
                echo "<br>";
                echo "This color is " . $truck->getColor();
                echo "<br>";

            }
        
        
        
        ?>
    
    </div>

    
</body>
</html>
