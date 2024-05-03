@extends('dashboard.layouts.templates')

@section('content')
    <!-- Table to display users -->
    <div id="users-table" style="margin-left: 180px" class="container allContent-section py-4">
        <h2>All Galleries</h2>
        <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Subtitle</th>
                    <th class="text-center">Image</th>
                    <th class="text-center"></th>
                </tr>
            </thead>

        </table>
    </div>
@endsection