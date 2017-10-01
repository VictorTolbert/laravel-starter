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

// Home > Atoms
Breadcrumbs::register('atoms', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Atoms', route('atoms'));
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

// Home > Columns
Breadcrumbs::register('columns', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Columns', route('columns'));
});

    // Columns > Basics
    Breadcrumbs::register('basics', function ($breadcrumbs) {
        $breadcrumbs->parent('columns');
        $breadcrumbs->push('Basics', route('basics'));
    });

    // Columns > Gap
    Breadcrumbs::register('gap', function ($breadcrumbs) {
        $breadcrumbs->parent('columns');
        $breadcrumbs->push('Gap', route('gap'));
    });

    // Columns > Nesting
    Breadcrumbs::register('nesting', function ($breadcrumbs) {
        $breadcrumbs->parent('columns');
        $breadcrumbs->push('Nesting', route('nesting'));
    });

    // Columns > Options
    Breadcrumbs::register('options', function ($breadcrumbs) {
        $breadcrumbs->parent('columns');
        $breadcrumbs->push('Options', route('options'));
    });

    // Columns > Responsiveness
    Breadcrumbs::register('responsiveness', function ($breadcrumbs) {
        $breadcrumbs->parent('columns');
        $breadcrumbs->push('Responsiveness', route('responsiveness'));
    });

    // Columns > Sizes
    Breadcrumbs::register('sizes', function ($breadcrumbs) {
        $breadcrumbs->parent('columns');
        $breadcrumbs->push('Sizes', route('sizes'));
    });

// Home > Components
Breadcrumbs::register('components', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Components', route('components'));
});

    // Components > Breadcrumb
    Breadcrumbs::register('breadcrumb', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Breadcrumb', route('breadcrumb'));
    });

    // Components > Calendar
    Breadcrumbs::register('calendar', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Calendar', route('calendar'));
    });

    // Components > Card
    Breadcrumbs::register('card', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Card', route('card'));
    });

    // Components > Data Table
    Breadcrumbs::register('data-table', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Data Table', route('data-table'));
    });

    // // Components > Datepicker
    // Breadcrumbs::register('datepicker', function ($breadcrumbs) {
    //     $breadcrumbs->parent('components');
    //     $breadcrumbs->push('Datepicker', route('datepicker'));
    // });

    // Components > Dropdown
    Breadcrumbs::register('dropdown', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Dropdown', route('dropdown'));
    });

    // Components > Icon
    Breadcrumbs::register('icon', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Icon', route('icon'));
    });

    // Components > Menu
    Breadcrumbs::register('menu', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Menu', route('menu'));
    });

    // Components > Message
    Breadcrumbs::register('message', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Message', route('message'));
    });

    // Components > Modal
    Breadcrumbs::register('modal', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Modal', route('modal'));
    });

    // Components > Navbar
    Breadcrumbs::register('navbar', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Navbar', route('navbar'));
    });

    // Components > Pagination
    Breadcrumbs::register('pagination', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Pagination', route('pagination'));
    });

    // Components > Panel
    Breadcrumbs::register('panel', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('Panel', route('panel'));
    });

    // // Components > Table
    // Breadcrumbs::register('table', function ($breadcrumbs) {
    //     $breadcrumbs->parent('components');
    //     $breadcrumbs->push('table', route('table'));
    // });

    // Components > Tabs
    Breadcrumbs::register('tabs', function ($breadcrumbs) {
        $breadcrumbs->parent('components');
        $breadcrumbs->push('tabs', route('tabs'));
    });

    // // Components > Tooltip
    // Breadcrumbs::register('tooltip', function ($breadcrumbs) {
    //     $breadcrumbs->parent('components');
    //     $breadcrumbs->push('Tooltip', route('tooltip'));
    // });

// Home > Dashboard
Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Dashboard', route('dashboard'));
});


// Home > Elements
Breadcrumbs::register('elements', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Elements', route('elements'));
});

    // Elements > Box
    Breadcrumbs::register('box', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Box', route('box'));
    });

    // Elements > Button
    Breadcrumbs::register('button', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Button', route('button'));
    });

    // Elements > Content
    Breadcrumbs::register('content', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Content', route('content'));
    });

    // Elements > Delete
    Breadcrumbs::register('delete', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Delete', route('delete'));
    });

    // Elements > Divider
    Breadcrumbs::register('divider', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Divider', route('divider'));
    });

    // // Elements > Form
    // Breadcrumbs::register('form', function ($breadcrumbs) {
    //     $breadcrumbs->parent('elements');
    //     $breadcrumbs->push('Form', route('form'));
    // });

    // Elements > Icons
    Breadcrumbs::register('icons', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Icons', route('icons'));
    });

    // Elements > Image
    Breadcrumbs::register('image', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Image', route('image'));
    });

    // Elements > Notification
    Breadcrumbs::register('notification', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Notification', route('notification'));
    });

    // Elements > Pageloader
    Breadcrumbs::register('pageloader', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Pageloader', route('pageloader'));
    });

    // Elements > Progress
    Breadcrumbs::register('progress', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Progress', route('progress'));
    });

    // Elements > Table
    Breadcrumbs::register('table', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Table', route('table'));
    });

    // Elements > Tag
    Breadcrumbs::register('tag', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Tag', route('tag'));
    });

    // Elements > Title
    Breadcrumbs::register('title', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Title', route('title'));
    });

    // Elements > Tooltip
    Breadcrumbs::register('tooltip', function ($breadcrumbs) {
        $breadcrumbs->parent('elements');
        $breadcrumbs->push('Tooltip', route('tooltip'));
    });


// Home > FAQs
Breadcrumbs::register('faqs', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('FAQs', route('faqs'));
});


// Home > Form
Breadcrumbs::register('form', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Form', route('form'));
});

    // Form > Autocomplete
    Breadcrumbs::register('autocomplete', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Autocomplete', route('autocomplete'));
    });

    // Form > Checkbox
    Breadcrumbs::register('checkbox', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Checkbox', route('checkbox'));
    });

    // Form > Datepicker
    Breadcrumbs::register('datepicker', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Datepicker', route('datepicker'));
    });

    // Form > Field
    Breadcrumbs::register('field', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Field', route('field'));
    });

    // Form > File
    Breadcrumbs::register('file', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('File', route('file'));
    });

    // Form > General
    Breadcrumbs::register('general', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('General', route('general'));
    });

    // Form > Input
    Breadcrumbs::register('input', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Input', route('input'));
    });

    // Form > Radio
    Breadcrumbs::register('radio', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Radio', route('radio'));
    });

    // Form > Select
    Breadcrumbs::register('select', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Select', route('select'));
    });

    // Form > Slider
    Breadcrumbs::register('slider', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Slider', route('slider'));
    });

    // Form > Switch
    Breadcrumbs::register('switch', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Switch', route('switch'));
    });

    // Form > Textarea
    Breadcrumbs::register('textarea', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Textarea', route('textarea'));
    });

    // Form > Upload
    Breadcrumbs::register('upload', function ($breadcrumbs) {
        $breadcrumbs->parent('form');
        $breadcrumbs->push('Upload', route('upload'));
    });

// Home > Layout
Breadcrumbs::register('layout', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Layout', route('layout'));
});

    // Layout > Container
    Breadcrumbs::register('container', function ($breadcrumbs) {
        $breadcrumbs->parent('layout');
        $breadcrumbs->push('Container', route('container'));
    });

    // Layout > Footer
    Breadcrumbs::register('footer', function ($breadcrumbs) {
        $breadcrumbs->parent('layout');
        $breadcrumbs->push('Footer', route('footer'));
    });

    // Layout > Hero
    Breadcrumbs::register('hero', function ($breadcrumbs) {
        $breadcrumbs->parent('layout');
        $breadcrumbs->push('Hero', route('hero'));
    });

    // Layout > Level
    Breadcrumbs::register('level', function ($breadcrumbs) {
        $breadcrumbs->parent('layout');
        $breadcrumbs->push('Level', route('level'));
    });

    // Layout > Media Object
    Breadcrumbs::register('media-object', function ($breadcrumbs) {
        $breadcrumbs->parent('layout');
        $breadcrumbs->push('Media Object', route('media-object'));
    });

    // Layout > Section
    Breadcrumbs::register('section', function ($breadcrumbs) {
        $breadcrumbs->parent('layout');
        $breadcrumbs->push('Section', route('section'));
    });

    // Layout > Tiles
    Breadcrumbs::register('tiles', function ($breadcrumbs) {
        $breadcrumbs->parent('layout');
        $breadcrumbs->push('Tiles', route('tiles'));
    });

// Home > Modifiers
Breadcrumbs::register('modifiers', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Modifiers', route('modifiers'));
});

    // Modifiers > Helpers
    Breadcrumbs::register('helpers', function ($breadcrumbs) {
        $breadcrumbs->parent('modifiers');
        $breadcrumbs->push('Helpers', route('helpers'));
    });

    // Modifiers > Responsive Helpers
    Breadcrumbs::register('responsive-helpers', function ($breadcrumbs) {
        $breadcrumbs->parent('modifiers');
        $breadcrumbs->push('Responsive Helpers', route('responsive-helpers'));
    });

    // Modifiers > Syntax
    Breadcrumbs::register('syntax', function ($breadcrumbs) {
        $breadcrumbs->parent('modifiers');
        $breadcrumbs->push('Syntax', route('syntax'));
    });

    // Modifiers > Typography Helpers
    Breadcrumbs::register('typography-helpers', function ($breadcrumbs) {
        $breadcrumbs->parent('modifiers');
        $breadcrumbs->push('Typography Helpers', route('typography-helpers'));
    });


// Home > Molecules
Breadcrumbs::register('molecules', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Molecules', route('molecules'));
});

// Home > Organisms
Breadcrumbs::register('organisms', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Organisms', route('organisms'));
});

// Home > Overview
Breadcrumbs::register('overview', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('overview', route('overview'));
});

// Home > Pages
Breadcrumbs::register('pages', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Pages', route('pages'));
});

// Home > Prototypes
Breadcrumbs::register('prototypes', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('prototypes', route('prototypes'));
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

// Home > Templates
Breadcrumbs::register('templates', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Templates', route('templates'));
});

