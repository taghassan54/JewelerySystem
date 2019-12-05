<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{

    protected $table = 'Products';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'img', 'description', 'price', 'categories_id', 'matrial_weight', 'caliber_id');
}
