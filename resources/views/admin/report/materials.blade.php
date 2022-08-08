@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-white" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-dark">Materials List</h2><br>
                        <div class="table-responsive">
                            <table class="table text-center table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>materialsName</th>
                                        <th>materialsCode</th>
                                        <th>materialsUnite</th>
                                        <th>materialsUnitePrice</th>
                                        <th>updateStock</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materials as $item )


                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->materialsName}}</td>
                                        <td>{{$item->materialsCode}}</td>
                                        <td>{{$item->materialsUnite}}</td>
                                        <td>{{$item->materialsUnitePrice}}</td>
                                        <td>{{$item->updateStock}}</td>
                                        <td>
                                            <a href="{{url('admin/materials/'.$item->id)}}" class="btn btn-info btn-sm" title="View Student" aria-hidden="true"><i class="fa fa-eye"></i></a>

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
