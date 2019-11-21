<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_application extends Model
{
    protected $table = 'job_applications';
    protected $fillable = [
        'id_biodata', 'id_job','status'
    ];

    public function biodata()
    {
        return $this->belongsTo('App\Biodata','id_biodata');
    }

    public function job()
    {
        return $this->belongsTo('App\Job','id_job');
    }
}
