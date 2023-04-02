<?php

namespace App\Packages\Functions\Reserve\UseCases\Queries;

interface GetReservableSlotListQueryInterface
{
    /**
     * @return stdClass[]
     */
    public function fetchByStoreId(string $storeId): array;
}
