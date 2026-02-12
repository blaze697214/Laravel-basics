<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    //
    public function viewControllerdatabase(){

        dump(DB::select('select * from users where id = ?', [1]));
        DB::select('select * from users where id = ? and sleep(1)', [1]);
        dump(DB::select('select * from users where id = :id', ['id' => 1])); // named binding
        dump(DB::select('select count(id) as users_number from users'));
        dump(DB::scalar(
            'select count(1) from users'
        )); // single value

        //choose connection
        // dump(DB::connection('sqlite')->select('select * from users'));
        dump(DB::select('select * from users')); // default connection

        
        dump(DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['john', 'Marc@email.com', 'password']));
        
        dump(DB::update(
            'update users set name = "updated" where id = ?',
            [2]
        ));
        
        // dump(DB::delete('delete from users where id = ?', [1]));
        // dump(DB::statement('truncate table users'));
        // dump(DB::statement('drop table users')); // delete table

        //transactions
        // DB::transaction(function () {
        //     DB::update('update users set name = "new name" where id = 1');
        //     // ...
        //     // throw new Exception;
        //     DB::update('update users set name = "new name2" where id = 2');
        // }, 5); // 5 attempts
        // dump(DB::pretend(function () {
        //     User::where('name2', 'Tre Walker')
        //             ->orderBy('id')
        //             ->take(10);
        //     }));
    }
}
