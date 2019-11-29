@extends('master')

@section('content')
    
    <div class="row">  
        <div class="col-md-12 mt-5"> 
            <a href="/student" class="mb-3 d-flex float-right">back</a>     
            <h3 class="text-center mb-3">Edit Record</h3>
                
            <form method="post" action="{{ action('StudentController@update',$id) }}">
                @csrf
                @method('PATCH')
                
                <div class="form-group">
                    <input type="text" name="first_name" 
                        class="form-control" value="{{ $student->first_name }}" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="last_name"
                    class="form-control" value="{{ $student->last_name }}" placeholder="Enter Last Name"> 
                </div>
                <div class="form-group">
                    <input type="submit" value="Update Data" class="btn btn-success">
                </div>

            </form>
        </div>
    </div>

    @include('errors')

@endsection