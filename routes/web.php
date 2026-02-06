<?php

use App\Http\Requests\CustomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/validations', function() {
    return view('form.validations');
});

Route::post('/validations', function(CustomRequest $request) {
    // dump($request->validated());
    // dump($request->payment);
    return "<h1>Form sent</h1>";
});

Route::get('/multiple-form',function(){
    return view('form.multiple-form');
});

Route::post('/multiple-form',function(Request $request){
    if($request->has('firstform')){
        // dump('first');
        $firstvalidator = Validator::make($request->all(),[
            'email' => 'email'
        ]);
        if($firstvalidator->fails()){
            return redirect() -> back()
                                ->withErrors($firstvalidator,'firstform')
                                ->withInput();
        }
        dump($firstvalidator->validated());
    }
    else if($request->has('secondform')){
        // dump('second');
        $secondvalidator = Validator::make($request->all(),[
            'title' => 'string|max:15'
        ]);
        if($secondvalidator->fails()){
            return redirect() -> back()
                                ->withErrors($secondvalidator,'secondform')
                                ->withInput();
        }
        dump($secondvalidator->validated());
    }
    sleep(3);
    return redirect('/list-of-posts');
});

Route::get('/logging',function(){
    // Log::info('drgd');
    // Log::alert('This is a custom log');
    // Log::emergency('This is a custom log');
    // Log::channel('mycustomlog')->emergency('This is a custom log');
    // Log::channel('mycustomlog')->alert('This is a custom log');
    // Log::channel('mycustomlog')->critical('This is a custom log');
    // Log::channel('mycustomlog')->warning('This is a custom log');
    // Log::channel('mycustomlog')->notice('This is a custom log');
    // Log::channel('mycustomlog')->info('This is a custom log');
    // Log::channel('mycustomlog')->debug('This is a custom log');

    Log::stack(['single','mycustomlog'])->info('Logged to couple of channels');
});

// Route::fallback(function(){
//     return "URL does not exist<br>Fallback used";
// });
