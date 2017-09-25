<div class="navbar-item has-dropdown is-hoverable">
    <div class="navbar-link">
        Experiments
    </div>
    <div id="experimentsDropdown" class="navbar-dropdown">
        <a href="{{ route('changelog', Auth::user()) }}" class="navbar-item">Changelog</a>
        <a href="/proposal-viewer" class="navbar-item">XML Proposal Viewer</a>
        <a href="{{ route('podcasts', Auth::user()) }}" class="navbar-item">Podcasts</a>
        <a href="{{ route('episodes', Auth::user()) }}" class="navbar-item">Episodes</a>
    </div>
</div>
