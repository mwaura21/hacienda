<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    use HasFactory;

    protected $table = 'auths';

    protected $fillable = [
        'user_id',
        'user_name',
        'is_enabled',
    ];

    protected $hidden = [
        'password',
        'token',
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    public function auth_users()
    {
        return $this->belongsTo(User::class);
    }

}
