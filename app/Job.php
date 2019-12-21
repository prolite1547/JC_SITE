<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $fillable = [
        'job_title',
        'job_description',
        'job_type',
        'salary',
        'gender',
        'experience',
        'email',
        'contact_no',
        'job_company',
        'job_city',
        'job_location'
    ];

}
