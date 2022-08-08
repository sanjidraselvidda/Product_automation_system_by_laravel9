<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminCostType;
use App\Http\Controllers\Controller;
use App\Http\Requests\adminCostRequest;

class AdminCostTypeController extends Controller
{
      public function index()
    {
        $adminCostType= adminCostType::all();
       return view('admin.AdminCostType.adminCostTypeList')->with('adminCostType', $adminCostType);
    }


    public function create()
    {
        return view('admin.AdminCostType.adminCostTypeCreate');
    }


    public function store(adminCostRequest $request)
    {
        $input= $request->all();
        adminCostType::create($input);
        return redirect('admin/admin-cost')->with('flash_message','adminCostType Added');
    }


    public function show($id)
    {
        $adminCostType = adminCostType::find($id);
        return view('admin.AdminCostType.adminCostTypeShow')->with('adminCostType',$adminCostType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminCostType  $adminCostType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminCostType = adminCostType::find($id);
        return view('admin.AdminCostType.adiminCostTypeEdit')->with('adminCostType',$adminCostType);
    }


    public function update(adminCostRequest $request, $id)
    {
        $adminCostType = adminCostType::find($id);
        $input = $request->all();
        $adminCostType->update($input);
        return redirect('admin/admin-cost')->with('flash_message', 'Unite Type Updated!');
    }



    public function destroy($id)
    {
        adminCostType::destroy($id);
        return redirect('admin/admin-cost')->with('flash_message', 'admin Cost type  deleted!');
    }
}
