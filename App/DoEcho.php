<?php

namespace App;

use App\Strategy;


class DoEcho implements Strategy
{
    public function doSomething(string $data)
    {
        echo $data;


    }
}