<div class="content">
    <div class="container-sm">
                            <h4>New Category</h4>
                            <form class="user" method="POST" action="/admin/account/new">
                              <?= csrf_field() ?>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="first_name" name="first_name"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="last_name" name="last_name"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="pword" placeholder="Password" name="pword">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="confirm_password" placeholder="Repeat Password" name="confirm_password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      <select class="form-control" name="user_role">
                                        <option value="1" selected>Admin</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-6">
                                      <select class="form-control" name="current_status">
                                        <option value="1" selected>Active</option>
                                        <option value="2">Inactive</option>
                                      </select>
                                    </div>
                                </div>

                                <button type="submit" name="button" class="btn btn-primary btn-user btn-block">Register Account</button>
                                <hr>
                            </form>

                            <?php if(isset($validation)): ?>
                              <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                  <?= $validation->listErrors() ?>
                                </div>
                              </div>
                            <?php endif; ?>
    </div>
</div>
