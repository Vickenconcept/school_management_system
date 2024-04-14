<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'grade_point', 'mark_from', 'mark_upto', 'total_marks', 'school_id','exam_category_id','class_id','section_id','student_id','session_id'
    ];
}

