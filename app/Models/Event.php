<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $dates = ['date'];

    public function user() {
        return $this->belongsto("App\Models\User");
    }

    protected $guarded = [];

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
