@extends('webpage.webpagelayout')
@section('contents')

    <section class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider" data-version="5.0">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" class="slider-item">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('asset/images/clothes/2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover">
                    <!-- Overlay -->
                    <div class="overlay"></div>
                    <div class="tp-caption tp-resizeme"
                         data-x="right" data-hoffset=""
                         data-y="0" data-voffset="10"
                         data-width="['auto','auto','auto','auto']"
                         data-height="['auto','auto','auto','auto']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:right;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 7; white-space: nowrap;">
                    </div>
                    <!-- LAYER NR. 1 -->
                    <h3 class="tp-caption tp-resizeme uppercase"
                        data-x="left"
                        data-y="185"
                        data-width="full"
                        data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="800">new arrivals
                    </h3>
                    <h1 class="tp-caption tp-resizeme uppercase"
                        data-x="left"
                        data-y="228"
                        data-width="full"
                        data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-start="1000">
                        <strong>Towerside
                        </strong> Clothing Store
                    </h1>
                    <div class="tp-caption tp-resizeme"
                         data-x="left"
                         data-y="415"
                         data-width="full"
                         data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1300">
                        <p>
                            Towerside Clothing Store brings you a dynamic and ever-evolving collection,
                            <br>crafted to elevate your style and meet the demands of the modern fashion enthusiast.
                        </p>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left"
                         data-y="510"
                         data-width="full"
                         data-transform_idle="o:1;"
                         data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-start="1600">
                        <a href="#." class="btn-common">Shop Now</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- END REVOLUTION SLIDER -->
    </section>
    <!--NEW ARRIVALS-->
    <section id="arrivals" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading_space uppercase">Best Sellers!
                    </h2>
                    <p class="bottom_half">Claritas est etiam processus dynamicus, qui sequitur.
                    </p>
                </div>
            </div>
            <div class="row">
                <div id="fourCol-slider" class="owl-carousel">
                    <div class="item">
                        <div class="product_wrap">
                            <div class="image">
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-expand">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-exchange">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-heart-o">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="fancybox" href="{{asset('asset/images/product5.jpg')}}">
                                    <img src="{{asset('asset/images/clothes/2.png')}}" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p>Anticipate Shirt
                                </p>
                                <span class="price">
                                ₱100.00
                            </span>
                                <a class="fancybox" href="{{asset('asset/images/product5.jpg')}}" data-fancybox-group="gallery">
                                    <i class="fa fa-shopping-bag open">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_wrap">
                            <div class="image">
                                <div class="tag">
                                    <div class="tag-btn">
                      <span class="uppercase text-center">New
                      </span>
                                    </div>
                                </div>
                                <a class="fancybox" href="{{asset('asset/images/clothes/4.png')}}">
                                    <img src="{{asset('asset/images/clothes/4.png')}}" alt="Product" class="img-responsive">
                                </a>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-expand">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-exchange">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-heart-o">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_desc">
                                <p>Brand for 199X
                                </p>
                                <span class="price">₱100.00 </span>
                                <a class="fancybox" href="{{asset('asset/images/clothes/4.png')}}" data-fancybox-group="gallery">
                                    <i class="fa fa-shopping-bag open">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_wrap">
                            <div class="image">
                                <a class="fancybox" href="{{asset('asset/images/clothes/5.png')}}">
                                    <img src="{{asset('asset/images/clothes/5.png')}}" alt="Product" class="img-responsive">
                                </a>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-expand">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-exchange">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-heart-o">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_desc">
                                <p>SlayWorthy
                                </p>
                                <span class="price">₱100.00 </span>
                                <a class="fancybox" href="{{asset('asset/images/clothes/5.png')}}" data-fancybox-group="gallery">
                                    <i class="fa fa-shopping-bag open">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product_wrap">
                            <div class="image">
                                <a class="fancybox" href="{{asset('asset/images/clothes/6.png')}}">
                                    <img src="{{asset('asset/images/clothes/6.png')}}" alt="Product" class="img-responsive">
                                </a>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-expand">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-exchange">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <i class="fa fa-heart-o">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_desc">
                                <p>Broke in Cash
                                </p>
                                <span class="price">₱100.00 </span>
                                <a class="fancybox" href="{{asset('asset/images/clothes/6.png')}}" data-fancybox-group="gallery">
                                    <i class="fa fa-shopping-bag open">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--BRANDS-->
    <section id="brands" class="padding_bottom">
        <h3 class="hidden">hidden
        </h3>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="brand-slider" class="owl-carousel">
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo1.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo2.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo3.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo4.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo5.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo1.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo2.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo3.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo4.png')}}" alt="Brand Logo">
                        </div>
                        <div class="item text-center">
                            <img src="{{asset('asset/images/logo5.png')}}" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--NEWSLETER-->
    <section id="newsletter" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 text-center">
                    <h2 class="heading_space uppercase">sign up to newsletter
                    </h2>
                    <p class="bottom_half">Subscribe to the Towerside Clothing Store mailing list to receive updates on new arrivals,
                        <br>
                        special offers and other discount information.
                    </p>
                    <form class="newsletter">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Subscribe to our newsletter..." required>
                            <span class="input-group-addon" id="basic-addon2">
                  <button type="submit">
                    <i class="fa fa-paper-plane-o">
                    </i>
                  </button>
                </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </section>
@endsection
