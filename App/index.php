<?php

require_once "autoload.php";
use App\DataTreatment;
use App\DoEcho;
use App\DoFile;

$data ='JameS';
$context = new DataTreatment(new DoEcho());
$context->doSomeBusinessLogic($data);

$context->setStrategy(new DoFile());

$context->doSomeBusinessLogic($data);

