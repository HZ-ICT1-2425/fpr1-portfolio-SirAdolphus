<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'course_id',
            'name',
            'weighing_factor',
            'lowest_passing_grade',
            'best_grade',
            'created_at',
            'updated_at'
        ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'test_id');
    }
}
