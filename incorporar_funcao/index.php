<?php declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => -1000
];

verificaSeSaldoEstaPositivo('Giovanni', $saldos);
verificaSeSaldoEstaPositivo('Erika', $saldos);

function verificaSeSaldoEstaPositivo(string $nome, array $saldos): void
{
    if ($saldos[$nome] > 0) {
        imprimeMensagemPositiva($nome);
    } else {
        imprimeMensagemNegativa($nome);
    }
}

function imprimeMensagemPositiva(string $nome): void
{
    echo "<p>A conta de $nome possui um saldo positivo.</p>";
}

function imprimeMensagemNegativa(string $nome): void
{
    echo "<p>A conta de $nome não possui um saldo positivo</p>";
}