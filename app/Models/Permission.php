<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';

    protected $fillable = [
        'name',
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    public function permission_users()
    {
        return $this->belongsToMany(User::class);
    }
}
