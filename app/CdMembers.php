<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cdmembers extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = [
        'name','address','phone','ktp','member_date','active_date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}