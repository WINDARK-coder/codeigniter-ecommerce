<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('settings/edit/' . $item->id); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" name="key" class="form-control" value="<?= $item->key; ?>" placeholder="Enter key">
                            <?php echo form_error('key'); ?>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" name="value" class="form-control" value="<?= $item->value; ?>" placeholder="Enter value">
                            <?php echo form_error('value'); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?= $item->phone; ?>" placeholder="Enter phone">
                            <?php echo form_error('phone'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="1" <?php echo ($item->status == 1) ? 'selected' : ''  ?>>Back footer</option>
                                <option value="2" <?php echo ($item->status == 2) ? 'selected' : ''  ?>>Front footer</option>
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