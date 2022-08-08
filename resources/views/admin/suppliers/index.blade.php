@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-dark">Suppliers List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('admin/suppliers/create')}}" class="btn btn-success btn-sm" title="Add new Suppliers">
                            Add New
                        </a><br><br>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Supplier Name</th>
                                        <th>Supplier Company</th>
                                        <th>Supplier ContactNo</th>
                                        <th>Email Address</th>
                                        <th>Address</th>
                                        <th>Update Balance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $item )


                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->supplierName}}</td>
                                        <td>{{$item->supplierCompany}}</td>
                                        <td>{{$item->supplierContactNo}}</td>
                                        <td>{{$item->emailAddress}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->updateBalance}}</td>
                                        <td>
                                            <a href="{{url('admin/suppliers/'.$item->id)}}" class="btn btn-info btn-sm" title="View soppliers" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/suppliers/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit soppliers" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ url('admin/suppliers/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Suppliers" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
