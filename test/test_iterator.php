<?php
include "../vendor/autoload.php";


$bookShelf = new App\Design\Iterator\BookShelf(3);
$bookShelf->appendBook(new App\Design\Iterator\Book("book1"));
$bookShelf->appendBook(new App\Design\Iterator\Book("book2"));
$bookShelf->appendBook(new App\Design\Iterator\Book("book3"));
$iterator = $bookShelf->iterator();

while ($iterator->hasNext()) {
    $book = $iterator->next();
    echo $book->getName() . "\n";
}