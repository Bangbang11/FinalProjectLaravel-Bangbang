<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = [
        'id_user', 'name','email','address','contact_no','date_of_birth','gender','education','nationality','cv','photo'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function job_applications() {
        return $this->hasMany('App\Job_application', 'id_biodata');
    }
}
