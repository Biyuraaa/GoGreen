@extends('dashboard.layouts.template')

@section('content')
    <!-- Table to display users -->
    <div id="users-table" style="margin-left: 180px" class="container allContent-section py-4">
        <h2>All Users</h2>
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">Username</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Donate at</th>
                </tr>
            </thead>

        </table>
    </div>
@endsection