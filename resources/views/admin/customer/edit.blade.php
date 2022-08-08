@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products Sale Report</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/customers/' .$customers->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$customers->id}}" />
                            <label class="control-label">Customer Name</label><br>
                            <input type="text" name="customerName" id="customerName" class="form-control
                            @error('customerName')
                            is-invalid
                             @enderror" value="{{ $customers->customerName }}"><br>
                             @error('customerName')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Contact No</label><br>
                            <input type="number" name="contactNo" id="contactNo" class="form-control
                            @error('contactNo')
                            is-invalid
                             @enderror" value="{{ $customers->contactNo }}"><br>
                             @error('contactNo')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Email ID</label><br>
                            <input type="email" name="emailId" id="emailId" class="form-control
                            @error('emailId')
                            is-invalid
                             @enderror"value="{{ $customers->emailId }}"><br>
                             @error('emailId')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">City Locatiom</label><br>
                            <input type="text" name="cityLocation" id="cityLocation" class="form-control
                            @error('cityLocation')
                            is-invalid
                             @enderror" value="{{ $customers->cityLocation }}"> <br>
                             @error('cityLocation')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Address</label><br>
                            <input type="text" name="address" id="address" class="form-control
                            @error('address')
                            is-invalid
                             @enderror" value="{{ $customers->address }}"> <br>
                             @error('address')
                            is-invalid
                             @enderror
                            <label class="control-label">Update Balance</label><br>
                            <input type="number" name="updatedBalance" id="updatedBalance" class="form-control @error('updatedBalance')
                            is-invalid
                             @enderror" value="{{ $customers->updatedBalance }}"> <br>
                             @error('updatedBalance')
                            is-invalid
                             @enderror
                            <input type="submit" value="update" class="btn btn-success">
                            <a href="{{ url('admin/customers') }}" class="btn btn-danger btn-small" >Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
