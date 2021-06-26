<div class="content">
    <div class="container-sm">
                            <h4>New Category</h4>
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/categories/new" >
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title" name="category_name"
                                        placeholder="Category Title" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title" name="category_sub_title"
                                        placeholder="Category Sub Title (Optional)">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="editor1" name="category_description"></textarea>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="current_status" name="current_status" value="1" checked>
                                            <label class="form-check-label" for="current_status">Publish/Unpublish</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="has_packages" name="has_packages" value="1" checked>
                                            <label class="form-check-label" for="has_packages">With Packages/No Packages</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">Category Thumbnail</label>
                                    <input type="file" class="form-control-file" id="category_image" name="category_image">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">SAVE CATEGORY</button>
                            </form>
    </div>
</div>
