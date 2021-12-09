<?php

namespace App\Packages\Common;



class CalculationRepository
{
    private $operationFunction = ['+' => 'plus', '-' => 'minus', '*' => 'multiply', '/' => 'divide'];

    public function calculation(float $var1, float $var2, string $operator): float
    {
        $function = $this->operationFunction[$operator] ?? null;
        if ($function === null) {
            throw new Exception('Invalid Operator');
        }

        return $this->$function($var1, $var2);
    }

    public function plus(float $var1, float $var2)
    {
        return $var1 + $var2;
    }

    public function minus(float $var1, float $var2)
    {
        return $var1 - $var2;
    }

    public function divide(float $var1, float $var2)
    {
        return $var1 / $var2;
    }

    public function multiply(float $var1, float $var2)
    {
        return $var1 * $var2;
    }
}
