<?php

namespace App\Packages\Functions\Reserve;

use App\Packages\Functions\Reserve\Infrastructures\Queries\GetReservableSlotListQuery;
use App\Packages\Functions\Reserve\UseCases\GetReservableSlotListUseCase;
use App\Packages\Functions\Reserve\UseCases\Ports\GetReservableSlotListUseCaseInterface;
use App\Packages\Functions\Reserve\UseCases\Queries\GetReservableSlotListQueryInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class ReserveFunctionServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public array $singletons = [
        GetReservableSlotListUseCaseInterface::class => GetReservableSlotListUseCase::class,
        GetReservableSlotListQueryInterface::class => GetReservableSlotListQuery::class,
    ];

    /**
     * @return string[]
     */
    public function provides(): array
    {
        return array_keys($this->singletons);
    }
}
