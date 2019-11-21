<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'id_category', 'name','address','company','contact','salary','benefit','description','min_experience','photo'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category','id_category');
    }

    public function job_applications()
    {
        return $this->hasMany('App\Job_application','id_job');
    }
}
