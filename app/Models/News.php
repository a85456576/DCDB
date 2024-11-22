<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class News extends Model
{
    use HasUuids;
    protected $fillable = [
        "title",
        "description",
        "date",
    ] ;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'create_at', 'update_at'];

    public function comments(){
        return $this->hasMany(Comment::class, 'news_id','id');
    }

    public function images(){
        return $this->hasMany(NewsImage::class, 'news_id','id');
    }
}
