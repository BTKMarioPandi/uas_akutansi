<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarioIndukUserModel;

class MarioIndukUserController extends Controller
{
    public function index(){
        $myakun = new MarioIndukUserModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('mario_induk_user/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('mario_induk_user/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_induk_user')
        ->insert([
            'id_user' => $request->id_user,
            'nama_lengkap'  =>  $request->nama_lengkap,
            'alamat'  =>  $request->alamat,
            'telepon'  =>  $request->telepon,
            'email' => $request->email,
            'divisi' => $request->divisi,
        ]);
        return redirect('mMario_induk_user');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('mario_induk_user')->where('id_user', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('mario_induk_user/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_induk_user')->where('id_user',$request->id_user)
        ->update([
            'id_user' => $request->id_user,
            'nama_lengkap'  =>  $request->nama_lengkap,
            'alamat'  =>  $request->alamat,
            'telepon'  =>  $request->telepon,
            'email' => $request->email,
            'divisi' => $request->divisi,
        ]);
        return redirect('mario_induk_user');
    }

    public function delete ($id){
        $query = \DB::table('mario_induk_user')->where('id_user',$id)->delete();
        return redirect('mario_induk_user');
    }


 }