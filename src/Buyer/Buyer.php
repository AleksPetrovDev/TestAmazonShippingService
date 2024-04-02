<?php

namespace App\Buyer;

use App\Data\BuyerInterface;

class Buyer implements BuyerInterface
{
    /**
     * @param int $country_id
     * @param string $country_code
     * @param string $country_code3
     * @param string $shop_username
     * @param string $email
     * @param string $phone
     * @param string $address
     * @param string $name
     * @param array $data
     */
    public function __construct(
        private int    $country_id,
        private string $country_code,
        private string $country_code3,
        private string $shop_username,
        private string $email,
        private string $phone,
        private string $address,
        private string $name = '',
        private array  $data = []
    )
    {
    }

    /**
     * @param $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    /**
     * @param $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->data[$offset];
    }

    /**
     * @param $offset
     * @param $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->data[$offset] = $value;
    }

    /**
     * @param $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }
}