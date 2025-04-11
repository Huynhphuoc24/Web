@extends('dashboard')

@section('content')
    <div class="col-md-4">
        <div class="card shadow-lg bg-white bg-opacity-75 rounded-4">
            <h3 class="card-header text-center bg-primary text-white rounded-top-4">Create User</h3>
            <div class="card-body">
                <form action="{{ route('user.postUser') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
