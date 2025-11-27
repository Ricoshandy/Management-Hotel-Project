@extends('layouts.app')
@section('title','Daftar Reservasi')

@section('content')

<h2 class="text-center res-title mb-4">Daftar Reservasi</h2>

<style>
    .table-wrapper {
        background: #fff;
        border-radius: 14px;
        padding: 25px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .reserv-table thead th {
        background: #f2f2f2;
        padding: 14px;
        font-weight: 700;
        font-size: 14px;
        border-bottom: 2px solid #ddd;
    }

    .reserv-table tbody td {
        padding: 14px;
        vertical-align: middle;
        font-size: 14px;
        border-bottom: 1px solid #eee;
    }

    .action-btns {
        display: flex;
        gap: 8px;
    }
</style>


@if($reservations->count() == 0)
    <div class="alert alert-info text-center">
        Belum ada reservasi kamar.
    </div>
@endif

<form method="GET" action="{{ route('reservations.index') }}" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" class="form-control"
               placeholder="Cari nama atau nomor HP..."
               value="{{ $search ?? '' }}">

        <button class="main-btn" type="submit" style="border-radius: 0 8px 8px 0;">
            Cari
        </button>
    </div>
</form>

@if($search)
    <p class="text-muted mb-3">
        Menampilkan hasil untuk: <b>{{ $search }}</b>
    </p>
@endif


<div class="table-wrapper">
    <table class="table reserv-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>HP</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Kamar</th>
                <th>Harga/Malam</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($reservations as $r)
            <tr>
                <td>{{ $r->guest_name }}</td>
                <td>{{ $r->phone }}</td>
                <td>{{ $r->check_in }}</td>
                <td>{{ $r->check_out }}</td>
                <td>{{ $r->room_type }}</td>

                <td>Rp {{ number_format($r->price_per_night,0,',','.') }}</td>
                <td>Rp {{ number_format($r->total_price,0,',','.') }}</td>

                <td>
                    <div class="action-btns">

                        <a href="{{ route('reservations.edit', $r->id) }}" 
                           class="main-btn" style="padding:6px 12px; font-size:13px;">
                           Edit
                        </a>

                        <form action="{{ route('reservations.destroy', $r->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus reservasi ini?');">

                            @csrf
                            @method('DELETE')

                            <button class="secondary-btn" type="submit"
                                    style="padding:6px 12px; font-size:13px;">
                                Delete
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
