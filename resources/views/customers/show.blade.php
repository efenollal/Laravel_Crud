@extends('layout.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-4 mb-4">
            <div class="float-left">
                <h2>Show Customer</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Company</td>
        </tr>
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->company }}</td>
        </tr>
    </table>
@endsection