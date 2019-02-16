<?php
$pounds = doubleval(readline());
$dollars = round($pounds * 1.31, 3);
printf("%.3f", $dollars);
