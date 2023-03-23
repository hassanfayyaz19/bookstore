<script src="{{asset('user/js/jquery.min.js')}}"></script><!-- JQUERY MIN JS -->
<script src="{{asset('user/vendor/wow/wow.min.js')}}"></script><!-- WOW JS -->
<script src="{{asset('user/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{asset('user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $.urlParam = function (name) {
            var results = new RegExp('[\?&]' + name + '=([^&#]*)')
                .exec(window.location.search)

            return (results !== null) ? results[1] || 0 : false
        }

    })
</script>
