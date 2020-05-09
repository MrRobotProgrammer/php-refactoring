<?php 
declare(strict_types=1);

function retangulo(int $altura, int $largura): void
{

    // $temp = 2 * ($altura + $largura);
    // echo "Perímetro: $temp" . PHP_EOL;

    // $temp = $altura * $largura;
    // echo "Área: $temp" . PHP_EOL;

    $parametro = 2 * ($altura + $largura);
    $are = $altura * $largura;

    echo "Parametro: $parametro <br>";
    echo "Area: $are";

}

retangulo(3, 10);
