<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('products/edit/' . $item->id); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $item->title; ?>" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" value="<?= $item->description; ?>" placeholder="Enter description">
                            <?php echo form_error('description'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" value="<?= $item->quantity; ?>" placeholder="Enter quantity">
                            <?php echo form_error('quantity'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" name="price" class="form-control" value="<?= $item->price; ?>" placeholder="Enter price">
                            <?php echo form_error('price'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sales_price">Sales price</label>
                            <input type="number" step="0.01" name="sales_price" class="form-control" value="<?= $item->sales_price; ?>" placeholder="Enter sales price">
                            <?php echo form_error('sales_price'); ?>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                            <br>
                            <select class="custom-select form-control" id="brand_id" name="brand_id">
                                <?php foreach ($brands as $brand) :
                                    $selected = '';
                                    if ($item->brand_id == $brand->id) {
                                        $selected = 'selected';
                                    } ?>
                                    <option value="<?= $brand->id; ?>" <?= $selected ?>><?= $brand->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <br>
                            <select class="custom-select form-control" id="category_id" name="category_id">
                                <?php foreach ($categories as $category) :
                                    $selected = '';
                                    if ($item->category_id == $category->id) {
                                        $selected = 'selected';
                                    } ?>
                                    <option value="<?= $category->id; ?>" <?= $selected ?>><?= $category->title; ?></option>
                                <?php endforeach; ?>
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