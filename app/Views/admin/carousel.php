
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary">Carousel</h6>
                                </div>
                                <div>
                                    <a href="/admin/carousel/new" class="btn btn-primary">New Carousel</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Text</th>
                                            <th>Sub Text</th>
                                            <th>Order</th>
                                            <th>Image</th>
                                            <th>current_status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Text</th>
                                          <th>Sub Text</th>
                                          <th>Order</th>
                                          <th>Image</th>
                                          <th>current_status</th>
                                          <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($carousel as $row): ?>
                                          <tr>
                                          <td><?= $row['main_text'] ?></td>
                                          <td><?= word_limiter($row['sub_text'],15) ?></td>
                                          <td><?= $row['image_order'] ?></td>
                                          <td style="text-align:center;"><img src="<?= base_url('upload').'/'.$row['image'] ?>" width="250vh"></td>
                                          <td><?= $row['current_status'] == 1 ? 'Published':'Unpublish' ?></td>
                                          <td>
                                            <div class="d-flex justify-content-between">
                                              <div class="">
                                                <a href="/admin/carousel/<?= $row['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                              </div>
                                              <div class="">
                                                <form action="/admin/carousel/<?= $row['id'] ?>" method="post" onSubmit="return confirm('Are you sure you want to delete this carousel?') ">
                                                  <?= csrf_field() ?>
                                                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                  <input type="hidden" name="_method" value="DELETE" />
                                                  <button type="submit" name="button" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                              </div>
                                            </div>
                                          </td>
                                          </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
