<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class tablemembercd extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = [
        'name','address','phone','ktp','member_date','active_date'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [];
}