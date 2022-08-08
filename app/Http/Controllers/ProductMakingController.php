<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\materials;
use Illuminate\Http\Request;
use App\Models\productMaking;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\proMakingValidation;

class ProductMakingController extends Controller
{

    public function index()
    {
        $productMaking =productMaking::all();
        return view('admin.productionMaking.index')->with('productsMaking', $productMaking);
    }


    public function create()
    {
        $product =products::all();
        $material =materials::all();
        return view('admin.productionMaking.create')->with(['product'=> $product,'material'=> $material]);
    }


    public function store(proMakingValidation $request)
    {
        $productMaking =materials::all();
        $input =$request->all();
        $selectMaterials= $request->selectMaterials;
        $upStock = materials::where('materialsName',$selectMaterials)->value('updateStock');
        $materialsQuantity= $request->materialsQuantity;
        $upStock-=$materialsQuantity;
        if($upStock>=0){
        DB::table('materials')
            ->where('materialsName', $selectMaterials)
            ->update(['updateStock' => $upStock]);

        productMaking::create($input);
        return redirect('admin/products-making')->with('flash_message','product Added');
    }else{
        Session::flash('stockAlert','Your Material out of stock');
        return redirect('admin/products-making/create');
    }
    }

    public function show($id)
    {
        $productMaking = productMaking::find($id);
        return view('admin.productionMaking.productMaking_Show')->with('productShow',$productMaking);
    }


    public function edit($id)
    {
        $productMaking = productMaking::find($id);
        return view('admin.productionMaking.edit')->with('productEdit', $productMaking);
    }


    public function update(proMakingValidation $request, $id)
    {
        $productMaking = productMaking::find($id);
        $input =$request->all();
        $productMaking->update($input);
        return redirect('admin/products-making')->with('flash_massage','products updated!!');
    }


    public function destroy($id)
    {
        productMaking::destroy($id);
        return redirect('admin/products-making')->with('flash_massage','Product Deleted');
    }
}
