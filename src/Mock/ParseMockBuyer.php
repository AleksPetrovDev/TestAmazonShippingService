<?php

namespace App\Mock;

class ParseMockBuyer extends ParseMockAbstract
{
    /**
     * @return string
     */
    protected function getMockFile(): string
    {
        return __ROOT__ . '/mock/buyer.29664.json';
    }
}