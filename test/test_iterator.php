<?php

namespace App\Design\Test;

use  App\Design\Iterator;

$bookShelf = new Iterator\BookShelf(3);
$bookShelf->appendBook(new Iterator\Book("book1"));
$bookShelf->appendBook(new Iterator\Book("book2"));
$bookShelf->appendBook(new Iterator\Book("book3"));
$iterator = $bookShelf->iterator();

while ($iterator->hasNext()) {
    $book = $iterator->next();
    print_r($book->getName());
}