<template>
    <div>
        <div class="container">
            <h1 class="title">Markup And Style</h1>
            <h2 class="subtitle">
                The HTML/CSS <a>pattern lab</a> is actively developed to enable developers to create a uniform look and feel while adhering to CSS best practices and conventions
            </h2>
            <hr>

            <article class="media">
              <figure class="media-left">

              </figure>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                  </p>
                </div>
                <nav class="level is-mobile">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
              <div class="media-right">
                <p class="image is-3x2">
                  <!-- <img src="/static/placeholder-480x320.png"> -->
                  <img src="/static/vectors/us.svg" alt="" style="width: 32rem">
                </p>
              </div>
            </article>

        </div>
    </div>
</template>
<script>
    export default {
        name: 'markup-and-style'
    }
</script>
