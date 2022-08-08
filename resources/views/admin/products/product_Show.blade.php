@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Product Details</h2>
                        <a href="{{ url('admin/products') }}" class="btn btn-info btn-sm me-5" >Back to List</a>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Products: {{ $products->productName }}</h5>
                        <p class="card-text">Unit Type: {{ $products->selectUniteType }}</p>
                        <p class="card-text">Price: {{ $products->productPrice }}</p>
                        <p class="card-text">Updated Stock: {{ $products->updatedStock}}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection