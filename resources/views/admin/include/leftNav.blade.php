<div id="left-sidebar" class="sidebar">
    <a href="#" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand">
        <a href="index.blade.php"><img src="{{ asset('assets/images/icon.svg') }}" alt="Mooli Logo" class="img-fluid logo"><span>Mooli</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('assets/images/user.png') }}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Web Developer,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alan Green</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="page-profile.blade.php"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.blade.php"><i class="fa fa-envelope"></i>Messages</a></li>
                    <li><a href="setting.blade.php"><i class="fa fa-gear"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.blade.php"><i class="fa fa-power-off"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu animation-li-delay">
                <li class="header">Main</li>
                <li class="{{ Route::is('admin.adminHome') ? 'active' : '' }}"><a href="{{ url('admin/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li class="header">Service</li>
                <li class="{{ Route::is('admin.products.index') ? 'active' : ''  }}{{  Route::is('admin.products.edit') ? 'active' : ''  }}{{ Route::is('admin.products.show') ? 'active' : '' }}{{ Route::is('admin.products.create') ? 'active' : '' }}"><a href="{{ url('admin/products') }}"><i class="fa-brands fa-product-hunt"></i> <span>Products</span> <span class="badge badge-default mr-0"></span></a></li>
                <li class="{{ Route::is('admin.suppliers*') ? 'active' : '' }}"><a href="{{ url('admin/suppliers') }}"><i class="fas fa-industry"></i> <span>Suppliers</span></a></li>
                <li class="{{ Route::is('admin.customers*') ? 'active' : '' }}"><a href="{{url('admin/customers')}}"><i class="fa fa-users" aria-hidden="true"></i> <span>Customers</span></a></li>
                <li class="{{ Route::is('admin.unit-type*') ? 'active' : '' }}"><a href="{{url('admin/unit-type')}}"><i class="fa fa-th-list"></i> <span>Unit Type</span></a></li>
                <li class="{{ Route::is('admin.materials*') ? 'active' : '' }}"><a href="{{ url('admin/materials') }}"><i class="fa fa-folder"></i> <span>Materials</span></a></li>
                <li class="{{ Route::is('admin.products-sale*') ? 'active' : '' }}"><a href="{{ url('admin/products-sale') }}"><i class="fa fa-address-book"></i> <span>Sale</span></a></li>
                <li class="{{ Route::is('admin.material-to-products*') ? 'active' : '' }}"><a href="{{ url('admin/material-to-products') }}"><i class="fa fa-tasks"></i> <span>Materials Products</span></a></li>
                <li class="{{ Route::is('admin.production-manage*') ? 'active' : '' }}"><a href="{{ url('admin/production-manage') }}"><i class="fa fa-globe"></i> <span>Production Manage</span></a></li>
                <li class="{{ Route::is('admin.products-making*') ? 'active' : '' }}"><a href="{{ url('admin/products-making') }}"><i class="fa fa-globe"></i> <span>Products Making</span></a></li>
                <li class="{{ Route::is('admin.admin-cost*') ? 'active' : '' }}"><a href="{{url('admin/admin-cost')}}"><i class="fa fa-share-alt-square"></i> <span>Admin Cost</span></a></li>
                <li class="{{ Route::is('admin.cost-entry*') ? 'active' : '' }}"><a href="{{url('admin/cost-entry')}}"><i class="fa fa-share-alt-square"></i> <span>Expence</span></a></li>
                <li class="header"></li>
                <li>
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>Reports</span></a>
                    <ul>
                        <li><a href="{{ url('admin/products-sale') }}">All sale</a></li>
                        <li><a href="{{ url('admin/material') }}">Materials</a></li>
                        <li><a href="ui-typography.blade.php">Typography</a></li>
                        <li><a href="ui-tabs.blade.php">Tabs</a></li>
                        <li><a href="ui-buttons.blade.php">Buttons</a></li>
                        <li><a href="ui-icons.blade.php">Icons</a></li>
                        <li><a href="ui-notifications.blade.php">Notifications</a></li>
                        <li><a href="ui-colors.blade.php">Colors</a></li>
                        <li><a href="ui-dialogs.blade.php">Dialogs</a></li>
                        <li><a href="ui-list-group.blade.php">List Group</a></li>
                        <li><a href="ui-media-object.blade.php">Media Object</a></li>
                        <li><a href="ui-modals.blade.php">Modals</a></li>
                        <li><a href="ui-nestable.blade.php">Nestable</a></li>
                        <li><a href="ui-progressbars.blade.php">Progress Bars</a></li>
                        <li><a href="ui-range-sliders.blade.php">Range Sliders</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</div>
