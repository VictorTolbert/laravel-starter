<div class="navbar-item has-dropdown is-hoverable">
    <div class="navbar-link">
        Pages
    </div>
    <div id="moreDropdown" class="navbar-dropdown">
        <a class="navbar-item" href="{{ route('colors') }}">Colors</a>
        <a class="navbar-item" href="{{ route('components') }}">Components</a>
        <a class="navbar-item" href="{{ route('design-tokens') }}">Design Tokens</a>
        <a class="navbar-item" href="{{ route('elements') }}">Elements</a>
        <a class="navbar-item" href="{{ route('icons') }}">Icons</a>
        <a class="navbar-item" href="{{ route('layout') }}">Layout</a>
        <a class="navbar-item" href="{{ route('layouts') }}">Layouts</a>
        <a class="navbar-item" href="{{ route('navbars') }}">Navbars</a>
        <a class="navbar-item" href="{{ route('page-headers') }}">Page Headers</a>
        {{-- <a class="navbar-item" href="{{ route('table') }}">Table</a> --}}
        {{-- <a class="navbar-item" href="{{ route('tables') }}">Tables</a> --}}
        <a class="navbar-item" href="{{ route('typography') }}">Typography</a>
        <hr class="navbar-divider">
        <a class="navbar-item" href="{{ route('proposal-viewer.index') }}">Proposal Viewer</a>
    </div>
</div>
