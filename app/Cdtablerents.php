<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cdtablerents extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = [
        'member_id','day_rent'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}