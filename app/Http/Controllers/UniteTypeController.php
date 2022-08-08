<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\uniteType;
use Illuminate\Http\Request;
use App\Http\Requests\uniteTypeRe;
use App\Http\Controllers\Controller;

class UniteTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uniteType= uniteType::all();
        return view('admin.unityType.uniteType')->with('uniteType', $uniteType);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('admin.unityType.uniteTypeCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(uniteTypeRe $request)
    {
        $input= $request->all();
        uniteType::create($input);
        return redirect('admin/unit-type')->with('flash_message','uniteType Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uniteType  $uniteType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $uniteType = uniteType::find($id);
        return view('admin.unityType.uniteTypeShow')->with('uniteType',$uniteType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uniteType  $uniteType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uniteType = uniteType::find($id);
        return view('admin.unityType.uniteTypeEdit')->with('uniteType',$uniteType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\uniteType  $uniteType
     * @return \Illuminate\Http\Response
     */
    public function update(uniteTypeRe $request, $id)
    {
        $uniteType = uniteType::find($id);
        $input = $request->all();
        $uniteType->update($input);
        return redirect('admin/unit-type')->with('flash_message', 'Unite Type Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\uniteType  $uniteType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        uniteType::destroy($id);
        return redirect('admin/unit-type')->with('flash_message', 'Unite Type deleted!');
    }
}
