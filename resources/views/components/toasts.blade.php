
    <!-- jQuery -->
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('assets/vendors/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('assets/vendors/toastr/toastr.min.css')}}">

    @if(session('success'))
        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'success',
                    title: '<div class="mt-2">{{ session('success') }}</div>'
                })
            });
        </script>


    @endif
    @if(session('error'))
        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });


                Toast.fire({
                    icon: 'error',
                    title: '<div class="mt-2">{{ session('error') }}</div>'
                })
            });
        </script>

    @endif


    <script>
        function success(message) {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            Toast.fire({
                icon: 'success',
                title: '<div class="mt-2">' + message + '</div>'
            })
        }
    </script>



<!-- SweetAlert2 -->
<script src="{{asset('assets/vendors//sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('assets/vendors//toastr/toastr.min.js')}}"></script>

