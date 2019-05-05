<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rest_Info extends Model
{
    //Table name
    protected $table = 'rest_infos';
     // Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
}
