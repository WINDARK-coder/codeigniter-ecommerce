<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('our_team/create'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter fullname">
                            <?php echo form_error('fullname'); ?>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Enter image">
                            <?php echo form_error('image'); ?>
                        </div>
                        <div class="form-group">
                            <label for="profession">Profession</label>
                            <input type="text" name="profession" class="form-control" placeholder="Enter profession">
                            <?php echo form_error('profession'); ?>
                        </div>
                        <div class="form-group">
                            <label for="about">About</label>
                            <input type="text" name="about" class="form-control" placeholder="Enter about">
                            <?php echo form_error('about'); ?>
                        </div>
                        <div class="form-group">
                            <label for="rss">Rss</label>
                            <input type="text" name="rss" class="form-control" placeholder="Enter rss">
                            <?php echo form_error('rss'); ?>
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" class="form-control" placeholder="Enter facebook">
                            <?php echo form_error('facebook'); ?>
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" class="form-control" placeholder="Enter twitter">
                            <?php echo form_error('twitter'); ?>
                        </div>
                        <div class="form-group">
                            <label for="google">Google</label>
                            <input type="text" name="google" class="form-control" placeholder="Enter google">
                            <?php echo form_error('google'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>