
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary">List Of Packages</h6>
                                </div>
                                <div>
                                    <a href="/admin/listpackages/new" class="btn btn-primary">New Package</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Show Price</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Show Price</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach($basicPackages as $row): ?>
                                        <tr>
                                            <td><?= $row['package_name'] ?></td>
                                            <td><?= $row['package_content'] ?></td>
                                            <td><?= $row['category_name'] ?></td>
                                            <td style="text-align:center;"><img src="<?= base_url('upload').'/'.$row['package_image'] ?>" width="250vh"></td>
                                            <td><?= $row['price'] ?></td>
                                            <td><?= $row['show_price'] == 1 ? 'YES':'NO' ?></td>
                                            <td><?= $row['current_status'] == 1 ? 'Publish' : 'Unpublish' ?></td>
                                            <td><?= $row['created_at'] ?></td>
                                            <th>
                                              <div class="d-flex justify-content-between">
                                                <div class="mr-3">
                                                  <a href="/admin/listpackages/<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                </div>
                                                <div class="">
                                                  <form action="/admin/basicpackage/<?= $row['id'] ?>" method="post" onSubmit="return confirm('Are you sure you want to delete this package?') ">
                                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button type="submit" name="button" class="btn btn-danger btn-sm">Delete</button>
                                                  </form>
                                                </div>
                                              </div>
                                            </th>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
