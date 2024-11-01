<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';
    protected $primaryKey = 'id';

    protected $fillable = [
        // 'user_id',
        'name_mitra',
        'logo_mitra',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
