<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cdtablereturns extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filLable = ['rent_id','day_return','payment','pinalty'];
    protected $primaryKey = ['return_id'];
    protected $table = ['cdtablereturns'];


    /**
     *  The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}