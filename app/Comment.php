<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'sto_id', 'user_id', 'description'
    ];

    public function sto()
    {
        return $this->belongsTo('App\Sto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
