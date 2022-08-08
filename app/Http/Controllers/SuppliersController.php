<?php

namespace App\Http\Controllers;

use App\Models\suppliers;
use Illuminate\Http\Request;
use App\Http\Requests\suppliersRe;
use App\Http\Controllers\Controller;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers= suppliers::all();
        return view('admin.suppliers.index')->with('suppliers', $suppliers);
    }


    public function create()
    {
        return view('admin.suppliers.create');
    }


    public function store(suppliersRe $request)
    {
        $input= $request->all();
        suppliers::create($input);
        return redirect('admin/suppliers')->with('flash_message','student Added');
    }


    public function show($id)
    {
        $suppliers = suppliers::find($id);
        return view('admin.suppliers.show')->with('suppliers',$suppliers);
    }


    public function edit($id)
    {
        $suppliers = suppliers::find($id);
        return view('admin.suppliers.edit')->with('suppliers',$suppliers);
    }


    public function update(suppliersRe $request, $id)
    {
        $suppliers = suppliers::find($id);
        $input = $request->all();
        $suppliers->update($input);
        return redirect('admin/suppliers')->with('flash_message', 'suppliers Updated!');
    }


    public function destroy($id)
    {
        suppliers::destroy($id);
        return redirect('admin/suppliers')->with('flash_message', 'suppliers deleted!');
    }
}
