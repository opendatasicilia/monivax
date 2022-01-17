<?php
require __DIR__ .'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

// Ottengo la Request dal Web
$request = Request::createFromGlobals();

// Parametri passati in GET
$istat = $request->query->get('istat','082053');
$height = $request->query->get('height','400');
$width = $request->query->get('width','200');
$sizeTitle = $request->query->get('size-title','20');

// Chiamo API del progetto COVID OPEN REPORT
$url = "https://covid-open-report-sicilia.herokuapp.com/vaccini/latest?q=".$istat;
$client =  HttpClient::create();
$response = $client->request(
    'GET',
    $url
);

$statusCode = $response->getStatusCode();
if ($statusCode == 200) {
    $content = $response->toArray()[0];
    $comune = $content['comune'];
    $vaccinati = $content['seconda_dose'];
    $dataPieces = explode("-", $content['data']);
    $data = $dataPieces[2]."/".$dataPieces[1]."/".$dataPieces[0];
    
} else {
    print("Error");
}

// Configuro il grafico con QuickChart
$config = <<<START
{
    type: 'radialGauge',
    data: {
        datasets: [{
        data: [$vaccinati],
        backgroundColor: getGradientFillHelper('horizontal', ['green', 'green']),
        label: '% Vaccinati',
        }]
    },
    options: {
        domain: [0, 100],
        trackColor: '#f0f8ff', 
        centerPercentage: 70,
        centerArea: {
            displayText: true,
            text: (val) => val + '%',
            subText:'$data',
        },
        title: {
            text: 'Vaccinati 2° Dose $comune',
            display: true,
            fontSize: $sizeTitle,
        },
    }
    }
START;


$qc = new QuickChart(array(
    'width'=> $width,
    'height'=> $height,
    //'protocol'=>'',
    //'host'=>'',
    //'port'=>''
  ));

$qc->setConfig($config);
$image = $qc->toBinary();

// OUTPUT IMMAGINE
header('Content-Type: image/png');
print($image);