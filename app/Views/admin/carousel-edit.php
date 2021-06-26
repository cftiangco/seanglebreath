<div class="content">
    <div class="container-sm">
                            <h4>Edit Carousel Slide</h4>
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/carousel/<?= $carousel->id ?>" >
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="PUT" />
                                <input type="hidden" name="id" value="<?= $carousel->id ?>">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="main_text" name="main_text" value="<?= $carousel->main_text ?>"
                                        placeholder="Title" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="sub_text" name="sub_text" value="<?= $carousel->sub_text ?>"
                                        placeholder="Sub Title" required>
                                </div>

                                <div class="form-group row">

                                  <div class="col-sm-6">
                                      <div class="form-check mt-3">
                                          <input class="form-control" type="number"  id="image_order" placeholder="Slide Order" name="image_order" value="<?= $carousel->image_order ?>">
                                      </div>
                                  </div>

                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="current_status" name="current_status" value="1" <?= $carousel->current_status == 1 ? 'checked':'' ?>>
                                            <label class="form-check-label" for="current_status">Publish/Unpublish</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="image">Carousel Image (Width 1920 - Height 1080)</label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">UPDATE CAROUSEL</button>
                            </form>
                            <div class="mb-1">
                              <img src="<?= base_url('upload').'/'.$carousel->image ?>" width="150px" alt="<?= $carousel->image ?>">
                            </div>
    </div>
</div>
