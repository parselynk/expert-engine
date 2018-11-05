<?php

namespace NLP\Services;

use NLP\Library\DealParameterBag;

class NLPApi
{
    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @param $text
     */
    public function detectEntities(string $text): void
    {
        $response = $this->client->detectEntities(['Text'=>$text, 'LanguageCode' => 'en']);
        $this->sortEntities($response);
    }

    protected function sortEntities($entities){
    }

    protected function prepareResponse(DealParameterBag $layout)
    {

    }
}
