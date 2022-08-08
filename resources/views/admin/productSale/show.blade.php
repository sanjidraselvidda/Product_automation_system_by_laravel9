@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Product Sale Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Customer: {{ $productSales->selectCustomer }}</h5>
                        <p class="card-text">Product: {{ $productSales->selectProduct }}</p>
                        <p class="card-text">Price: {{ $productSales->productPrice }}</p>
                        <p class="card-text">Quantity: {{ $productSales->entryQuantity }}</p>
                        <p class="card-text">Total Amount: {{ $productSales->totalAmount }}</p>
                        <p class="card-text">Date: {{ $productSales->entryDate }}</p>
                      </div>
                      <a href="{{ url('admin/products-sale') }}" class="btn btn-danger btn-small ml-3 mb-3" >Go Back</a>
                </div>
            </div>

        </div>
    </div>
@endsection
