<?php

namespace App\Packages\Functions\Reserve\UseCases\Ports;

use App\Packages\Functions\Reserve\UseCases\Inputs\GetReservableSlotListInputData;
use App\Packages\Functions\Reserve\UseCases\Outputs\GetReservableSlotListOutputItem;

interface GetReservableSlotListUseCaseInterface
{
    /**
     * 予約枠一覧を返す
     *
     * @param GetReservableSlotListInputData $getReservableSlotListInputData
     * @return GetReservableSlotListOutputItem[]
     */
    public function __invoke(GetReservableSlotListInputData $getReservableSlotListInputData): array;
}
