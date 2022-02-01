<?php
namespace TDD;

class Calculator
{
    public function sumArray(array $array): int {
        return array_sum($array);
    }

    public function calcBtw(int $price): float {
        return ($price / 100) * 121;
    }
}