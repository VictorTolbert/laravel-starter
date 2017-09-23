<template>
    <div>
        <section class="home hero is-fullheight" style="background: url('/static/background.jpg') no-repeat">
            <!-- Design Goals: Useful, Usable and Delightful (if possible) -->

            <div class="hero-body has-text-centered">
                <div class="container">
                    <!-- <h1 class="title" style="color: #f58220">
                                videa.design
                            </h1>

                            <div class="logo-rounded home-hero">
                                <img src="/static/vectors/uxlab.svg" alt="UXLab Logo">
                            </div> -->
                    <browser-window url="https://videa.tv">
                          browser window body
                    </browser-window>
                    <!-- <img src="/static/vectors/uxlab.svg" alt="" style="height: 4rem"> -->
                    <div class="home-hero">
                        <h2 class="title" style="color: #fff">
                            HTML/CSS Pattern Lab and Library
                        </h2>

                        <!-- <svg-states></svg-states> -->

                        <!--                     <router-link class="button is-primary is-inverted is-outlined is-large" :to="{ name: 'design-tokens' }">
                                    Learn More →
                                </router-link> -->
                    </div>

                    <div class="content home-hero">
                        <p>
                            <br>
                            <a style="text-decoration: underline; color: #555" target="_blank" href="https://fractal.videa.design/components/detail/app-shell.html">v1.0</a>
                        </p>
                    </div>

                    <!-- <div class="has-text-centered">
                                <a class="button is-white"><img src="/static/vectors/html5.svg" style="height: 1.5rem;">&nbsp;HTML</a>
                                <a class="button is-white"><img src="/static/vectors/sass.svg" style="height: 1.5rem;">&nbsp;Sass (CSS)</a>
                                <a class="button is-white"><img src="/static/vectors/javascript.svg" style="height: 1.5rem;">&nbsp;JavaScript</a>
                            </div> -->
                </div>
            </div>
        </section>
        <section>
            <div class="container">

                <div class="box">

                    <div class="content">
                        <div id="readme" class="readme boxed-group clearfix announce instapaper_body md">
                            <h3>
                                <svg aria-hidden="true" class="octicon octicon-book" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                    <path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"></path>
                                </svg>
                                README.md
                            </h3>

                            <article class="markdown-body entry-content" itemprop="text">
                                <h1>
                                    <a id="user-content-vue-webpack-boilerplate" class="anchor" href="#vue-webpack-boilerplate" aria-hidden="true">
                                        <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                            <path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path>
                                        </svg>
                                    </a>
                                    vue-webpack-boilerplate
                                </h1>
                                <blockquote>
                                    <p>A full-featured Webpack setup with hot-reload, lint-on-save, unit testing &amp; css extraction.</p>
                                </blockquote>
                                <blockquote>
                                    <p>This template is Vue 2.0 compatible. For Vue 1.x use this command:
                                        <code>vue init webpack#1.0 my-project</code>
                                    </p>
                                </blockquote>
                                <h2>
                                    <a id="user-content-documentation" class="anchor" href="#documentation" aria-hidden="true">
                                        <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                            <path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path>
                                        </svg>
                                    </a>
                                    Documentation
                                </h2>
                                <ul>
                                    <li>
                                        <a href="http://vuejs-templates.github.io/webpack">For this template</a>: common questions specific to this template are answered and each part is described in greater detail</li>
                                    <li>
                                        <a href="http://vuejs.org/guide/">For Vue 2.0</a>: general information about how to work with Vue, not specific to this template</li>
                                </ul>
                                <h2>
                                    <a id="user-content-usage" class="anchor" href="#usage" aria-hidden="true">
                                        <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                            <path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path>
                                        </svg>
                                    </a>Usage</h2>
                                <p>This is a project template for
                                    <a href="https://github.com/vuejs/vue-cli">vue-cli</a>.
                                    <strong>It is recommended to use npm 3+ for a more efficient dependency tree.</strong>
                                </p>
                                <div class="highlight highlight-source-shell">
                                    <pre>$ npm install -g vue-cli
                                                            $ vue init webpack my-project
                                                            $ <span class="pl-c1">cd</span> my-project
                                                            $ npm install
                                                            $ npm run dev</pre>
                                </div>
                                <p>If port 8080 is already in use on your machine you must change the port number in
                                    <code>/config/index.js</code>. Otherwise
                                    <code>npm run dev</code> will fail.</p>
                                <h2>
                                    <a id="user-content-whats-included" class="anchor" href="#whats-included" aria-hidden="true">
                                        <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                            <path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path>
                                        </svg>
                                    </a>What's Included</h2>
                                <ul>
                                    <li>
                                        <p>
                                            <code>npm run dev</code>: first-in-class development experience.</p>
                                        <ul>
                                            <li>Webpack +
                                                <code>vue-loader</code> for single file Vue components.</li>
                                            <li>State preserving hot-reload</li>
                                            <li>State preserving compilation error overlay</li>
                                            <li>Lint-on-save with ESLint</li>
                                            <li>Source maps</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p>
                                            <code>npm run build</code>: Production ready build.</p>
                                        <ul>
                                            <li>JavaScript minified with
                                                <a href="https://github.com/mishoo/UglifyJS2">UglifyJS</a>.</li>
                                            <li>HTML minified with
                                                <a href="https://github.com/kangax/html-minifier">html-minifier</a>.</li>
                                            <li>CSS across all components extracted into a single file and minified with
                                                <a href="https://github.com/ben-eb/cssnano">cssnano</a>.</li>
                                            <li>All static assets compiled with version hashes for efficient long-term caching, and a production
                                                <code>index.html</code> is auto-generated with proper URLs to these generated assets.</li>
                                            <li>Use
                                                <code>npm run build --report</code>to build with bundle size analytics.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p>
                                            <code>npm run unit</code>: Unit tests run in PhantomJS with
                                            <a href="http://karma-runner.github.io/0.13/index.html">Karma</a> +
                                            <a href="http://mochajs.org/">Mocha</a> +
                                            <a href="https://github.com/webpack/karma-webpack">karma-webpack</a>.</p>
                                        <ul>
                                            <li>Supports ES2015+ in test files.</li>
                                            <li>Supports all webpack loaders.</li>
                                            <li>Easy mock injection.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p>
                                            <code>npm run e2e</code>: End-to-end tests with
                                            <a href="http://nightwatchjs.org/">Nightwatch</a>.</p>
                                        <ul>
                                            <li>Run tests in multiple browsers in parallel.</li>
                                            <li>Works with one command out of the box:
                                                <ul>
                                                    <li>Selenium and chromedriver dependencies automatically handled.</li>
                                                    <li>Automatically spawns the Selenium server.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <h3>
                                    <a id="user-content-fork-it-and-make-your-own" class="anchor" href="#fork-it-and-make-your-own" aria-hidden="true">
                                        <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16">
                                            <path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path>
                                        </svg>
                                    </a>Fork It And Make Your Own</h3>
                                <p>You can fork this repo to create your own boilerplate, and use it with
                                    <code>vue-cli</code>:</p>
                                <div class="highlight highlight-source-shell">
                                    <pre>vue init username/repo my-project</pre>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </div>
</template>

<script>
    import ScrollReveal from 'scrollreveal'
    // import SvgStates from '@/components/SvgStates'

    export default {
        // components: { SvgStates },
        data () {
            return {
                navItems: require('@/data/nav-items')
            }
        },
        mounted () {
            const sr = ScrollReveal({
                duration: 400,
                delay: 200
            })
            sr.reveal('.home-hero', { delay: 0, origin: 'top' }, 200)
            sr.reveal('.features', 200)
        }
    }
</script>

<style>
    .hero.is-fullheight {
        min-height: calc(100vh - 52px);
    }
    .css-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
</style>
