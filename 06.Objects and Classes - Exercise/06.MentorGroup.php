<?php
// 60 pts in judge

class User
{
    private $name;
    private $dates = [];
    private $comments = [];

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDates(): array
    {
        return $this->dates;
    }

    public function setDates($dates): void
    {
        array_push($this->dates, $dates);
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments($comments): void
    {
        array_push($this->comments, $comments);
    }
}
$users = [];

while (($command = strtolower(readline())) != "end of dates") {
    $data = explode(" ", $command);
    $name = $data[0];
    $user = new User($name);

    if (!key_exists($name, $users)) {
        array_push($users, $user);
    }

    if (count($data) > 1) {
        $dates = explode(",", $data[1]);

        foreach ($dates as $date) {
            $user->setDates("-- " . $date);
        }
    }
}

while (($command = readline()) != "end of comments") {
    $data = explode("-", $command);
    list($name, $comment) = $data;

    foreach ($users as $user) {
        /* @var User $user */
        if ($user->getName() == $name) {
            $user->setComments("- " . $comment);
        }
    }
}
usort($users, function ($firstUser, $secondUser) {
    return strcoll($firstUser->getName(), $secondUser->getName());
});

foreach ($users as $user) {
    $comments = implode(PHP_EOL, $user->getComments());
    $dates = $user->getDates();
    asort($dates);

    echo $user->getName()
        . PHP_EOL
        . "Comments:"
        . PHP_EOL
        . (strlen($comments) > 0 ? ($comments . PHP_EOL) : null)
        . "Dates attended:"
        . PHP_EOL;

    if (null != $dates) {
        foreach ($dates as $date) {
            echo "$date" . PHP_EOL;
        }
    }
}
