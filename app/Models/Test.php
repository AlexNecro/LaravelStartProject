<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $fillable = ['text','is_enabled'];
    protected $casts = ['is_enabled' => 'boolean',];

}
