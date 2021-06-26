<div class="content">
    <div class="container-sm">
                            <h4>New Carousel Slide</h4>
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/carousel/new" >
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="main_text" name="main_text"
                                        placeholder="Title" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="sub_text" name="sub_text"
                                        placeholder="Sub Title" required>
                                </div>

                                <div class="form-group row">

                                  <div class="col-sm-6">
                                      <div class="form-check mt-3">
                                          <input class="form-control" type="number"  id="image_order" placeholder="Slide Order" name="image_order">
                                      </div>
                                  </div>

                                    <div class="col-sm-6">
                                        <div class="form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="current_status" name="current_status" value="1" checked>
                                            <label class="form-check-label" for="current_status">Publish/Unpublish</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="image">Carousel Image (Width 1920 - Height 1080)</label>
                                    <input type="file" class="form-control-file" id="image" name="image" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">SAVE CAROUSEL</button>
                            </form>
    </div>
</div>
