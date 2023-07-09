<?php

function pulaLinha() {
    echo "<br>";
    echo "<br>";
}

$csv = ',.Marcos Aleixo,35,.';

echo trim($csv, ',.');
pulaLinha();

echo ltrim($csv, ',.');
pulaLinha();

echo rtrim($csv, ',.');
pulaLinha();