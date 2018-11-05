<?php

namespace NLP\Services;

use NLP\Library\DealParameterBag;
use NLP\Contracts\NLPInterface;

class NLPApi implements NLPInterface
{
    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    protected function sortEntities($entities)
    {
        $location = [];
        $date = [];
        $entities = $entities['Entities'];
        for ($i = 0; $i < count($entities); $i++) {
            foreach ($entities[$i] as $key => $value) {
                if ($key === 'Type' && $value === 'LOCATION') {
                    $location[] =  $entities[$i]['Text'];
                } elseif ($key === 'Type' && $value === 'DATE') {
                    $date[] =  $entities[$i]['Text'];
                }
            }
        }

        return [ 'dates' => $date, 'locations' => $location ];
    }

    /**
     * @param string $text
     * @return DealParameterBag
     */
    public function getParamsFromText(string $text): DealParameterBag
    {
        // response from AWS comprehand
        $response = $this->client->detectEntities(['Text'=>$text, 'LanguageCode' => 'en']);

        // sort entities
        $sortedEntities = $this->sortEntities($response);

        // return parameters
        return new DealParameterBag($sortedEntities['dates'], $sortedEntities['locations']);
    }
}
