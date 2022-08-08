@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Admin Cost Entry List</h2>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table text-center table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Expense Head Name</th>
                                        <th>ExpenseAmount</th>
                                        <th>ExpenseDate</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($adminCostEntry as $item )

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->expenseHeadName}}</td>
                                        <td>{{$item->expenseAmount}}</td>
                                        <td>{{$item->expenseDate}}</td>
                                        <td>{{$item->note}}</td>
                                        <td>
                                            <a href="{{url('admin/cost-entry/'.$item->id)}}" class="btn btn-info btn-sm" title="View" aria-hidden="true"><i class="fa fa-eye"></i></a>

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
