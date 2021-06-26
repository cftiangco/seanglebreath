<br><br>
<div class="content">
    <div class="container-sm mt-5">
                            <h4>New Testimonial</h4>
                            <form class="user" enctype="multipart/form-data" method="POST" action="/admin/testimonial/new" >
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <label for="thumbnail">Upload testimonial</label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user" style="float:right;">SAVE TESTIMONIAL</button>
                            </form>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
