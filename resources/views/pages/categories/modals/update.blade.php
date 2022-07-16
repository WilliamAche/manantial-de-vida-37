<div class="modal fade" id="CategoryEdit">
    <div class="modal-dialog">
        <div class="modal-content-p">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Edit category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="POST" action="#" class="updatec validate" enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control cname" required />
                            </div>
                            <div class="form-group col-10">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control cdescription"
                                    required></textarea>
                            </div>
                            <div class="form-group col-10">
                                <label for="dropify2" class="form-label">Upload an image
                                    <input type="file" name="image" id="dropify2" class="dropify" data-max-file-size="3M" accept="image/*"/>
                            </label>
                            </div>

                            <div class="form-group col-10">
                                <label class="form-label">Questions</label>
                                <div id="demo" class="row"></div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-lg col-10 btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
