@extends('layouts.app')
@section('content')
    <h3>Dashboard Wedding Organizer</h3>
    <div class="alert alert-success">
        Selamat datang<strong>{{ $username }}</strong>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-center p-3">
                <h5>Total Paket</h5>
                <h2>3</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-3">
                <h5>Booking Bulan Ini</h5>
                <h2>12</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center p-3">
                <h5>Paket Terlaris</h5>
                <p>Gold Package</p>
            </div>
        </div>
    </div><br>

    <div class="card p-3">
        <h5>Highlight Wedding</h5>
        <p>Kami menyediakan paket pernikahan lengkap dengan layanan profesional dan dekorasi yang elegan. Booking sekarang!!</p>
    </div>
@endsection
