<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $fillable = [
        'name',
        'album_id',
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    public function photo_albums()
    {
        return $this->belongsTo(Album::class);
    }
}
