@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Customer</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/customers')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Customer Name</label><br>
                               <input type="text" name="customerName" id="customerName" class="form-control @error('customerName')
                                 is-invalid
                                  @enderror" value="{{ old('customerName') }}">
                                  @error('customerName')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Contact No</label><br>
                              <input type="number" name="contactNo" id="contactNo" class="form-control @error('contactNo')
                                is-invalid
                                 @enderror" value="{{ old('contactNo') }}">
                                 @error('contactNo')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                 @enderror <br><br>
                            <label class="control-label">Email ID</label><br>
                               <input type="email" name="emailId" id="emailId" class="form-control @error('emailId')
                               is-invalid
                                @enderror" value="{{ old('emailId') }}">
                                @error('emailId')
                               <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                @enderror <br><br>
                            <label class="control-label">City/Location</label><br>
                               <input type="text" name="cityLocation" id="cityLocation" class="form-control @error('cityLocation')
                               is-invalid
                                @enderror" value="{{ old('cityLocation') }}">
                                @error('cityLocation')
                               <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                @enderror <br><br>
                            <label class="control-label">Address</label><br>
                               <input type="text" name="address" id="adsress" class="form-control @error('address')
                               is-invalid
                                @enderror" value="{{ old('address') }}">
                                @error('address')
                               <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                @enderror <br><br>
                            <label class="control-label">Update Balance</label><br>
                               <input type="number" name="updatedBalance" id="updatedBalance" class="form-control @error('updateBalance')
                               is-invalid
                                @enderror" value="{{ old('updateBalance') }}">
                                @error('updateBalance')
                               <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                @enderror <br><br>
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/customers') }}" class="btn btn-danger btn-small" >Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
