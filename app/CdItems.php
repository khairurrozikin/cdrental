<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class CdItems extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = [
        'title','rate','catecory','qty','price_item','price_rent'
    ];

    /**
     *  The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}