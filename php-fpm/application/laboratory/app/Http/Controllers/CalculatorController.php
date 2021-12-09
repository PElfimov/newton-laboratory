<?php

namespace App\Http\Controllers;


use App\Packages\Common\CalculationRepository;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculation(Request $request, CalculationRepository $calculationRepository)
    {
        $validatedInput = $this->validate(
            $request,
            ['var1' => 'required|int', 'var2' => 'required|int', 'operator' => 'required|in:+,-,*,/']
        );


        ['var1' => $var1, 'var2' => $var2, 'operator' => $operator] = $validatedInput;

        $result = $calculationRepository->calculation($var1, $var2, $operator);

        return response()->json(['result' => $result]);
    }
}
