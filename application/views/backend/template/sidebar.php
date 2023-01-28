<?php $admin = $this->session->userdata('admin') ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= base_url('backend/website_logo/edit/' . get_website_logo()->id); ?>" class="brand-link" style="padding-bottom:45px">
        <img src="<?= base_url() . get_website_logo()->logo; ?>" alt="Website Logo" class="brand-image img-circle elevation-3" style="opacity: .8;margin-left: 1.8rem;max-height:35px" !important>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url($admin->image) ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url('admins/edit/' . $admin->id); ?>" class="d-block"><?= $admin->fullname ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <style>
                .dropdown-toggle::after {
                    content: none;
                }

                .content-wrapper {
                    padding-top: 9px;
                }
            </style>
            <div class=" dropdown show nav nav-pills nav-sidebar flex-column ">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <a class="btn btn-secondary dropdown-toggle " href="<?= base_url('dashboard'); ?>" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true">Dashboard </a>
                    <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuLink">
                        <li class="nav-item">
                            <a href="<?= base_url('admins'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-lock"></i>
                                <p>
                                    Admins
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('products'); ?>" class="nav-link">
                                <i class="nav-icon fa-sharp fa-solid fa-box"></i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('users'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('brands'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-city"></i>
                                <p>
                                    Brands
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('categories'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-window-restore"></i>
                                <p>
                                    Categories
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('images'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-images"></i>
                                <p>
                                    Images
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('payment_methods'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-money-bill"></i>
                                <p>
                                    Payment Methods
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('delivery_methods'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-truck-fast"></i>
                                <p>
                                    Delivery Methods
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('orders'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-list"></i>
                                <p>
                                    Orders
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('order_status'); ?>" class="nav-link">
                                <i class="nav-icon fa-solid fa-list-check"></i>
                                <p>
                                    Order Status
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('blogs'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-desktop"></i>
                                <p>
                                    Blogs
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pages'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-folder-open"></i>
                                <p>
                                    Pages
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('settings'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Settings
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('website_logo'); ?>" class="nav-link">
                                <i class="nav-icon fa-sharp fa-solid fa-basket-shopping"></i>
                                <p>
                                    Website logo
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('sliders'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-film"></i>
                                <p>
                                    Sliders
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('banners'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>
                                    Banners
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('our_team'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-couch"></i>
                                <p>
                                    Our Team
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('about_us'); ?>" class="nav-link">
                                <i class="nav-icon 	fas fa-book-open"></i>
                                <p>
                                    About us
                                </p>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
</aside>