<section>
    <div class="container mt-5">
      <div class="row d-flex flex-column justify-content-between p-5">
        <div class="align-self-center">
          <h2 style="color:#5c9f24"><a href="/category/<?= $package->category_id ?>" class="steelblue"><?= $package->category_name ?></a></h2>
        </div>
        <div class="align-self-center" style="text-align:center;">
          <p class="text-muted"><?= $package->category_sub_title ?></p>
        </div>
        <div class="mt-5">
          <img src="<?= base_url('upload').'/'.$package->package_image ?>" style="width: 100%;height: 30vw;object-fit: cover;">
        </div>
        <div class="mt-3">
          <div class="d-flex justify-content-between">
            <div class="">
              <h5 class="text-info steelblue"><?= $package->package_name ?></h5>
            </div>

          </div>
        </div>
        <div class="my-3 border p-3">
          <?= $package->package_content ?>
        </div>

        <?php if($package->show_price == 1)?>
        <div class="steelblue font-weight-bold">
          <?= $package->rates ?>
        </div>
        <? endif; ?>

      </div>
    </div><!-- container -->
</section>
