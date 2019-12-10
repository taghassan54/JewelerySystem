<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Invoices;
use App\models\ClientModel;
use App\models\ProductModel;
use App\models\Material;
use App\models\SupplierModel;
use App\models\InvoiceProdects;

class InvoicesController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $type=$request->type;
    $invoices=Invoices::where('type',$request->type)->paginate(7);
    return view('invoices.index',compact('invoices','type'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {

    $jewelry = ProductModel::all();
    $clints=ClientModel::all();
    $Suppliers=SupplierModel::all();
    $Material = Material::orderBy('id', 'DESC')->get();

    $type=$request->type;
    if($type=='selling')
  {
    return view('invoices.create',compact('clints','jewelry','Material','type'));
  }
    elseif($type=='purchase'){
      return view('invoices.purchase.create',compact('Suppliers','jewelry','Material','type'));
    }else{
      return back();
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     $data = $request->all();
        $data['user_id'] = auth()->user()->id;
       $Invoices= Invoices::create($data);
       foreach ($request->productes as $value) {
          InvoiceProdects::create([
              'invoices_id'=>$Invoices->id,
              'prodects_id'=>$value,
              'amount'=>ProductModel::find($value)->price,
         ]);
       }

        \Session::flash('message', 'تم الحفظ بنجاح !');
        \Session::flash('alert-class', 'alert-success');
        return back();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id,Request $request)
  {
    $invoices=Invoices::find($id);
    $type=$request->type;
    return view('invoices.show',compact('invoices','type'));

}


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>