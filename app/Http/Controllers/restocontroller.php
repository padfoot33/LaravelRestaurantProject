<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurant;
use App\Models\User;
use Session;
use Crypt;
use Auth;

class restocontroller extends Controller
{
    function index(){

        return view('home');
    }
    function list(){
        $data = restaurant::all();
        return view('list', ["data" => $data]);
    }
    function add(Request $req){
        $resto = new restaurant;
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->save();
        //flash session
        $req->session()->flash('status','Restaurant submitted successfully..');
        return redirect('/list');
    }
    function delete($id){
        restaurant::find($id)->delete();
        //flash session
        Session::flash('status','Restaurant deleted successfully..');
        return redirect('/list');
    }
    function edit($id){
        $data = restaurant::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req){
        $resto = restaurant::find($req->input('id'));
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->save();
        Session::flash('status','Restaurant updated successfully..');
        return redirect('/list');
    }
    function register(Request $req){
        $user = new User;
        $user->name = $req->input('name');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->email = $req->input('email');
        $user->contact = $req->input('contact');
        $user->save();
        return redirect('/login');
    }
    function login(Request $req){
        $user = User::where("email",$req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password) == $req->input('password'))
        {
            $req->session()->put('user', $user[0]->name);
            return redirect('/');

        }
    }

    function logout(Request $req){
        Auth::logout();
        Session::flush();
        return redirect('/register');
    }
}
