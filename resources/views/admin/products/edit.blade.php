@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Edit Products</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/products/' .$products->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$products->id}}" />
                            <label class="control-label">Products</label><br>
                            <input type="text" name="productName" id="productName" class="form-control
                            @error('productName')
                            is-invalid
                            @enderror" value="{{$products->productName}}"><br>
                            @error('productName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            {{-- <label class="control-label">Unit Type</label><br>
                            <input type="text" name="selectUniteType" id="selectUniteType" class="form-control
                            @error('selectUniteType')
                            is-invalid
                            @enderror" value="{{$products->selectUniteType}}"><br>
                            @error('selectUniteType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror --}}
                            <label class="control-label">Unit Type</label><br>
                            <select class="form-select" name="selectUniteType" id="selectUniteType"  aria-label="Default select example">

                                <option selected class="form-control" value="{{$products->selectUniteType}}" >{{$products->selectUniteType}}</option>
                                @foreach ($uniteType as $items)
                                <option value="{{ $items->uniteName }}">{{ $items->uniteName }}</option>
                                @endforeach


                            </select><br>
                            <label class="control-label">Price</label><br>
                            <input type="number" name="productPrice" id="productPrice" class="form-control @error('productPrice')
                            is-invalid
                            @enderror" value="{{$products->productPrice}}"><br>
                            @error('productPrice')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Update Stock</label><br>
                            <input type="number" name="updatedStock" id="updatedStock" class="form-control @error('updatedStock')
                            is-invalid
                            @enderror" value="{{$products->updatedStock}}"><br>
                            @error('updatedStock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/products') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
