@extends('webpage.webpagelayout')
@section('contents')

    <!--Page Nav-->
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li class="active">Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="grid padding">
        <h3 class="hidden">hidden</h3>
        <div class="container">
            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">


                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">PriCe</h5>
                        <div class="range">
                            <div id="slider-3"></div>
                            <p>
                                <input type="text" id="price" style="border:0; color:#333333; font-weight:bold; font-size:12px;">
                            </p>
                            <button type="submit">Search</button>
                        </div>
                    </div>
                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">color options</h5>
                        <ul class="category">
                            @foreach($unique_colors as $color)
                                <li><a href="">{{ucfirst(strtolower($color->color_name))}}<span>({{$color->total}})</span></a> </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">Size options</h5>
                        <ul class="category">
                            @foreach($unique_sizes as $sizes)
                                <li><a href="">{{strtoupper($sizes->size)}}<span>({{$sizes->total}})</span></a> </li>
                            @endforeach
                        </ul>
                    </div>

                </aside>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="shop-grid-controls">
                    <a class="side-button bottom30" href="#."> Show Sidebar</a>
                    <div class="view-button grid active bottom30">
                        <i class="fa fa-th-large"></i>
                    </div>
                    <div class="view-button list bottom30">
                        <i class="fa fa-align-justify"></i>
                    </div>
                    <div class="entry bottom30">
                        <form class="grid-form">
                            <div class="form-group">
                                <div class="select form-control">
                                    <select name="country" id="sorting">
                                        <option selected="">Defaul sorting</option>
                                        <option>Defaul sorting</option>
                                        <option>Defaul sorting</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row shop-grid grid-view">
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="product_wrap heading_space">
                                <div class="image">
                                    <div class="tag">
                                        <div class="tag-btn">
                                            <span class="uppercase text-center">New</span>
                                        </div>
                                    </div>
                                    <a class="fancybox" href="{{asset($product->image_url)}}">
                                        <img src="{{asset($product->image_url)}}" alt="Product" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product_desc">
                                    <a href="{{route('webpage.catalogues.viewproduct' , $product->product_id)}}">
                                    <p class="title ">{{$product->name}}</p>

                                    </a>
                                    <div class="list_content">
                                        <h4 class="bottom30">{{$product->name}}</h4>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                        <ul class="review_list bottomtop30">
                                            <li><img alt="star" src="images/star.png">
                                            </li>
                                            <li><a href="#.">10 review(s) </a>
                                            </li>
                                            <li><a href="#.">Add your review</a>
                                            </li>
                                        </ul>
                                        <h4 class="price bottom30">
                                            {{$product->price}} &nbsp;
                                            <span class="discount">
                                                {{$product->price}}
                                            </span>
                                        </h4>
                                        <div class="cart-buttons">
                                            <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                            <a class="icons" href="#.">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="icons" href="#.">
                                                <i class="fa fa-exchange"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="price">₱{{$product->price}}</span>
                                    <i class="fa fa-shopping-cart">
                                    </i>
                                    <a class="fancybox" href="{{asset($product->image_url)}}" data-fancybox-group="gallery">
                                        <i class="fa fa-shopping-bag open"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ul class="pager">
                            <li><a href="#."><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="active"><a href="#.">01</a>
                            </li>
                            <li><a href="#.">02</a>
                            </li>
                            <li><a href="#.">03</a>
                            </li>
                            <li><a href="#."><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <h5 class="result uppercase">Showing 1-12 of 20 relults</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
