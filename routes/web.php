<?php
use \App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $hello = "CU";
    return view('welcome', compact('hello'));
});


// Route::get('/model', function () {
//     // $products = \App\Product::all();

//     // $user = new \App\User();

//     $user =  User::find(1);
//     $user->name = 'PIRU';
//     // $user->email = 'email@teste.com';
//     // $user->password = bcrypt('12345678');

//     // $user->save(); //SERVE PARA CRIAR UM NOVO REGISTRO OU ALTERAR
    
//     return $user;
    
//     // return $products;
// });

Route::get('/model/teste', function () {

    return '<h1> PINTO </h1>';
    
});

Route::get('/model', function () {
    //return User::all();
    //  return User::where('name', 'Douglas')->get();
    // return User::where('name', 'Dee Jast')->first();
    // return User::paginate(10);


    //NECESSITA DO FILLABLE NO MODEL 
        // $user = User::create([
        //     'name' => 'Douglas',
        //     'email' => 'db@cmi.com',
        //     'password' => bcrypt('123123')
        // ]);


    // $user = User::find(4);

    // return $user->store;

    $loja = \App\Store::find(8);
    return $loja->products;

});