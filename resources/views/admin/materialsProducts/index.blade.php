@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success h2 text-center font-weight-bold">Product List</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{url('admin/material-to-products/create')}}" class="btn btn-success btn-sm" title="Add new Student">
                            <i class="fa-solid  fa-plus"> Add</i>
                        </a><br><br>
                        @if (session('flash_message'))
                        <div class="bg-danger text-white text-center">{{ session('flash_message')}}</div>
                        @elseif (session('added'))
                        <div class="bg-success text-white text-center">{{ session('added')}}</div>
                        @elseif (session('updated'))
                        <div class="bg-info text-white text-center">{{ session('updated')}}</div>
                         @endif
                        <div class="table-responsive">
                            <table class="table text-center table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Supplier</th>
                                        <th>Materials</th>
                                        <th>Unite Type</th>
                                        <th>Unite Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Entry Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $item )

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->selectSupplier}}</td>
                                        <td>{{$item->selectMaterials}}</td>
                                        <td>{{$item->uniteType}}</td>
                                        <td>{{$item->unitePrice}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{$item->totalPrice}}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->entryDate)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{url('admin/material-to-products/'.$item->id)}}" class="btn btn-info btn-sm" title="View Student" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/material-to-products/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Student" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ url('admin/material-to-products/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
    @include('admin.include.dataTable')
    <script >
        $(document).ready( function () {
            $('.table').DataTable();
        } );
    </script>

@endsection
