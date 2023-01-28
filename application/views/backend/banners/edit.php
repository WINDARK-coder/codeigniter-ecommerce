<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('banners/edit/' . $item->id); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url($item->image); ?>" alt="" width="300" height="300">
                            <input type="hidden" name="img" value="<?= $item->image; ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $item->title; ?>" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            <?php echo form_error('image'); ?>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <br>
                            <select class="custom-select form-control" id="location" name="location">
                                <option value="0" <?php echo ($item->location == 0) ? 'selected' : ''  ?>>Main</option>
                                <option value="0" <?php echo ($item->location == 1) ? 'selected' : ''  ?>>Electronics</option>
                                <option value="1" <?php echo ($item->location == 2) ? 'selected' : ''  ?>>Culinary</option>
                                <option value="2" <?php echo ($item->location == 3) ? 'selected' : ''  ?>>Appliances</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" <?php echo ($item->status == 0) ? 'selected' : ''  ?>>Non-Active</option>
                                <option value="1" <?php echo ($item->status == 1) ? 'selected' : ''  ?>>Active</option>
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