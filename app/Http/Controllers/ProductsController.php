<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Controllers\Controller;
use App\Http\Requests\productsValidation;
use App\Models\uniteType;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products =products::all();
        return view('admin.products.index')->with('products', $products);
    }

    public function create()
    {
        $uniteType =uniteType::all();
        return view('admin.products.create') -> with('uniteType', $uniteType);
    }

    public function store(productsValidation $request)
    {
        $input= $request->all();
        
        products::create($input);
        return redirect('admin/products')->with('flash_message','product Added');
    }

    public function show($id)
    {
        $products = products::find($id);
        return view('admin.products.product_Show')->with('products',$products);
    }


    public function edit($id)
    {
        $uniteType =uniteType::all();
        $products = products::find($id);
        return view('admin.products.edit')->with(['products' => $products, 'uniteType' => $uniteType]);
    }

    public function update(productsValidation $request, $id)
    {
        $products = products::find($id);
        $input =$request->all();
        $products->update($input);
        return redirect('admin/products/')->with('flash_massage','products updated!!');
    }

    public function destroy($id)
    {
        products::destroy($id);
        return redirect('admin/products/')->with('flash_massage','Product Deleted');
    }
}
