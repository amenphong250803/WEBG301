<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = [
        'name', 'capacity'
    ];
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function schedules(){
        return $this->belongsToMany(Scheduled::class);
    }
}