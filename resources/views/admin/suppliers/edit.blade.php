@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Suppliers</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/suppliers/' .$suppliers->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$suppliers->id}}" />

                            <label class="control-label">supplierName</label><br>
                            <input type="text" name="supplierName" id="supplierName" class="form-control" value="{{ $suppliers->supplierName }}"><br>

                            <label class="control-label">supplierCompany</label><br>
                            <input type="text" name="supplierCompany" id="supplierCompany" class="form-control" value="{{ $suppliers->supplierCompany }}"><br>

                            <label class="control-label">supplierContactNo</label><br>
                            <input type="text" name="supplierContactNo" id="supplierContactNo" class="form-control" value="{{ $suppliers->supplierContactNo }}"><br>

                            <label class="control-label">emailAddress</label><br>
                            <input type="email" name="emailAddress" id="emailAddress" class="form-control" value="{{ $suppliers->emailAddress }}"> <br>

                            <label class="control-label">Address</label><br>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $suppliers->address }}"> <br>

                            <label class="control-label">updateBalance</label><br>
                            <input type="number" step="any" name="updateBalance" id="updateBalance" class="form-control" value="{{ $suppliers->updateBalance }}"> <br>

                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
