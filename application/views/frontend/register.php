<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="<?= base_url('frontend/Home/index'); ?>"><i class="fa fa-home"></i></a></li>
        <li><a href="<?= base_url('frontend/My_account/index'); ?>">Account</a></li>
        <li><a href="<?= base_url('frontend/Register/index'); ?>">Register</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Register Account</h2>
            <p>If you already have an account with us, please login at the <a href="<?= base_url('frontend/Login/index'); ?>">login page</a>.</p>
            <form action="<?= base_url('frontend/Register/create'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <!-- <div class="form-group required">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                </label>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="" placeholder="First Name" id="input-firstname" class="form-control">
                        </div>
                        <?php echo form_error('name'); ?>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="surname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
                        </div>
                        <?php echo form_error('surname'); ?>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
                        </div>
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                        <div class="col-sm-10">
                            <input type="tel" name="phone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
                        </div>
                        <?php echo form_error('phone'); ?>
                    </div>
                </fieldset>
                <!-- <fieldset id="address">
                    <legend>Your Address</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-company">Company</label>
                        <div class="col-sm-10">
                            <input type="text" name="company" value="" placeholder="Company" id="input-company" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
                        <div class="col-sm-10">
                            <input type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
                        <div class="col-sm-10">
                            <input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-city">City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
                        <div class="col-sm-10">
                            <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-country">Country</label>
                        <div class="col-sm-10">
                            <select name="country_id" id="input-country" class="form-control">
                                <option value=""> --- Please Select --- </option>
                                <option value="244">Aaland Islands</option>
                                <option value="1">Afghanistan</option>
                                <option value="2">Albania</option>
                                <option value="3">Algeria</option>
                                <option value="4">American Samoa</option>
                                <option value="5">Andorra</option>
                                <option value="6">Angola</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-zone">Region / State</label>
                        <div class="col-sm-10">
                            <select name="zone_id" id="input-zone" class="form-control">
                                <option value=""> --- Please Select --- </option>
                                <option value="3513">Aberdeen</option>
                                <option value="3514">Aberdeenshire</option>
                                <option value="3515">Anglesey</option>
                                <option value="3516">Angus</option>

                            </select>
                        </div>
                    </div>
                </fieldset> -->
                <fieldset>
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                        </div>
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
                        </div>
                        <?php echo form_error('password'); ?>
                    </div>
                </fieldset>
                <!-- <fieldset>
                    <legend>Newsletter</legend>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="1"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="0" checked="checked"> No
                            </label>
                        </div>
                    </div>
                </fieldset> -->
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
                        <input class="box-checkbox" type="checkbox" name="status" value="1"> &nbsp;
                        <?php echo form_error('status'); ?>
                        <input type="submit" value="Continue" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //Main Container -->