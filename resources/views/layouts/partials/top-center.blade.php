<div class="nav-center flex mr-2">
    @if (Request::is('resources') || Request::is('resources/*'))
         <search through="resources"></search>
    @elseif
        <search></search>
    @endif
</div>
