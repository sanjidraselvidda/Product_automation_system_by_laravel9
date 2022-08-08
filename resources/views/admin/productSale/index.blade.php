@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success text-center font-weight-bold">Product Sale List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('admin/products-sale/create')}}" class="btn btn-success btn-sm" title="Add new Product Sale">
                            <i class="fa-solid fa-plus"> ADD </i>
                        </a><br><br>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>selectCustomer</th>
                                        <th>selectProduct</th>
                                        <th>productPrice</th>
                                        <th>entryQuantity</th>
                                        <th>totalAmount</th>
                                        <th>entryDate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productSales as $item )


                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->selectCustomer}}</td>
                                        <td>{{$item->selectProduct}}</td>
                                        <td>{{$item->productPrice}}</td>
                                        <td>{{$item->entryQuantity}}</td>
                                        <td>{{$item->totalAmount}}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->entryDate)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{url('admin/products-sale/'.$item->id)}}" class="btn btn-info btn-sm" title="View Product" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/products-sale/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit product" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ url('admin/products-sale/'. $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
