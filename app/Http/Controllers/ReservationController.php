<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
   public function index(Request $request)
{
    $search = $request->search;

    $reservations = Reservation::when($search, function($query) use ($search) {
        $query->where('guest_name', 'like', "%{$search}%")
              ->orWhere('phone', 'like', "%{$search}%")
              ->orWhere('room_type', 'like', "%{$search}%");
    })
    ->orderBy('created_at', 'desc')
    ->get();

    return view('reservations.index', compact('reservations', 'search'));
}


    public function create()
    {
        // optional pass room price list
        $prices = [
            'Luxury Suite' => 300000,
            'Deluxe Room' => 200000,
            'Standard Room' => 100000,
        ];
        return view('booking', compact('prices'));
    }

    public function store(ReservationRequest $request)
    {
        $data = $request->validated();
        Reservation::create($data);
        return redirect()->route('reservations.index')->with('success','Reservasi dibuat.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $prices = [
            'Luxury Suite' => 300000,
            'Deluxe Room' => 200000,
            'Standard Room' => 100000,
        ];
        return view('reservations.edit', compact('reservation','prices'));
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->update($request->validated());
        return redirect()->route('reservations.index')->with('success','Reservasi diperbarui.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success','Reservasi dihapus.');
    }
}
