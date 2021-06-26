<section>

  <div class="container mt-5">
    <h2 class="steelblue text-center"><?= $category->category_name ?></h2>
    <p class="text-muted"  style="text-align:center;"><?= $category->category_sub_title ?></p>
    <div class="mt-5">
      <?= $category->category_description ?>
    </div>
  </div>

  <?php if(!empty($packages)): ?>
  <div class="container">
    <h4 style="text-align:center;" class="m-5 steelblue">RATES</h4>
    <div class="row">
      <?php foreach($packages as $row): ?>
        <div class="col-md-4 mb-5 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <a href="<?= $row->package_name_link ?  $row->package_name_link : '/package/'.$row->id ?>">
              <img class="card-img-top" src="<?= base_url('upload').'/'.$row->package_image ?>" alt="Card image cap" style="width: 100%;height: 35vh;object-fit: cover;">
            </a>
            <div class="card-body">
              <h6 class="card-title text-info">
                <a href="<?= $row->package_name_link ?  $row->package_name_link : '/package/'.$row->id ?>" class="steelblue font-weight-bold"><?= $row->package_name ?></a>
              </h6>
              <p class="card-text"><?= word_limiter(strip_tags($row->package_content),15) ?>
                <a href="/package/<?= $row->id ?>" class="steelblue font-weight">Read More</a>
              </p>

              <?php if($row->show_price == 1): ?>
                <hr class="my-12"/>
                <div class="d-flex flex-column justify-content-between">
                  <div class="steelblue" style="font-size:13px;font-weight:bold;">
                    <?= word_limiter($row->rates,30) ?>
                  </div>
                  <div class="align-self-center">
                    <a href="<?= $row->package_name_link ?  $row->package_name_link : '/package/'.$row->id ?>" class="btn btn-sm btn-primary">Show More Details</a>
                  </div>
                </div>
              <?php endif; ?>
            </div><!-- card-body -->
          </div><!-- card -->
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>

</section>
