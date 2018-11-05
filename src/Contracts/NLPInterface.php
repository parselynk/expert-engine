<?php

namespace NLP\Contracts;

use NLP\Library\DealParameterBag;

interface NLPInterface
{
    /**
     * @param string $text
     * @return DealParameterBag
     */
    public function getParamsFromText(string $text): DealParameterBag;
}
