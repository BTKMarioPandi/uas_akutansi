<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarioJurnalModel;

class MarioJurnalController extends Controller
{
    public function index(){
        $myakun = new MarioJurnalModel();
        $akun = $myakun->tampil_data();
        
        $data = array('akun' => $akun);
        return view('mario_jurnal/index', $data);
    }

    public function tambah(){
       // return ('Testing');
       return view('mario_jurnal/tambah');
    }

    public function tambah_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_jurnal')
        ->insert([
            'id_jurnal' => $request->id_jurnal,
            'nama_akun'  =>  $request->nama_akun,
            'jns_jurnal'  =>  $request->jns_jurnal,
            'tanggal'  =>  $request->tanggal,
        ]);
        return redirect('mario_jurnal');
    }

    public function edit($id){
        // return ('Testing');
        $akun = \DB::table('mario_jurnal')->where('id_jurnal', $id)->first();
        //dd($akun);
        $data = array('akun' => $akun);
        return view('mario_jurnal/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Proses');
        $query = \DB::table('mario_jurnal')->where('id_jurnal',$request->id_jurnal)
        ->update([
            'id_jurnal' => $request->id_jurnal,
            'nama_akun'  =>  $request->nama_akun,
            'jns_jurnal'  =>  $request->jns_jurnal,
            'tanggal'  =>  $request->tanggal,
        ]);
        return redirect('mario_jurnal');
    }

    public function delete ($id){
        $query = \DB::table('mario_jurnal')->where('id_jurnal',$id)->delete();
        return redirect('Mmrio_jurnal');
    }


 }