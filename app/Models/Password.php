<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    use HasFactory;

    protected $table = 'password_resets';

    protected $fillable = [
        'user_id',
    ];

    protected $hidden = [
        'token',
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    public function password_users()
    {
        return $this->belongsTo(User::class);
    }
}
