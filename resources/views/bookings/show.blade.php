@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Booking Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Service: {{ $booking->service_name }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ $booking->booking_date }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $booking->status }}</p>
            <p class="card-text"><strong>Notes:</strong> {{ $booking->notes }}</p>
            <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
