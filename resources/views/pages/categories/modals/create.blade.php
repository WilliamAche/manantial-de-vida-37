<div class="modal fade" id="CategoryCreate">
    <div class="modal-dialog">
        <div class="modal-content-p">
            <div class="modal-body">
                <div class="card-body">
                    <h3 class="text-center mb-2">Create new category</h3>
                    <form action="{{ route('category.store') }}" method="POST" class="validate"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="form-group col-10">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required />
                            </div>
                            <div class="form-group col-10">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control"
                                    required></textarea>
                            </div>
                            <div class="form-group col-10">
                                <label for="dropify" class="form-label">Upload an image
                                    <input type="file" name="image" id="dropify" class="dropify" data-max-file-size="3M" accept="image/*"/>
                            </label>
                            </div>

                            <div class="form-group col-10">

                                <a id="add" onclick="addRow()" class="btn btn-info" style="margin-right: 15px">Add
                                    Quest</a>
                            </div>

                            <div class="col-10 row" id="table">
                                <div class="form-group col-12">
                                    <input type="text" name="quests[]" class="form-control"
                                        placeholder="Question title #1" required/>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-lg col-10 btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>