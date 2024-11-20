@extends('admin.adminlayout')
@section('header-name' , 'Add Product Form')

@section('head-imports')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/intltelinput.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/tagify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/vendors/dropzone.min.css')}}">
@endsection
@section('page-contents')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.products.addproductform.add')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="product_id" class="form-label">Product ID</label>
                                <input type="text" class="form-control" id="product_id" name="product_id" required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                            </div>



                            <div class="mb-3">
                                <label for="image_url" class="form-label">Image URL</label>
                                <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Product</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('body-scripts')

    <script src="{{asset('assets/dashboard/js/flat-pickr/flatpickr.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/flat-pickr/custom-flatpickr.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/dropzone/dropzone-script.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/select2/tagify.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/select2/tagify.polyfills.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/select2/intltelinput.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/add-product/select4-custom.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/editors/quill.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/custom-add-product.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/form-validation-custom.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/height-equal.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/tooltip-init.js')}}"></script>



    <script src="{{asset('assets/dashboard/js/script.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/script1.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/theme-customizer/customizer.js')}}"></script>

@endsection
