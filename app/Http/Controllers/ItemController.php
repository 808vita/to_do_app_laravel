<?php

namespace App\Http\Controllers;
use App\Models\Items;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    function addItem(Request $req){

        $item = new Items();
        $item->sno = null;
        $item->item = $req->item;
        $item->save();
        return redirect('/');
    }

    function showItem(){
        $items =Items::all();
        return view('index',['items'=>$items]);
    }

    function deleteItem(){
        
    }
}
