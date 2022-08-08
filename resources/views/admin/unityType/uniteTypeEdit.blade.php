@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-danger" style="margin:10px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center fw-bold text-success">Edit Unit</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/unit-type/'.$uniteType->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{ $uniteType->id }}" />
                            <label class="control-label">Unit Type Name</label><br>
                            <input type="text" name="uniteName" id="uniteName" class="form-control" value="{{ $uniteType->uniteName }}"><br>

                            <input type="submit" value="update" class="btn btn-success">
                            <a href="{{ url('admin/unit-type') }}" class="btn btn-danger">Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
