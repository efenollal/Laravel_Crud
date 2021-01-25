@extends('layout.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-4 mb-4">
            <div class="float-left">
                <h2>Customers</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('customer.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <td></td>
            <td>Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Company</td>
            <td></td>
        </tr>
        
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->company }}</td>
            <td>
                <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('customer.show',$customer->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('customer.edit',$customer->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $customers->links() !!}
      
@endsection