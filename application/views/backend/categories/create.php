<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><?= $title; ?></h3>
                </div>
                <form action="<?= base_url('categories/create'); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Parent id</label>
                            <br>
                            <select class="custom-select form-control" id="parent_id" name="parent_id">
                                <option value="0">Main Category</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category->id; ?>"><?= $category->title; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter slug">
                            <?php echo form_error('slug'); ?>
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