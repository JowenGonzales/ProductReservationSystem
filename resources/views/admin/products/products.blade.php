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
                                <th>Color</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>

                                        <div class="product-names">
                                            <div class="light-product-box">
                                                <img class="img-fluid" src="{{asset($product->image_url)}}" alt="t-shirt">
                                            </div>
                                            <p>{{$product->name}}</p>
                                        </div>

                                    </td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->color}}</td>
                                    <td>{{$product->size}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>
                                        <a href="{{route('admin.products.viewproduct' , $product->id)}}">View</a>
                                    </td>
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
