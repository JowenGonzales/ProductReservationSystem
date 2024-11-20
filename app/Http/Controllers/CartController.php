<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Products;
use App\Models\ProductVariations;
use App\Models\Reservation;
use App\Models\ReservationItems;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

    public function cart()
    {

        $user = User::find(Auth::id());

        return view('webpage.cart.cart' , [
            'user' => $user,
        ]);
    }


    public function addToCart(Request $request, $id)
    {

        $user = User::find(Auth::id());

        if ($user == null) {
            session()->flash('success' , 'Please Login First!');
            return back();
        }

        $product = Products::find($id);
        $variations = $product->variations
            ->where('size' , $request->size)
            ->where('color_name' , $request->color)->first()
        ;


        Carts::create([
            'user_id' => $user->id,
            'product_variation_id' => $variations->id,
            'quantity' => $request->input('quantity'),
        ]);


        session()->flash('success' , "Added to Cart");
        return back();
    }


    public function removeItem($id)
    {

        $cart_item = Carts::find($id);
        $cart_item->delete();

        return back();
    }


    public function reserveItems()
    {



        $user = User::find(Auth::id());
        $carts = $user->carts;

        if (count($carts) != 0) {
            $reservation_code = random_int(100000000000, 999999999999);
            $reservation = Reservation::create([
                'reservation_code' => $reservation_code,
                'user_id' => $user->id,
                'status' => 'pending',
                'reserved_at' => Carbon::now(), // Current timestamp
                'expiration_at' => Carbon::now()->addDays(3), // Expiration set to 3 days from now
                'completed_at' => null, // Null since it’s not yet completed

                'notes' => '',
            ]);
            foreach ($carts as $cart) {

                ReservationItems::create([
                    'reservation_code' => $reservation_code,
                    'product_id' => $cart->variation->product->product_id,
                    'product_variation_id' => $cart->variation->id,
                    'size' => $cart->variation->size,
                    'color' => $cart->variation->color_name,
                    'quantity' => $cart->quantity,
                    'stock_at_reservation' => $cart->variation->product->quantity,
                    'price' => $cart->quantity * $cart->variation->product->price,
                ]);


                $cart->delete();
            }
        }




        session()->flash('success' , 'Successfully Reserved!');
        return back();
    }






}
