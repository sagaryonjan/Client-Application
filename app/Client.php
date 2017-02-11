<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AppHelper;

class Client extends Model
{

    protected $table = 'client';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'gender', 'phone','email','address','nationality','birth_date','educational_background',
        'prefer_contact'
    ];

    public function setBirthDateAttribute($value){

        $this->attributes['birth_date'] = AppHelper::formatDate('Y-m-d', $value);

    }

}