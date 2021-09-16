<?php

    require_once "vendor/autoload.php";

    Test::method();
    echo "<br>";
    Test2::method();
    
    echo "<br>";
    echo "<br>";

    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;
    use Gfsilveira\Buscador\Buscador;

    $client = new Client(['base_uri' => 'https://www.alura.com.br/']);
    $crawler = new Crawler();

    $buscador = new Buscador($client, $crawler);
    $cursos = $buscador->buscar('cursos-online-programacao/php');

    foreach ($cursos as $curso) {
        exibe($curso);
    }