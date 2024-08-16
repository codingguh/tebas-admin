<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>{{ $title }}</title>
    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/jpg" href="https://i.imgur.com/UyXqJLi.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/jpg" href="https://i.imgur.com/UyXqJLi.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('admin.dashboard.index') }}"class="app-brand-link">
                       <x-logo-dashboard/>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">Tebas</span>
                    </a>

                    <a href="#" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item class="menu-item {{ Request::is('admin/dashboard*') ? ' active' :  '' }}"">
                        <a  href="{{ route('admin.dashboard.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('admin/category*') ? ' active' :  '' }}">
                        <a href="{{ route('admin.category.index') }}"
                          class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div class="text-truncate" data-i18n="Kategori">Kategori</div>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('admin/campaign*') ? ' active' :  '' }}">
                        <a href="{{ route('admin.campaign.index') }}"
                          class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-book-open"></i>
                            <div class="text-truncate" data-i18n="Campaign">Campaign</div>
                        </a>
                
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div class="text-truncate" data-i18n="Layouts">Layouts</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('layouts-collapsed-menu.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Collapsed menu">Collapsed menu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('layouts-content-navbar.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Content navbar">Content navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('layouts-content-navbar-with-sidebar.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Content nav + Sidebar">Content nav + Sidebar
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('../horizontal-menu-template') }}" class="menu-link"
                                    target="_blank">
                                    <div class="text-truncate" data-i18n="Horizontal">Horizontal</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('layouts-without-menu.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Without menu">Without menu</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('layouts-without-navbar.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Without navbar">Without navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('layouts-fluid.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Fluid">Fluid</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('layouts-container.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Container">Container</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('layouts-blank.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Blank">Blank</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Front Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div class="text-truncate" data-i18n="Front Pages">Front Pages</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('../front-pages/landing-page.html') }}" class="menu-link"
                                    target="_blank">
                                    <div class="text-truncate" data-i18n="Landing">Landing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('../front-pages/pricing-page.html') }}" class="menu-link"
                                    target="_blank">
                                    <div class="text-truncate" data-i18n="Pricing">Pricing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('../front-pages/payment-page.html') }}" class="menu-link"
                                    target="_blank">
                                    <div class="text-truncate" data-i18n="Payment">Payment</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('../front-pages/checkout-page.html') }}" class="menu-link"
                                    target="_blank">
                                    <div class="text-truncate" data-i18n="Checkout">Checkout</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('../front-pages/help-center-landing.html') }}" class="menu-link"
                                    target="_blank">
                                    <div class="text-truncate" data-i18n="Help Center">Help Center</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('app-email.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-envelope"></i>
                            <div class="text-truncate" data-i18n="Email">Email</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('app-chat.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-chat"></i>
                            <div class="text-truncate" data-i18n="Chat">Chat</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('app-calendar.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar"></i>
                            <div class="text-truncate" data-i18n="Calendar">Calendar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('app-kanban.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div class="text-truncate" data-i18n="Kanban">Kanban</div>
                        </a>
                    </li>
                    <!-- e-commerce-app menu start -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                            <div class="text-truncate" data-i18n="eCommerce">eCommerce</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('app-ecommerce-dashboard.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Products">Products</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-product-list.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Product List">Product List</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-product-add.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Add Product">Add Product</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-category-list.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Category List">Category List</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Order">Order</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-order-list.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Order List">Order List</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-order-details.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Order Details">Order Details</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Customer">Customer</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-customer-all.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="All Customers">All Customers</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="menu-link menu-toggle">
                                            <div class="text-truncate" data-i18n="Customer Details">Customer Details
                                            </div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="{{ url('app-ecommerce-customer-details-overview.html') }}"
                                                    class="menu-link">
                                                    <div class="text-truncate" data-i18n="Overview">Overview</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('app-ecommerce-customer-details-security.html') }}"
                                                    class="menu-link">
                                                    <div class="text-truncate" data-i18n="Security">Security</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('app-ecommerce-customer-details-billing.html') }}"
                                                    class="menu-link">
                                                    <div class="text-truncate" data-i18n="Address & Billing">Address &
                                                        Billing</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('app-ecommerce-customer-details-notifications.html') }}"
                                                    class="menu-link">
                                                    <div class="text-truncate" data-i18n="Notifications">Notifications
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('app-ecommerce-manage-reviews.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Manage Reviews">Manage Reviews</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('app-ecommerce-referral.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Referrals">Referrals</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Settings">Settings</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-settings-detail.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Store Details">Store Details</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-settings-payments.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Payments">Payments</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-settings-checkout.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Checkout">Checkout</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-settings-shipping.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Shipping & Delivery">Shipping &
                                                Delivery</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-settings-locations.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Locations">Locations</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-ecommerce-settings-notifications.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- e-commerce-app menu end -->
                    <!-- Academy menu start -->
                
                    <!-- Academy menu end -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-car"></i>
                            <div class="text-truncate" data-i18n="Logistics">Logistics</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('app-logistics-dashboard.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('app-logistics-fleet.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Fleet">Fleet</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-food-menu"></i>
                            <div class="text-truncate" data-i18n="Invoice">Invoice</div>
                            <span class="badge badge-center rounded-pill bg-success ms-auto">4</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('app-invoice-list.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="List">List</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('app-invoice-preview.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Preview">Preview</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('app-invoice-edit.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Edit">Edit</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('app-invoice-add.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Add">Add</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div class="text-truncate" data-i18n="Users">Users</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('app-user-list.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="List">List</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="View">View</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('app-user-view-account.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Account">Account</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-user-view-security.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Security">Security</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-user-view-billing.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Billing & Plans">Billing & Plans
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-user-view-notifications.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('app-user-view-connections.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Connections">Connections</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-check-shield"></i>
                            <div class="text-truncate" data-i18n="Roles & Permissions">Roles & Permissions</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('app-access-roles.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Roles">Roles</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('app-access-permission.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Permission">Permission</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div class="text-truncate" data-i18n="Pages">Pages</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="User Profile">User Profile</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('pages-profile-user.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Profile">Profile</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-profile-teams.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Teams">Teams</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-profile-projects.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Projects">Projects</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-profile-connections.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Connections">Connections</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('pages-account-settings-account.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Account">Account</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-account-settings-security.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Security">Security</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-account-settings-billing.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Billing & Plans">Billing & Plans
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-account-settings-notifications.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-account-settings-connections.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Connections">Connections</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('pages-faq.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="FAQ">FAQ</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('pages-pricing.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Pricing">Pricing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Misc">Misc</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('pages-misc-error.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Error">Error</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-misc-under-maintenance.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Under Maintenance">Under Maintenance
                                            </div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-misc-comingsoon.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Coming Soon">Coming Soon</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('pages-misc-not-authorized.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Not Authorized">Not Authorized</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div class="text-truncate" data-i18n="Authentications">Authentications</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Login">Login</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('auth-login-basic.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('login') }}" class="menu-link" target="_blank">
                                            <div class="text-truncate" data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Register">Register</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('auth-register-basic.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('auth-register-cover.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('auth-register-multisteps.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Multi-steps">Multi-steps</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Verify Email">Verify Email</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('auth-verify-email-basic.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('auth-verify-email-cover.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Reset Password">Reset Password</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('auth-reset-password-basic.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('auth-reset-password-cover.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Forgot Password">Forgot Password</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('auth-forgot-password-basic.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('auth-forgot-password-cover.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Two Steps">Two Steps</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('auth-two-steps-basic.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('auth-two-steps-cover.html') }}" class="menu-link"
                                            target="_blank">
                                            <div class="text-truncate" data-i18n="Cover">Cover</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                            <div class="text-truncate" data-i18n="Wizard Examples">Wizard Examples</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('wizard-ex-checkout.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Checkout">Checkout</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('wizard-ex-property-listing.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Property Listing">Property Listing</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('wizard-ex-create-deal.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Create Deal">Create Deal</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('modal-examples.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-window-open"></i>
                            <div class="text-truncate" data-i18n="Modal Examples">Modal Examples</div>
                        </a>
                    </li>

                    <!-- Components -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Components">Components</span>
                    </li>
                    <!-- Cards -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div class="text-truncate" data-i18n="Cards">Cards</div>
                            <span class="badge badge-center rounded-pill bg-danger ms-auto">6</span>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('cards-basic.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('cards-advance.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Advance">Advance</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('cards-statistics.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Statistics">Statistics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('cards-analytics.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Analytics">Analytics</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('cards-gamifications.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Gamifications">Gamifications</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('cards-actions.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Actions">Actions</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- User interface -->
                    <li class="menu-item">
                        <a href="{{ url('javascript:void(0)') }}" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div class="text-truncate" data-i18n="User interface">User interface</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('ui-accordion.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Accordion</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-alerts.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Alerts">Alerts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-badges.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Badges">Badges</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-buttons.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Buttons">Buttons</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-carousel.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Carousel">Carousel</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-collapse.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Collapse">Collapse</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-dropdowns.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Dropdowns">Dropdowns</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-footer.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Footer">Footer</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-list-groups.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="List Groups">List groups</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-modals.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Modals">Modals</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-navbar.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Navbar">Navbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-offcanvas.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Offcanvas">Offcanvas</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-pagination-breadcrumbs.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Pagination & Breadcrumbs">Pagination &amp;
                                        Breadcrumbs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-progress.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Progress">Progress</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-spinners.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Spinners">Spinners</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-tabs-pills.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-toasts.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Toasts">Toasts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-tooltips-popovers.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers
                                    </div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('ui-typography.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Typography">Typography</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Extended components -->
                    <li class="menu-item">
                        <a href="{{ url('javascript:void(0)') }}" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div class="text-truncate" data-i18n="Extended UI">Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-avatar.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Avatar">Avatar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-blockui.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="BlockUI">BlockUI</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-drag-and-drop.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Drag & Drop">Drag &amp; Drop</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-media-player.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Media Player">Media Player</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-perfect-scrollbar.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-star-ratings.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Star Ratings">Star Ratings</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-sweetalert2.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="SweetAlert2">SweetAlert2</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-text-divider.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Text Divider">Text Divider</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link menu-toggle">
                                    <div class="text-truncate" data-i18n="Timeline">Timeline</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ url('extended-ui-timeline-basic.html') }}" class="menu-link">
                                            <div class="text-truncate" data-i18n="Basic">Basic</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('extended-ui-timeline-fullscreen.html') }}"
                                            class="menu-link">
                                            <div class="text-truncate" data-i18n="Fullscreen">Fullscreen</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-tour.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Tour">Tour</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-treeview.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Treeview">Treeview</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('extended-ui-misc.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Miscellaneous">Miscellaneous</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Icons -->
                    <li class="menu-item">
                        <a href="{{ url('javascript:void(0)') }}" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-crown"></i>
                            <div class="text-truncate" data-i18n="Icons">Icons</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('icons-boxicons.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Boxicons">Boxicons</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('icons-font-awesome.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Fontawesome">Fontawesome</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Forms & Tables -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Forms & Tables">Forms &amp; Tables</span>
                    </li>
                    <!-- Forms -->
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div class="text-truncate" data-i18n="Form Elements">Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('forms-basic-inputs.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Basic Inputs">Basic Inputs</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-input-groups.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Input groups">Input groups</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-custom-options.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Custom Options">Custom Options</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-editors.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Editors">Editors</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-file-upload.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="File Upload">File Upload</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-pickers.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Pickers">Pickers</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-selects.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Select & Tags">Select &amp; Tags</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-sliders.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Sliders">Sliders</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-switches.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Switches">Switches</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('forms-extras.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Extras">Extras</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div class="text-truncate" data-i18n="Form Layouts">Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('form-layouts-vertical.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Vertical Form">Vertical Form</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('form-layouts-horizontal.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Horizontal Form">Horizontal Form</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('form-layouts-sticky.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Sticky Actions">Sticky Actions</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-carousel"></i>
                            <div class="text-truncate" data-i18n="Form Wizard">Form Wizard</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('form-wizard-numbered.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Numbered">Numbered</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('form-wizard-icons.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Icons">Icons</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('form-validation.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <div class="text-truncate" data-i18n="Form Validation">Form Validation</div>
                        </a>
                    </li>
                    <!-- Tables -->
                    <li class="menu-item">
                        <a href="{{ url('tables-basic.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div class="text-truncate" data-i18n="Tables">Tables</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div class="text-truncate" data-i18n="Datatables">Datatables</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('tables-datatables-basic.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Basic">Basic</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('tables-datatables-advanced.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Advanced">Advanced</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('tables-datatables-extensions.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Extensions">Extensions</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Charts & Maps -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-chart"></i>
                            <div class="text-truncate" data-i18n="Charts">Charts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ url('charts-apex.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="Apex Charts">Apex Charts</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('charts-chartjs.html') }}" class="menu-link">
                                    <div class="text-truncate" data-i18n="ChartJS">ChartJS</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('maps-leaflet.html') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-map-alt"></i>
                            <div class="text-truncate" data-i18n="Leaflet Maps">Leaflet Maps</div>
                        </a>
                    </li>

                    <!-- Misc -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text" data-i18n="Misc">Misc</span>
                    </li>
                    <li class="menu-item">
                        <a href="https://themeselection.com/support/" target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div class="text-truncate" data-i18n="Support">Support</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                            target="_blank" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div class="text-truncate" data-i18n="Documentation">Documentation</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="{{ url('javascript:void(0)') }}">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="#">
                                    <i class="bx bx-search bx-sm"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Language -->
                            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-globe bx-sm"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#" data-language="en"
                                            data-text-direction="ltr">
                                            <span class="align-middle">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-language="fr"
                                            data-text-direction="ltr">
                                            <span class="align-middle">French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-language="ar"
                                            data-text-direction="rtl">
                                            <span class="align-middle">Arabic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-language="de"
                                            data-text-direction="ltr">
                                            <span class="align-middle">German</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /Language -->

                            <!-- Quick links  -->
                            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bx bx-grid-alt bx-sm"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                            <a href="{{ url('javascript:void(0)') }}"
                                                class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Add shortcuts"><i
                                                    class="bx bx-sm bx-plus-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-calendar fs-4"></i>
                                                </span>
                                                <a href="{{ url('app-calendar.html') }}"
                                                    class="stretched-link">Calendar</a>
                                                <small class="text-muted mb-0">Appointments</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-food-menu fs-4"></i>
                                                </span>
                                                <a href="{{ url('app-invoice-list.html') }}"
                                                    class="stretched-link">Invoice App</a>
                                                <small class="text-muted mb-0">Manage Accounts</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-user fs-4"></i>
                                                </span>
                                                <a href="{{ url('app-user-list.html') }}"
                                                    class="stretched-link">User App</a>
                                                <small class="text-muted mb-0">Manage Users</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-check-shield fs-4"></i>
                                                </span>
                                                <a href="{{ url('app-access-roles.html') }}"
                                                    class="stretched-link">Role Management</a>
                                                <small class="text-muted mb-0">Permission</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                                </span>
                                                <a href="{{ url('index.html') }}"
                                                    class="stretched-link">Dashboard</a>
                                                <small class="text-muted mb-0">User Profile</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-cog fs-4"></i>
                                                </span>
                                                <a href="{{ url('pages-account-settings-account.html') }}"
                                                    class="stretched-link">Setting</a>
                                                <small class="text-muted mb-0">Account Settings</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-help-circle fs-4"></i>
                                                </span>
                                                <a href="{{ url('pages-faq.html') }}"
                                                    class="stretched-link">FAQs</a>
                                                <small class="text-muted mb-0">FAQs & Articles</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span
                                                    class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                    <i class="bx bx-window-open fs-4"></i>
                                                </span>
                                                <a href="{{ url('modal-examples.html') }}"
                                                    class="stretched-link">Modals</a>
                                                <small class="text-muted mb-0">Useful Popups</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Quick links -->

                            <!-- Style Switcher -->
                            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-sm"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="#" data-theme="light">
                                            <span class="align-middle"><i class="bx bx-sun me-2"></i>Light</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-theme="dark">
                                            <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-theme="system">
                                            <span class="align-middle"><i
                                                    class="bx bx-desktop me-2"></i>System</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- / Style Switcher-->

                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bx bx-bell bx-sm"></i>
                                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                                            <a href="{{ url('javascript:void(0)') }}"
                                                class="dropdown-notifications-all text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Mark all as read"><i
                                                    class="bx fs-4 bx-envelope-open"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                        <p class="mb-0">Won the monthly best seller gold badge</p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Charles Franklin</h6>
                                                        <p class="mb-0">Accepted your connection</p>
                                                        <small class="text-muted">12hr ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('assets/img/avatars/2.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">New Message ✉️</h6>
                                                        <p class="mb-0">You have new message from Natalie</p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="bx bx-cart"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                                                        <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('assets/img/avatars/9.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Application has been approved 🚀</h6>
                                                        <p class="mb-0">Your ABC project application has been
                                                            approved.</p>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-success"><i
                                                                    class="bx bx-pie-chart-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Monthly report is generated</h6>
                                                        <p class="mb-0">July monthly financial report is generated
                                                        </p>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('assets/img/avatars/5.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Send connection request</h6>
                                                        <p class="mb-0">Peter sent you connection request</p>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('assets/img/avatars/6.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">New message from Jane</h6>
                                                        <p class="mb-0">Your have new message from Jane</p>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial rounded-circle bg-label-warning"><i
                                                                    class="bx bx-error"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">CPU is running high</h6>
                                                        <p class="mb-0">CPU Utilization Percent is currently at
                                                            88.63%,</p>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="{{ url('javascript:void(0)') }}"
                                                            class="dropdown-notifications-archive"><span
                                                                class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-menu-footer border-top p-3">
                                        <button class="btn btn-primary text-uppercase w-100">view all
                                            notifications</button>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ url('pages-account-settings-account.html') }}">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('pages-profile-user.html') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ url('pages-account-settings-account.html') }}">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ url('pages-account-settings-billing.html') }}">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('pages-faq.html') }}">
                                            <i class="bx bx-help-circle me-2"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('pages-pricing.html') }}">
                                            <i class="bx bx-dollar me-2"></i>
                                            <span class="align-middle">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        >
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search..." />
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
    
                        <div class="container-xxl flex-grow-1 container-p-y">
                            {{-- <div class="row"> --}}
                                @yield('content')
                            {{-- </div> --}}
                        </div>
                    </div>


                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank"
                                    class="footer-link fw-medium">ThemeSelection</a>
                            </div>
                            <div class="d-none d-lg-inline-block">
                                <a href="https://themeselection.com/license/" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://themeselection.com/" target="_blank"
                                    class="footer-link me-4">More Themes</a>

                                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://themeselection.com/support/" target="_blank"
                                    class="footer-link d-none d-sm-inline-block">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <script>
        @if(session()->has('success'))

        Swal.fire({
            icon: 'success',
            title: 'BERHASIL!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @elseif(session()->has('error'))

        Swal.fire({
            icon: 'error',
            text: 'GAGAL!',
            title: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @endif
    </script>
</body>

</html>
