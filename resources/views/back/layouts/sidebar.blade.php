<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Forms</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#orders" aria-expanded="false" aria-controls="orders">
                <span class="icon-bg"><i class="mdi mdi-shopping menu-icon"></i></span>
                <span class="menu-title">Siparişler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="orders" >
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link " href="#">Siparişler</a></li>
                    <li class="nav-item"> <a class="nav-link " href="{{ route('admin.orders.statuses.index') }}"> Sipariş Durumları </a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#discount" aria-expanded="false" aria-controls="orders">
                <span class="icon-bg"><i class="mdi mdi-sale menu-icon"></i></span>
                <span class="menu-title">İndirim</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="discount" >
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link " href="{{ route('admin.discount.coupons.index') }}">Kuponlar</a></li>
                    <li class="nav-item"> <a class="nav-link " href="#">Kampanyalar</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
                <span class="icon-bg"><i class="mdi mdi-settings menu-icon"></i></span>
                <span class="menu-title">Ayarlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="settings" >
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link " href="{{ route('admin.settings.index') }}">Genel Ayarlar</a></li>
                    <li class="nav-item"> <a class="nav-link " href="{{ route('admin.settings.social-media.index') }}"> Sosyal Medya Ayarları </a></li>

                </ul>
            </div>
        </li>
    </ul>
</nav>
<!-- partial -->
