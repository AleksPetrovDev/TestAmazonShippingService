<?php

namespace App\API;

class ApiMock implements ApiInterface
{

    /**
     * @param int $id
     * @return array
     */
    public function loadOrder(int $id): array
    {
        return [];
        // TODO: Implement loadOrder() method.
    }

    /**
     * @return string
     */
    public function getTrackingNumber(): string
    {
        return "Tracking number: TODO";
        // TODO: Implement getTrackingNumber() method.
    }
}