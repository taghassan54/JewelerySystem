<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name', 'img', 'material_id');

    public function material()
    {
        return $this->belongsTo('App\models\Material');
    }

    public function prodects()
    {
        return $this->hasMany('App/models\ProductModel');
    }
}
