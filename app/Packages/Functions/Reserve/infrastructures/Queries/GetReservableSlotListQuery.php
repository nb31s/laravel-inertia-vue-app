<?php

namespace App\Packages\Functions\Reserve\infrastructures\Queries;

use App\Packages\Functions\Reserve\UseCases\Queries\GetReservableSlotListQueryInterface;
use Carbon\CarbonImmutable;

class GetReservableSlotListQuery implements GetReservableSlotListQueryInterface
{
    /**
     * ストアIDを元に予約枠一覧を返す
     *
     * @return stdClass[]
     */
    public function fetchByStoreId(string $storeId): array
    {
        return [
            (object)[
                'reservableDateTime' => CarbonImmutable::now(),
            ],
            (object)[
                'reservableDateTime' => CarbonImmutable::now()->addMinutes(30),
            ],
        ];
    }
}
