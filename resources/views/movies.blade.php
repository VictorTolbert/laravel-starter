<div id="app">
    {{--  https://codepen.io/itslit/pen/MvvjZr?editors=1100  --}}
    <section class="hero is-primary is-medium">
        <router-view></router-view>

        <div class="hero-foot">
            <div class="columns is-mobile">
                <div v-for="movieChoice in movieChoices" class="column">
                    <router-link :to="`/movies/${movieChoice.id}`" tag="li" class="movie-choice">
                        <i :class="[{ 'fa fa-check-circle favorite-check': movieChoice.favorite }]" aria-hidden="true"></i>
                        <img :src="`${movieChoice.smallImgSrc}`" class="desktop"/>
                        <p class="mobile movie-title">{{ movieChoice.subtitle }}</p>
                    </router-link>
                </div>
            </div>
        </div>
    </section>

</div>
