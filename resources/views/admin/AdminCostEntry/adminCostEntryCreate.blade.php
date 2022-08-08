@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success h2 text-center font-weight-bold">Create New Admin Cost Entry</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/cost-entry')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Expense Head Name</label><br>
                            <input type="text" name="expenseHeadName" id="expenseHeadName" value="{{old('expenseHeadName')}}" class="form-control @error('expenseHeadName') is-invalid @enderror"><br>
                            @error('expenseHeadName')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                            @enderror
                            <label class="control-label">ExpenseAmount</label><br>
                            <input type="number" name="expenseAmount" id="expenseAmount" value="{{old('expenseAmount')}}" class="form-control @error('expenseAmount') is-invalid @enderror"><br>
                            @error('expenseAmount')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                            @enderror
                            <label class="control-label">ExpenseDate</label><br>
                            <input type="Date" name="expenseDate" id="expenseDate" class="form-control"><br>
                            <label class="control-label">Note</label><br>
                            <textarea name="note" id="note" class="form-control @error('note') is-invalid @enderror" value="{{old('note')}}"> </textarea><br>
                            @error('note')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                            @enderror
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/cost-entry') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
