<?php

namespace NLP\Library;

class DealParameterBag
{
    private $dates;
    private $locations;

    /**
     * DealParameterBag constructor.
     * @param array $dates
     * @param array $locations
     */
    public function __construct(array $dates = [], array $locations = [])
    {
        $this->dates = $dates;
        $this->locations = $locations;
    }

    /**
     * @return mixed
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @return array
     */
    public function getLocations(): array
    {
        return $this->locations;
    }
}
