<script>
    // cambia la ruta con el id correspondiente
    function deleteCategory(id) {
        route = "{{ route('category.delete', 'parameter') }}";
        route = route.replace('parameter', id);
        $('#delete').attr('action', route)
    }

    // abre la modal para confirmar el delete
    $('.delete').click(function () {

        $.confirm({
            title: '',
            theme: 'supervan',
            buttons: {
                formSubmit: {
                    text: 'Delete',
                    btnClass: 'btn-danger',
                    action: function () {
                        $.alert('Confirmed!');
                        $('#delete').submit();
                    }
                },
                cancel: function () {},
            },
        });
    });
</script>