@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success h2 text-center font-weight-bold">Create New Admin Cost Type</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/admin-cost')}}" method="post" class="form">
                            {!! csrf_field() !!}

                            <label class="control-label">Expense Head Name</label><br>
                            <input type="text" name="expenseHeadName" id="expenseHeadName" class="form-control @error('expenseHeadName')
                            is-invalid @enderror" value="{{ old('expenseHeadName') }}">
                            @error('expenseHeadName')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>@enderror<br>

                            <label class="control-label">Expense Code</label><br>
                            <input type="number" name="expenseCode" id="expenseCode" class="form-control @error('expenseCode')
                            is-invalid @enderror" value="{{ old('expenseCode') }}">
                            @error('expenseCode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>@enderror<br>

                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/admin-cost') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
