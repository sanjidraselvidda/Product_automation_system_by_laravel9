@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Materials</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{url('admin/materials')}}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Materials Name</label><br>
                            <input type="text" name="materialsName" id="materialsName" class="form-control @error('materialsName')is-invalid @enderror" ><br>
                            @error('materialsName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror

                            <label class="control-label">Materials Code</label><br>
                            <input type="text" name="materialsCode" id="materialsCode" class="form-control  @error('materialsCode')is-invalid @enderror"><br>
                            @error('materialsCode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                        @enderror
                            <label class="control-label">Materials Unit</label><br>
                            <select class="form-select" name="materialsUnite" id="materialsUnite" aria-label="Default select example">

                                <option selected class="form-control">Select</option>
                                @foreach ($unit as $unit)
                                <option value="{{ $unit->uniteName }}">{{ $unit->uniteName }}</option>
                                @endforeach


                              </select><br>

                            <label class="control-label">Materials Unit Price</label><br>
                            <input type="text" name="materialsUnitePrice" id="materialsUnitePrice" class="form-control @error('materialsUnitePrice')is-invalid @enderror"><br>
                            @error('materialsUnitePrice')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror

                            <label class="control-label">Update Stock</label><br>
                            <input type="number" step="any" name="updateStock" id="updateStock" class="form-control @error('updateStock')is-invalid @enderror"><br>
                            @error('updateStock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror

                            <input type="submit" value="save" class="btn btn-success">


                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
