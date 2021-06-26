<div class="content mt-5">
    <div class="container-sm">
                            <h4 class="mb-5">About Us</h4>
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/about/<?= $about->id ?>" >
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="PUT" />
                                <input type="hidden" name="id" value="<?= $about->id ?>">
                                <div class="form-group">
                                    <textarea class="form-control" id="editor1" name="content"><?= $about->content ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">About Image</label>
                                    <input type="file" class="form-control-file" id="about_image" name="about_image">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">UPDATE</button>
                            </form>

                            <div class="mb-1">
                              <img src="<?= base_url('upload').'/'.$about->about_image ?>" width="150px" alt="<?= $about->about_image ?>">
                            </div>
    </div>
</div>
