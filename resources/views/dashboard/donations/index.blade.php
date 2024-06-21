@extends('dashboard.layouts.template')

@section('content')
    <div class="content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-truncate" style="max-width: 500px;">All Donations</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Blog</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Donate at</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($donations as $donation)
                    <tr>
                        <td class="text-center">{{ $donation->wallet->user->name }}</td>
                        <td class="text-center">{{ $donation->blog->title }}</td>
                        <td class="text-center">Rp. {{ number_format($donation->amount, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $donation->created_at->format('M d, Y') }}</td>
                        <td class="text-center">
                            <a href="{{ route('donations.show', $donation) }}" class="btn btn-primary">Show</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <div class="d-flex justify-content-center">
                                Total Donation: 
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                Rp. {{ number_format($totalDonations, 0, ',', '.') }}
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection