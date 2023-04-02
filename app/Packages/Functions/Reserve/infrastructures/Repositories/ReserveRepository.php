<?php

namespace App\Packages\Functions\Reserve\infrastructures\Repositories;

use App\Packages\Functions\Reserve\Domains\Entities\ReserveEntity;
use App\Packages\Functions\Reserve\Domains\Repositories\ReserveRepositoryInterface;

class ReserveRepository implements ReserveRepositoryInterface
{
    /**
     * 予約を保存
     *
     * @param ReserveEntity $reserveEntity
     * @return void
     */
    public function save(ReserveEntity $reserveEntity): void
    {
        // 保存する。
    }
}
