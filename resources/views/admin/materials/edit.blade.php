@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Materials</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/materials/' .$materials->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$materials->id}}" />

                            <label class="control-label">Materials Name</label><br>
                            <input type="text" name="materialsName" id="materialsName" class="form-control" value="{{ $materials->materialsName }}"><br>

                            <label class="control-label">Materials Code</label><br>
                            <input type="text" name="materialsCode" id="materialsCode" class="form-control" value="{{ $materials->materialsCode }}"><br>

                            <label class="control-label">Materials Unit</label><br>
                            <select class="form-select" name="materialsUnite" id="materialsUnite" aria-label="Default select example">

                                <option selected class="form-control">{{ $materials->materialsUnite }}</option>
                                @foreach ($unit as $unit)
                                <option value="{{ $unit->uniteName }}">{{ $unit->uniteName }}</option>
                                @endforeach


                              </select><br>
                            <label class="control-label">Materials Unit Price</label><br>
                            <input type="text" name="materialsUnitePrice" id="materialsUnitePrice" class="form-control" value="{{ $materials->materialsUnitePrice }}"> <br>

                            <label class="control-label">Update Stock</label><br>
                            <input type="number" step="any" name="updateStock" id="updateStock" class="form-control" value="{{ $materials->updateStock }}"> <br>

                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
