<div class="content">
    <div class="container-sm">
                            <h4>New Category</h4>
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/categories/<?= $category->id ?>" >
                              <?= csrf_field() ?>
                              <input type="hidden" name="_method" value="PUT" />
                              <input type="hidden" name="id" value="<?= $category->id ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title" name="category_name"
                                        placeholder="Category Title" value="<?= $category->category_name ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title" name="category_sub_title"
                                        placeholder="Category Sub Title (Optional)" value="<?= $category->category_sub_title ?>">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="editor1" name="category_description" required><?= $category->category_description ?></textarea>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="current_status" name="current_status"
                                            value="1" <?= $category->current_status == 1 ? 'checked' :'' ?>>
                                            <label class="form-check-label" for="current_status">Publish/Unpublish</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="has_packages" name="has_packages"
                                            value="1" <?= $category->has_packages == 1 ? 'checked' :'' ?>>
                                            <label class="form-check-label" for="has_packages">With Packages/No Packages</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">Category Thumbnail</label>
                                    <input type="file" class="form-control-file" id="category_image" name="category_image">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">UPDATE CATEGORY</button>
                            </form>

                            <div class="d-flex flex-column mb-2">
                              <div class="mb-1">
                                <img src="<?= base_url('upload').'/'.$category->category_image ?>" width="150px" alt="<?= $category->category_image ?>">
                              </div>
                              <div class="">
                                <form class="" action="/admin/categories/<?= $category->id ?>/remove" method="post">
                                  <?= csrf_field() ?>
                                  <input type="hidden" name="id" value="<?= $category->id ?>">
                                  <input type="hidden" name="_method" value="DELETE" />
                                  <?php if($category->category_image != "default_image.jpg"): ?>
                                    <button type="submit" class="btn btn-sm btn-danger mt-1" name="button">Remove</button>
                                  <?php endif; ?>
                                </form>
                              </div>
                            </div>
    </div>
</div>
