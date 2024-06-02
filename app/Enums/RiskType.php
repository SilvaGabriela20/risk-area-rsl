<?php

namespace App\Enums;

class RiskType
{
    const DESMORONAMENTO = 'Desmoronamento';
    const ENXURRADA = 'Enxurrada';
    const ENCHENTE = 'Enchente';

    public static function getValues()
    {
        return [
            self::DESMORONAMENTO,
            self::ENXURRADA,
            self::ENCHENTE,
        ];
    }
}