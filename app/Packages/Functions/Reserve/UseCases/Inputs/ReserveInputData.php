<?php

namespace App\Packages\Functions\Reserve\UseCases\Inputs;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

class ReserveInputData
{
    /**
     * @param string $userId
     */
    public function __construct(
        private readonly string $name,
        private readonly string $reserveDateTime
    )
    {
        //
    }

    /**
     * @param string $name
     * @return self
     */
    public static function generate(
        string $name,
        string $reserveDateTime,
    ): self
    {
        return new self(
            name: $name,
            reserveDateTime: $reserveDateTime,
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
        return new CarbonImmutable($this->reserveDateTime);
    }
}
