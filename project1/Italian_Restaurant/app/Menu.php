<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Table Name
    protected $table = 'menus';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
