<?php

namespace App;

use App\Strategy;


class DoFile implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}