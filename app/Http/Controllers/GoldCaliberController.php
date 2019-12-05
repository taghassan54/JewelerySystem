<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\GoldCaliber;

class GoldCaliberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $caliber = GoldCaliber::all();
        return view('caliber.index', compact('caliber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('caliber.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        GoldCaliber::create($request->all());

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
    {
        $caliber = GoldCaliber::find($id);
        return view('caliber.edit', compact('caliber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $caliber = GoldCaliber::find($id);
        return view('caliber.edit', compact('caliber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $caliber = GoldCaliber::find($id)->update($request->all());
        \Session::flash('message', 'تم الحفظ بنجاح !');
        \Session::flash('alert-class', 'alert-success');
        return redirect()->route("caliber.index");
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
