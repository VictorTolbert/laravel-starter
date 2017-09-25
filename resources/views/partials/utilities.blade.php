<nav class="navbar is-dark" role="navigation" aria-label="navigation">
    <div class="container is-fluid">
        <div class="navbar-menu" id="navbar-utilites">
            <div class="navbar-start">
                <div class="navbar-item" href="{{ route('dashboard') }}">
                    <div class="tags has-addons">
                        <span class="tag is-primary">Application</span>
                        <span class="tag">Sellers</span>
                    </div>
                </div>

                <div class="navbar-item" href="{{ route('dashboard') }}">
                    <div class="tags has-addons">
                        <span class="tag is-primary">Environment</span>
                        <span class="tag">Alpha</span>
                    </div>
                </div>

{{--                 <div class="navbar-item" href="{{ route('dashboard') }}">
                    <div class="tags has-addons">
                        <span class="tag is-primary">Dev Team</span>
                        <span class="tag">Deee-lite</span>
                    </div>
                </div>

                <div class="navbar-item" href="{{ route('dashboard') }}">
                    <div class="tags has-addons">
                        <span class="tag is-primary">UX Designer</span>
                        <span class="tag">Jerome</span>
                    </div>
                </div>

                <div class="navbar-item" href="{{ route('dashboard') }}">
                    <div class="tags has-addons">
                        <span class="tag is-primary">Product Owner</span>
                        <span class="tag">Dawn</span>
                    </div>
                </div>

                <div class="navbar-item" href="{{ route('dashboard') }}">
                    <div class="tags has-addons">
                        <span class="tag is-primary">Project Manager</span>
                        <span class="tag">Deee-lite</span>
                    </div>
                </div>

                <div class="navbar-item" href="{{ route('dashboard') }}">
                    <div class="tags has-addons">
                        <span class="tag is-primary">Business Analyst</span>
                        <span class="tag">Mark</span>
                    </div>
                </div>
 --}}

{{--                 <a class="navbar-item is-tab is-active">
                    <span class="icon-btn">
                        <i class="fa fa-plus"></i>
                    </span>
                </a>

                <a class="navbar-item is-tab">
                    <span class="icon-btn">
                        <i class="fa fa-print"></i>
                    </span>
                </a>

                <a class="navbar-item is-tab">
                    <span class="icon-btn thin">
                        <i class="fa fa-lock"></i>
                    </span>
                </a>

                <a class="navbar-item is-tab">
                    <span class="icon-btn">
                        <i class="fa fa-trash"></i>
                    </span>
                </a>

                <div class="navbar-item is-tab">
                    <strong>2 items selected</strong>
                </div>
 --}}
            </div>
            <div class="navbar-end">
                {{-- <a class="navbar-item" href="{{ route('dashboard') }}">Dashboard</a> --}}

{{--                 <a class="navbar-item">
                    <b-icon icon="help"></b-icon>
                </a>

 --}}{{--                 <a class="navbar-item">
                    <span class="icon">
                        @include('partials.svg.peach')
                    </span>
                </a>
 --}}
{{--                 <div class="options">
                    <i class="fa fa-ellipsis-h"></i>
                </div> --}}

                <a class="navbar-item">
                    <span class="navbar-burger is-block" data-target="navbar-main">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span>Menu</span>
                </a>
            </div>
        </div>
    </div>
</nav>
