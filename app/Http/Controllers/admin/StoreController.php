<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Store;
use App\User;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    //chamando o midlleware criado

    public function __construct(){
        $this->middleware('user.has.store')->only(['create', 'store']);
    }


    public function index(){

        $store = auth()->user()->store;
        
        return view('admin.stores.index', compact('store'));

    }


    public function create(){


        $users = User::all();

        return view('admin.stores.create', compact('users'));
    }

    public function store(StoreRequest $req){

        $data = $req->all();
        $user = auth()->user();
        $store = $user->store()->create($data);
        
        flash('Loja criada com sucesso')->success(); 
        
        return redirect()->route('admin.stores.index');
    }

    public function edit($store_id){

        $store = Store::find($store_id);

        return view('admin.stores.edit', compact('store'));


    }

    public function update(StoreRequest $req, $store){

        $data = $req->all();
       
        $store = Store::find($store);
        $store->update($data);

        
        flash('Loja atualizada com sucesso')->important()->success();
        
        return redirect()->route('admin.stores.index');

    }

    public function destroy($store_id){

        $store = Store::find($store_id);
        $store->delete();

        flash('Loja removida com sucesso')->success(); 
        
        return redirect()->route('admin.stores.index');

    }

}
