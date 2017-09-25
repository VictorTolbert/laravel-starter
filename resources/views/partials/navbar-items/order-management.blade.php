<div class="navbar-item has-dropdown is-hoverable">
    <div class="navbar-link">
        Order Management
    </div>
    <div id="experimentsDropdown" class="navbar-dropdown">
        <a href="{{ route('pending-orders', Auth::user()) }}" class="navbar-item">Pending Orders</a>
        <a href="{{ route('pending-makegoods', Auth::user()) }}" class="navbar-item">Pending Makegoods</a>
        <a href="{{ route('open-preempts', Auth::user()) }}" class="navbar-item">Open Preempts</a>
        <a href="{{ route('order-search', Auth::user()) }}" class="navbar-item">Order Search</a>
    </div>
</div>
