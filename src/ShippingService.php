<?php

namespace App;

use App\API\ApiInterface;
use App\Data\AbstractOrder;
use App\Data\BuyerInterface;

class ShippingService implements ShippingServiceInterface
{
    /**
     * @param ApiInterface $api
     */
    public function __construct(private ApiInterface $api)
    {
    }

    /**
     * @param AbstractOrder $order
     * @param BuyerInterface $buyer
     * @return string
     */
    public function ship(AbstractOrder $order, BuyerInterface $buyer): string
    {
        return $this->api->getTrackingNumber();
    }
}