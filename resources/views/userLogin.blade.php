@extends('layouts.masterIndex')
@section('content')
<div class="container">
    @if (isset(Auth::user()->email))
        <script>window.location="/"</script>
    @endif    

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach   
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form method="post" action="{{ url('/login/checklogin') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Enter Email</label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection