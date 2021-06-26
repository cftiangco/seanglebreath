
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h6 class="m-0 font-weight-bold text-primary">User Accounts</h6>
                                </div>
                                <div>
                                    <a href="/admin/account/new" class="btn btn-primary">New Account</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>First Name</th>
                                          <th>Last Name</th>
                                          <th>Email</th>
                                          <th>Role</th>
                                          <th>Status</th>
                                          <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($accounts as $row): ?>
                                          <tr>
                                            <td><?= $row->first_name ?></td>
                                            <td><?= $row->last_name ?></td>
                                            <td><?= $row->email ?></td>
                                            <td><?= $row->user_role == 1 ? 'Admin':'User' ?></td>
                                            <td><?= $row->current_status == 1 ? 'Active':'Inactive' ?></td>
                                            <td style="width:20px;">
                                              <div class="d-flex justify-content-between">
                                                <div class="">
                                                  <a href="/admin/account/<?= $row->id ?>" class="btn btn-info btn-sm">Edit</a>
                                                </div>
                                                <div class="">
                                                  <form action="/admin/account/<?= $row->id ?>" method="post" onSubmit="return confirm('Are you sure you want to delete this account?') ">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="id" value="<?= $row->id ?>">
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
