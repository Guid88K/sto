<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $fillable = [
        'sto_id', 'contact'
    ];

    public function sto()
    {
        return $this->belongsTo('App\Sto');
    }
}
