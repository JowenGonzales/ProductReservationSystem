@extends('webpage.webpagelayout')
@section('contents')



    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a>
                        </li>
                        <li>Products</li>
                        <li class="active">{{$product->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--Cart Detail -->
    <section id="cart" class="padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div id="slider_product" class="cbp margintop40">


                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset($product->image_url)}}" alt="">
                                </div>
                            </div>
                        </div>

                        @if($product->product_gallery != null)
                            @foreach($product->product_gallery as $gallery)
                                <div class="cbp-item">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="{{asset($gallery->image_url)}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div id="js-pagination-slider">
                        <div class="cbp-pagination-item cbp-pagination-active">
                            <img src="{{asset($product->image_url)}}" alt="">
                        </div>

                        @if($product->product_gallery != null)
                            @foreach($product->product_gallery as $gallery)
                                <div class="cbp-pagination-item cbp-pagination-active">
                                    <img src="{{asset($gallery->image_url)}}" alt="">
                                </div>
                            @endforeach
                        @endif


                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="detail_pro margintop40">
                        <h4 class="bottom30">{{$product->name}}</h4>
                        <p class="bottom30">{{$product->description}}</p>

                        <h2 class="price marginbottom15">₱{{$product->price}}</h2>

                        <form class="cart-form" method="POST" action="{{route('webpage.cart.addtocart', $product->id)}}">
                            @csrf
                            <div class="form-group">
                                <label for="city">
                                    Size *
                                </label>
                                <label class="select form-control">
                                    @if($product->variations != null)
                                        <select name="size" id="size" class="form-control" required>
                                            <option value="">Select Size</option>
                                            @foreach($product->variations->unique('size') as $variation)
                                                <option value="{{ $variation->size }}">{{ $variation->size }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="city">
                                    Color *
                                </label>
                                <label class="select form-control">
                                    @if($product->variations != null)
                                        <select name="color" id="city">
                                            @foreach($product->variations->unique('color_name') as $variation)
                                                <option value="{{ $variation->color_name }}">{{ strtoupper($variation->color_name) }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </label>
                            </div>
                            <span id="stock-display"></span>

                            <script>
                                document.getElementById('size').addEventListener('change', function () {
                                    const selectedSize = this.value;
                                    const productId = "{{ $product->product_id }}"; // Pass the product ID dynamically
                                    const colorSelect = document.getElementById('city');


                                    if (!selectedSize) {
                                        // Reset color dropdown if no size is selected
                                        colorSelect.innerHTML = '<option value="">Select Color</option>';
                                        return;
                                    }

                                    // Make an AJAX request to fetch colors for the selected size
                                    fetch(`/catalogue/view/${selectedSize}/${productId}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            // Clear the existing options
                                            colorSelect.innerHTML = '<option value="">Select Color</option>';


                                            // Populate the dropdown with the returned data
                                            data.forEach(variation => {
                                                const option = document.createElement('option');
                                                option.value = variation.color_name;
                                                option.textContent = variation.color_name.toUpperCase();

                                                colorSelect.appendChild(option);
                                            });
                                        })
                                        .catch(error => {
                                            console.error('Error fetching colors:', error);
                                        });
                                });


                                document.getElementById('city').addEventListener('change', function () {
                                    const selectedColor = this.value;
                                    const selectedSize = document.getElementById('size').value; // Ensure size is selected
                                    const productId = "{{ $product->product_id }}"; // Pass the product ID dynamically
                                    const stockDisplay = document.getElementById('stock-display'); // Element to display stock count

                                    if (!selectedColor || !selectedSize) {
                                        // Reset stock display if size or color is not selected
                                        stockDisplay.textContent = 'Stock: N/A';
                                        return;
                                    }

                                    // Make an AJAX request to fetch stock based on size and color
                                    fetch(`/catalogue/view/get-stock/${selectedSize}/${productId}/${selectedColor}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            // Update the stock display
                                            stockDisplay.textContent = `Stock: ${data.stock}`;

                                        })
                                        .catch(error => {
                                            console.error('Error fetching stock:', error);
                                            stockDisplay.textContent = 'Stock: N/A';
                                        });
                                });
                            </script>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="quan">
                                            Quantity *
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group d-flex justify-content-center">
                                            <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                            <input
                                                id="quantity"
                                                name="quantity"
                                                type="number"
                                                value="1"
                                                min="1"
                                                class="form-control"
                                                style="width: 80px; text-align: center; height: 34px;"
                                                required
                                            >
                                            <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <script>
                                // Get references to the input and buttons
                                const quantityInput = document.getElementById('quantity');
                                const incrementBtn = document.getElementById('incrementBtn');
                                const decrementBtn = document.getElementById('decrementBtn');

                                // Increment the quantity by 1
                                incrementBtn.addEventListener('click', () => {
                                    quantityInput.value = parseInt(quantityInput.value) + 1;
                                });

                                // Decrement the quantity by 1 (ensuring it doesn't go below 1)
                                decrementBtn.addEventListener('click', () => {
                                    if (quantityInput.value > 1) {
                                        quantityInput.value = parseInt(quantityInput.value) - 1;
                                    }
                                });
                            </script>

                        <div class="cart-buttons">
                            <button type="submit" class="uppercase border-radius btn-dark"  ><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</button>
                            <a class="icons" href="#.">
                                <i class="fa fa-heart-o"></i>
                            </a>
                            <a class="icons" href="#.">
                                <i class="fa fa-exchange"></i>
                            </a>
                        </div>

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bottom_half">
        <div class="container">
            <div class="row">
                <div class="clearfix col-md-12">
                    <div class="shop_tab">
                        <ul class="tabs">
                            <li class="active" rel="tab1">
                                <h4 class="heading uppercase">Description</h4>
                            </li>

                        </ul>
                        <div class="tab_container">
                            <div id="tab1" class="tab_content">
                                <p>{{$product->description}}</p>
                            </div>

                            <div id="tab2" class="tab_content">
                                <ol class="commentlist">
                                    <li>
                                        <div class="avator clearfix"><img src="images/testinomial1.png" class="img-responsive border-radius" alt="author">
                                        </div>
                                        <div class="comment-content"> <span class="stars"><img alt="star rating" src="images/star.png"></span> <strong>Cobus Bester</strong> -
                                            <time datetime="2016-04-07T11:58:43+00:00">April 7, 2016</time>
                                            <p>This album proves why The Woo are the best band ever. Best music ever!</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="avator clearfix"><img src="images/testinomial1.png" class="img-responsive border-radius" alt="author">
                                        </div>
                                        <div class="comment-content"> <span class="stars"><img alt="star rating" src="images/star.png"></span> <strong>Cobus Bester</strong> -
                                            <time datetime="2016-04-07T11:58:43+00:00">April 7, 2016</time>
                                            <p>This album proves why The Woo are the best band ever. Best music ever!</p>
                                        </div>
                                    </li>
                                </ol>

                                <form class="review-form margintop15">
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label class="control-label">Your Review</label>
                                            <textarea class="form-control" rows="3" placeholder="Your Review"></textarea>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="inputPassword" class="control-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="inputPassword" class="control-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn-light border-radius" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="tab3" class="tab_content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table table-responsive table-striped">
                                            <tbody>
                                            <tr>
                                                <td>Part Number</td>
                                                <td>60-MCTE</td>
                                            </tr>
                                            <tr>
                                                <td>Item Weight</td>
                                                <td>54 pounds</td>
                                            </tr>
                                            <tr>
                                                <td>Product Dimensions</td>
                                                <td>92.8 inches</td>
                                            </tr>
                                            <tr>
                                                <td>Item model number</td>
                                                <td>60-MCTE</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-responsive table-striped">
                                            <tbody>
                                            <tr>
                                                <td>Item Package Quantity</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>Number of Handles</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>Batteries Required?</td>
                                                <td>NO</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('body-scripts')


@endsection
