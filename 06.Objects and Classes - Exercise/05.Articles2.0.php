<?php

class Article
{
    private $title;
    private $content;
    private $author;

    public function __construct(string $title, string $content, string $author)
    {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function __toString()
    {
        return $this->getTitle() . " - " . $this->getContent() . ": " . $this->getAuthor();
    }
}
$number = intval(readline());
$articles = [];

for ($i = 0; $i < $number; $i++) {
    $data = explode(", ", readline());
    $article = new Article($data[0], $data[1], $data[2]);
    $articles[] = $article;
}
$input = readline();

usort($articles, function (Article $a, Article $b) use ($articles, $input) {
    if ($input == "title") {
        return $a->getTitle() <=> $b->getTitle();
    } elseif ($input == "content") {
        return $a->getContent() <=> $b->getContent();
    } elseif ($input == "author") {
        return $a->getAuthor() <=> $b->getAuthor();
    }
});

echo implode(PHP_EOL, $articles);
