<?php

namespace App\Order;

use App\API\ApiInterface;
use App\Data\AbstractOrder;

class Order extends AbstractOrder
{
    public function __construct(int $id, private ApiInterface $api)
    {
        parent::__construct($id);
    }

    protected function loadOrderData(int $id): array
    {
        return $this->api->loadOrder($id);
    }
}