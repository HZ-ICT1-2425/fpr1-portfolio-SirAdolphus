<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'cu_code',
            'name',
            'credits',
            'passed_at',
            'created_at',
            'updated_at'
        ];

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
