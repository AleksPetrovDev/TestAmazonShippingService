<?php

namespace App\Mock;

abstract class ParseMockAbstract implements ParseMock
{
    /**
     * @var array
     */
    private array $orderData;

    /**
     * @return string
     */
    abstract protected function getMockFile(): string;
    public function parse()
    {
        $file = $this->getMockFile();
        $file_open = fopen($file, 'r');
        $data = fread($file_open, filesize($file));
        fclose($file_open);
        $this->orderData = json_decode($data, true);
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        $this->parse();
        return $this->orderData;
    }
}