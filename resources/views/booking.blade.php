@extends('layouts.app')
@section('title','Booking')
@section('content')
<div class="booking-container mx-auto" style="max-width:650px">
  <h3 class="text-center mb-4">Booking Kamar</h3>
  <form method="POST" action="{{ route('reservations.store') }}">
<style>
    body { background: #f8f9fa; }
        .booking-container {
            max-width: 650px;
            margin: 60px auto;
            padding: 25px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }
        .main-btn {
            background-color: #c59d5f;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            transition: 0.2s;
            width: 100%;
        }
        .main-btn:hover { background-color: #a8854d; }
</style>

    @csrf
    <div class="mb-3">
      <label>Nama Lengkap</label>
      <input type="text" name="guest_name" class="form-control" value="{{ old('guest_name') }}" required>
    </div>
    <div class="mb-3">
      <label>Nomor HP</label>
      <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
    </div>
    <div class="row">
      <div class="col mb-3">
        <label>Check-in</label>
        <input type="date" name="check_in" id="checkIn" class="form-control" value="{{ old('check_in') }}" required>
      </div>
      <div class="col mb-3">
        <label>Check-out</label>
        <input type="date" name="check_out" id="checkOut" class="form-control" value="{{ old('check_out') }}" required>
      </div>
    </div>
    <div class="mb-3">
      <label>Room Type</label>
      <select name="room_type" id="roomType" class="form-select" required>
        <option value="">Pilih kamar</option>
        @foreach($prices as $type => $price)
          <option value="{{ $type }}" data-price="{{ $price }}">{{ $type }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label>Harga per Malam</label>
      <input type="text" id="pricePerNight" class="form-control" readonly>
      <input type="hidden" name="price_per_night" id="pricePerNightHidden">
    </div>

    <div class="mb-3">
      <label>Total Harga</label>
      <input type="text" id="totalPrice" class="form-control" readonly>
      <input type="hidden" name="total_price" id="totalPriceHidden">
    </div>

    <button class="main-btn" type="submit">Kirim Reservasi</button>
  </form>
</div>

@endsection

@section('scripts')
<script>
  const prices = @json($prices);
  const roomType = document.getElementById('roomType');
  const pricePerNight = document.getElementById('pricePerNight');
  const pricePerNightHidden = document.getElementById('pricePerNightHidden');
  const totalPrice = document.getElementById('totalPrice');
  const totalPriceHidden = document.getElementById('totalPriceHidden');
  const checkIn = document.getElementById('checkIn');
  const checkOut = document.getElementById('checkOut');

  function nights() {
    const inD = new Date(checkIn.value);
    const outD = new Date(checkOut.value);
    if(outD>inD) return (outD-inD)/(1000*60*60*24);
    return 0;
  }
  function update() {
    const selected = roomType.value;
    const price = prices[selected] ?? 0;
    pricePerNight.value = price ? "Rp " + price.toLocaleString('id-ID') : '';
    pricePerNightHidden.value = price;
    const n = nights();
    const total = price * n;
    totalPrice.value = total ? "Rp " + total.toLocaleString('id-ID') : '';
    totalPriceHidden.value = total;
  }

  roomType?.addEventListener('change', update);
  checkIn?.addEventListener('change', update);
  checkOut?.addEventListener('change', update);
</script>
@endsection
