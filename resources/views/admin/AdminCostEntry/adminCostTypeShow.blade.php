@extends('admin.include.layout')
@section('mainPart')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=" text-success h2 text-center font-weight-bold">AdminCostEntry Details</h2>
                        <a href="{{ url('admin/cost-entry') }}" class="btn btn-primary btn-small text-center" >Back to List</a>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">expenseHeadName: {{ $adminCostEntry->expenseHeadName }}</h5>
                        <p class="card-text">expenseAmount: {{ $adminCostEntry->expenseAmount }}</p>
                        <p class="card-text">ExpenseDate: {{ $adminCostEntry->expenseDate }}</p>
                        <p class="card-text">Note: {{ $adminCostEntry->note }}</p>
                      </div>

                </div>
            </div>

        </div>
    </div>
@endsection
