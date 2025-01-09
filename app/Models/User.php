<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = ['id', 'create_at', 'update_at'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }


    public function note()
    {
        return $this->hasMany(Note::class, 'user_id', 'id');
    }
    public function todo()
    {
        return $this->hasMany(Todo::class, 'user_id', 'id');

    }
    public function documents()
    {
        return $this->hasMany(Document::class, 'user_id', 'id');
    }
}
