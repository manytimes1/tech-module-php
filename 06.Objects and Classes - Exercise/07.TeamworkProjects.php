<?php
// 0 pts
// ToDo

class Team
{
    /**
     * @var string
     * Team name
     */
    private $name;

    /**
     * @var string
     * Creator name
     */
    private $creator;

    /**
     * @var array
     * Members in team
     */
    private $members = [];

    public function __construct(string $name,
                                string $creator,
                                array $members = [])
    {
        $this->setName($name);
        $this->setCreator($creator);
        $this->addMember($members);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCreator(): string
    {
        return $this->creator;
    }

    public function setCreator(string $creator): void
    {
        $this->creator = $creator;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function addMember($member)
    {
        array_push($this->members, $member);
    }
}

$countOfTeams = intval(readline());
$teams = [];

for ($i = 0; $i < $countOfTeams; $i++) {
    // $creatorName[0]
    // $teamName[1]
    list($creatorName, $teamName) = explode("-", readline());


    if (!$creators && !$teams) {
        array_push($teams, new Team($teamName, $creatorName));
        printf("Team %s has been created by %s!" . PHP_EOL, $teamName, $creatorName);
    } elseif ($teams) {
        printf("Team %s was already created!" . PHP_EOL, $teamName);
    } elseif ($creators) {
        printf("%s cannot create another team!" . PHP_EOL, $creatorName);
    }
}

while (($input = readline()) != "end of assignment") {
    list($userName, $teamName) = explode("->", $input);

    $team = new Team($teamName, $userName);
    $isTeamExist = $team->getName() === $teamName ? 1 : 0;


    if ($isTeamExist) {
        printf("Team %s does not exist!" . PHP_EOL , $teamName);
        return;
    }
}
