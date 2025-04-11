@extends('dashboard')

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card shadow-lg bg-white bg-opacity-75 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4">
            <h4 class="mb-0 text-center">User Details</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td>{{ $messi->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $messi->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $messi->email }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger" onclick="confirmDelete('{{ route('user.deleteUser', ['id' => $messi->id]) }}')">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(url) {
        if (confirm('Are you sure you want to delete this user?')) {
            window.location.href = url;
        }
    }
</script>
@endsection
