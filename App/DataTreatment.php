<?php

namespace App;


class DataTreatment
{

    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
        
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic($data)
    {

        $result = $this->strategy->doSomething($data);

    }
}
