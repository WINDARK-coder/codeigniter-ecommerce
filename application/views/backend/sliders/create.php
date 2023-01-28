<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('sliders/create'); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control" placeholder="Enter subtitle">
                            <?php echo form_error('subtitle'); ?>
                        </div>
                        <div class="form-group">
                            <label for="image1">First image</label>
                            <input type="file" name="image1" class="form-control" placeholder="Enter first image">
                            <?php echo form_error('image1'); ?>
                        </div>
                        <div class="form-group">
                            <label for="image2">Second image</label>
                            <input type="file" name="image2" class="form-control" placeholder="Enter second image">
                            <?php echo form_error('image2'); ?>
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