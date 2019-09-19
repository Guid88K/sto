<?php

namespace App;

use Nicolaslopezj\Searchable\SearchableTrait;

use Illuminate\Database\Eloquent\Model;

class Sto extends Model
{
    use SearchableTrait;

    protected $table = 'sto';

    protected $fillable = [
        'name',
        'photos',
        'start_data',
        'end_data',
        'start_hour',
        'end_hour',
        'description',
    ];

//    protected $searchable = [
//        'columns' => [
//            'towns.name' => 10,
//            'towns.id' => 5,
////            'profiles.username' => 5,
////            'profiles.bio' => 3,
////            'profiles.country' => 2,
////            'profiles.city' => 1,
//        ],
//        'joins' => [
//            'towns' => ['sto.id','town.sto'],
//        ],
//    ];

    public function town()
    {
        return $this->hasOne('App\Town');
    }

    public function contact()
    {
        return $this->hasMany('App\Contact');
    }
}
