<div class="content">
    <div class="container-sm">
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/basicpackage/<?= $package->id ?>" >
                                <input type="hidden" name="_method" value="PUT" />
                                <?= csrf_field() ?>
                                <input type="hidden" name="id" value="<?= $package->id ?>">

                                <div class="form-group">
                                  <select class="form-control" name="category_id" id="category_id">
                                    <option selected disabled>Select Category</option>
                                    <?php foreach($categories as $row): ?>
                                      <option value="<?= $row->id ?>" <?= $row->id == $package->category_id ? 'selected' :'' ?>><?= $row->category_name ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title" name="package_name"
                                        placeholder="Package Title" value="<?= $package->package_name ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title_link" name="package_name_link"
                                        placeholder="Package Title Link" value="<?= $package->package_name_link ?>">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="editor1" name="package_content" required><?= $package->package_content ?></textarea>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="price" placeholder="Price" name="price" required value="<?= $package->price ?>">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="show_price" name="show_price" value="1" <?= $package->show_price == 1? 'checked':''?>>
                                            <label class="form-check-label" for="show_price">Show Price</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="current_status" name="current_status" value="1" <?= $package->current_status == 1 ? 'checked':'' ?> >
                                            <label class="form-check-label" for="current_status">Publish/Unpublish</label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group">
                                  <label for="editor2">Rates <?= $package->rates ?></label>
                                    <textarea class="form-control" id="editor2" name="rates" required><?= $package->rates ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">Package Thumbnail</label>
                                    <input type="file" class="form-control-file" id="thumbnail" name="package_image">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">UPDATE PACKAGE</button>
                            </form>

                            <div class="d-flex flex-column mb-2">
                              <div class="mb-1">
                                <img src="<?= base_url('upload').'/'.$package->package_image ?>" width="150px" alt="<?= $package->package_image ?>">
                              </div>
                              <div class="">
                                <form class="" action="/admin/basicpackage/<?= $package->id ?>/remove" method="post">
                                  <?= csrf_field() ?>
                                  <input type="hidden" name="id" value="<?= $package->id ?>">
                                  <input type="hidden" name="_method" value="PUT" />
                                  <?php if($package->package_name !== "default_image.jpg"): ?>
                                    <button type="submit" class="btn btn-sm btn-danger mt-1" name="button">Remove</button>
                                  <?php endif; ?>
                                </form>
                              </div>
                            </div>
    </div>
</div>
