<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedules';
    protected $fillable = [
         'dayOfWeek', 'course_id'
    ];
    public function times(){
        return $this->belongsToMany(Time::class);
    }
    public function classrooms(){
        return $this->belongsToMany(Classroom::class);
    }
    public function classes(){
        return $this->belongsToMany(Classes::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }

}