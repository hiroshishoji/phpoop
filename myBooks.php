<?php

require "Book.php";

$book = new Book;

if(isset($_POST['submit'])){
    $book_author = $_POST['author'];
    $book_title = $_POST['title'];
    $date = $_POST['date'];
    $summary = $_POST['summary'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $book->setValues($book_author,$book_title,$date,$summary,$price,$quantity);
    
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
        <label>Book Author</label>
        <input type="text" name="author"><br>
        <label>Book Title</label>
        <input type="text" name="title"><br>
        <label>Release Date</label>
        <input type="date" name="date"><br>
        <label>Summary</label>
        <input type="text" name="summary"><br>
        <label>Price</label>
        <input type="price" name="price"><br>
        <label>Quantity</label>
        <input type="number" name="quantity"><br>

        <button type="submit" name="submit">Submit</button>
    
    </form>
    <hr>
    <h2>Output</h2>
    <p>The book author is <?php echo $book->getBookAuthor(); ?></p>
    <p>The book title is <?php echo $book->getTitle(); ?></p>
    <p>The book release date is <?php echo $book->getDate(); ?></p>
    <p>The book summary is <?php echo $book->getSummary(); ?></p>
    <p>The book price is <?php echo $book->getPrice(); ?></p>
    <p>The book quantity is <?php echo $book->getQuantity(); ?></p>
    <p>The book total price is <?php echo $book->getTotalPrice(); ?> </p>

</body>
</html>