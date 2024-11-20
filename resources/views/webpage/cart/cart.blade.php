@extends('webpage.webpagelayout')
@section('contents')

    <!--Cart TAble-->
    <section id="cart" class="padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="heading uppercase marginbottom15">Shopping cart</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>

                            <tr>
                                <th class="uppercase">Product photo</th>
                                <th class="uppercase">Product name</th>
                                <th class="uppercase">Description</th>
                                <th class="uppercase">Price</th>
                                <th class="uppercase">Quantity</th>
                                <th class="uppercase">Total Price</th>
                                <th class="uppercase"></th>
                            </tr>

                            </thead>
                            <tbody>
                            @if($user->carts != null && count($user->carts) > 0)
                                @foreach($user->carts as $cart)
                                    <tr>
                                        <td>
                                            <img class="shopping-product" src="{{asset($cart->variation->product->image_url)}}" style="width:  60px;height: 60px;" alt="your product">
                                        </td>
                                        <td class="product-name">
                                            <h5>
                                                {{$cart->variation->product->name}}
                                                {{$cart->variation->size}} |
                                                {{strtoupper($cart->variation->color_name)}} | x
                                            </h5>
                                        </td>
                                        <td>
                                            <p>
                                                {{$cart->variation->product->description}}
                                            </p>
                                        </td>
                                        <td class="price">
                                            <h5>₱{{\App\Helper\OrdinalHelper::numberFormat($cart->variation->product->price)}}</h5>
                                        </td>
                                        <td>
                                            <div class="input-group spinner">
                                                <input type="text" class="form-control" value="{{$cart->quantity}}">
                                                <div class="input-group-btn-vertical">
                                                    <div class="btn"><i class="fa fa-angle-up"></i></div>
                                                    <div class="btn"><i class="fa fa-angle-down"></i></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">
                                            <h5>₱{{\App\Helper\OrdinalHelper::numberFormat($cart->quantity * $cart->variation->product->price)}}</h5>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('webpage.cart.removeitem' , $cart->id)}}" class="btn-close" href="#.">

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        No Items in the Cart
                                    </td>
                                </tr>
                            @endif


                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('webpage.catalogues')}}" class="uppercase btn-dark border-radius margintop30">CONTINUE SHOPPING</a>
                        </div>
                        <div class="col-sm-3 text-right">

                        </div>
                        <div class="col-sm-3 text-right">
                            <a href="#." class="uppercase btn-dark border-radius margintop30">CLEAR SHOPPING CART</a>
                        </div>
                    </div>
                </div>
            </div>
            @if($user->carts != null && count($user->carts) > 0)


                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <div class="shop_measures margintop40">
                            <h4 class="heading uppercase bottom30">cart totals</h4>
                            <table class="table table-responsive">
                                <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td class="text-right"><h5>₱{{\App\Helper\OrdinalHelper::numberFormat($cart->quantity * $cart->variation->product->price)}}</h5></td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td class="text-right"><h5>₱50.00</h5></td>
                                </tr>
                                <tr>
                                    <td>Cart Totals</td>
                                    <td class="text-right"><h5 class="price">₱{{\App\Helper\OrdinalHelper::numberFormat($cart->quantity * $cart->variation->product->price + 50)}}</h5></td>
                                </tr>
                                </tbody>
                            </table>

                            <a href="{{route('webpage.cart.reserveitems')}}" class="uppercase btn-dark border-radius margintop30">Proceed to checkout</a>
                        </div>
                    </div>

                </div>
            @endif
        </div>
    </section>
@endsection
