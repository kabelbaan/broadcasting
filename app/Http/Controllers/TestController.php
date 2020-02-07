<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MyEvent;

class TestController extends Controller
{
    public function test()
    {
        return view('welcome');
    }

    public function testFire()
    {
        event(new MyEvent('test123'));
    }
}
