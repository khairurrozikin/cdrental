<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cdtablerentdetails extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = [
        'rent_id','item_id','qty_id'
    ];

    /**
     *  The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}