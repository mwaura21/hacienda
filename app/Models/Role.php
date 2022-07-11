<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'name',
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    public function role_users()
    {
        return $this->hasOne(User::class);
    }
}
