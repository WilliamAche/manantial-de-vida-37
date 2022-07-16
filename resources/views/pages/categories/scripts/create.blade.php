<script>
    // funcion para mostrar la previsualizacion de la imagen
    // const chooseFile = document.getElementById("choose-file");
    // const imgPreview = document.getElementById("img-preview");

    // chooseFile.addEventListener("change", function () {
    //     getImgData();
    // });

    // function getImgData() {
    //     const files = chooseFile.files[0];
    //     if (files) {
    //         const fileReader = new FileReader();
    //         fileReader.readAsDataURL(files);
    //         fileReader.addEventListener("load", function () {
    //             imgPreview.style.display = "block";
    //             imgPreview.innerHTML = '<img src="' + this.result + '" width="250px" height="150px"/>';
    //         });
    //     }
    // }

    // oculta el icono de subir archivo si detecta que ya se subio algo
    // $("#choose-file").change(function () {
    //     $('.create').addClass('d-none');
    //     $('.btn-change-img').removeClass('d-none');
    // });

    // $(document).ready(function () {
    //     $(".upload-img").click(function () {
    //         $('#choose-file').trigger('click');
    //     });
    // });


    // funcion para las preguntas
    numRows = 1;

    function addRow() {
        numRows++;
        var content = '';
        content = '<div class="form-group col-10" id="row_' + numRows + '">\
        <input class="form-control ' + numRows + '" type="text" placeholder="Question title #' + numRows +
            '" name="quests[]' + numRows + '" required>\
        </div>\
        <div class="form-group col-2" id="delete_' + numRows + '">\
        <button type="button" id="delete" class="btn btn-danger" onclick="deleteRow(' + numRows + ')"><i class="bi-x"></i></button>\
        </div>';
        $("#table").append(content);
    }

    function deleteRow(row) {
        $("#row_" + row).remove();
        $("#delete_" + row).remove();
    }

</script>
