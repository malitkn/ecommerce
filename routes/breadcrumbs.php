<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Panel', route('admin.dashboard'));
});

// Home > Settings
Breadcrumbs::for('settings', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Ayarlar', route('admin.settings.index'));
});

// Home > Settings > Social Media
Breadcrumbs::for('social-media', function (BreadcrumbTrail $trail) {
    $trail->parent('settings');
    $trail->push('Sosyal Medya', route('admin.settings.index'));
});

// Home > Orders
Breadcrumbs::for('orders', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Siparişler', route('admin.orders.index'));
});

// Home > Orders > Statuses
Breadcrumbs::for('order-statuses', function (BreadcrumbTrail $trail) {
    $trail->parent('orders');
    $trail->push('Sipariş Durumları', route('admin.orders.statuses.index'));
});

// Home > Discount
Breadcrumbs::for('discount', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('İndirim','#');
});

// Home > Discount > Coupons
Breadcrumbs::for('coupons', function (BreadcrumbTrail $trail) {
    $trail->parent('discount');
    $trail->push('Kuponlar', route('admin.discount.coupons.index'));
});




