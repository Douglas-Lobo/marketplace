<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Store;
use App\User;

class StoreController extends Controller
{
    public function index(){

        $stores = Store::paginate(10);
        
        return view('admin.stores.index', compact('stores'));

    }


    public function create(){

        $users = User::all(['id','name']);

        return view('admin.stores.create', compact('users'));
    }

    public function store(Request $req){

        $data = $req->all();
        $user = User::find($data['user']);
        $store = $user->store()->create($data);
        
        flash('Loja criada com sucesso')->success(); 
        
        return redirect()->route('admin.stores.index');
    }

    public function edit($store_id){

        $store = Store::find($store_id);

        return view('admin.stores.edit', compact('store'));


    }

    public function update(Request $req, $store){

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
