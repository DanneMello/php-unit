<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require 'vendor/autoload.php';

$leilao = new Leilao('Fiat 147 0 Km');
$daniel = new Usuario('Daniel');
$duda = new Usuario('Duda');

$leilao->recebeLance(new Lance($daniel, 4580));
$leilao->recebeLance(new Lance($duda, 4895));

$leiloeiro = new Avaliador();
