<section>
    <div class="container how-section1">
      <br><br>
        <?php foreach($categories as $row): ?>
                <div class="row">
                      <div class="col-md-6 how-img">
                        <a href="/category/<?= $row->id ?>">
                          <img src="<?= base_url('upload').'/'.$row->category_image ?>" class="rounded img-fluid" alt=""/>
                        </a>
                      </div>
                      <div class="col-md-6">
                          <h4>
                            <a href="/category/<?= $row->id ?>"><?= $row->category_name ?></a>
                          </h4>
                          <h6 class="subheading text-muted"><?= $row->category_sub_title ?></h6>
                          <p class="text-muted"><?= word_limiter($row->category_description,40) ?></p>
                          <div class="d-flex justify-content-right">
                            <div class="">
                              <a href="#">Read More</a>
                            </div>
                          </div>
                      </div>
                  </div>
        <?php endforeach; ?>
    </div><!-- container -->
</section>
