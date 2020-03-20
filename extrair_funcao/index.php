<?php

declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => 5000,
];

function displayCurrentist(string $name, array $saldos)
{
    if (array_key_exists($name, $saldos)) {
        displayMensage($name, $saldos);
    } else {
        displayError();
    }
}

function displayMensage(string $name, array $saldos)
{
    echo "<p>O saldo do $name é: {$saldos[$name]} </p>";
}

function displayError()
{
    echo "<p>Correntista não existente.</p>";
}

displayCurrentist('Giovanni', $saldos);
