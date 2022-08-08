@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-danger" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center font-weight-bold text-success">Unite Type Details</h2>
                        <a href="{{ url('admin/unit-type') }}" class="btn btn-info">Back To List</a>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Unite Type Name: {{ $uniteType->uniteName }}</h5>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
