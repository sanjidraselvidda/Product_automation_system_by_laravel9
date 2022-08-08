@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success h2 text-center font-weight-bold">Admin Cost Type List</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{url('admin/admin-cost/create')}}" class="btn btn-success btn-sm" title="Add new Student">
                            Add New
                        </a>
                        <br><br>
                        @if (session('flash_message'))
                        <div class="bg-danger text-white text-center">{{ session('flash_message')}}</div>
                        @elseif (session('added'))
                        <div class="bg-success text-white text-center">{{ session('added')}}</div>
                        @elseif (session('updated'))
                        <div class="bg-info text-white text-center">{{ session('updated')}}</div>
                         @endif
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Expense Head Name</th>
                                        <th>Expense Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($adminCostType as $item )

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->expenseHeadName}}</td>
                                        <td>{{$item->expenseCode}}</td>
                                        <td>
                                            <a href="{{url('admin/admin-cost/'.$item->id)}}" class="btn btn-info btn-sm" title="View adminCostType" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                            <a href="{{url('admin/admin-cost/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit adminCostType" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ url('admin/admin-cost/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete adminCostType" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>

@endsection
