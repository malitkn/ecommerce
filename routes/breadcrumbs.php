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

// Home > Contacts
Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('İletişim Talepleri', route('admin.contacts.index'));
});

// Home > Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Kategoriler', route('admin.categories.index'));
});

// Home > Categories > Category > Edit
Breadcrumbs::for('categories.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push('Kategori Düzenle', route('admin.categories.edit', Route::current()->category));
});

// Home > Categories > Category > Create
Breadcrumbs::for('categories.create', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push('Kategori Oluştur', route('admin.categories.create'));
});

// Home > Products
Breadcrumbs::for('products', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Ürünler', route('admin.products.index'));
});

// Home > Products > Product > Create
Breadcrumbs::for('products.create', function (BreadcrumbTrail $trail) {
    $trail->parent('products');
    $trail->push('Ürün Oluştur', route('admin.products.create'));
});

// Home > Attributes
Breadcrumbs::for('attributes', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Özellikler', route('admin.attributes.index'));
});

// Home > Attributes > Create
Breadcrumbs::for('attributes.create', function (BreadcrumbTrail $trail) {
    $trail->parent('attributes');
    $trail->push('Özellik Oluştur', route('admin.attributes.create'));
});

// Home > Attributes > Edit
Breadcrumbs::for('attributes.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('attributes');
    $trail->push('Özellik Düzenle', route('admin.attributes.edit', Route::current()->attribute));
});

// Home > Attribute Values
Breadcrumbs::for('attribute-values', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Özellik Değerleri', route('admin.attribute-values.index'));
});

// Home > Attribute Values > Create
Breadcrumbs::for('attribute-values.create', function (BreadcrumbTrail $trail) {
    $trail->parent('attribute-values');
    $trail->push('Özellik Değeri Oluştur', route('admin.attribute-values.create'));
});

// Home > Attribute Values > Edit
Breadcrumbs::for('attribute-values.edit', function (BreadcrumbTrail $trail) {
    $trail->parent('attribute-values');
    $trail->push('Özellik Değeri Düzenle', route('admin.attribute-values.edit', Route::current()->attribute_value));
});





