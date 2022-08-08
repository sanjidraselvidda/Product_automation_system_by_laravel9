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
                        <form action="{{ url('admin/products-making') }}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Products</label><br>
                            <select id="selectProduct" name="selectProduct" value="{{ old('selectProduct') }}"
                                aria-label="Default select example"
                                class="form-select @error('selectProduct') is-invalid @enderror">
                                <option selected class="form-control">Select Product</option>
                                @foreach ($product as $product)
                                    <option value="{{ $product->productName }}">{{ $product->productName }}</option>
                                @endforeach
                            </select>
                            @error('selectProduct')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <br>
                            <label class="control-label">Materials</label><br>
                            <select id="selectMaterials" name="selectMaterials" value="{{ old('selectMaterials') }}"
                                aria-label="Default select example"
                                class="form-select @error('selectMaterials') is-invalid @enderror">
                                <option selected class="form-control">Select Product</option>
                                @foreach ($material as $material)
                                    <option value="{{ $material->materialsName }}">{{ $material->materialsName }}</option>
                                @endforeach
                            </select>
                            @error('selectMaterials')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <br>


                            <label class="control-label">Materials Quantity</label><br>
                            @if (session('flash_message'))
                                <div class="bg-danger text-white text-center">{{ session('flash_message') }}</div>
                            @endif
                            <input type="number" step="0.01" value="{{ old('materialsQuantity') }}" name="materialsQuantity"
                                id="materialsQuantity"
                                class="form-control
                            @error('materialsQuantity') is-invalid @enderror"
                                value="{{ old('materialsQuantity') }}"><br>
                            @error('materialsQuantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/products-making') }}" class="btn btn-danger btn-small">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
