<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ArticleImages extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'create_at', 'update_at'];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }
}
