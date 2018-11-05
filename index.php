<?php
/**
 * Created by PhpStorm.
 * User: r.karkehadabi
 * Date: 05.11.18
 * Time: 13:54
 */

require_once 'vendor/autoload.php';

use Aws\Comprehend\ComprehendClient;
use NLP\Services\NLPApi;

/**
 * configuration
 */

$sharedConfig = [
    'profile' => 'default',
    'region' => 'us-east-2',
    'version' => 'latest'
];

/**
 * initilize ComprehendClient
 */
$comprehand = new ComprehendClient($sharedConfig);

/**
 * initialize API
 */
$library = new NLPApi($comprehand);


/**
 * example of how to call API
 * $result = $library->getParamsFromText('Here I am at berlin hackathon and checking this today and paris also yesterday');
 */
