<?php

namespace NLP\Library;

use NLP\Contracts\NLPInterface;

class DealParameterBag implements NLPInterface
{
    private $prices;
    private $dates;
    private $locations;

    /**
     * DealParameterBag constructor.
     * @param array $prices
     * @param array $dates
     * @param array $locations
     */
    public function __construct(array $prices = [], array $dates = [], array $locations = [])
    {
        $this->prices = $prices;
        $this->dates = $dates;
        $this->locations = $locations;
    }

    /**
     * @param string $text
     * @return DealParameterBag
     */
    public function getParamsFromText(string $text): DealParameterBag
    {
        return $this;
    }
}
