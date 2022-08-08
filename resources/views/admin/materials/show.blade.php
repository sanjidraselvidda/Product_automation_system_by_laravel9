@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-danger" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center font-weight-bold text-success">Materials Details</h2>
                        <a href="{{ url('admin/materials') }}" class="btn btn-info"> Back to List</a>
                    </div>

                      <div class="card-body">
                        <p class="card-text">Materials Name: {{ $materials->materialsName }}</p>
                        <p class="card-text">Materials Code: {{ $materials->materialsCode }}</p>
                        <p class="card-text">Materials Unite: {{ $materials->materialsUnite }}</p>
                        <p class="card-text">Materials Unite Price: {{ $materials->materialsUnitePrice }}</p>
                        <p class="card-text">Update Stock: {{ $materials->updateStock }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
