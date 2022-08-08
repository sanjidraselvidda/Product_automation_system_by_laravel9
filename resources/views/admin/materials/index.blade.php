@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row bg-red" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-dark">Materials List</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('admin/materials/create')}}" class="btn btn-success btn-sm" title="Add new materials">
                            Add New
                        </a><br><br>
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
                                            <a href="{{url('admin/materials/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm" title="Edit Student" aria-hidden="true"><i class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{ url('admin/materials/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
