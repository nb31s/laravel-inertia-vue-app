<?php

namespace App\Packages\Functions\Reserve;

use App\Packages\Functions\Reserve\Domains\Repositories\ReserveRepositoryInterface;
use App\Packages\Functions\Reserve\Infrastructures\Queries\GetReservableSlotListQuery;
use App\Packages\Functions\Reserve\infrastructures\Repositories\ReserveRepository;
use App\Packages\Functions\Reserve\UseCases\GetReservableSlotListUseCase;
use App\Packages\Functions\Reserve\UseCases\Ports\GetReservableSlotListUseCaseInterface;
use App\Packages\Functions\Reserve\UseCases\Ports\ReserveUseCaseInterface;
use App\Packages\Functions\Reserve\UseCases\Queries\GetReservableSlotListQueryInterface;
use App\Packages\Functions\Reserve\UseCases\ReserveUseCase;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class ReserveFunctionServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public array $singletons = [
        GetReservableSlotListUseCaseInterface::class => GetReservableSlotListUseCase::class,
        GetReservableSlotListQueryInterface::class => GetReservableSlotListQuery::class,
        ReserveUseCaseInterface::class => ReserveUseCase::class,
        ReserveRepositoryInterface::class => ReserveRepository::class,
    ];

    /**
     * @return string[]
     */
    public function provides(): array
    {
        return array_keys($this->singletons);
    }
}
