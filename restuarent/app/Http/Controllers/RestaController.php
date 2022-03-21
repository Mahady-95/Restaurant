<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Session;

class RestaController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data = Restaurant::all();
        return view('list',["data"=>$data]);
    }
    function add(Request $req)
    {
        //return $req->input();

        $resto = new Restaurant;
        $resto ->name=$req->input('name');
        $resto ->email=$req->input('email');
        $resto ->address=$req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant entered successfully');
        return redirect('list');
        
    }
    function delete($id)
    {
        Restaurant::find($id)->delete();
        Session::flash('status','Restaurant deleted successfully');
        return redirect('list');
    }
    function edit($id)
    {
        $data = Restaurant::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        //return $req->input();

        $resto = Restaurant::find($req->input('id'));
        $resto ->name=$req->input('name');
        $resto ->email=$req->input('email');
        $resto ->address=$req->input('address');
        $resto->save();
        $req->session()->flash('status','Restaurant updated successfully');
        return redirect('list');
        
    }
}
