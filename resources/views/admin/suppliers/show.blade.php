@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center font-weight-bold text-success">Suppliers Details</h2>
                        <a href="{{ url('admin/suppliers/') }}" class="btn btn-info">Back To List</a>
                    </div>

                      <div class="card-body">
                        <p class="card-title text-dark">Supplier Name: {{ $suppliers->supplierName }}</p>
                        <p class="card-text text-dark">Supplier Company: {{ $suppliers->supplierCompany }}</p>
                        <p class="card-text text-dark">Supplier Contact No: {{ $suppliers->supplierContactNo }}</p>
                        <p class="card-text text-dark">Email Address: {{ $suppliers->emailAddress }}</p>
                        <p class="card-text text-dark">Address: {{ $suppliers->address }}</p>
                        <p class="card-text text-dark">Update Balance: {{ $suppliers->updateBalance }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
