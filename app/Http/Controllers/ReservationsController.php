<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationsController extends Controller
{
    //


    public function reservations()
    {

        $user = User::find(Auth::id());


        $reservations = Reservation::all();


        return view('webpage.reservations.reservations' , [
            'user' => $user
        ]);
    }

    public function uploadProofOfPayment(Request $request, $id)
    {
        $request->validate([
            'proof_of_payment' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $reservation = Reservation::findOrFail($id);

        if ($request->hasFile('proof_of_payment')) {
            $file = $request->file('proof_of_payment');
            $filePath = $file->store('proof_of_payment', 'public');

            // Save file path to reservation (or another related model)
            $reservation->proof_of_payment = 'storage/' . $filePath;
            $reservation->save();
        }

        return back()->with('success', 'Proof of payment uploaded successfully!');
    }
}
