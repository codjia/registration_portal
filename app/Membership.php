<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
       /**
     * @var array
     */
    protected $fillable = [
        'id','email', 'name', 'date_of_birth','gender', 'contact','occupation','hometown', 'address', 'emergency_contact'
        ,'relationship','skill','branch','membership','ever_attended','why_member','how_ymca','passport_picture','agreement' ,'created_at', 'updated_at'


    ];
}
