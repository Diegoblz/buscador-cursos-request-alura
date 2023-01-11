<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorDeCursos\Buscador;



$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    exibirMensagem($curso);
}


// $resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

// $html = $resposta->getBody();

// // $crawler = new Crawler();
// // $crawler->addHtmlContent($html);

// $buscador = new Buscador($client, $crawler);
// $cursos = $buscador->buscar('/cursos-online-programacao/php');

// // $cursos = $crawler->filter('span.card-curso__nome');

// foreach ($cursos as $curso) {
//     echo $curso->textContent . PHP_EOL;
// }