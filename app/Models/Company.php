<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['id', 'create_at'];



    public function documents()
    {
        return $this->hasMany(Document::class, 'category_short', 'shortned_name');
    }
}
