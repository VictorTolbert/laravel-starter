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

    public function blog()
    {
        return view('blog.index');
    }

    public function buttons()
    {
        return view('base.buttons');
    }

    public function campaignPerformance()
    {
        return view('campaign-performance.index');
    }

    public function changelog()
    {
        return view('changelog');
    }

    public function components()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('components.index', compact('gravatar'));
    }

    public function content()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('content.index', compact('gravatar'));
    }

    public function colors()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('base.colors', compact('gravatar'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function dataTable()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('components.data-table', compact('gravatar'));
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

    public function docs()
    {
        return view('docs.home');
    }

    public function elements()
    {
        return view('elements.index');
    }

    public function glossary()
    {
        return view('glossary');
    }

    public function help()
    {
        return view('help.index');
    }

    public function icons()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('components.icons', compact('gravatar'));
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

    public function molecules()
    {
        return view('molecules.index');
    }

    public function navbars()
    {
        return view('navbars.index');
    }

    public function openPreempts()
    {
        return view('order-management.open-preempts.index');
    }

    public function orderManagment()
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

    public function pageHeaders()
    {
        return view('page-headers.index');
    }

    public function pendingMakegoods()
    {
        return view('order-management.pending-makegoods.index');
    }

    public function pendingOrders()
    {
        return view('order-management.pending-orders.index');
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

    public function reporting()
    {
        return view('reporting.index');
    }

    public function scratch()
    {
        return view('scratch');
    }

    public function settings()
    {
        return view('settings.index');
    }

    public function sitemap()
    {
        return view('sitemap');
    }

    public function spacing()
    {
        return view('atoms.spacing');
    }

    public function table()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('components.table', compact('gravatar'));
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

    public function typography()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('base.typography', compact('gravatar'));
    }

    public function zurb()
    {
        return view('templates.zurb');
    }
}
