@extends('master')

@section('content')
    <div class="row">
        
        <div class="col-md-12 mt-5">
                <a href="/student" class="mb-3 d-flex float-right">back</a> 
                   <h3 class="text-center mb-3">Add Data</h3>     
            <form method="post" action="{{ url('student') }}">
                @csrf
                <div class="form-group">
                <input type="text" name="first_name" id="" class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
                </div>
                <div class="form-group">
                <input type="text" name="last_name" id="" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Add New" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

  @include('errors')

@endsection