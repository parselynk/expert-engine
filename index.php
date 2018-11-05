<?php
/**
 * Created by PhpStorm.
 * User: r.karkehadabi
 * Date: 05.11.18
 * Time: 13:54
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';


use Aws\Comprehend\ComprehendClient;
use NLP\Services\NLPApi;

$sharedConfig = [
    'profile' => 'default',
    'region' => 'us-east-2',
    'version' => 'latest'
];

$comprehand = new ComprehendClient($sharedConfig);
$library = new NLPApi($comprehand);

//$result = $comprehand->detectEntities(['Text'=>'Here I am at berlin hackathon and checking this today', 'LanguageCode' => 'en']);

$result = $library->detectEntities('Here I am at berlin hackathon and checking this today');

//var_dump($result);

//var_dump($result);