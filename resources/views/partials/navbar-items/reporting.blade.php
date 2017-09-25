<div class="navbar-item has-dropdown is-hoverable">
    <div class="navbar-link">
        Reporting
    </div>
    <div id="experimentsDropdown" class="navbar-dropdown">
        <a href="{{ route('account-performance', Auth::user()) }}" class="navbar-item">Account Performance</a>
        <a href="{{ route('program-revenue', Auth::user()) }}" class="navbar-item">Program Revenue</a>
        <a href="{{ route('order-reporting', Auth::user()) }}" class="navbar-item">Order Reporting</a>
    </div>
</div>
