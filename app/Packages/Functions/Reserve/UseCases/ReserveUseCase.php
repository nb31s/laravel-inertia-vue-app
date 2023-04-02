<?php

namespace App\Packages\Functions\Reserve\UseCases;

use App\Packages\Functions\Reserve\Domains\Entities\ReserveEntity;
use App\Packages\Functions\Reserve\Domains\Repositories\ReserveRepositoryInterface;
use App\Packages\Functions\Reserve\UseCases\Inputs\ReserveInputData;
use App\Packages\Functions\Reserve\UseCases\Ports\ReserveUseCaseInterface;

class ReserveUseCase implements ReserveUseCaseInterface
{
    /**
     * @param ReserveRepositoryInterface $reserveRepository
     */
    public function __construct(
        private readonly ReserveRepositoryInterface $reserveRepository
    )
    {
        //
    }

    /**
     * 予約をする
     *
     * @param ReserveInputData $reserveInputData
     * @return void
     */
    public function __invoke(ReserveInputData $reserveInputData): void
    {
        $entity = ReserveEntity::generateNew(
            name: $reserveInputData->getName(),
            reserveDateTime: $reserveInputData->getReserveDateTime()
        );

        $this->reserveRepository->save($entity);
    }
}
