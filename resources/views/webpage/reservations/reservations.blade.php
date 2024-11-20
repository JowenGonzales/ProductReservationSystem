@extends('webpage.webpagelayout')
@section('head-imports')

@endsection
@section('contents')


    <section id="cart" class="padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="heading uppercase marginbottom15">Reservations</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>

                            <tr>
                                <th class="uppercase">Product photo</th>
                                <th class="uppercase">Product name</th>
                                <th class="uppercase">Price</th>
                                <th class="uppercase">Quantity</th>
                                <th class="uppercase">Action</th>
                                <th class="uppercase"></th>
                            </tr>

                            </thead>
                            <tbody>

                            @foreach($user->reservations as $reservations)
                                {{-- Group Header --}}
                                <tr>
                                    <td >
                                        <strong>Reservation Code: {{ $reservations->reservation_code }}</strong>
                                    </td>
                                </tr>


                                {{-- Loop through each reservation in the group --}}
                                @foreach($reservations->items as $item)
                                    <tr>
                                        <td>
                                            <img class="shopping-product" src="{{ asset($item->product->image_url) }}" style="width: 60px; height: 60px;" alt="your product">
                                        </td>
                                        <td class="product-name">
                                            <h5>{{ $item->product->name }}</h5>
                                            <small>Size: {{ $item->size }} | Color: {{ ucfirst($item->color) }}</small>
                                        </td>


                                        <td class="product-name">
                                            <h5>Price</h5>
                                            <small>₱{{\App\Helper\OrdinalHelper::numberFormat($item->product->price)}}</small>
                                        </td>
                                        <td class="product-name">
                                            <h5>Quantity</h5>
                                            <small>{{$item->quantity}}</small>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn-close"></a>
                                        </td>
                                    </tr>
                                @endforeach

                                <tr>
                                    <td>

                                        <strong>Total: </strong>₱{{\App\Helper\OrdinalHelper::numberFormat( $reservations->items->sum('price') )}}<br>
                                        <strong>Reserved At:  </strong>{{\Illuminate\Support\Carbon::make($reservations->reserved_at)->format('M d, Y - h:m a') }}<br>
                                        <strong>Status At:  </strong>{{$reservations->status}}<br>
                                        <p>Status: <strong>{{ $reservations->status }}</strong></p><br>
                                        @if($reservations->proof_of_payment)
                                            <p><strong>Proof of Payment:</strong> <a target="_blank" class="btn btn-primary mb-3" href="{{$reservations->proof_of_payment}}">Click Here..</a></p>
                                        @endif


                                        <div class="accordion" id="accordion-{{ $reservations->id }}">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-{{ $reservations->id }}">
                                                    <button
                                                        class="accordion-button collapsed btn btn-primary mb-3"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-{{ $reservations->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-{{ $reservations->id }}">
                                                        Upload Proof of Payment
                                                    </button>
                                                </h2>
                                                <div
                                                    id="collapse-{{ $reservations->id }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="heading-{{ $reservations->id }}"
                                                    data-bs-parent="#accordion-{{ $reservations->id }}">
                                                    <div class="accordion-body">
                                                        <form
                                                            action="{{ route('webpage.reservations.uploadproofofpayment', $reservations->id) }}"
                                                            method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="proofOfPayment" class="form-label">
                                                                    <strong>Upload Proof of Payment:</strong>
                                                                </label>
                                                                <input
                                                                    type="file"
                                                                    class="form-control"
                                                                    id="proofOfPayment"
                                                                    name="proof_of_payment"
                                                                    accept="image/*"
                                                                    required>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <a href="" class="uppercase btn-dark border-radius margintop30">CONTINUE SHOPPING</a>
                        </div>
                        <div class="col-sm-3 text-right">

                        </div>
                        <div class="col-sm-3 text-right">
                            <a href="#." class="uppercase btn-dark border-radius margintop30">CLEAR SHOPPING CART</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection

