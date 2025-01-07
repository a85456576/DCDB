<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Note extends Model
{

    protected $guarded = ['id', 'create_at'];

    public function user(){
        return $this->belongsTo(Note::class,'user_id','id');
    }
}
