@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Products</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/products-making/' .$productEdit->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$productEdit->id}}" />
                            <label class="control-label">Products</label><br>
                            <input type="text" name="selectProduct" id="selectProduct" class="form-control
                            @error('selectProduct')
                                is-invalid
                            @enderror" value="{{$productEdit->selectProduct}}"><br>
                            @error('selectProduct')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Materials</label><br>
                            <input type="text" name="selectMaterials" id="selectMaterials" class="form-control
                            @error('selectMaterials')
                                is-invalid
                            @enderror" value="{{$productEdit->selectMaterials}}"><br>
                            @error('selectMaterials')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span><br>
                            @enderror
                            <label class="control-label">Materials Quantity</label><br>
                            <input type="text" name="materialsQuantity" id="materialsQuantity" class="form-control
                            @error('materialsQuantity')
                                is-invalid
                            @enderror" value="{{$productEdit->materialsQuantity}}"><br>
                            @error('materialsQuantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span><br>
                            @enderror
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/products-making/') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection