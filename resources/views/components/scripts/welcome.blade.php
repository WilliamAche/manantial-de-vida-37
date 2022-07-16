@include('layouts.components.script')
<script src="{{ asset('libs/slick/slick.js') }}"></script>
<script src="{{ asset('js/welcome.js') }}"></script>
@include('layouts.components.partials.jquery.jquery-confirm')

<script>
    $('#auth').click(function () {
        $.confirm({
            title: 'Google Auth',
            content: 'By registering or logging in with Google you are already accepting the Privacy Policy',
            buttons: {
                formSubmit: {
                    text: 'Continue',
                    btnClass: 'btn-success',
                    action: function () {
                        window.location.href = "https://homessolutions.us/redirect/google";
                    }
                },
                cancel: function () {},
            },
        });
    });
</script>
