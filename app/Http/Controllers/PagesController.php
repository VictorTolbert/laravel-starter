<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('index', compact('gravatar'));
    }

    public function alert()
    {
        return view('components.alert');
    }

    public function atoms()
    {
        return view('atoms.index');
    }

    public function atomicDesign()
    {
        return view('atomic-design.index');
    }

    public function accountPerformance()
    {
        return view('reporting.account-performance.index');
    }

    public function avails()
    {
        return view('avails.index');
    }

    public function autocomplete()
    {
        return view('form.autocomplete');
    }

    public function badge()
    {
        return view('components.badge');
    }

    public function basics()
    {
        return view('columns.basics');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function box()
    {
        return view('elements.box');
    }

    public function breadcrumb()
    {
        return view('components.breadcrumb');
    }

    public function button()
    {
        return view('elements.button');
    }

    public function buttons()
    {
        return view('base.buttons');
    }

    public function calendar()
    {
        return view('components.calendar');
    }

    public function campaignPerformance()
    {
        return view('campaign-performance.index');
    }

    public function card()
    {
        return view('components.card');
    }

    public function changelog()
    {
        return view('changelog');
    }

    public function checkbox()
    {
        return view('form.checkbox');
    }

    public function collapse()
    {
        return view('components.collapse');
    }

    public function colors()
    {
        return view('base.colors');
    }

    public function columns()
    {
        return view('columns.index');
    }

    public function components()
    {
        return view('components.index');
    }

    public function container()
    {
        return view('layout.container');
    }

    public function content()
    {
        return view('elements.content');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function dataTable()
    {
        return view('components.data-table');
    }

    public function datepicker()
    {
        return view('form.datepicker');
    }

    public function delete()
    {
        return view('elements.delete');
    }

    public function designSystem()
    {
        return view('design-system.index');
    }

    public function designTeam()
    {
        return view('team.design');
    }

    public function designTokens()
    {
        return view('design-tokens.index');
    }

    public function dialog()
    {
        return view('notices.dialog');
    }

    public function divider()
    {
        return view('elements.divider');
    }

    public function docs()
    {
        return view('docs.home');
    }

    public function dropdown()
    {
        return view('components.dropdown');
    }

    public function elements()
    {
        return view('elements.index');
    }

    public function field()
    {
        return view('form.field');
    }

    public function file()
    {
        return view('form.file');
    }

    public function footer()
    {
        return view('layout.footer');
    }

    public function gap()
    {
        return view('columns.gap');
    }

    public function glossary()
    {
        return view('glossary');
    }

    public function grid()
    {
        return view('grid');
    }

    public function help()
    {
        return view('help.index');
    }

    public function helpers()
    {
        return view('modifiers.helpers');
    }

    public function hero()
    {
        return view('layout.hero');
    }

    public function icon()
    {
        $icons = [
            'ac-unit',
            'access-time',
            'account-balance',
            'account-box',
            'account-circle',
            'add-box',
            'add-circle-outline',
            'add-circle',
            'add',
            'airport-shuttle',
            'alarm',
            'album',
            'all-inclusive',
            'apps',
            'archive',
            'arrow-drop-down-circle',
            'arrow-drop-down',
            'arrow-drop-up',
            'arrow-forward',
            'arrow-upward',
            'attach-file',
            'attach-money',
            'attachment',
            'beach-access',
            'block',
            'bubble-chart',
            'bug-report',
            'build',
            'business-center',
            'cake',
            'cancel',
            'change-history',
            'check-circle',
            'check',
            'child-care',
            'child-friendly',
            'clear',
            'close',
            'compare-arrows',
            'content-copy',
            'create',
            'crop-16-9',
            'crop-3-2',
            'crop-5-4',
            'dashboard',
            'date-range',
            'description',
            'desktop-mac',
            'desktop-windows',
            'edit',
            'equalizer',
            'error-outline',
            'error',
            'exit-to-app',
            'expand-less',
            'expand-more',
            'face',
            'favorite-border',
            'favorite',
            'file-download',
            'file-upload',
            'filter-list',
            'fitness-center',
            'folder-open',
            'folder',
            'format-quote',
            'format-size',
            'forum',
            'free-breakfast',
            'fullscreen-exit',
            'fullscreen',
            'golf-course',
            'grade',
            'help-outline',
            'help',
            'highlight-off',
            'home',
            'indeterminate-check-box',
            'info-outline',
            'info',
            'insert-chart',
            'kitchen',
            'label-outline',
            'label',
            'language',
            'laptop-mac',
            'laptop-windows',
            'laptop',
            'launch',
            'library-books',
            'line-weight',
            'link',
            'mail-outline',
            'menu',
            'mode-edit',
            'mood-bad',
            'mood',
            'more-horiz',
            'more-vert',
            'movie',
            'new-releases',
            'note',
            'pan-tool',
            'pause-circle-filled',
            'pause-circle-outline',
            'pause',
            'phone-iphone',
            'pie-chart-outlined',
            'pie-chart',
            'play-arrow',
            'play-circle-filled',
            'play-circle-outline',
            'poll',
            'pool',
            'refresh',
            'remove-circle-outline',
            'remove-circle',
            'remove',
            'reorder',
            'report-problem',
            'restore',
            'room-service',
            'save',
            'schedule',
            'school',
            'search',
            'send',
            'sentiment-dissatisfied',
            'sentiment-neutral',
            'sentiment-satisfied',
            'sentiment-very-dissatisfied',
            'sentiment-very-satisfied',
            'settings',
            'share',
            'shopping-cart',
            'smartphone',
            'smoke-free',
            'smoking-rooms',
            'sort',
            'spa',
            'star-rate',
            'stars',
            'storage',
            'swap-horiz',
            'swap-vert',
            'tablet-mac',
            'text-fields',
            'text-format',
            'timeline',
            'toc',
            'today',
            'trending-down',
            'trending-flat',
            'trending-up',
            'turned-in-not',
            'turned-in',
            'tv',
            'warning',
            'watch-later',
            'watch',
            'web',
            'whatshot',
            'work'
        ];
        return view('components.icon', compact('icons'));
    }

    public function icons()
    {
        $icons = [
            'ac-unit',
            'access-time',
            'account-balance',
            'account-box',
            'account-circle',
            'add-box',
            'add-circle-outline',
            'add-circle',
            'add',
            'airport-shuttle',
            'alarm',
            'album',
            'all-inclusive',
            'apps',
            'archive',
            'arrow-drop-down-circle',
            'arrow-drop-down',
            'arrow-drop-up',
            'arrow-forward',
            'arrow-upward',
            'attach-file',
            'attach-money',
            'attachment',
            'beach-access',
            'block',
            'bubble-chart',
            'bug-report',
            'build',
            'business-center',
            'cake',
            'cancel',
            'change-history',
            'check-circle',
            'check',
            'child-care',
            'child-friendly',
            'clear',
            'close',
            'compare-arrows',
            'content-copy',
            'create',
            'crop-16-9',
            'crop-3-2',
            'crop-5-4',
            'dashboard',
            'date-range',
            'description',
            'desktop-mac',
            'desktop-windows',
            'edit',
            'equalizer',
            'error-outline',
            'error',
            'exit-to-app',
            'expand-less',
            'expand-more',
            'face',
            'favorite-border',
            'favorite',
            'file-download',
            'file-upload',
            'filter-list',
            'fitness-center',
            'folder-open',
            'folder',
            'format-quote',
            'format-size',
            'forum',
            'free-breakfast',
            'fullscreen-exit',
            'fullscreen',
            'golf-course',
            'grade',
            'help-outline',
            'help',
            'highlight-off',
            'home',
            'indeterminate-check-box',
            'info-outline',
            'info',
            'insert-chart',
            'kitchen',
            'label-outline',
            'label',
            'language',
            'laptop-mac',
            'laptop-windows',
            'laptop',
            'launch',
            'library-books',
            'line-weight',
            'link',
            'mail-outline',
            'menu',
            'mode-edit',
            'mood-bad',
            'mood',
            'more-horiz',
            'more-vert',
            'movie',
            'new-releases',
            'note',
            'pan-tool',
            'pause-circle-filled',
            'pause-circle-outline',
            'pause',
            'phone-iphone',
            'pie-chart-outlined',
            'pie-chart',
            'play-arrow',
            'play-circle-filled',
            'play-circle-outline',
            'poll',
            'pool',
            'refresh',
            'remove-circle-outline',
            'remove-circle',
            'remove',
            'reorder',
            'report-problem',
            'restore',
            'room-service',
            'save',
            'schedule',
            'school',
            'search',
            'send',
            'sentiment-dissatisfied',
            'sentiment-neutral',
            'sentiment-satisfied',
            'sentiment-very-dissatisfied',
            'sentiment-very-satisfied',
            'settings',
            'share',
            'shopping-cart',
            'smartphone',
            'smoke-free',
            'smoking-rooms',
            'sort',
            'spa',
            'star-rate',
            'stars',
            'storage',
            'swap-horiz',
            'swap-vert',
            'tablet-mac',
            'text-fields',
            'text-format',
            'timeline',
            'toc',
            'today',
            'trending-down',
            'trending-flat',
            'trending-up',
            'turned-in-not',
            'turned-in',
            'tv',
            'warning',
            'watch-later',
            'watch',
            'web',
            'whatshot',
            'work'
        ];
        return view('elements.icons', compact('icons'));
    }

    public function input()
    {
        return view('form.input');
    }

    public function image()
    {
        return view('elements.image');
    }

    public function imagePlaceholder()
    {
        return view('components.image-placeholder');
    }

    public function kendo()
    {
        return view('templates.kendo');
    }

    public function layout()
    {
        return view('layout.index');
    }

    public function layouts()
    {
        return view('layouts.index');
    }

    public function level()
    {
        return view('layout.level');
    }

    public function loading()
    {
        return view('notices.loading');
    }

    public function media()
    {
        return view('components.media');
    }

    public function mediaObject()
    {
        return view('layout.media-object');
    }

    public function menu()
    {
        return view('components.menu');
    }

    public function message()
    {
        return view('notices.message');
    }

    public function modal()
    {
        return view('components.modal');
    }

    public function modifiers()
    {
        return view('modifiers.index');
    }

    public function molecules()
    {
        return view('molecules.index');
    }

    public function navbar()
    {
        return view('components.navbar');
    }

    public function navbars()
    {
        return view('navbars.index');
    }

    public function nesting()
    {
        return view('columns.nesting');
    }

    public function notices()
    {
        return view('notices.index');
    }

    public function notification()
    {
        return view('elements.notification');
    }

    public function openPreempts()
    {
        return view('order-management.open-preempts.index');
    }

    public function options()
    {
        return view('columns.options');
    }

    public function orderManagement()
    {
        return view('order-management.index');
    }

    public function orderReporting()
    {
        return view('reporting.order-reporting.index');
    }

    public function orderSearch()
    {
        return view('order-management.order-search.index');
    }

    public function organisms()
    {
        return view('organisms.index');
    }

    public function overview()
    {
        return view('overview.index');
    }

    public function pages()
    {
        return view('pages.index');
    }

    public function pagination()
    {
        return view('components.pagination');
    }

    public function pageHeaders()
    {
        return view('page-headers.index');
    }

    public function pageloader()
    {
        return view('elements.pageloader');
    }

    public function panel()
    {
        return view('components.panel');
    }

    public function pendingMakegoods()
    {
        return view('order-management.pending-makegoods.index');
    }

    public function pendingOrders()
    {
        return view('order-management.pending-orders.index');
    }

    public function popover()
    {
        return view('components.popover');
    }

    public function priceGuide()
    {
        return view('price-guide.index');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function productTeam()
    {
        return view('team.product');
    }

    public function programRevenue()
    {
        return view('reporting.program-revenue.index');
    }

    public function progress()
    {
        return view('elements.progress');
    }

    public function radio()
    {
        return view('form.radio');
    }

    public function reporting()
    {
        return view('reporting.index');
    }

    public function responsiveHelpers()
    {
        return view('modifiers.responsive-helpers');
    }

    public function responsiveness()
    {
        return view('columns.responsiveness');
    }

    public function scratch()
    {
        return view('scratch');
    }

    public function section()
    {
        return view('layout.section');
    }

    public function select()
    {
        return view('form.select');
    }

    public function settings()
    {
        return view('settings.index');
    }

    public function sitemap()
    {
        return view('sitemap');
    }

    public function sizes()
    {
        return view('columns.sizes');
    }

    public function slds()
    {
        return view('slds.index');
    }

    public function slider()
    {
        return view('form.slider');
    }

    public function snackbar()
    {
        return view('notices.snackbar');
    }

    public function spacing()
    {
        return view('atoms.spacing');
    }

    public function switch()
    {
        return view('form.switch');
    }

    public function syntax()
    {
        return view('modifiers.syntax');
    }

    public function table()
    {
        return view('components.table');
    }

    public function tabs()
    {
        return view('components.tabs');
    }

    public function tag()
    {
        return view('elements.tag');
    }

    public function team()
    {
        return view('team.index');
    }

    public function templates()
    {
        return view('templates.index');
    }

    public function terms()
    {
        return view('terms');
    }

    public function test()
    {
        return view('test');
    }

    public function textarea()
    {
        return view('form.textarea');
    }

    public function tiles()
    {
        return view('layout.tiles');
    }

    public function title()
    {
        return view('elements.title');
    }

    public function toast()
    {
        return view('notices.toast');
    }

    public function tooltip()
    {
        return view('components.tooltip');
    }

    public function typography()
    {
        return view('base.typography');
    }

    public function typographyHelpers()
    {
        return view('modifiers.typography-helpers');
    }


    public function upload()
    {
        return view('form.upload');
    }

    public function zurb()
    {
        return view('templates.zurb');
    }
}
