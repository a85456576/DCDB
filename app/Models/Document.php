<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    protected $guarded = ['id', 'create_at','code'];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }public function compeny()
    {
        return $this->belongsTo(Company::class, 'compeny_id', 'id');
    }public function category()
    {
        return $this->belongsTo(Category::class, 'category_short', 'shortned_name');
    }
}
