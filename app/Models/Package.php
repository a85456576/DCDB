<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Package extends Model
{
    use HasUuids;

    protected $fillable = [
        "name",
        "description",
        "price",
        "service_id",
    ] ;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'create_at', 'update_at'];


    public function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function reservedPackages(){
        return $this->hasMany(ReservePackage::class, 'package_id','id');
    }

    public function features(){
        return $this->hasMany(PackageFeature::class, 'package_id','id');
    }
}
