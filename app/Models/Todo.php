<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{


    protected $guarded = ['id', 'create_at'];


    public function user()
    {
        return $this->belongsTo(Todo::class, 'user_id', 'id');
    }
}
