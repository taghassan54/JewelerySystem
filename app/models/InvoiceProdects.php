<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceProdects extends Model
{

    protected $table = 'invoice_prodects';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('invoices_id', 'prodects_id', 'Quantity', 'amount');

    public function prodects()
    {
        return $this->belongsTo('App/models\ProductModel');
    }
}
