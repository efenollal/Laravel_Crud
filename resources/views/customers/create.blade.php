@extends('layout.app')

@section('title', 'Create customer')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-4 mb-4">
            <div class="float-left">
                <h2>Add New Customer</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <form method="POST" action="{{ route('customer.store') }}">            
        @csrf

        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" placeholder="Email"  value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <strong>Company:</strong>
            <input type="text" name="company" class="form-control" placeholder="Company Name"  value="{{ old('company') }}">
            @if ($errors->has('company'))
                <span class="text-danger">{{ $errors->first('company') }}</span>
            @endif
        </div>

        <div class="form-group text-center">
            <button class="btn btn-success btn-lg">Save</button>
        </div>
    </form>

@endsection