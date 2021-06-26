
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary">Testimonials</h6>
                                </div>
                                <div>
                                    <a href="/admin/testimonial/new" class="btn btn-primary">Post New Testimonial</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>ID</th>
                                          <th>Image</th>
                                          <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php foreach($testimonials as $row): ?>
                                      <tr>
                                        <td><?= $row->id ?></td>
                                        <td><img src="<?= base_url('upload').'/'.$row->image ?>" width="250vh"></td>
                                        <td>
                                          <form action="/admin/testimonial/<?= $row->id ?>" method="post" onSubmit="return confirm('Are you sure you want to delete this testimonial?') ">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" name="button" class="btn btn-danger">Delete</button>
                                          </form>
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
