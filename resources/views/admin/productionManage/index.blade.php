@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Production Manage List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('admin/production-manage/create')}}" class="btn btn-success btn-sm" title="Add new Production Manage">
                            <i class="fa-solid fa-plus"> Add </i>
                        </a><br><br>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Entry Date</th>
                                        <th>Production No</th>
                                        <th>Expiry Date</th>
                                        <th>Select Product Name</th>
                                        <th>Unite Type</th>
                                        <th>Production Quantity</th>
                                        <th>Selected Materials</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productionManages as $item )


                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->entryDate)->diffForHumans() }}</td>
                                        <td>{{$item->productionNo}}</td>
                                        <td>{{$item->expiryDate}}</td>
                                        <td>{{$item->selectProductName}}</td>
                                        <td>{{$item->uniteType}}</td>
                                        <td>{{$item->productionQuantity}}</td>
                                        <td>{{$item->selectedMaterials}}</td>
                                        <td>
                                            <a href="{{url('admin/production-manage/'.$item->id)}}" class="btn btn-info btn-sm" title="View Production Manage" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/production-manage/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Production Manage" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ url('admin/production-manage/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Products" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
