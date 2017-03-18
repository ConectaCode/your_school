<?php

namespace YourSchool;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    use FormAccessible;

    protected $fillable = [
        'name', 'finished', 'school_grade_id', 'school_id'
    ];

    protected $with = [
        'students', 'school_grade'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function school_grade()
    {
        return $this->belongsTo(SchoolGrade::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function formStudentsTeamAttribute()
    {
        return $this->students->pluck('id');
    }
}
