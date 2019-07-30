<?php

namespace App\Design\Iterator;

class BookShelf implements Aggreate
{

    private $books;
    private $last = 0;
    private $size = 0;

    public function __construct($maxSize)
    {
        $this->size = $maxSize;
    }

    /**
     * 通过索引获取
     *
     * @param $index
     * @return mixed
     */
    public function getBookAt($index)
    {
        return $this->books[$index];
    }

    /**
     * 追加
     *
     * @param $book
     */
    public function appendBook($book)
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }

    /**
     * 获取长度
     *
     * @return int
     */
    public function getLength()
    {
        return $this->last;
    }

    /**
     * 返回一个遍历集合的接口
     *·
     * @return BookShelfIterator
     */
    public function iterator()
    {
        return new BookShelfIterator($this);
    }


}