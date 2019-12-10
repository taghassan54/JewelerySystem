<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoices extends Model
{

    protected $table = 'invoices';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('user_id', 'type', 'clients_id', 'supplier_id');

    public function prodects()
    {
        return $this->hasMany('App\models\InvoiceProdects','invoices_id');
    }
  public function Client()
  {
      return $this->belongsTo(ClientModel::class,'clients_id');
  }
  public function Supplier()
  {
      return $this->belongsTo(SupplierModel::class,'supplier_id');
  }
  public function User()
  {
      return $this->belongsTo('App\User','user_id');
  }

}
