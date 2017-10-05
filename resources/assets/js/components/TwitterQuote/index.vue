<template>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Component
            </p>
            <a href="#" class="card-header-icon" aria-label="more options">
                <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </span>
            </a>
        </header>
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
            </figure>
          </div>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">John Smith</p>
                    <p class="subtitle is-6">@johnsmith</p>
                </div>
            </div>
            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a href="#">#css</a> <a href="#">#responsive</a>
                <br>
                <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
            </div>
        </div>

        <div class="card-content">
            <p class="title is-size-5">
                “There are two hard things in computer science: cache invalidation, naming things, and off-by-one errors.”
            </p>
            <p class="subtitle is-size-6">
                Jeff Atwood
            </p>
        </div>

        <footer class="card-footer">
            <p class="card-footer-item">
                <span>
                    View on <a href="https://twitter.com/codinghorror/status/506010907021828096">Twitter</a>
                </span>
            </p>
            <p class="card-footer-item">
                <span>
                    Share on <a href="#">Facebook</a>
                </span>
            </p>
        </footer>
        <footer class="card-footer">
            <a href="#" class="card-footer-item">Save</a>
            <a href="#" class="card-footer-item">Edit</a>
            <a href="#" class="card-footer-item">Delete</a>
        </footer>
    </div>
</template>
