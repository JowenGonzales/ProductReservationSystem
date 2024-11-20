<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //

    public function orders()
    {
        $reservations = Reservation::all();

        return view('admin.orders.orders' , [
            'reservations' => $reservations,
        ]);
    }


    public function viewOrder($id)
    {
        $reservation = Reservation::find($id);
        return view('admin.orders.vieworder' , [
            'reservation' => $reservation,
        ]);
    }

    public function approve($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'approved';
        $reservation->save();

        session()->flash('success' , 'Approved');
        return back();
    }

    public function reject($id)
    {
        $reservation = Reservation::find($id);
        $reservation->status = 'rejected';
        $reservation->save();

        session()->flash('success' , 'Rejected');
        return back();
    }


}
