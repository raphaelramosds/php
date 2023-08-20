<?php

use WebSystem\Product\Product as Software;
use Library\Product\Product as Book;

require "Library/Product.php";
require "WebSystem/Product.php";

// Sometimes classes have the same name, methods and even attributes

// But, they are not necessarily the same

// For instance, Product can be a book, if it's on a Library

// Or, in the context of web systems, it can be a software

$software = new Software("Uber", "A mobile application for driving", "0.0.1");

$book = new Book("Lord of Rings", "J. R. R. Tolkien", "1937");

$software->details();

$book->details();