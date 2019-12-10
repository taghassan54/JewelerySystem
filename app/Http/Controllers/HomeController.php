<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Invoices;
use App\models\ClientModel;
use App\models\ProductModel;
use App\models\Material;
use App\models\Category;
use App\models\GoldCaliber;

use App\models\SupplierModel;
use App\models\InvoiceProdects;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Invoices=Invoices::all();
        $Clients=ClientModel::all();
        $Products=ProductModel::all();
        $Materials=Material::all();
        $Suppliers=SupplierModel::all();
        $Categories=Category::all();
        $Calibers=GoldCaliber::all();
        return view('home',compact('Calibers','Categories','Materials','Invoices','Clients','Products','Suppliers'));
    }
}
