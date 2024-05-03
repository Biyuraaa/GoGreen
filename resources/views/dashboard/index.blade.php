@extends('dashboard.layouts.template')

@section('content')
    <!-- Table to display users -->
    <div id="users-table" style="margin-left: 320px; margin-right:40px" class="container allContent-section py-4">
        <h2>All Users</h2>
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">Username</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Created at</th>
                </tr>
            </thead>
            <tbody id="users-data">
                @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->role }}</td>
                        <td class="text-center">{{ $user->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection