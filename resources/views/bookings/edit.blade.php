@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Booking</h1>
    <form method="POST" action="{{ route('bookings.update', $booking) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" name="service_name" class="form-control" value="{{ $booking->service_name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Booking Date</label>
            <input type="datetime-local" name="booking_date" class="form-control" value="{{ \Carbon\Carbon::parse($booking->booking_date)->format('Y-m-d\TH:i') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option {{ $booking->status == 'pending' ? 'selected' : '' }}>pending</option>
                <option {{ $booking->status == 'confirmed' ? 'selected' : '' }}>confirmed</option>
                <option {{ $booking->status == 'cancelled' ? 'selected' : '' }}>cancelled</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Notes</label>
            <textarea name="notes" class="form-control">{{ $booking->notes }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
