<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('images/edit/' . $item->id); ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url($item->path); ?>" alt="" width="300" height="300">
                            <input type="hidden" name="img" value="<?= $item->path; ?>">
                        </div>
                        <div class="form-group">
                            <label for="path">Path</label>
                            <input type="file" name="path" class="form-control">
                            <?php echo form_error('path'); ?>
                        </div>
                        <div class="form-group">
                            <label for="product_id">Product</label>
                            <br>
                            <select class="custom-select form-control" id="product_id" name="product_id">
                                <?php foreach ($products as $product) :
                                    $selected = '';
                                    if ($item->product_id == $product->id) {
                                        $selected = 'selected';
                                    } ?>
                                    <option value="<?= $product->id; ?>" <?= $selected ?>><?= $product->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="main">Main</label>
                            <br>
                            <select class="custom-select form-control" id="main" name="main">
                                <option value="0" <?php echo ($item->main == 0) ? 'selected' : ''  ?>>Non-Active</option>
                                <option value="1" <?php echo ($item->main == 1) ? 'selected' : ''  ?>>Active</option>
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