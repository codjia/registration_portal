<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'id','email', 'name', 'company', 'contact', 'prefered_title','prefered_transc',
         'turnaround_time', 'further_instruction', 'audio_file', 'created_at', 'updated_at'
    ];
}
