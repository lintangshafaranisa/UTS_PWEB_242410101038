@extends('layouts.app')

@section('content')
    <div class="card p-4 text-center">
        <h1>Hai</h1>
        <h4>{{ $username }}</h4>
        <p class="text-muted">Wedding Organizer Admin</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <h5>Informasi</h5>
                <p>Status: Aktif</p>
                <p>Role: Admin</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <h5>Statistik</h5>
                <p>Total Paket: 3</p>
                <p>Total Booking: 12</p>
            </div>
        </div>
    </div>
@endsection
