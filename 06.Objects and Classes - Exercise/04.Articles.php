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

    public function edit(string $content)
    {
        $this->setContent($content);
    }

    public function changeAuthor(string $author)
    {
        $this->setAuthor($author);
    }

    public function rename(string $title)
    {
        $this->setTitle($title);
    }

    public function __toString()
    {
        return $this->getTitle() . " - " . $this->getContent() . ": " . $this->getAuthor();
    }
}

$data = explode(", ", readline());
$number = intval(readline());
$article = new Article($data[0], $data[1], $data[2]);

for ($i = 0; $i < $number; $i++) {
    $tokens = explode(": ", readline());

    switch ($tokens[0]) {
        case "Edit":
            $article->edit($tokens[1]);
            break;
        case "ChangeAuthor":
            $article->changeAuthor($tokens[1]);
            break;
        case "Rename":
            $article->rename($tokens[1]);
            break;
    }
}
echo $article;
