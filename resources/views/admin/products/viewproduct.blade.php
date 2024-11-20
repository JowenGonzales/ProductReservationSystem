@extends('admin.adminlayout')
@section('header-name' , 'View Product')
@section('head-imports')

    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/rating.css')}}">
@endsection
@section('page-contents')

    <div class="container-fluid">
        <div>
            <div class="row product-page-main p-0">
                <div class="col-xxl-4 col-md-6 box-col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                <div class="item"><img src="{{asset($product->image_url)}}" alt=""></div>
                                @if($product->product_gallery != null)
                                    @foreach($product->product_gallery as $gallery)
                                        <div class="item"><img src="{{asset($gallery->image_url)}}" alt=""></div>

                                    @endforeach
                                @endif
                            </div>
                            <div class="owl-carousel owl-theme" id="sync2">
                                <div class="item"><img src="{{asset($product->image_url)}}" alt=""></div>
                                @if($product->product_gallery != null)
                                    @foreach($product->product_gallery as $gallery)
                                        <div class="item"><img src="{{asset($gallery->image_url)}}" alt=""></div>


                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 box-col-6 order-xxl-0 order-1">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-page-details">
                                <h3 class="f-w-600">{{$product->name}}</h3>
                            </div>
                            <div class="product-price">₱{{$product->price}}
                                <del>$350.00 </del>
                            </div>
                            <ul class="product-color">
                                @if($product->variations != null)
                                    @foreach($product->variations as $variation)
                                        <li style="background: {{$variation->color}}"></li>
                                    @endforeach
                                @endif



                            </ul>
                            <hr>
                            <p>Description: {{$product->description}}</p>
                            <hr>
                            <div>
                                <b>Variations: </b>
                                <table class="product-page-width">
                                    <tbody>

                                    @if($product->variations != null)
                                        @foreach($product->variations as $variation)
                                            <tr>

                                                <td>
                                                    <b style>{{strtoupper($variation->color_name)}} :</b>
                                                        <span style="width: 10px; height: 10px;background-color: {{$variation->color}}"></span>
                                                    <br>

                                                    Size: {{$variation->size}} |
                                                    Stock: {{$variation->stock}} <br>
                                                    Reserved: {{$variation->reserved}} |
                                                    <a class="text-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight{{$variation->id}}" aria-controls="offcanvasRight">Edit</a>



                                                </td>
                                                <span class=" common-offcanvas">
                                                        <div class="offcanvas offcanvas-end" id="offcanvasRight{{$variation->id}}" tabindex="-1" aria-labelledby="offcanvasRightLabel">
                                                            <div class="offcanvas-header">
                                                                <h4 class="offcanvas-title" id="offcanvasRightLabel">Edit Department</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                            </div>
                                                            <div class="offcanvas-body custom-scrollbar ">

                                                                <div class="my-auto">
                                                                    <form method="POST" action="{{route('admin.products.viewproduct.editvariation', $variation->id)}}" class="row g-3">
                                                                        @csrf
                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlInput6">Size</label>
                                                                            <select name="size" id="job_title" class="form-control" required="">
                                                                                <option value="" disabled selected>Select Size</option><!-- Teaching positions -->
                                                                                <option value="XS" @if($variation->size === 'XS') selected @endif >XS</option>
                                                                                <option value="S" @if($variation->size === 'S') selected @endif>S</option>
                                                                                <option value="M" @if($variation->size === 'M') selected @endif>M</option>
                                                                                <option value="XL" @if($variation->size === 'XL') selected @endif>XL</option>
                                                                                <option value="XXL" @if($variation->size === 'XXL') selected @endif>XXL</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlTextarea1">Stock</label>
                                                                            <input name="stock" class="form-control" id="exampleFormControlInput6" type="text" value="{{$variation->stock}}">
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlTextarea1">Reserved</label>
                                                                            <input name="reserved" class="form-control" id="exampleFormControlInput6" type="text" value="{{$variation->reserved}}">
                                                                        </div>




                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlTextarea1">Color Name</label>
                                                                            <input name="color_name" class="form-control" id="exampleFormControlInput6" type="text" value="{{$variation->color_name}}">
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <label class="form-label" for="exampleFormControlTextarea1">Color</label>
                                                                            <input name="color" class="form-control form-control-color" type="color" value="{{$variation->color}}">
                                                                        </div>

                                                                        <div class="col-12 mt-3">
                                                                            <button class="btn btn-light me-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
                                                                            <button class="btn btn-primary" type="submit">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>

                                            </tr>

                                        @endforeach
                                    @endif



                                    </tbody>
                                </table>
                            </div>
                            <hr>


                            <div class="m-t-15 btn-showcase">
                                <div>
                                    <button  class="btn btn-primary mx-auto " type="button" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Add New Variation</button>
                                    <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModallogin" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content dark-sign-up overflow-hidden">
                                                <div class="modal-body social-profile text-start">
                                                    <div class="modal-toggle-wrapper">
                                                        <h4 class="text-dark">Create new variation</h4>
                                                        <p>
                                                            Fill in information below to continue.</p>
                                                        <form method="POST" action="{{route('admin.products.viewproduct.addvariation', $product->id)}}" class="row g-3">
                                                            @csrf
                                                            <div class="col-12">
                                                                <label class="form-label" for="exampleFormControlInput6">Size</label>
                                                                <select name="size" id="job_title" class="form-control" required="">
                                                                    <option value="" disabled selected>Select Size</option><!-- Teaching positions -->
                                                                    <option value="XS" >XS</option>
                                                                    <option value="S" >S</option>
                                                                    <option value="M" >M</option>
                                                                    <option value="XL" >XL</option>
                                                                    <option value="XXL">XXL</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="exampleFormControlTextarea1">Stock</label>
                                                                <input name="stock" class="form-control" id="exampleFormControlInput6" type="text" >
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label" for="exampleFormControlTextarea1">Reserved</label>
                                                                <input name="reserved" class="form-control" id="exampleFormControlInput6" type="text" >
                                                            </div>


                                                            <div class="col-12">
                                                                <label class="form-label" for="exampleFormControlTextarea1">Color Name</label>
                                                                <input name="color_name" class="form-control" id="exampleFormControlInput6" type="text" >
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label" for="exampleFormControlTextarea1">Color</label>
                                                                <input name="color" class="form-control form-control-color" type="color" >
                                                            </div>

                                                            <div class="col-12 mt-3">
                                                                <button class="btn btn-light me-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
                                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 box-col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- side-bar colleps block stat-->
                            <div class="filter-block">
                                <h4>Brand</h4>
                                <ul>
                                    <li>Clothing</li>
                                    <li>Bags</li>
                                    <li>Footwear</li>
                                    <li>Watches</li>
                                    <li>ACCESSORIES</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="collection-filter-block">
                                <ul class="pro-services">
                                    <li>
                                        <div class="d-flex"><i data-feather="truck"></i>
                                            <div class="flex-grow-1">
                                                <h5>Free Shipping                                    </h5>
                                                <p>Free Shipping World Wide</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><i data-feather="clock"></i>
                                            <div class="flex-grow-1">
                                                <h5>24 X 7 Service                                    </h5>
                                                <p>Online Service For New Customer</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><i data-feather="gift"></i>
                                            <div class="flex-grow-1">
                                                <h5>Festival Offer                                 </h5>
                                                <p>New Online Special Festival</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><i data-feather="credit-card"></i>
                                            <div class="flex-grow-1">
                                                <h5>Online Payment                                  </h5>
                                                <p>Contrary To Popular Belief.                                   </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here-->
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection



@section('body-scripts')
    <script src="{{asset('assets/dashboard/js/rating/jquery.barrating.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/rating/rating-script.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/ecommerce.js')}}"></script>

@endsection
