<?php

namespace App\Design\Iterator;


class BookShelfIterator implements Iterator
{

    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    /**
     * 获取下一个
     *
     * @return mixed
     */
    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }


    /**
     * 判断是否有下一个
     *
     * @return bool
     */
    public function hasNext()
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

}