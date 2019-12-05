<?php

namespace App/models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoices extends Model 
{

    protected $table = 'invoices';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id', 'type', 'clients_id', 'supplier_id');

    public function invoices_prodects()
    {
        return $this->hasMany('App/models\InvoiceProdects');
    }

}