@extends('dashboard')

@section('content')
    <div class="col-md-4">
        <div class="card shadow-lg bg-white bg-opacity-75 rounded-4">
            <h3 class="card-header text-center bg-primary text-white rounded-top-4">Login</h3>
            <div class="card-body">
                <form method="POST" action="{{ route('user.authUser') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
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
                        <button type="submit" class="btn btn-primary btn-block">Signin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
