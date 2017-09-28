<div id="help" class="quickview">
    <nav class="navbar is-primary">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <span class="navbar-item">
                    {{-- Help --}}
                </span>
            </div>

            <div class="navbar-menu is-active">
                <div class="navbar-start">
                </div>
                <div class="navbar-end">
                    <a class="navbar-item is-hidden-touch" data-dismiss="quickview">
                        <b-icon icon="close"></b-icon>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Help</h1>
            </div>
        </div>
    </header>


    @include('partials.navbars.atomic-design')
    @include('partials.navbars.breadcrumb')
    @include('partials.navbars.design-system')
    @include('partials.navbars.ops')
    @include('partials.navbars.project-info')
    @include('partials.navbars.style1')
    @include('partials.navbars.styleguide')
    @include('partials.navbars.table-tools')
    @include('partials.navbars.team')
    @include('partials.navbars.utilities')
    @include('partials.navbars.vti')
    @include('partials.navbars.wizard')

    <section class="section quickview-body">
        <div class="quickview-block">

        </div>
    </section>

    <footer class="foot">
        <section class="section">
            <div class="container is-fluid">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                        </div>
                    </div>
                    <div class="level-right">
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>
