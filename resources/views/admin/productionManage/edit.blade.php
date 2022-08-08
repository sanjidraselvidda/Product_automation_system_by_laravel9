@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Edit Production manage Report</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/production-manage/' .$productionManage->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$productionManage->id}}" />
                            <label class="control-label">Entry Date</label><br>
                            <input type="date" name="entryDate" id="entryDate" class="form-control @error('entryDate')
                                 is-invalid
                                  @enderror" value="{{ $productionManage->entryDate }}">
                                  @error('entryDate')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror
                                  <br>
                            <label class="control-label">Production No</label><br>
                            <input type="number" name="productionNo" id="productionNo" class="form-control @error('productionNo')
                                 is-invalid
                                  @enderror" value="{{ $productionManage->productionNo }}">@error('productionNo')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Expiry Date</label><br>
                            <input type="date" name="expiryDate" id="expiryDate" class="form-control @error('expiryDate')
                                 is-invalid
                                  @enderror" value="{{ $productionManage->expiryDate }}">@error('expiryDate')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                            <label class="control-label">Select Product Name</label><br>
                            <input type="text" name="selectProductName" id="selectProductName" class="form-control
                            @error('selectProductName')
                                 is-invalid
                                  @enderror"  value="{{ $productionManage->selectProductName }}"> @error('selectProductName')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>


                                  <label class="control-label">Unite Type</label><br>
                                  <select class="form-select" name="uniteType" id="uniteType" aria-label="Default select example" class="form-select @error('uniteType') is-invalid
                                  @enderror ">
                                    <option  selected class="form-control" value="{{ $productionManage->uniteType }}"> select Unit</option>
                                    @foreach ($uniteType as $uniteType)
                                    <option value="{{ $uniteType->uniteName }}">{{ $uniteType->uniteName }}</option>
                                    @endforeach
                                  </select><br>
                                  @error('uniteType')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message}}</strong>
                                  </span><br>
                              @enderror<br>



                            <label class="control-label">Production Quantity</label><br>
                            <input type="number" name="productionQuantity" id="productionQuantity" class="form-control
                            @error('productionQuantity')
                                 is-invalid
                                  @enderror" value="{{ $productionManage->productionQuantity }}">@error('productionQuantity')
                                 <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                                  @enderror <br>
                                  <label class="control-label">Selected Materials</label><br>
                                  <select class="form-select" name="selectedMaterials" id="selectedMaterials" aria-label="Default select example" >
                                    <option  selected class="form-control @error('selectedMaterials') is-invalid
                                    @enderror" value="{{ $productionManage->selectedMaterials }}"> select materials</option>
                                    @foreach ($materials as $materials)
                                    <option value="{{ $materials->materialsName }}">{{ $materials->materialsName }}</option>
                                    @endforeach
                                  </select><br><br>
                                  @error('selectedMaterials')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message}}</strong>
                                  </span><br>
                              @enderror<br>
                            <input type="submit" value="update" class="btn btn-success">
                            <a href="{{ url('admin/production-manage') }}" class="btn btn-danger btn-small" >Cancel</a>

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
