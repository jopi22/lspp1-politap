@if(count($errors)>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }} 
    </div>        
    @endforeach
@endif
    
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session('success') }}  
    </div>    
@endif