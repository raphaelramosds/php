<?php

namespace Library\Product;

class Product
{
    private string $title;
    private string $author;
    private string $publishedAt;

    public function __construct($title,$author,$publishedAt)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publishedAt = $publishedAt;
    }

    public function details()
    {
        echo "Details of this book \n";
        echo "Title: " . $this->title . "\n";
        echo "Author: " . $this->author . "\n";
        echo "Published at: " . $this->publishedAt . "\n";
    }
}
