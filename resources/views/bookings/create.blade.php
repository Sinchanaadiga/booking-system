@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Booking</h1>
    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Service Name</label>
            <input type="text" name="service_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Booking Date</label>
            <input type="datetime-local" name="booking_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
