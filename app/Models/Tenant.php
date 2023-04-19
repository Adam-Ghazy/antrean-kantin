<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenant';

    protected $fillable = [
        'name',
        'subname',
        'gambar',
    ];

    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
