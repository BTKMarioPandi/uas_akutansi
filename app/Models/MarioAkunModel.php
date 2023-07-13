<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarioAkunModel extends Model
{
    use HasFactory;
    protected $table ="mario_master_akun";
    protected $primaryKey ="nomor_akun";

    public function tampil_data(){
        $query = \DB::table('mario_master_akun')->get();
        return $query;
    }
}