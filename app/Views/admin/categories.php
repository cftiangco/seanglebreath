
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary">List Of Categories</h6>
                                </div>
                                <div>
                                    <a href="/admin/categories/new" class="btn btn-primary">New Category</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Sub Title</th>
                                            <th>Thumbnail</th>
                                            <th>With Packages</th>
                                            <th>Status</th>
                                            <th>Posted Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Category</th>
                                          <th>Sub Title</th>
                                          <th>Thumbnail</th>
                                          <th>With Packages</th>
                                          <th>Status</th>
                                          <th>Posted Date</th>
                                          <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($categories as $row): ?>
                                          <tr>
                                            <td><?= $row['category_name'] ?></td>
                                            <td><?= $row['category_sub_title'] ?></td>
                                            <td style="text-align:center;"><img src="<?= base_url('upload').'/'.$row['category_image'] ?>" width="250vh"></td>
                                            <td><?= $row['has_packages'] == 1 ? 'Yes':'No' ?></td>
                                            <td><?= $row['current_status'] == 1 ? 'Published':'Unpublish' ?></td>
                                            <td><?= $row['created_at'] ?></td>
                                            <td>
                                              <div class="d-flex justify-content-between">
                                                <div class="">
                                                  <a href="/admin/categories/<?= $row['id'] ?>" class="btn btn-info btn-sm">Edit</a>
                                                </div>
                                                <div class="">
                                                  <form action="/admin/categories/<?= $row['id'] ?>" method="post" onSubmit="return confirm('Are you sure you want to delete this category?') ">
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
