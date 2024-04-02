<?php

namespace App;

use App\API\ApiInterface;
use App\API\ApiMock;
use App\Buyer\Buyer;
use App\Mock\ParseMockBuyer;
use App\Mock\ParseMockOrder;
use App\Order\Order;

class MainClass
{

    /**
     * @var Buyer
     */
    private Buyer $buyer;
    /**
     * @var Order
     */
    private Order $order;
    /**
     * @var ApiInterface
     */
    private ApiInterface $api;

    public function __construct()
    {
        $this->api = new ApiMock();
        $mockBuyer = (new ParseMockBuyer())->getResult();
        $this->buyer = new Buyer(...$mockBuyer);
        $mokOrder = (new ParseMockOrder())->getResult();
        $this->order = new Order($mokOrder['id'], $this->api);
    }

    /**
     * @return string
     */
    public function run(): string
    {
        try {
            return (new ShippingService($this->api))->ship($this->order, $this->buyer);
        } catch (\RuntimeException $exception){
            return "Error message: ".$exception->getMessage();
        }
    }
}