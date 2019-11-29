 {{-- Check errors --}}
    @if($errors->any())   
    <div class="row">
           <div class="col-md-12">
                 {{-- Check errors --}}
            @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
   
           </div>
        </div>
    @endif