<?php

namespace App\Http\Controllers;

use App\Models\materials;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialsControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials= materials::all();
        return view('admin.report.materials')->with('materials', $materials);
    }

}
