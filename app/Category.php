<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    protected $fillable = [
        'name'
    ];

    public function jobs()
    {
        return $this->hasMany('App\Job','id_category');
    }
}
