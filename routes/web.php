<?php

use App\Exceptions\CustomException;
use App\Http\Controllers\ViewController;
use App\Http\Requests\CustomRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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

Route::get('/custom-exception',function() {
    try{
        return view('welcome',[
            'data' => $missingvariable
        ]);
    }
    catch(Throwable $exception){
        throw new CustomException($exception->getMessage());
    }
});

Route::get('/cache',function(){

    // Cache::put('cacheRemember','value',600);
    // Cache::forget('cacheRemember'); // delete cache by key

    // Cache::put('cacheForSeconds','Cache Value',$seconds = 10);
    // Cache::put('cacheForMinutes','Cache Value',now()->addMinutes(10));
    // Cache::store('array')->put('cacheChooseDriver','value for cacheChooseDriver key',600); //Only valid for single request
    $value = Cache::remember('cacheRemember', $seconds = 600, function () { // if key does not exist or is expired then put data to cache
        echo 'not from cache';
        return 'result of some operation, e.g. database query';
    });
    dump($value);


    // dump(Cache::get('cacheForSeconds','default'));
    // dump(cache('cacheForSeconds','default'));
    // dump(Cache::get('cacheForMinutes','default'));
    // dump(Cache::store('array')->get('cacheChooseDriver'));
    // $value = Cache::get('getFromCacheOrExecuteCallback', function () { // if key exists in cache then return its value, otherwise execute callback, but not store in cache
    //     echo 'not from cache';
    //     return 'result of some operation, e.g. database query';
    // });
    // dump($value);

    // Cache::forget('cacheFor10Minutes'); // delete cache by key
    // Cache::flush(); // clear entire cache

    if (Cache::has('cacheFor10Seconds')) {
        dump('in cache there is entry with cacheFor10Seconds key');
    }

});

Route::middleware('cache.headers:public;max_age=262800;etag')->group(function(){
    Route::get('/http-cache',function(){
        return response('http-cache');// if response is changed then etag hash will be changed, as a result web browser will load new content from server
    });
});

Route::get('/filesystem',function(){

    // Storage::put('example.txt','contents'); // store to the default disc: storage/app/example.txt
    // Storage::disk('s3')->put('example.txt','Contens'); // store to the s3 disk
    // Storage::disk('public')->put('folder1/example.txt','Contens'); // choose disk
    // Storage::disk('public')->prepend('folder1/example.txt','Prepended text');
    // Storage::disk('public')->append('folder1/example.txt','Appended text');

    // dump('fg');
    // return Storage::disk('public')->download('folder1/example.txt'); // if there is dump() before this line then it does not work

    // $contents = Storage::disk('public')->get('folder1/example.txt');
    // dump($contents);
    // $res = Storage::disk('public')->copy('folder1/example.txt', 'folder2/example.txt');
    // dump($res);
    // $res = Storage::disk('public')->move('folder1/example.txt', 'folder2/example.txt');
    // dump($res);
    // $res = Storage::disk('public')->delete('folder2/example.txt');
    // dump($res);

    //File Properties

    // dump(Storage::disk('public')->mimeType('folder1/example.txt'));
    // dump(Storage::disk('public')->size('folder1/example.txt'));

    dump(asset('storage/folder1/example.txt'));
    //php artisan storage:link
    //php artisan storage:unlink

});

Route::get('/processes-asynchronous', function () { // http://localhost:8001/processes-asynchronous

    $process = Process::start('pwd'); // __ASYNCHRONOUS__
    while ($process->running()) {
        echo 'we can do something here while process is running, for example run another process';
    }
    $result = $process->wait();
    return $result->output();
});

Route::get('/processes-synchronous', function () { // http://localhost:8001/processes-synchronous

    $result = Process::run('pwd'); // __SYNCHRONOUS__
    return $result->output();
    // Process::timeout(120)->run('bash import.sh'); //  default 60sec, max time: forever()->run('bash import.sh');

});

Route::get('/database',[ViewController::class,'viewControllerdatabase']);

Route::get('/eloquent-models',function(Request $request){
    // create
    // $post = new Post();
    // // $post->id =1;
    // $post->title = 'post title'; // can be from $request->name
    // $post->content = 'post content';
    // $post->user_id = 1;
    // // $post->timestamps();
    // dump($post->save());
    // Post::create(['title' => 'post title', 'content' => 'post content', 'user_id' => 1]); // __MASS_ASSIGNMENT__

    // // find, update
    $post = Post::find(2);
    $post->title = 'updated title';
    dump($post->save());

    // // __MODEL_EVENTS__
    // $post = Post::withoutEvents(function () {
    //     $post = Post::find(1);
    //     $post->title = 'updated title2';
    //     return $post->save();
    // });
    // dump($post);

    // // get all
    // dump(Post::get());
    // dump(Post::withTrashed()->get());

    // // delete
    // $post = Post::find(2);
    // dump($post->delete());
    // Post::truncate();
    // Post::destroy([3,4,5,6]);

    // dump(Post::olderThanYear()->orderBy('created_at')->get()); // query scope
});

Route::get('/one-to-one',function(){
    dump(User::find(2)->passport->issuing_country);
});

Route::redirect('/home','/');

Route::fallback(function(){
    return view('errors.404');
});
