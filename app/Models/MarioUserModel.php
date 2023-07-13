<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarioUserModel extends Model
{
    use HasFactory;
    protected $table ="mario_user";
    protected $primaryKey ="id_user";

    public function tampil_data(){
        $query = \DB::table('mario_user')->get();
        return $query;
    }
}
