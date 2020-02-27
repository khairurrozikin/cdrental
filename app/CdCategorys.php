<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cdcategorys extends Model{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    protected $primaryKey = ['category_id'];
    protected $table = ['cdcatecorys'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}