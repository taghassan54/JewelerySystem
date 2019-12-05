<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
use App\models\Material;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $category = Category::all();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $materials = Material::all();
        return view('category.create', compact('materials'));
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
            $data['img'] = ext::uploadImg($request->img, "Category");
        }
        Category::create($data);

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
        $materials = Material::all();
        $category = Category::find($id);
        return view('category.edit', compact('category', 'materials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $data = $request->all();
        $data['img'] = $category->img;
        if ($request->has('img')) {
            $data['img'] = ext::uploadImg($request->img, "Category");
        }

        $category->update($data);
        \Session::flash('message', 'تم الحفظ بنجاح !');
        \Session::flash('alert-class', 'alert-success');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        \Session::flash('message', 'تم الحذف بنجاح !');
        \Session::flash('alert-class', 'alert-danger');
        return redirect()->route("category.index");
    }
}
