<?php
class Book // Book class
{

  // $title and $author are the properties
  // for Book class.
  // __construct is a specific method of Book class
  // allows us to pass arguments to the Book() class

  // PHP 8 introduces Constuctor Promotion
  public function __construct(
    private $title,
    private $author
  ) {
    // use $this (instanced object of Book) to access the
    // private properties of the Book class
    // $this is a referrence to the object 
    $this->title = $title;
    $this->author = $author;
  }

  // display the book info
  public function display_book_info(): string
  {
    return "Title: {$this->title}. Author: {$this->author}";
  }
}

// instantiate an object for the Book() class with a 'new' keyword;
$instance_book1 = new Book("Capstone", "Mono Ibarra"); // $instance_book1 is an object of Book() class
echo $instance_book1->display_book_info(); // call the method from the Book class using ->

$instance_book2 = new Book("Red", "Arthur Morgan"); // $instance_book2 is an object of Book() class
echo $instance_book2->display_book_info();

?>