<?php

namespace App\Packages\Functions\Reserve\Domains\Entities;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

class ReserveEntity
{
    /**
     * 予約ドメイン
     *
     * @param string $name
     * @param CarbonInterface $reserveDateTime
     * @param CarbonInterface $reservedAt
     */
    public function __construct(
        private readonly string $name,
        private readonly CarbonInterface $reserveDateTime,
        private readonly CarbonInterface $reservedAt,
    )
    {
        //
    }

    /**
     * 新規予約の状態
     *
     * @param string $name
     * @param CarbonInterface $reserveDateTime
     * @return self
     */
    public static function generateNew(
        string $name,
        CarbonInterface $reserveDateTime,
    ): self
    {
        return new self(
            name: $name,
            reserveDateTime: $reserveDateTime,
            reservedAt: CarbonImmutable::now()
        );
    }

    /**
     * 予約済みの状態
     *
     * @param string $name
     * @param CarbonInterface $reserveDatetime
     * @return self
     */
    public static function generateReserved(
        string $name,
        CarbonInterface $reserveDateTime,
        CarbonInterface $reservedAt,
    ): self
    {
        return new self(
            name: $name,
            reserveDateTime: $reserveDateTime,
            reservedAt: $reservedAt
        );
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return CarbonInterface
     */
    public function getReserveDateTime(): CarbonInterface
    {
        return $this->reserveDateTime;
    }

    /**
     * @return CarbonInterface
     */
    public function getReservedAt(): CarbonInterface
    {
        return $this->reservedAt;
    }
}
