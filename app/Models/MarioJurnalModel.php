<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarioJurnalModel extends Model
{
    use HasFactory;
    protected $table ="mario_jurnal";
    protected $primaryKey ="id_jurnal";

    public function tampil_data(){
        $query = \DB::table('mario_jurnal')->get();
        return $query;
    }
}