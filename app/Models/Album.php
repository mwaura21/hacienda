<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';

    protected $fillable = [
        'name',
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    public function album_photos()
    {
        return $this->hasMany(Photo::class);
    }
}
