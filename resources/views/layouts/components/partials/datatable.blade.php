<link href="{{ asset('libs/datatables/css/datatables.css') }}" rel="stylesheet">

<script src="{{ asset('libs/datatables/js/datatables.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#mytable').DataTable({
            // dom: 'flBrtip',
            responsive: false,
            searching: true,
            ordering: true,
            paging: true,
            select: false
        });

        $('#myorders').DataTable({
            // dom: 'flBrtip',
            responsive: true,
            searching: false,
            ordering: true,
            paging: true,
            select: false
        });
    });

</script>
