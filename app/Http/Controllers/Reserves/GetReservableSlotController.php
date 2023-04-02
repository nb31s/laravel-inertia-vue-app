<?php

namespace App\Http\Controllers\Reserves;

use App\Http\Controllers\Controller;
use App\Packages\Functions\Reserve\UseCases\Inputs\GetReservableSlotListInputData;
use App\Packages\Functions\Reserve\UseCases\Ports\GetReservableSlotListUseCaseInterface;
use Inertia\Inertia;
use Inertia\Response;

class GetReservableSlotController extends Controller
{
    /**
     * @param GetReservableSlotListUseCaseInterface $getReservableSlotListUseCase
     * @return Response
     */
    public function __invoke(GetReservableSlotListUseCaseInterface $getReservableSlotListUseCase): Response
    {
        $input = GetReservableSlotListInputData::generate('a');
        $output = $getReservableSlotListUseCase->__invoke($input);

        return Inertia::render('Reserve/ReservableSlotList', [
            'reservableSlotList' => $output,
        ]);
    }
}
