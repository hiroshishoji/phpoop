<?php
class Book{
    public $book_author;
    public $book_title;
    public $date;
    public $summary;
    public $price;
    public $quantity;

    function setValues($book_author,$book_title,$date,$summary,$price,$quantity){
        $this->book_author = $book_author;
        $this->book_title = $book_title;
        $this->date = $date;
        $this->summary = $summary;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    function getBookAuthor(){
        return $this->book_author;
    }

    function getTitle(){
        return $this->book_title;
    }

    // function getReleaseDate(){
    //     return $this->release_date;
    // }

    public function getDate(){
        // convert the date into a php timestamp
        $myDate = strtotime($this->date);

        // convert the timestamp into a date formal that yout want
        $date = date("M D, Y h:i:s a", $myDate);
        // return the converted date
        return $date;
    }




    function getSummary(){
        return $this->summary;
    }

    function getPrice(){
        return $this->price;
    }

    function getQuantity(){
        return $this->quantity;
    }

    function getTotalPrice(){
        return $this->price*$this->quantity;
    }
}
?>