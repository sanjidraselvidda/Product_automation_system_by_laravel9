@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Unite Type</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/unit-type')}}" method="post" class="form">
                            {!! csrf_field() !!}

                            <label class="control-label">Unite Name</label><br>
                            <input type="text" name="uniteName" id="uniteName"  class="form-control @error('uniteName')
                                is-invalid
                            @enderror">
                            @error('uniteName')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                            <br>

                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/unit-type') }}" class="btn btn-danger">Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
