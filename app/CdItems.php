<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class tablecd extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = [
        'title','rate','catecory','qty','price_item','price_rent'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $hidden = [];
}