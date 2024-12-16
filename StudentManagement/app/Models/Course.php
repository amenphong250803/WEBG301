<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'name', 'majors_id'
    ];
    public function majors(){
        return $this->belongsTo(Major::class);
    }
    public function students(){
        return $this->belongsToMany(Student::class);
    }
    public function schedules(){
        return $this->hasMany(Schedule::class);
    }
}