@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Production Manage Details</h2>
                        <a href="{{ url('admin/production-manage') }}" class="btn btn-success btn-small" >Bact to List</a>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Entry Date: {{ $productionManages->entryDate }}</h5>
                        <p class="card-text">Production No: {{ $productionManages->productionNo }}</p>
                        <p class="card-text">Expiry Date: {{ $productionManages->expiryDate }}</p>
                        <p class="card-text">Product Name: {{ $productionManages->selectProductName }}</p>
                        <p class="card-text">Unite Type: {{ $productionManages->uniteType }}</p>
                        <p class="card-text">Production Quantity: {{ $productionManages->productionQuantity }}</p>
                        <p class="card-text">Selected Materials: {{ $productionManages->selectedMaterials }}</p>
                      </div>

                </div>
            </div>

        </div>
    </div>
@endsection
