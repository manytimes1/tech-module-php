<?php
// 50 pts in judge
// ToDO: Fix it for 100 pts
$tickets = preg_split('/[\s,]+/', readline(), -1, PREG_SPLIT_NO_EMPTY);

foreach ($tickets as $ticket) {
    if (strlen($ticket) !== 20) {
        echo "invalid ticket" . PHP_EOL;
        continue;
    }
    printWinningTicket($ticket);
}

function printWinningTicket(string $currentTicket)
{
    $jackpotPattern = '/(\${20}|#{20}|@{20}|\^{20})/';

    if (preg_match($jackpotPattern, $currentTicket)) {
        $matchSymbol = $currentTicket[0];
        echo "ticket \"$currentTicket\" - 10$matchSymbol Jackpot!" . PHP_EOL;
    } else {
        echo "ticket \"$currentTicket\" - no match" . PHP_EOL;
    }
}
