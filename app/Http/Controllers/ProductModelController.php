<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ProductModel;
use App\models\Material;
use App\models\Category;
use App\models\GoldCaliber;

class ProductModelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Material = Material::orderBy('id', 'DESC')->get();
        $jewelry = ProductModel::all();
        return view('jewelry.index', compact('jewelry', 'Material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $Caliber = GoldCaliber::all();
        $Category = Category::all();
        return view('jewelry.create', compact('Caliber', 'Category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $data['img'] = "/ingots.png";
        if ($request->has('img')) {
            $data['img'] = ext::uploadImg($request->img, "jewelry");
        }
        ProductModel::create($data);
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
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $Caliber = GoldCaliber::all();
        $Category = Category::all();
        $jewelry = ProductModel::find($id);
        return view('jewelry.edit', compact('jewelry', 'Caliber', 'Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        ProductModel::find($id)->update($request->all());
        \Session::flash('message', 'تم الحفظ بنجاح !');
        \Session::flash('alert-class', 'alert-success');
        return redirect()->route("jewelry.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    { }
}
