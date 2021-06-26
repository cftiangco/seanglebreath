<div class="content">
    <div class="container-sm">
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/listpackages/new" >
                                <?= csrf_field() ?>

                                <div class="form-group">
                                  <select class="form-control" name="category_id" required>
                                    <option selected disabled>Select Category</option>
                                    <?php foreach($categories as $row): ?>
                                      <option value="<?= $row->id ?>"><?= $row->category_name ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title" name="package_name"
                                        placeholder="Package Title" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title_link" name="package_name_link"
                                        placeholder="Package Title Link">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="editor1" name="package_content" required></textarea>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="price" placeholder="Price" name="price" value="0">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="show_price" name="show_price" value="1" checked>
                                            <label class="form-check-label" for="show_price">Show Price</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="current_status" name="current_status" value="1" checked>
                                            <label class="form-check-label" for="current_status">Publish/Unpublish</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                  <label for="editor2">Rates</label>
                                    <textarea class="form-control" id="editor2" name="rates" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">Package Thumbnail</label>
                                    <input type="file" class="form-control-file" id="thumbnail" name="package_image" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">SUBMIT PACKAGE</button>
                            </form>


    </div>
</div>
