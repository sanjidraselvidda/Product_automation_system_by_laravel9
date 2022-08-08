<?php

namespace App\Http\Controllers;

use App\Models\adminiCostEntry;
use App\Http\Controllers\Controller;
use App\Http\Requests\adminEntryRequest;
use Illuminate\Http\Request;

class AdminiCostEntryController extends Controller
{

    public function index()
    {
        $adminCostEntry= adminiCostEntry::all();
        return view('admin.AdminCostEntry.adminCostEntryList')->with('adminCostEntry', $adminCostEntry);
    }

    public function create()
    {
        return view('admin.AdminCostEntry.adminCostEntryCreate');
    }


    public function store(adminEntryRequest $request)
    {
        $input= $request->all();
        adminiCostEntry::create($input);
        return redirect('admin/cost-entry')->with('flash_message','adminCostEntry Added');
    }

    public function show($id)
    {
        $adminCostEntry = adminiCostEntry::find($id);
        return view('admin.AdminCostEntry.adminCostTypeShow')->with('adminCostEntry',$adminCostEntry);
    }


    public function edit($id)
    {
        $adminCostEntry = adminiCostEntry::find($id);
        return view('admin.AdminCostEntry.adminCostEntryEdit')->with('adminCostEntry',$adminCostEntry);
    }


    public function update(adminEntryRequest $request,$id)
    {
        $adminCostEntry = adminiCostEntry::find($id);
        $input = $request->all();
        $adminCostEntry->update($input);
        return redirect('admin/cost-entry')->with('flash_message', 'Unite Type Updated!');
    }


    public function destroy($id)
    {
        adminiCostEntry::destroy($id);
        return redirect('admin/cost-entry')->with('flash_message', 'admin Cost type  deleted!');
    }
}
