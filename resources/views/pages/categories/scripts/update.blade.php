<script>
    // funcion para mostrar la previsualizacion de la imagen
    // const chooseFile_u = document.getElementById("choose-file_u");
    // const imgPreview_u = document.getElementById("img-preview_u");

    // chooseFile_u.addEventListener("change", function () {
    //     getImgDataU();
    // });

    // function getImgDataU() {
    //     const filesu = chooseFile_u.files[0];
    //     if (filesu) {
    //         const fileReader = new FileReader();
    //         fileReader.readAsDataURL(filesu);
    //         fileReader.addEventListener("load", function () {
    //             imgPreview_u.style.display = "block";
    //             imgPreview_u.innerHTML = '<img src="' + this.result + '" width="250px" height="150px"/>';
    //         });
    //     }
    // }

    // oculta el icono de subir archivo si detecta que ya se subio algo
    // $("#choose-file_u").change(function () {
    //     $('.update').addClass('d-none');
    //     $('.btn-change-img').removeClass('d-none');
    // });

    // $(document).ready(function () {
    //     $(".upload-img_u").click(function () {
    //         $('#choose-file_u').trigger('click');
    //     });
    // });

    // Funcion activar o desactivar una pregunta
    function statusQuest(id) {

        route = "{{ route('category.status', 'parameter') }}";
        route = route.replace('parameter', id);

        $.post(route, {
                "_token": "{{ csrf_token() }}"
            },
            function (data, textStatus, jqXHR) {

                toastr['success']('', 'Updated status', {
                    closeButton: true,
                    tapToDismiss: false,
                });
            },
        );
    }

    // pone la data en la modal
    function editCategory(data) {

        $('.cname').val(data.name);
        $('.cdescription').text(data.description);

        // cambia la ruta de la imagen a la que corresponde
        // get_img = "{{ asset('storage/category/parameter') }}";
        // get_img = get_img.replace('parameter', data.image);

        // previsualisa la imagen
        // imgPreview_u.style.display = "block";
        // imgPreview_u.innerHTML = '<img src="' + get_img + '" width="250px" height="150px"/>';

        route = "{{ route('category.questions', 'parameter') }}";
        route = route.replace('parameter', data.id);


        $.get(route, {
                "_token": "{{ csrf_token() }}"
            },
            function (data, textStatus, jqXHR) {

                let content = "";

                $('#demo').empty()

                for (let i = 0; i < data.length; i++) {

                    if (data[i].status == 1) {
                        status = '<input type="checkbox" name="status[]' + data[i].id + '" onclick="statusQuest(' +
                            data[i].id + ')" checked />';
                    } else {
                        status = '<input type="checkbox" name="status[]' + data[i].id + '" onclick="statusQuest(' +
                            data[i].id + ')" />';
                    }

                    content = '<div class="form-group col-10">\
                    <input type="hidden" value="' + data[i].category_id + '" name="category_id"/>\
                    <input type="hidden" value="' + data[i].id + '" name="quests_id[]' + data[i].id + '"/>\
                    <input type="text" value="' + data[i].question + '" class="form-control" name="quests[]' + data[i]
                        .id + '" required/>\
                    </div>\
                    <div class="form-group col-2 p-2" id="delete_' + i + '">\
                    <label class="switch">\
                    ' + status + '\
                    <span class="slider round"></span>\
                    </label>\
                    </div>';

                    $("#demo").append(content);

                }

            }
        );

        // cambia la ruta del form
        route = "{{ route('category.update', 'parameter') }}";
        route = route.replace('parameter', data.id);
        $('.updatec').attr('action', route)
    }

</script>
