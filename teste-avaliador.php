<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

# Arrange - Given
$leilao = new Leilao('Fiat 147 0 Km');
$daniel = new Usuario('Daniel');
$duda = new Usuario('Duda');

$leilao->recebeLance(new Lance($daniel, 4580));
$leilao->recebeLance(new Lance($duda, 4895));

$leiloeiro = new Avaliador();

# Act - When
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

# Assert - Then
$valorEsperado = 4895;

if ($valorEsperado == $maiorValor) {
    echo 'Passou no teste';

    return;
}

echo 'Teste falhou com êxito';