<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarioAkunModel;

class MarioAkunController extends Controller
{
    public function index(){
        $myakun = new MarioAkunModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('mario_akun/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('mario_akun/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_master_akun')
        ->insert([
            'nomor_akun' => $request->nomor_akun,
            'nama_akun'  =>  $request->nama_akun,
            'tipe'  =>  $request->tipe,
            'induk'  =>  $request->induk,
            'level'  =>  $request->level,
            'kelompok'  =>  $request->kelompok,
        ]);
        return redirect('mario_akun');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('mario_master_akun')->where('nomor_akun', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('mario_akun/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_master_akun')->where('nomor_akun',$request->nomor_akun)
        ->update([
            'nomor_akun' => $request->nomor_akun,
            'nama_akun'  =>  $request->nama_akun,
            'tipe'  =>  $request->tipe,
            'induk'  =>  $request->induk,
            'level'  =>  $request->level,
            'kelompok'  =>  $request->kelompok,
        ]);
        return redirect('mario_akun');
    }

    public function delete ($id){
        $query = \DB::table('mario_master_akun')->where('nomor_akun',$id)->delete();
        return redirect('mario_akun');
    }


 }