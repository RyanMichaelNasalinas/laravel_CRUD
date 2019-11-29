@extends('master')

@section('content')
    <div class="row">
        
        <div class="col-md-12 my-3">
            <h3 class="text-center">Students Data</h3>
            <a href="/student/create" class="float-right mb-2 btn btn-success">Add New Record</a>
        </div>

         <div class="col-md-12">
               {{-- Display Success Message --}}
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ \Session::get('success') }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th colspan="2">Actions</th>
                    </tr>        
                </thead>
               <tbody>
                   @foreach($students as $row)
                    <tr>
                        <td>{{ $row['first_name'] }}</td>
                        <td>{{ $row['last_name'] }}</td>
                        <td>
                            <a href="{{ action('StudentController@edit',$row['id']) }}" class="btn btn-primary">Edit</a>
                        </td>
                         <td>
                            <form action="{{ action('StudentController@destroy',$row['id']) }}" class="delete_form" method="post">
                                 @csrf
                                 @method('DELETE')

                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data')">
                                    Delete</button>
                            </form>
                        </td>
                    </tr>
                   @endforeach
               </tbody>
            </table>
        </div>
    </div>

@endsection