<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->

{{-- sweetalert2 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.min.js"
        integrity="sha512-IHQXMp2ha/aGMPumvzKLQEs9OrPhIOaEXxQGV5vnysMtEmNNcmUqk82ywqw7IbbvrzP5R3Hormh60UVDBB98yg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.tiny.cloud/1/018h0i4wkpqg0nyfor5gt4h8dzqb4275oabhcr1hnoq2aza2/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
<!--begin::Custom Javascript(used for this page only)-->

<!--end::Custom Javascript-->
<!--end::Javascript-->
<script>

    tinymce.init({
        selector: 'textarea.tinymce-editor', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    })

    function alertMsg (msg, status = 'success') {
        Swal.fire({
            icon: status,
            title: msg,
            showConfirmButton: false,
            timer: 1500,
        })
    }

    $(document).on('submit', '.delete_form', function (e) {
        e.preventDefault()
        var route = $(this).attr('action')
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, keep it',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: new FormData(this),
                    contentType: false,
                    data_type: 'json',
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        Swal.showLoading()
                    },
                    success: function (response) {
                        swal.close()
                        alertMsg(response.message, 'error')
                        $('#table').DataTable().ajax.reload()
                    },
                    error: function (xhr, error, status) {
                        swal.close()
                        var response = xhr.responseJSON
                        alertMsg(response.message, 'error')
                    },
                })
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                    'Cancelled',
                    'Your Data is safe :)',
                    'error',
                )
            }
        })
    })
</script>
