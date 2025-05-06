<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = ['nama', 'singkatan', 'kaprodi', 'sekretaris'];
    protected $table = 'prodi';
    public function fakultas(){
        return $this->belongsTo(Fakultas::class,'fakultas_id','id');
    }
}
