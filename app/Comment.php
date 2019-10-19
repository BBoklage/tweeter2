<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function chirps()
    {
        return $this->belongsTo('App\Tweet');
    }
}
