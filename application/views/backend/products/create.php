<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('products/create'); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter description">
                            <?php echo form_error('description'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Enter quantity">
                            <?php echo form_error('quantity'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" name="price" class="form-control" placeholder="Enter price">
                            <?php echo form_error('price'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sales_price">Sales price</label>
                            <input type="number" step="0.01" name="sales_price" class="form-control" placeholder="Enter sales price">
                            <?php echo form_error('sales_price'); ?>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Brand</label>
                            <br>
                            <select class="custom-select form-control" id="brand_id" name="brand_id">
                                <?php foreach ($brands as $brand) : ?>
                                    <option value="<?= $brand->id; ?>"><?= $brand->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Categories</label>
                            <br>
                            <select class="custom-select form-control" id="category_id" name="category_id">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category->id; ?>"><?= $category->title; ?></option>
                                <?php endforeach; ?>
                            </select>
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