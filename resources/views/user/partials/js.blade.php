<script src="{{asset('user/js/jquery.min.js')}}"></script><!-- JQUERY MIN JS -->
<script src="{{asset('user/vendor/wow/wow.min.js')}}"></script><!-- WOW JS -->
<script src="{{asset('user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{asset('user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<script>
    const CART_ROUTE = "{{route('book.cart')}}"
    const CHECKOUT_ROUTE = "{{route('book.checkout')}}"
    $(document).ready(function () {
        $.urlParam = function (name) {
            var results = new RegExp('[\?&]' + name + '=([^&#]*)')
                .exec(window.location.search)

            return (results !== null) ? results[1] || 0 : false
        }

    })

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1500,
        customClass: {
            toast: 'swal2-toast'
        }
    })
</script>
<script src="{{asset('assets/js/cart.js').'?version='.time()}}"></script>
