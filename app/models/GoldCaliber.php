<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoldCaliber extends Model
{

    protected $table = 'caliber';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');

    public function prodects()
    {
        return $this->hasMany('App\models\ProductModel');
    }
}
