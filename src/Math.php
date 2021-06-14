<?php

namespace ProgrammerZamanNow\Test;

class Math
{

    public static function sum(array $values): int
    {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }
        return $total;
    }

}
