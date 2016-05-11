@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{$error}}</div>
            @endforeach
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-12">
            @if(Session::get('message_id')==1)
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @elseif(Session::get('message_id')==4)
                <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
            @endif
        </div>
    </div>
@endif