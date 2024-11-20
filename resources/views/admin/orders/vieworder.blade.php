@extends('admin.adminlayout')
@section('header-name' , 'Products')
@section('page-contents')

    <div class="container">
        <a class="btn btn-primary mb-3" href="{{route('admin.orders.vieworder.approve', $reservation->id)}}">Approve</a>
        <a class="btn btn-primary mb-3" href="{{route('admin.orders.vieworder.reject' , $reservation->id)}}">Reject</a>
    </div>
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Items</h4>
                    <span>
                        <strong>Reservation Code: </strong>{{$reservation->reservation_code}}<br>
                        <strong>Reserved At: </strong>{{\Illuminate\Support\Carbon::make($reservation->reserved_at)->format('M d, Y - h:m a')}}<br>
                        <strong>Price: </strong>
                            ₱{{\App\Helper\OrdinalHelper::numberFormat($reservation->items->sum('price'))}}
                        <br>
                        <strong>Status: </strong>{{strtoupper($reservation->status)}}<br>

                    </span>
                </div>
                <div class="card-body">
                    <div class="table-responsive theme-scrollbar">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reservation->items as $product)
                                <tr>
                                    <td>
                                        <div class="product-names">
                                            <div class="light-product-box">
                                                <img class="img-fluid" src="{{asset($product->product->image_url)}}" alt="t-shirt">
                                            </div>
                                            <p>{{$product->product->name}}</p>
                                        </div>

                                    </td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->color}}</td>
                                    <td>{{$product->size}}</td>
                                    <td>{{$product->quantity}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Proof of Payment</h4>

                </div>
                <div class="card-body">
                    @if($reservation->proof_of_payment)
                        <img src="{{ asset($reservation->proof_of_payment) }}" alt="Proof of Payment" class="img-fluid mt-3">
                    @else
                        No proof of Payment
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection



@section('body-scripts')
    <script src="{{asset('assets/dashboard/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
