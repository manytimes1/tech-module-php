<?php

class Library
{
    private $name;
    private $books = [];

    public function __construct($name, array $books)
    {
        $this->setName($name);
        $this->setBooks($books);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function setBooks(array $books): void
    {
        $this->books = $books;
    }
}

class Book
{
    private $title;
    private $author;
    private $publisher;
    private $releaseDate;
    private $isbn;
    private $price;

    public function __construct($title, $author, $publisher, $releaseDate, $isbn, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPublisher($publisher);
        $this->setReleaseDate($releaseDate);
        $this->setIsbn($isbn);
        $this->setPrice($price);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function setReleaseDate($releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }
}
$booksCount = intval(readline());
$books = [];
$library = [];

for ($i = 0; $i < $booksCount; $i++) {
    $data = explode(" ", readline());
    $book = new Book($data[0], $data[1], $data[2], $data[3], $data[4], floatval($data[5]));
    $books[] = $book;
}

foreach ($books as $book) {
    /* @var Book $book */
    $author = $book->getAuthor();
    $price = $book->getPrice();

    if (!key_exists($author, $library)) {
        $library[$author] = 0;
    }
    $library[$author] += $price;
}
uksort($library, function ($a, $b) use ($library) {
    if ($library[$a] < $library[$b]) {
        return 1;
    } elseif ($library[$a] > $library[$b]) {
        return -1;
    } else {
        return strcmp($a, $b);
    }
});

foreach ($library as $item => $value) {
    $price = sprintf("%.2f", $value);
    echo "$item -> $price" . PHP_EOL;
}
