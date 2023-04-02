<?php

namespace App\Packages\Functions\Reserve\Domains\Repositories;

use App\Packages\Functions\Reserve\Domains\Entities\ReserveEntity;

interface ReserveRepositoryInterface
{
    /**
     * 予約を保存
     *
     * @param ReserveEntity $reserveEntity
     * @return void
     */
    public function save(ReserveEntity $reserveEntity): void;
}
