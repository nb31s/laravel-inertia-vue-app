<?php

namespace App\Packages\Functions\Reserve\UseCases\Inputs;

class GetReservableSlotListInputData
{
    /**
     * @param string $storeId
     */
    public function __construct(
        private readonly string $storeId
    )
    {
        //
    }

    /**
     * @param string $storeId
     * @return self
     */
    public static function generate(
        string $storeId,
    ): self
    {
        return new self(storeId: $storeId);
    }

    /**
     * @return string
     */
    public function getStoreId(): string
    {
        return $this->storeId;
    }
}
