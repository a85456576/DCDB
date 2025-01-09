<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $guarded = ['id', 'create_at'];
    public function documents()
    {
        return $this->hasMany(Document::class, 'user_id', 'id');
    }
}
