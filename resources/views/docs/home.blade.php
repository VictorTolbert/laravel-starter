@component('layouts.docs')
    <section class="home">
        <header class="home__header waves">
            <div class="home__header__inner">
                <div class="home__logo">
                    <a href="{{route('docs')}}" target="videa">
                        {{-- @include('partials.svgs.logo') --}}
                        @svg('uxlab-alt2')
                    </a>
                </div>
                <h1 class="home__title">
                    CSS Documentation
                </h1>
            </div>
        </header>
{{--         <section class="home__introduction">
            <p class="-large">
                Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna.
            </p>
            <p>
                Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.
            </p>
            <p>
                All pages are hosted on <a href="" target="videa">GitHub</a>, so edits and improvements are welcome. Note that these are our own opinionated ideas, so we'll be finicky when it comes to substantial changes.
            </p>
        </section> --}}
        <nav class="home__index">
            <div class="home__index__inner">
                {{ app('navigation')->menu()->addClass('menu--home') }}
            </div>
            <footer class="home__index__footer">
                <a href="{{route('docs')}}" target="videa">
                    © videa
                </a>
            </footer>
        </nav>
    </section>
@endcomponent
