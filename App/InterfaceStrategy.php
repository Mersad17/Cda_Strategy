<?php

namespace App;


interface Strategy
{
    public function doSomething(array $data): array;
}