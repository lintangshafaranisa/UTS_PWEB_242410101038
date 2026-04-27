@extends('layouts.app')
@section('content')
    <h3>Paket Wedding</h3>
    <div class="row">
        @foreach ($paket as $p)
            <div class="col-md-4">
                <div class="card p-3 mb-3 shadow-sm">
                    <h4 class="text-primary">{{ $p['nama'] }}</h4>
                    <h5 class="text-success">Rp {{ $p['harga'] }}</h5>
                    <p>{{ $p['fasilitas'] }}</p>
                    @if ($p['status'] == 'Best Seller')
                        <span class="badge bg-warning text-dark">Best Seller</span>
                    @elseif($p['status'] == 'Eksklusif')
                        <span class="badge bg-dark">Eksklusif</span>
                    @else
                        <span class="badge bg-secondary">Tersedia</span>
                    @endif<br>
                    <button class="btn btn-primary w-100">Pesan Sekarang</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
