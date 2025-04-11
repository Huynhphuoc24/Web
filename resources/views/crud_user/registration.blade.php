@extends('dashboard')

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card shadow-lg bg-white bg-opacity-75 rounded-4">
        <h3 class="card-header text-center bg-primary text-white rounded-top-4">Register User</h3>
        <div class="card-body">
            <form action="{{ route('user.postUser') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
