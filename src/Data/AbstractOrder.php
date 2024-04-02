<?php

namespace App\Data;

abstract class AbstractOrder
{

    private int $id;
    public ?array $data;

    /**
     * @param int $id
     * @return array
     */
    abstract protected function loadOrderData(int $id): array;

    /**
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    final public function getOrderId(): int
    {
        return $this->id;
    }

    /**
     * @return void
     */
    final public function load(): void
    {
        $this->data = $this->loadOrderData($this->getOrderId());
    }

}
