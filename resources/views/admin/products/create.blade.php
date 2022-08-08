@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Add New Product</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/products') }}" method="post" class="form">
                            {!! csrf_field() !!}
                             <label class="control-label">Products</label><br>
                            <input type="text" name="productName" id="productName" class="form-control
                            @error('productName')
                                is-invalid
                            @enderror" value="{{ old('productName') }}"><br>
                            @error('productName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            {{-- <label class="control-label">Unit Type</label><br>
                            <input type="text" name="selectUniteType" id="selectUniteType" class="form-control
                            @error('selectUniteType')
                                is-invalid
                            @enderror" value="{{ old('selectUniteType') }}"><br>
                            @error('selectUniteType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror --}}
                            <label class="control-label">Unit Type</label><br>
                            <select class="form-select" name="selectUniteType" id="selectUniteType" aria-label="Default select example">

                                <option selected class="form-control ">Select</option>
                                @foreach ($uniteType as $items)
                                <option value="{{ $items->uniteName }}" class="@error('selectUniteType')
                                    is-invalid
                                @enderror">
                                {{ $items->uniteName }} </option>
                                @error('selectUniteType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                @enderror
                                @endforeach


                            </select><br>
                            <label class="control-label">Price</label><br>
                              <input type="number" name="productPrice" id="productPrice" class="form-control
                            @error('productPrice')
                                is-invalid
                            @enderror" value="{{ old('productPrice') }}"><br>
                            @error('productPrice')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <label class="control-label">Update Stock</label><br>
                            <input type="number" name="updatedStock" id="updatedStock" class="form-control
                            @error('updatedStock')
                                is-invalid
                            @enderror" value="{{ old('updatedStock') }}"><br>
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
