<?php

namespace App\Mock;

interface ParseMock
{
    /**
     * parse mock files
     * @return mixed
     */
    public function parse();

    /**
     * return parsed result
     * @return array
     */
    public function getResult(): array;
}