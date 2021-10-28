<?php

namespace App;

use App\Strategy;


class DoEcho implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}