@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-danger" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success h2 text-center font-weight-bold">Edit AdminCostType</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/admin-cost/'.$adminCostType->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$adminCostType->id}}" />
                            <label class="control-label">ExpenseHeadName</label><br>
                            <input type="text" name="expenseHeadName" id="expenseHeadName" class="form-control @error('expenseHeadName')
                             is-invalid @enderror" value="{{ $adminCostType->expenseHeadName }}">
                             @error('expenseHeadName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                    </span>
                             @enderror
                            <label class="control-label">ExpenseCode</label><br>
                            <input type="text" name="expenseCode" id="expenseCode" class="form-control @error('expenseCode') is-invalid @enderror" value="{{ $adminCostType->expenseCode }}">
                            @error('expenseCode')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                            <input type="submit" value="update" class="btn btn-success btn-sm">
                            <a href="{{ url('admin/admin-cost') }}" class="btn btn-info btn-sm me-5" >Back to List</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
