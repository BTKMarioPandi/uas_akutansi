<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarioUserModel;

class MarioUserController extends Controller
{
    public function index(){
        $myakun = new MarioUserModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('mario_user/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('mario_user/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_user')
        ->insert([
            'id_user' => $request->id_user,
            'user_name'  =>  $request->user_name,
            'password'  =>  $request->password,
            'level'  =>  $request->level,
        ]);
        return redirect('mario_user');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('mario_user')->where('id_user', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('mario_user/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_user')->where('id_user',$request->id_user)
        ->update([
            'id_user' => $request->id_user,
            'user_name'  =>  $request->user_name,
            'password'  =>  $request->password,
            'level'  =>  $request->level,
        ]);
        return redirect('mario_user');
    }

    public function delete ($id){
        $query = \DB::table('mario_user')->where('id_user',$id)->delete();
        return redirect('mario_user');
    }


 }