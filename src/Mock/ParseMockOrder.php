<?php

namespace App\Mock;

class ParseMockOrder extends ParseMockAbstract
{
    /**
     * @return string
     */
    protected function getMockFile(): string
    {
        return __ROOT__ . '/mock/order.16400.json';
    }
}