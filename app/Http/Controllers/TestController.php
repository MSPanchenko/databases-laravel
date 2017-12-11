<?php

namespace App\Http\Controllers;

use App\Test;

class TestController extends Controller
{
    //create service which get view or api json if request from site or platform
    function __construct(Test $test)
    {
        echo '__construct';
    }

    public function test()
    {
        echo 'test';
    }
}
