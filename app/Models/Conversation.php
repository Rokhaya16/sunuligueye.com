<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
  
    protected $fillable = ['from', 'to', 'job_id'];

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
}
