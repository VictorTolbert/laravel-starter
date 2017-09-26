<aside class="menu">
    <p class="menu-label">Topics</p>
    <ul class="menu-list">
        @foreach ($topics as $topic)
            <li>
                <a href="/topics/{{$topic->id}}">{{$topic->name}}</a>
            </li>
        @endforeach
    </ul>
</aside>
