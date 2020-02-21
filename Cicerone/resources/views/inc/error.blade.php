@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <br>
        <div class='alert alert-danger'>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <br>
    <div class='alert alert-success'>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <br>
    <div class='alert alert-danger'>
        {{session('error')}}
    </div>
@endif
