<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('index', compact('gravatar'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function icons()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('components.icons', compact('gravatar'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tables()
    {
        $gravatar = get_gravatar('victor.tolbert@gmail.com');

        return view('components.tables', compact('gravatar'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function kendo()
    {
        return view('kendo');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function changelog()
    {
        return view('changelog');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        return view('test');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function zurb()
    {
        return view('zurb');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function docs()
    {
        return view('docs.home');
    }
}
