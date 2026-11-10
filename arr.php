<?php
$num = [];

for ($i = 0; $i < 50; $i++) {
    $num[] = mt_rand(1, 100);
}

echo implode(", ", $num);
?>