<?php


namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MyExceptions extends Exception
{

    public function report()
    {
        Log::error('khat1');
    }


    public function render(Request $request)
    {

        return response()->view('err', ["message" => 'hi']);
    }
}
