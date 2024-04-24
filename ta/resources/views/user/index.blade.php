@extends('dashboard.layouts.main')
@section('admin-ta')
    <h1>Manage Users</h1>

    <a href="{{ route('user.create') }}" class="btn btn-warning mb-3" style="background-color: #ff5e00 !important;">Create User</a>

    <form action="{{ route('user.manage') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name" value="{{ request('search') }}">
            <button type="submit" class="btn btn-outline-secondary">
                <i class="fa fa-search"></i> Search
            </button>
            
            @if(request('search'))
                <button type="button" class="btn btn-link text-danger" onclick="window.location='{{ route('user.manage') }}'">
                    <i class="fa fa-times"></i>
                </button>
            @endif
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nim</th>
                <th>nama</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            @if (!$user->issuperadmin)
                <tr>
                    <td>{{ $user->nim }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->isadmin ? 'Admin' : 'User' }}</td>

                    <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus User</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach

        </tbody>
    </table>
@endsection
