<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ServiceFeatures extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'create_at', 'update_at'];

    public function service(){
        return $this->belongsTo(Service::class, 'service_id','id');
    }
}
