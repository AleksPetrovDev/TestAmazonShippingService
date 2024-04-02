<?php

namespace App\API;

/**
 * TODO: We need to implement this part before run in production
 */
interface ApiInterface
{
    /**
     * @param int $id ID of order
     * @return array
     */
    public function loadOrder(int $id): array;

    /**
     * @return string
     */
    public function getTrackingNumber(): string;
}