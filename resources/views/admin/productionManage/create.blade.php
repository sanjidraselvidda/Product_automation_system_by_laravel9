@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Create New Production Manage</h2>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/production-manage') }}" method="post" class="form">
                            {!! csrf_field() !!}
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="entryDate" id="entryDate"
                                class="form-control @error('entryDate') is-invalid @enderror"
                                value="{{ old('entryDate') }}">
                            @error('entryDate')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                            @enderror <br>
                            <label class="control-label">Production No</label><br>
                            <input type="number" name="productionNo" id="productionNo"
                                class="form-control @error('productionNo') is-invalid @enderror"
                                value="{{ old('productionNo') }}">
                            @error('productionNo')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                            @enderror <br>
                            <label class="control-label">Expiry Date</label><br>
                            <input type="date" name="expiryDate" id="expiryDate"
                                class="form-control @error('expiryDate') is-invalid @enderror"
                                value="{{ old('expiryDate') }}">
                            @error('expiryDate')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                            @enderror <br>
                            <label class="control-label"> Select Product Name</label><br>


                            <select class="form-select" name="selectProductName" id="selectProductName"
                                aria-label="Default select example"
                                class="form-select @error('selectProductName') is-invalid @enderror">
                                <option selected class="form-control"> select Product</option>
                                @foreach ($products as $products)
                                    <option value="{{ $products->productName }}">{{ $products->productName }}</option>
                                @endforeach
                            </select><br>
                            @error('selectProductName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span><br>
                            @enderror
                            <br>



                        <label class="control-label">Unite Type</label><br>
                        <select class="form-select" name="uniteType" id="uniteType" aria-label="Default select example"
                            class="form-select @error('uniteType') is-invalid @enderror">
                            <option selected class="form-control"> select Unit</option>
                            @foreach ($uniteType as $uniteType)
                                <option value="{{ $uniteType->uniteName }}">{{ $uniteType->uniteName }}</option>
                            @endforeach
                        </select><br>
                        @error('uniteType')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                        @enderror
                        <br>
                        <label class="control-label">Production Quantity</label><br>
                        <input type="number" name="productionQuantity" id="productionQuantity"
                            class="form-control @error('productionQuantity') is-invalid @enderror"
                            value="{{ old('productionQuantity') }}">
                        @error('productionQuantity')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                        @enderror <br>



                        <label class="control-label">Selected Materials</label><br>
                        <select class="form-select" name="selectedMaterials" id="selectedMaterials"
                            aria-label="Default select example">
                            <option selected class="form-control @error('selectedMaterials') is-invalid @enderror">
                                select materials</option>
                            @foreach ($materials as $materials)
                                <option value="{{ $materials->materialsName }}">{{ $materials->materialsName }}
                                </option>
                            @endforeach
                        </select><br><br>
                        @error('selectedMaterials')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span><br>
                        @enderror
                        <br>

                        <input type="submit" value="save" class="btn btn-success">
                        <a href="{{ url('admin/production-manage') }}" class="btn btn-danger btn-small">Cancel</a>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
