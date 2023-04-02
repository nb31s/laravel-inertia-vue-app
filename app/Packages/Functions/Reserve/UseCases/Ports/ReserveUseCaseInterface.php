<?php

namespace App\Packages\Functions\Reserve\UseCases\Ports;

use App\Packages\Functions\Reserve\UseCases\Inputs\ReserveInputData;

interface ReserveUseCaseInterface
{
    /**
     * 予約をする
     *
     * @param ReserveInputData $reserveInputData
     * @return void
     */
    public function __invoke(ReserveInputData $reserveInputData): void;
}
