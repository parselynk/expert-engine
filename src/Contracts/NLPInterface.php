<?php

namespace NLP\Contracts;

interface NLPInterface
{
    /**
     * @param string $text
     * @return DealParameterBag
     */
    public function getParamsFromText(string $text): DealParameterBag;
}
