<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'description', 'year', 'period', 'website', 'cfu'
    ];

    public function degree()
    {
        return $this->belongsTo('App\Degree');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }
}
