@extends('admin.adminlayout')
@section('header-name' , 'Products')
@section('page-contents')



    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Products</h4>
                    <span>
                        <a href="{{route('admin.products.addproductform')}}">Add Product</a>
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
                            @foreach($reservations as $reservation)
                                <tr>

                                    <td>{{$reservation->reservation_code}}</td>
                                    <td>{{\Illuminate\Support\Carbon::make($reservation->reserved_at)->format('M d, Y - h:m a')}}</td>
                                    <td>
                                        ₱{{\App\Helper\OrdinalHelper::numberFormat($reservation->items->sum('price'))}}</td>
                                    <td><a href="{{route('admin.orders.vieworder' , $reservation->id)}}">View</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('body-scripts')
    <script src="{{asset('assets/dashboard/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
