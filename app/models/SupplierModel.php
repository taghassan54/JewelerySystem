<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupplierModel extends Model
{

    protected $table = 'supplier';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'phone');

    public function invoices()
    {
        return $this->hasMany('App/models\Invoices');
    }

}
