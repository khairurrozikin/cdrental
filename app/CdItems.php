<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cditems extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = ['title','rate','catecory','qty','price_item','price_rent'];
    protected $primaryKey = ['item_id'];
    protected $table = ['cditems'];

    /**
     *  The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}