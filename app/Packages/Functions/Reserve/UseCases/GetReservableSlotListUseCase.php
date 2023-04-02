<?php

namespace App\Packages\Functions\Reserve\UseCases;

use App\Packages\Functions\Reserve\UseCases\Inputs\GetReservableSlotListInputData;
use App\Packages\Functions\Reserve\UseCases\Outputs\GetReservableSlotListOutputItem;
use App\Packages\Functions\Reserve\UseCases\Ports\GetReservableSlotListUseCaseInterface;
use App\Packages\Functions\Reserve\UseCases\Queries\GetReservableSlotListQueryInterface;
use RuntimeException;

class GetReservableSlotListUseCase implements GetReservableSlotListUseCaseInterface
{
    /**
     * @param GetReservableSlotListQueryInterface $getReservableSlotListQuery
     */
    public function __construct(
        private readonly GetReservableSlotListQueryInterface $getReservableSlotListQuery
    )
    {
        //
    }

    /**
     * 予約枠一覧を返す
     *
     * @param GetReservableSlotListInputData $getReservableSlotListInputData
     * @return GetReservableSlotListOutputItem[]
     */
    public function __invoke(GetReservableSlotListInputData $getReservableSlotListInputData): array
    {
        $reservableSlotList = $this->getReservableSlotListQuery->fetchByStoreId($getReservableSlotListInputData->getStoreId());
        if ($reservableSlotList === []) {
            throw new RuntimeException('reservableSlotList is not found.');
        }

        $res = [];
        foreach ($reservableSlotList as $reservableSlotItem) {
            $res[] = GetReservableSlotListOutputItem::generate($reservableSlotItem->reservableDateTime)->toArray();
        }

        return $res;
    }
}
