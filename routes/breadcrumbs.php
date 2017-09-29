<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Dashboard
Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Dashboard', route('dashboard'));
});

// Home > Components
Breadcrumbs::register('components', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Components', route('components'));
});

// Components > Data Table
Breadcrumbs::register('data-table', function ($breadcrumbs) {
    $breadcrumbs->parent('components');
    $breadcrumbs->push('Data Table', route('data-table'));
});

// Home > Team
Breadcrumbs::register('team', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Team', route('team'));
});

// Home > Team > Design Team
Breadcrumbs::register('design-team', function ($breadcrumbs) {
    $breadcrumbs->parent('team');
    $breadcrumbs->push('Design', route('design-team'));
});

// Home > Team > Product Team
Breadcrumbs::register('product-team', function ($breadcrumbs) {
    $breadcrumbs->parent('team');
    $breadcrumbs->push('Product', route('product-team'));
});

// Home > FAQs
Breadcrumbs::register('faqs', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('FAQs', route('faqs'));
});

// Home > Blog
Breadcrumbs::register('blog', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function ($breadcrumbs, $category) {
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::register('post', function ($breadcrumbs, $post) {
    $breadcrumbs->parent('category', $post->category);
    $breadcrumbs->push($post->title, route('post', $post));
});
