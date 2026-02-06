<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class CustomException extends Exception
{
    // public function report(){}  Log saved to Default log file

    public function report(){
        Log::channel('mycustomlog')->warning('This is a Custom log');
    }

    public function render(){
        return response()->view('errors.customexception',['error' => $this->getMessage()]);
    }
}

