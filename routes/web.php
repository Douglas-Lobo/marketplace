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

    // $loja = \App\Store::find(7);
    // return $loja->products->where('id',7)->get();

    // $loja = \App\Store::find(7);
    // return $loja->products()->count();

    // $dono = User::find(2);
    // return $dono->store()->count(); 

    //criar uma loja pra um usuario
    // $user = User::find(10);
    // $user->store()->create([
    //     'name'=> 'Loja teste',
    //     'description'=> 'Loja teste sei la uma coisa ai',
    //     'mobile_phone'=>  '12312312',
    //     'phone'=>  '123123',
    //     'slug'=>  'loja-teste'
    // ]);

    //Criar um produto para uma loja
    // $store = \App\Store::find(41);
    // $prod = $store->products()->create([
    //     'name' => 'Produto teste',
    //     'description' => 'teste teste sei la',
    //     'body' => 'body meu pau',
    //     'price' => 2999.30,
    //     'slug' => 'produto-teste'

    // ]);
    //     dd($prod);


    //criar uma categoria
    // \App\Category::create([
    //     'name' => 'games',
    //     'description' => 'para gamerss',
    //     'slug' => 'games',

    // ]);

    // \App\Category::create([
    //     'name' => 'notebooks',
    //     'description' => 'para notebookerss',
    //     'slug' => 'notebook',

    // ]);

    // return \App\Category::all();
            
    //adicionar uma categoria a um produto
    // $prod = \App\Product::find(41);
    // $prod->categories()->attach([1,2]);//add os id ao produto
    // $prod->categories()->detach([1,2]);//remove os ids do produto
    // $prod->categories()->sync([1,2]);  //remove todos e adiciona somente os passados

});


//Prefixo - URL
//Namespace - pasta
//Name - Apelido da rota


Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
   
    Route::prefix('stores')->name('stores.')->group(function(){

        Route::get('/', 'StoreController@index')->name('index');

        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');

        Route::get('/{store_id}/edit', 'StoreController@edit')->name('edit'); //o nome do parametro pode ser diferente na chamada do metodo
        Route::post('/update/{store_id}', 'StoreController@update')->name('update');

        Route::get('/destroy/{store_id}', 'StoreController@destroy')->name('destroy');


    });

    
    Route::resource('/products', 'ProductController');
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
