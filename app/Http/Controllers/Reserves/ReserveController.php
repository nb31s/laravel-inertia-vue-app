<?php

namespace App\Http\Controllers\Reserves;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reserves\ReserveRequest;
use App\Packages\Functions\Reserve\UseCases\Inputs\ReserveInputData;
use App\Packages\Functions\Reserve\UseCases\Ports\ReserveUseCaseInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ReserveController extends Controller
{
    /**
     * 予約をする
     *
     * @param ReserveRequest $request
     * @param ReserveUseCaseInterface $reserveUseCase
     * @return RedirectResponse
     */
    public function __invoke(
        ReserveRequest $request,
        ReserveUseCaseInterface $reserveUseCase
         ): RedirectResponse
    {
        $input = ReserveInputData::generate(
            name: $request->input('name'),
            reserveDateTime: $request->input('reserveDateTime'),
        );

        $reserveUseCase->__invoke($input);

        return Redirect::route('reserves');
    }
}
