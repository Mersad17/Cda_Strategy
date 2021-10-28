<?php

namespace App;

use App\Strategy;


class DoFile implements Strategy
{
    public function doSomething(string $data)
    {
        $file = 'text.txt';
        $current = file_get_contents($file);
        $current .=  $data;
        file_put_contents($file, $current);
    }
}