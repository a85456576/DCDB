<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class GeneralFeature extends Model
{
    use HasUuids;
    protected $fillable = [
        "title",
        "description",
        "icon",
    ] ;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'create_at', 'update_at'];
}
