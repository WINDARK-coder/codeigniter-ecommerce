<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('orders/create'); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="total_amount">Total amount</label>
                            <input type="number" name="total_amount" class="form-control" placeholder="Enter total_amount">
                            <?php echo form_error('total_amount'); ?>
                        </div>
                        <div class="form-group">
                            <label for="payment_json">Payment</label>
                            <input type="text" name="payment_json" class="form-control" placeholder="Enter payment json">
                            <?php echo form_error('payment_json'); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" name="price" class="form-control" placeholder="Enter price">
                            <?php echo form_error('price'); ?>
                        </div>
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <br>
                            <select class="custom-select form-control" id="user_id" name="user_id">
                                <?php foreach ($users as $user) : ?>
                                    <option value="<?= $user->id; ?>"><?= $user->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="delivery_method">Delivery Method</label>
                            <br>
                            <select class="custom-select form-control" id="delivery_method" name="delivery_method">
                                <?php foreach ($delivery_methods as $delivery_method) : ?>
                                    <option value="<?= $delivery_method->id; ?>"><?= $delivery_method->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="payment_method">Payment Method</label>
                            <br>
                            <select class="custom-select form-control" id="payment_method" name="payment_method">
                                <?php foreach ($payment_methods as $payment_method) : ?>
                                    <option value="<?= $payment_method->id; ?>"><?= $payment_method->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="order_status">Order Status</label>
                            <br>
                            <select class="custom-select form-control" id="order_status" name="order_status">
                                <?php foreach ($orders_status as $order_status) : ?>
                                    <option value="<?= $order_status->id; ?>"><?= $order_status->title; ?></option>
                                <?php endforeach; ?>
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