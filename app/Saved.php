<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saved extends Model{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'saved';
}
