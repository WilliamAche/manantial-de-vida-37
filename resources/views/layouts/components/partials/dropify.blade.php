<link href="{{ asset('libs/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
<script src="{{ asset('libs/dropify/dist/js/dropify.min.js') }}"></script>

<script>
    $(document).ready(function () {
        var drEvent = $('.dropify').dropify();

        // borra la imagen subida si supera el maximo de peso
        drEvent.on('dropify.error.fileSize', function (event, element) {
            $('.dropify-clear').submit();
        });
    });
</script>

{{-- https://github.com/JeremyFagis/dropify --}}