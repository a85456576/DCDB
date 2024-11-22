<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasUuids;

    protected $fillable = [
        
        'title',
        'sub_title',
        'link',
        'link_title',
        'description',
        'description_list',
        'image',
    ];
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'create_at', 'update_at'];

    public function packages(){
        return $this->hasMany(Package::class, 'service_id','id');
    }

    public function features(){
        return $this->hasMany(ServiceFeatures::class, 'service_id','id');
    }

    public function images(){
        return $this->hasMany(ServiceImages::class, 'service_id','id');
    }

    public function customerExperiences(){
        return $this->hasMany(ServiceCustomerExperiences::class, 'service_id','id');
    }


}
