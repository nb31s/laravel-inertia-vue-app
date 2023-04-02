<?php

namespace App\Packages\Functions\Reserve\UseCases\Outputs;

use Carbon\CarbonInterface;

class GetReservableSlotListOutputItem
{
    /**
     * @param CarbonInterface $reservableDateTime
     */
    public function __construct(
        private readonly CarbonInterface $reservableDateTime,
    )
    {
        //
    }

    /**
     * @param CarbonInterface $reservableDateTime
     * @return self
     */
    public static function generate(
        CarbonInterface $reservableDateTime
    ): self
    {
        return new self(
            reservableDateTime: $reservableDateTime
        );
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'reservableDateTime' => $this->reservableDateTime->toAtomString()
        ];
    }
}
