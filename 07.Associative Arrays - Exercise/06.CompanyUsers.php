<?php
$companies = [];

while (($input = readline()) != "End") {
    $data = explode(" -> ", $input);
    list($companyName, $employeeId) = $data;

    if (!key_exists($companyName, $companies)) {
        $companies[$companyName] = [];
    }

    if (!in_array($employeeId, $companies[$companyName])) {
        array_push($companies[$companyName], $employeeId);
    }
}
ksort($companies);

foreach ($companies as $company => $employees) {
    echo $company . PHP_EOL;

    foreach ($employees as $employee) {
        echo "-- $employee" . PHP_EOL;
    }
}
