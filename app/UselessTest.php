<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UselessTest extends Model
{
    protected $table = 'useless_tests';
    protected $fillable = ['name'];
}
