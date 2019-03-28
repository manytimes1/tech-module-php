<?php
$results = [];
$submissions = [];

while (($input = readline()) !== "exam finished") {
    list($username, $language, $points) = explode("-", $input);

    if ($language !== "banned") {
        if (!key_exists($username, $results)) {
            $results[$username] = $points;
        } else {
            if ($results[$username] < $points) {
                $results[$username] = $points;
            }
        }

        if (!key_exists($language, $submissions)) {
            $submissions[$language] = 1;
        } else {
            $submissions[$language]++;
        }
    } else {
        unset($results[$username]);
        continue;
    }
}

array_multisort(array_values($results), SORT_DESC,
    array_keys($results), SORT_ASC, $results
);
echo "Results:" . PHP_EOL;

foreach ($results as $username => $points) {
    echo "$username | $points" . PHP_EOL;
}

array_multisort(array_values($submissions), SORT_DESC,
    array_keys($submissions), SORT_ASC, $submissions
);
echo "Submissions:" . PHP_EOL;

foreach ($submissions as $language => $submissionCount) {
    echo "$language - $submissionCount" . PHP_EOL;
}
