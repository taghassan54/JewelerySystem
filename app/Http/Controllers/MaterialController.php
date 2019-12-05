<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\models\Material;

class MaterialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material = Material::all();
        return view('material.index', compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Material::create($request->all());
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
        $material = Material::find($id);
        return view('material.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $material = Material::find($id)->update($request->all());
        \Session::flash('message', 'تم الحفظ بنجاح !');
        \Session::flash('alert-class', 'alert-success');
        return redirect()->route("material.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $material = Material::find($id)->delete();
        \Session::flash('message', 'تم الحذف بنجاح !');
        \Session::flash('alert-class', 'alert-danger');
        return redirect()->route("material.index");
    }
}
